const fs = require('fs');
const path = require('path');

const files = [
  'index.html',
  ...fs.readdirSync('pages')
    .filter((file) => file.endsWith('.html'))
    .map((file) => `pages/${file}`)
];

const errors = [];

function checkLocalTarget(file, value, type) {
  if (!value.trim()) { errors.push(`${type} vide : ${file}`); return; }
  const cleanValue = value.split('#')[0].split('?')[0];
  if (!cleanValue || /^(https?:|tel:|mailto:|javascript:|data:)/.test(cleanValue)) return;
  const target = path.resolve(path.dirname(file), cleanValue);
  if (!fs.existsSync(target)) errors.push(`${type} absent : ${file} -> ${value}`);
}

files.forEach((file) => {
  const html = fs.readFileSync(file, 'utf8');

  Array.from(html.matchAll(/href="([^"]*)"/g)).forEach((match) => {
    checkLocalTarget(file, match[1], 'Lien');
  });

  Array.from(html.matchAll(/src="([^"]*)"/g)).forEach((match) => {
    checkLocalTarget(file, match[1], 'Ressource');
  });

  Array.from(html.matchAll(/<nav class="footer-nav">([\s\S]*?)<\/nav>/g)).forEach((navMatch) => {
    Array.from(navMatch[1].matchAll(/<a\b[^>]*>([\s\S]*?)<\/a>/g)).forEach((linkMatch) => {
      if (!/<i\b/.test(linkMatch[1])) errors.push(`Icône de pied de page absente : ${file}`);
    });
  });

  Array.from(html.matchAll(/<(a|button)\b[^>]*class="([^"]*)"[^>]*>([\s\S]*?)<\/\1>/g)).forEach((match) => {
    if (match[2].split(/\s+/).includes('btn') && !/<i\b/.test(match[3])) {
      errors.push(`Icône de btn absente : ${file}`);
    }
  });
});

['css/styles.css'].forEach((file) => {
  const css = fs.readFileSync(file, 'utf8');
  Array.from(css.matchAll(/url\((['"]?)([^)'"\s]+)\1\)/g)).forEach((match) => {
    checkLocalTarget(file, match[2], 'Ressource CSS');
  });
});

if (errors.length) {
  console.error(errors.join('\n'));
  process.exit(1);
}

console.log(`Thème validé sans substitution : ${files.length} pages contrôlées.`);
