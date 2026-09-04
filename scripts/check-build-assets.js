const fs = require('node:fs');
const path = require('node:path');
const assert = require('node:assert/strict');
const root = path.resolve(__dirname, '..');
function files(directory) {
  return fs.readdirSync(directory, { withFileTypes: true }).flatMap((entry) => {
    const full = path.join(directory, entry.name);
    assert.ok(!entry.isSymbolicLink(), `Lien symbolique inattendu dans les assets : ${full}`);
    return entry.isDirectory() ? files(full) : [full];
  });
}
const source = path.join(root, 'assets');
const target = path.join(root, 'wordpress-theme/balneo-v2/assets');
const expected = files(source).map((file) => path.relative(source, file).replaceAll('\\', '/'))
  .filter((file) => !file.startsWith('photos/') || file.endsWith('.webp')).sort();
const actual = files(target).map((file) => path.relative(target, file).replaceAll('\\', '/')).sort();
assert.deepEqual(actual, expected, 'Assets manquants ou orphelins dans le thème : vérifier avant livraison, sans suppression automatique.');
for (const file of expected) assert.ok(fs.readFileSync(path.join(source, file)).equals(fs.readFileSync(path.join(target, file))), `Copie différente : ${file}`);
console.log(`${actual.length} assets livrés identiques aux sources ; aucun fichier orphelin.`);
