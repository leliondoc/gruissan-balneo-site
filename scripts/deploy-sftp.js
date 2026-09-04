// Publication limitée au thème et au plugin, sans shell distant ni suppression globale.
const fs = require('node:fs/promises');
const path = require('node:path');
const { createHash, randomUUID } = require('node:crypto');
const { Client } = require('ssh2');

const TARGETS = Object.freeze([
  ['wordpress-theme/balneo-v2', 'wp-content/themes/balneo-v2'],
  ['wordpress-plugin/balneo-media', 'wp-content/plugins/balneo-media'],
]);
const hash = (bytes) => createHash('sha256').update(bytes).digest('base64').replace(/=+$/, '');
const fingerprint = (key) => `SHA256:${hash(key)}`;

function connectionOptions(env) {
  if (!/^[a-z\d.-]+$/i.test(env.FTP_SERVER || '')) throw new Error('Serveur SFTP manquant ou invalide.');
  const expected = env.SFTP_HOST_KEY_SHA256 || '';
  if (expected && !/^SHA256:[A-Za-z\d+/]{43}$/.test(expected)) throw new Error('Empreinte SFTP invalide.');
  return {
    host: env.FTP_SERVER,
    port: 22,
    readyTimeout: 15000,
    keepaliveInterval: 10000,
    keepaliveCountMax: 3,
    algorithms: { serverHostKey: ['ssh-ed25519'] },
    hostVerifier: (key) => Boolean(expected) && fingerprint(key) === expected,
  };
}

// Sans mot de passe : refuser la négociation dès réception de la clé publique.
// Une première empreinte est affichée, mais JAMAIS approuvée automatiquement.
async function checkHost(env, ClientType = Client, log = console.log) {
  const options = connectionOptions(env);
  await new Promise((resolve, reject) => {
    const client = new ClientType();
    let observed;
    client.on('error', (error) => {
      client.destroy();
      if (!observed) return reject(error);
      if (!env.SFTP_HOST_KEY_SHA256) {
        log(`Clé publique ED25519 observée : ${observed}`);
        return reject(new Error('Première connexion : valider puis enregistrer SFTP_HOST_KEY_SHA256 avant publication. Aucun identifiant transmis.'));
      }
      if (observed !== env.SFTP_HOST_KEY_SHA256) return reject(new Error('Clé SFTP différente : connexion bloquée avant authentification.'));
      log('Clé SFTP épinglée vérifiée, sans transmission des identifiants.');
      resolve();
    });
    client.connect({
      ...options,
      username: 'host-key-check',
      authHandler: () => false,
      hostVerifier: (key) => { observed = fingerprint(key); return false; },
    });
  });
}

function call(sftp, method, ...args) {
  return new Promise((resolve, reject) => {
    const timeout = setTimeout(() => reject(new Error(`Délai SFTP dépassé (${method}).`)), 30000);
    try {
      sftp[method](...args, (error, result) => {
        clearTimeout(timeout);
        if (error) reject(error);
        else resolve(result);
      });
    } catch (error) { clearTimeout(timeout); reject(error); }
  });
}

async function statIfExists(sftp, file) {
  try { return await call(sftp, 'lstat', file); }
  catch (error) { if (error.code === 2) return null; throw error; }
}

function childPath(root, relative) {
  if (!relative || relative.includes('\\') || relative.startsWith('/') || relative.split('/').some((part) => !part || part === '.' || part === '..')) {
    throw new Error('Chemin de livraison invalide.');
  }
  const target = path.posix.join(root, relative);
  if (!target.startsWith(root === '/' ? '/' : `${root}/`)) throw new Error('Cible hors du périmètre autorisé.');
  return target;
}

async function ensureDirectory(sftp, root, relative) {
  let current = root;
  for (const part of relative.split('/')) {
    current = childPath(current, part);
    let stats = await statIfExists(sftp, current);
    if (!stats) {
      await call(sftp, 'mkdir', current, { mode: 0o755 });
      stats = await call(sftp, 'lstat', current);
    }
    if (!stats.isDirectory() || stats.isSymbolicLink()) throw new Error('Répertoire distant non sûr.');
  }
}

async function collectFiles(directory, prefix = '') {
  const entries = await fs.readdir(directory, { withFileTypes: true });
  const result = [];
  for (const entry of entries) {
    if (entry.isSymbolicLink() || (!entry.isDirectory() && !entry.isFile())) throw new Error('Fichier local non régulier.');
    if (entry.name.startsWith('.')) throw new Error('Fichier caché inattendu dans la livraison.');
    const relative = prefix ? `${prefix}/${entry.name}` : entry.name;
    if (entry.isDirectory()) result.push(...await collectFiles(path.join(directory, entry.name), relative));
    else result.push(relative);
  }
  // Les dépendances internes précèdent le point d'entrée du thème.
  return result.sort((a, b) => Number(a === 'functions.php') - Number(b === 'functions.php') || a.localeCompare(b, 'en'));
}

async function publishFile(sftp, target, bytes) {
  const current = await statIfExists(sftp, target);
  if (current && (!current.isFile() || current.isSymbolicLink())) throw new Error('Fichier distant non régulier.');
  if (current?.size === bytes.length && hash(await call(sftp, 'readFile', target)) === hash(bytes)) return false;

  // Conserver l'extension PHP : ne jamais exposer du code source sous .tmp/.bak.
  const temporary = path.posix.join(path.posix.dirname(target), `.balneo-${randomUUID()}-${path.posix.basename(target)}`);
  let created = false;
  let handle;
  try {
    handle = await call(sftp, 'open', temporary, 'wx', 0o644);
    created = true;
    await call(sftp, 'write', handle, bytes, 0, bytes.length, 0);
    await call(sftp, 'close', handle);
    handle = null;
    if (hash(await call(sftp, 'readFile', temporary)) !== hash(bytes)) throw new Error('Intégrité du fichier transféré incorrecte.');
    // Remplacement atomique : l'ancien fichier reste lisible jusqu'à cette étape.
    await call(sftp, 'ext_openssh_rename', temporary, target);
    created = false;
    return true;
  } finally {
    // Uniquement notre temporaire exact ; aucun nettoyage récursif ni fichier tiers.
    if (handle) await call(sftp, 'close', handle).catch(() => {});
    if (created) await call(sftp, 'unlink', temporary);
  }
}

async function deploy(env) {
  const options = connectionOptions(env);
  if (!env.SFTP_HOST_KEY_SHA256 || !env.FTP_USERNAME || !env.FTP_PASSWORD) throw new Error('Clé serveur ou identifiants SFTP absents.');
  const requestedRoot = env.FTP_SERVER_DIR;
  if (!requestedRoot || !requestedRoot.startsWith('/') || requestedRoot.includes('\\') || requestedRoot.split('/').includes('..')) throw new Error('Racine WordPress invalide.');
  const localRoot = path.resolve(__dirname, '..');
  const manifests = await Promise.all(TARGETS.map(async ([local, remote]) => ({ local, remote, files: await collectFiles(path.join(localRoot, local)) })));
  const client = new Client();
  try {
    await new Promise((resolve, reject) => {
      client.on('error', reject);
      client.once('ready', resolve);
      client.connect({ ...options, username: env.FTP_USERNAME, password: env.FTP_PASSWORD, authHandler: ['password'] });
    });
    const sftp = await new Promise((resolve, reject) => client.sftp((error, channel) => error ? reject(error) : resolve(channel)));
    const root = await call(sftp, 'realpath', requestedRoot);
    if (!root.startsWith('/')) throw new Error('Racine SFTP non absolue.');
    const marker = await call(sftp, 'lstat', childPath(root, 'wp-load.php'));
    if (!marker.isFile() || marker.isSymbolicLink()) throw new Error('Installation WordPress non reconnue.');
    const content = await call(sftp, 'lstat', childPath(root, 'wp-content'));
    if (!content.isDirectory() || content.isSymbolicLink()) throw new Error('Répertoire WordPress non reconnu.');
    for (const { local, remote, files } of manifests) {
      // Les seuls chemins de destination sont définis dans TARGETS, jamais en entrée utilisateur.
      await ensureDirectory(sftp, root, remote);
      const targetRoot = childPath(root, remote);
      const directories = new Set();
      let updated = 0;
      for (const relative of files) {
        const directory = path.posix.dirname(relative);
        if (directory !== '.' && !directories.has(directory)) {
          await ensureDirectory(sftp, targetRoot, directory);
          directories.add(directory);
        }
        if (await publishFile(sftp, childPath(targetRoot, relative), await fs.readFile(path.join(localRoot, local, relative)))) updated++;
      }
      console.log(`${local} : ${updated} fichiers publiés, ${files.length - updated} déjà identiques. Aucune suppression distante.`);
    }
  } finally {
    client.end();
    // Une connexion interrompue ne doit pas maintenir indéfiniment le processus.
    setTimeout(() => client.destroy(), 1000).unref();
  }
}

if (require.main === module) {
  const task = process.argv[2] === '--check-host' ? checkHost(process.env) : deploy(process.env);
  task.catch((error) => {
    console.error(`Publication SFTP arrêtée : ${error.message}`);
    process.exitCode = 1;
  });
}

module.exports = { checkHost, childPath, collectFiles, connectionOptions, ensureDirectory, fingerprint, publishFile };
