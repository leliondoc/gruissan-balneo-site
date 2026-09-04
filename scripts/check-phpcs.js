const { execFileSync, spawnSync } = require('node:child_process');
const fs = require('node:fs');
const path = require('node:path');

const root = path.resolve(__dirname, '..');
const fix = process.argv.includes('--fix');
const binary = path.join(root, 'vendor/bin', fix ? 'phpcbf' : 'phpcs');
if (!fs.existsSync(binary)) {
  console.error('Installez les outils qualité avec composer install avant de construire ou contrôler le thème.');
  process.exit(1);
}
const args = [];
if (process.platform === 'win32') {
  const php = execFileSync('php', ['-r', 'echo PHP_BINARY;'], { encoding: 'utf8' });
  args.push('-d', `extension_dir=${path.join(path.dirname(php), 'ext')}`, '-d', 'extension=mbstring');
}
args.push(binary, '--standard=phpcs.xml.dist');
const result = spawnSync('php', args, { cwd: root, stdio: 'inherit' });
if (result.error) throw result.error;
// PHPCBF retourne 1 lorsque tous les écarts corrigeables ont été corrigés.
process.exit(fix && result.status === 1 ? 0 : (result.status ?? 1));
