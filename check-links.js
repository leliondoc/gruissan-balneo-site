const fs = require('fs');
const path = require('path');

const files = [
  'index.html',
  ...fs.readdirSync('pages')
    .filter((file) => file.endsWith('.html'))
    .map((file) => `pages/${file}`)
];

const brokenLinks = [];

files.forEach((file) => {
  const html = fs.readFileSync(file, 'utf8');
  Array.from(html.matchAll(/href="([^"]+)"/g)).forEach((match) => {
    const href = match[1].split('#')[0];
    if (!href || /^(https?:|tel:|mailto:|javascript:)/.test(href)) return;
    const target = path.resolve(path.dirname(file), href);
    if (!fs.existsSync(target)) brokenLinks.push(`${file} -> ${match[1]}`);
  });
});

if (brokenLinks.length) {
  console.error(brokenLinks.join('\n'));
  process.exit(1);
}

console.log(`Liens internes valides : ${files.length} pages contrôlées.`);
