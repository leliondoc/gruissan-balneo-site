const fs = require('fs');
const path = require('path');

const root = path.resolve(__dirname, '..');
const theme = path.join(root, 'wordpress-theme', 'balneo-v2');
const messages = new Map();

function walk(directory) {
  return fs.readdirSync(directory, { withFileTypes: true }).flatMap((entry) => {
    const fullPath = path.join(directory, entry.name);
    if (entry.isDirectory()) return walk(fullPath);
    return entry.isFile() && entry.name.endsWith('.php') ? [fullPath] : [];
  });
}

function unescapePhpString(value, quote) {
  if (quote === "'") return value.replace(/\\'/g, "'").replace(/\\\\/g, '\\');
  return value.replace(/\\"/g, '"').replace(/\\n/g, '\n').replace(/\\\\/g, '\\');
}

function escapePot(value) {
  return value.replace(/\\/g, '\\\\').replace(/"/g, '\\"').replace(/\n/g, '\\n');
}

walk(theme).forEach((file) => {
  if (file.endsWith(`${path.sep}content-seeds.php`)) return;
  const source = fs.readFileSync(file, 'utf8');
  const pattern = /\b(?:__|_e|esc_html__|esc_html_e|esc_attr__|esc_attr_e)\(\s*(['"])((?:\\.|(?!\1)[\s\S])*?)\1\s*,\s*['"]balneo-v2['"]/g;
  let match;
  while ((match = pattern.exec(source))) {
    const message = unescapePhpString(match[2], match[1]);
    const line = source.slice(0, match.index).split('\n').length;
    const location = `${path.relative(theme, file).replace(/\\/g, '/')}:${line}`;
    if (!messages.has(message)) messages.set(message, new Set());
    messages.get(message).add(location);
  }
});

const header = [
  'msgid ""',
  'msgstr ""',
  '"Project-Id-Version: Balnéo V2 1.4.3\\n"',
  '"Content-Type: text/plain; charset=UTF-8\\n"',
  '"Content-Transfer-Encoding: 8bit\\n"',
  '"Language: fr_FR\\n"',
  '',
];

const body = [...messages.entries()]
  .sort(([left], [right]) => left.localeCompare(right, 'fr'))
  .flatMap(([message, locations]) => [
    `#: ${[...locations].sort().join(' ')}`,
    `msgid "${escapePot(message)}"`,
    'msgstr ""',
    '',
  ]);

const destination = path.join(theme, 'languages', 'balneo-v2.pot');
fs.mkdirSync(path.dirname(destination), { recursive: true });
fs.writeFileSync(destination, `${header.concat(body).join('\n')}\n`, 'utf8');
console.log(`Catalogue généré : ${messages.size} chaîne(s) traduisible(s).`);
