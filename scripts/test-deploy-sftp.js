const { test } = require('node:test');
const assert = require('node:assert/strict');
const { EventEmitter } = require('node:events');
const path = require('node:path');
const { checkHost, childPath, collectFiles, connectionOptions, ensureDirectory, fingerprint, publishFile } = require('./deploy-sftp');

const key = Buffer.from('clé publique de test');
const env = { FTP_SERVER: 'ftp.example.test', SFTP_HOST_KEY_SHA256: fingerprint(key) };

test('la clé est obligatoire et vérifiée avant authentification', async () => {
  assert.equal(connectionOptions(env).hostVerifier(key), true);
  assert.equal(connectionOptions(env).hostVerifier(Buffer.from('autre clé')), false);
  assert.equal(connectionOptions({ FTP_SERVER: env.FTP_SERVER }).hostVerifier(key), false);
  assert.throws(() => connectionOptions({ ...env, FTP_SERVER: 'host;command' }));
  assert.throws(() => connectionOptions({ ...env, SFTP_HOST_KEY_SHA256: 'invalid' }));
  class Probe extends EventEmitter {
    connect(options) {
      assert.equal(options.password, undefined);
      assert.equal(options.authHandler(), false);
      assert.equal(options.hostVerifier(key), false);
      this.emit('error', new Error('Host denied'));
    }
    destroy() {}
  }
  await checkHost(env, Probe, () => {});
  await assert.rejects(checkHost({ FTP_SERVER: env.FTP_SERVER }, Probe, () => {}), /Première connexion/);
  await assert.rejects(checkHost({ ...env, SFTP_HOST_KEY_SHA256: fingerprint(Buffer.from('autre')) }, Probe, () => {}), /différente/);
});

test('les chemins restent dans le répertoire de livraison', () => {
  assert.equal(childPath('/site', 'wp-content/themes/balneo-v2'), '/site/wp-content/themes/balneo-v2');
  assert.equal(childPath('/', 'wp-content'), '/wp-content');
  for (const value of ['', '..', '../uploads', '/etc', 'a/../b', 'a\\b', 'a//b', './file']) assert.throws(() => childPath('/site', value));
});

function fakeSftp(initial = 'ancien contenu', failure = '') {
  const files = new Map(initial === null ? [] : [['/theme/inc/file.php', Buffer.from(initial)]]);
  const writes = [];
  let temporary;
  const missing = () => Object.assign(new Error('Absent'), { code: 2 });
  const sftp = {
    lstat(file, callback) {
      const bytes = files.get(file);
      callback(bytes ? null : missing(), bytes && { size: bytes.length, isFile: () => true, isSymbolicLink: () => failure === 'symlink' });
    },
    readFile(file, callback) { callback(null, file === temporary && failure === 'corrupt' ? Buffer.from('corrompu') : files.get(file)); },
    open(file, flags, mode, callback) {
      assert.equal(flags, 'wx');
      assert.equal(mode, 0o644);
      assert.equal(path.posix.extname(file), '.php');
      temporary = file;
      files.set(file, Buffer.alloc(0));
      callback(null, Buffer.from(file));
    },
    write(handle, bytes, offset, length, position, callback) {
      assert.equal(position, 0);
      files.set(handle.toString(), bytes.subarray(offset, offset + length));
      writes.push(handle.toString());
      callback(failure === 'write' ? new Error('Écriture interrompue') : null);
    },
    close(handle, callback) { callback(null); },
    ext_openssh_rename(from, to, callback) {
      assert.deepEqual(files.get(to), initial === null ? undefined : Buffer.from(initial));
      if (failure === 'rename') return callback(new Error('Renommage atomique indisponible'));
      files.set(to, files.get(from));
      files.delete(from);
      callback(null);
    },
    unlink(file, callback) {
      assert.equal(file, temporary, 'Seul notre temporaire peut être supprimé.');
      files.delete(file);
      callback(null);
    },
  };
  return { sftp, files, writes };
}

test('un fichier identique ne déclenche aucune écriture', async () => {
  const { sftp, files, writes } = fakeSftp('identique');
  assert.equal(await publishFile(sftp, '/theme/inc/file.php', Buffer.from('identique')), false);
  assert.equal(files.size, 1);
  assert.deepEqual(writes, []);
});

for (const initial of ['ancien contenu', null]) {
  test(`publication vérifiée et atomique : ${initial === null ? 'nouveau fichier' : 'mise à jour'}`, async () => {
    const { sftp, files } = fakeSftp(initial);
    assert.equal(await publishFile(sftp, '/theme/inc/file.php', Buffer.from('nouveau')), true);
    assert.equal(files.size, 1);
    assert.equal(files.get('/theme/inc/file.php').toString(), 'nouveau');
  });
}

for (const failure of ['write', 'corrupt', 'rename', 'symlink']) {
  test(`échec ${failure} : ancien fichier préservé et temporaire nettoyé`, async () => {
    const { sftp, files } = fakeSftp('ancien', failure);
    await assert.rejects(publishFile(sftp, '/theme/inc/file.php', Buffer.from('nouveau')));
    assert.equal(files.size, 1);
    assert.equal(files.get('/theme/inc/file.php').toString(), 'ancien');
  });
}

test('un répertoire symbolique distant est refusé sans écriture', async () => {
  await assert.rejects(ensureDirectory({ lstat(file, callback) {
    callback(null, { isDirectory: () => true, isSymbolicLink: () => true });
  } }, '/site', 'wp-content/themes'), /non sûr/);
});

test('le manifeste réel contient seulement les livrables et charge functions.php en dernier', async () => {
  const files = await collectFiles(path.resolve(__dirname, '../wordpress-theme/balneo-v2'));
  assert.ok(files.includes('inc/schedule-state.php'));
  assert.equal(files.at(-1), 'functions.php');
  assert.equal(files.some((file) => /^(?:node_modules|vendor)\/|\.zip$/i.test(file)), false);
});
