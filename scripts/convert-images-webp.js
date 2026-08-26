/**
 * Convertit les photos de la maquette en WebP optimisés.
 *
 * Usage : node scripts/convert-images-webp.js [--force]
 */

const fs = require('fs');
const path = require('path');

let sharp;
try {
  sharp = require('sharp');
} catch (error) {
  console.error('Le module sharp est requis. Lancez `npm install`, puis réessayez.');
  process.exitCode = 1;
  return;
}

const root = path.resolve(__dirname, '..');
const photosRoot = path.join(root, 'assets', 'photos');
const force = process.argv.includes('--force');
const sourceExtensions = new Set(['.jpg', '.jpeg', '.png']);
const maxDimension = 2560;
const quality = 82;

function formatBytes(bytes) {
  const units = ['o', 'Ko', 'Mo', 'Go'];
  let value = bytes;
  let unit = 0;
  while (value >= 1024 && unit < units.length - 1) {
    value /= 1024;
    unit += 1;
  }
  return `${value.toFixed(unit === 0 ? 0 : 1)} ${units[unit]}`;
}

async function convert(file) {
  const extension = path.extname(file).toLowerCase();
  const target = path.join(path.dirname(file), `${path.basename(file, extension)}.webp`);
  const sourceStat = fs.statSync(file);

  if (!force && fs.existsSync(target) && fs.statSync(target).mtimeMs >= sourceStat.mtimeMs) {
    return { status: 'skipped', source: file, target, sourceBytes: sourceStat.size, targetBytes: fs.statSync(target).size };
  }

  const temporaryTarget = `${target}.tmp`;
  await sharp(file, { failOn: 'warning' })
    .rotate()
    .resize({
      width: maxDimension,
      height: maxDimension,
      fit: 'inside',
      withoutEnlargement: true,
    })
    .webp({ quality, effort: 5, smartSubsample: true })
    .toFile(temporaryTarget);

  fs.renameSync(temporaryTarget, target);
  const targetStat = fs.statSync(target);
  return { status: 'converted', source: file, target, sourceBytes: sourceStat.size, targetBytes: targetStat.size };
}

async function main() {
  const files = fs
    .readdirSync(photosRoot, { withFileTypes: true })
    .filter((entry) => entry.isFile() && sourceExtensions.has(path.extname(entry.name).toLowerCase()))
    .map((entry) => path.join(photosRoot, entry.name))
    .sort((left, right) => left.localeCompare(right, 'fr'));

  const results = [];
  for (const file of files) {
    const result = await convert(file);
    results.push(result);
    if (result.status === 'converted') {
      const saved = result.sourceBytes - result.targetBytes;
      console.log(`${path.basename(result.source)} → ${path.basename(result.target)} (${formatBytes(saved)} économisés)`);
    }
  }

  const sourceBytes = results.reduce((sum, result) => sum + result.sourceBytes, 0);
  const targetBytes = results.reduce((sum, result) => sum + result.targetBytes, 0);
  const ratio = sourceBytes ? Math.round((1 - targetBytes / sourceBytes) * 100) : 0;
  const converted = results.filter((result) => result.status === 'converted').length;

  console.log(
    `${results.length} image(s) contrôlée(s), ${converted} convertie(s) — ${formatBytes(sourceBytes)} → ${formatBytes(targetBytes)} (-${ratio} %).`,
  );
}

main().catch((error) => {
  console.error(error);
  process.exitCode = 1;
});
