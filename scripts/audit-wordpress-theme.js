const fs = require('fs');
const path = require('path');
const { parse } = require('@wordpress/block-serialization-default-parser');

const root = path.resolve(__dirname, '..');
const theme = path.join(root, 'wordpress-theme', 'balneo-v2');
const failures = [];

function assert(condition, message) {
  if (!condition) failures.push(message);
}

function read(relativePath) {
  const fullPath = path.join(theme, relativePath);
  assert(fs.existsSync(fullPath), `Fichier manquant : ${relativePath}`);
  return fs.existsSync(fullPath) ? fs.readFileSync(fullPath, 'utf8') : '';
}

const required = [
  'style.css', 'functions.php', 'index.php', 'front-page.php', 'page.php', '404.php',
  'comments.php', 'search.php', 'theme.json', 'screenshot.png', 'css/editor.css',
  'inc/content.php', 'inc/content-seeds.php', 'inc/navigation.php', 'inc/forms.php',
  'inc/blocks.php', 'blocks/editor.js', 'blocks/container/block.json',
  'blocks/rich-text/block.json', 'blocks/image/block.json',
  'inc/class-balneo-v2-primary-menu-walker.php',
  'inc/redirects.php', 'inc/seo.php', 'inc/ai-discovery.php', 'inc/admin-branding.php',
  'languages/balneo-v2.pot',
];
required.forEach(read);

const functionsPhp = read('functions.php');
assert(functionsPhp.includes("add_theme_support( 'editor-styles' )"), 'Support des styles Gutenberg absent.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/content.php' )"), 'Module de contenu non chargé.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/blocks.php' )"), 'Blocs Gutenberg Balnéo non chargés.');

const header = read('header.php');
assert(header.includes('balneo_v2_primary_navigation()'), 'Navigation principale encore codée en dur.');
assert(header.includes("balneo_v2_site_logo( 'header' )"), 'Logo d’en-tête non piloté par WordPress.');

const footer = read('footer.php');
assert(footer.includes("balneo_v2_site_logo( 'footer' )"), 'Logo de pied de page non piloté par WordPress.');

const pot = read('languages/balneo-v2.pot');
assert((pot.match(/^msgid /gm) || []).length >= 30, 'Le catalogue de traduction paraît incomplet.');

const seeds = read('inc/content-seeds.php');
const seedCount = (seeds.match(/'content'\s*=>\s*<<<'BALNEO_/g) || []).length;
assert(seedCount === 26, `26 contenus attendus, ${seedCount} trouvés.`);
assert((seeds.match(/'legacy_hash'\s*=>/g) || []).length === 26, 'Les empreintes de migration non destructive sont incomplètes.');
assert(!seeds.includes('<!-- wp:freeform -->'), 'Un ancien monobloc Classique subsiste dans les contenus.');
assert((seeds.match(/<!-- wp:balneo\/container /g) || []).length >= 100, 'Les sections Gutenberg structurées paraissent incomplètes.');
assert((seeds.match(/<!-- wp:paragraph/g) || []).length >= 100, 'Les paragraphes ne sont pas suffisamment découpés en blocs natifs.');
assert((seeds.match(/<!-- wp:heading/g) || []).length >= 50, 'Les titres ne sont pas suffisamment découpés en blocs natifs.');
assert((seeds.match(/<!-- wp:table/g) || []).length >= 5, 'Les tableaux natifs Gutenberg paraissent incomplets.');
assert(!/(?:\.\.\/|\.\/)pages\/[a-z0-9-]+\.html/.test(seeds), 'Liens HTML historiques présents dans les contenus Gutenberg.');
assert(!/(?:src|href)="(?:\.\.\/|\.\/)?assets\//.test(seeds), 'Chemins d’assets statiques présents dans les contenus Gutenberg.');
assert(seeds.includes('[balneo_newsletter_form]'), 'Shortcode newsletter absent du contenu d’accueil.');

const seedContents = Array.from(
  seeds.matchAll(/'content'\s*=>\s*<<<'([^']+)'\n([\s\S]*?)\n\1/g),
  (match) => match[2],
);
const editableLeafNames = new Set([
  'core/heading', 'core/image', 'core/list', 'core/paragraph', 'core/table',
  'balneo/image', 'balneo/rich-text',
]);

function flattenBlocks(blocks) {
  return blocks.flatMap((block) => [block, ...flattenBlocks(block.innerBlocks || [])]);
}

seedContents.forEach((content, index) => {
  const parsed = parse(content);
  const flat = flattenBlocks(parsed);
  const editableLeaves = flat.filter((block) => editableLeafNames.has(block.blockName));
  const oversizedHtml = flat.filter(
    (block) => block.blockName === 'core/html' && (block.innerHTML || '').length > 500,
  );

  assert(parsed.length > 0, `Le contenu ${index + 1} ne contient aucun bloc.`);
  assert(editableLeaves.length >= 3, `Le contenu ${index + 1} reste trop monolithique.`);
  assert(oversizedHtml.length === 0, `Le contenu ${index + 1} contient encore un gros bloc HTML.`);
});

const pagePhp = read('page.php');
const frontPagePhp = read('front-page.php');
assert(pagePhp.includes('the_content();'), 'Les pages ne rendent pas le contenu WordPress.');
assert(frontPagePhp.includes('the_content();'), 'L’accueil ne rend pas le contenu WordPress.');

if (failures.length) {
  console.error(`Audit WordPress échoué (${failures.length}) :`);
  failures.forEach((failure) => console.error(`- ${failure}`));
  process.exit(1);
}

console.log('Audit WordPress réussi : 26 pages Gutenberg, navigation et logo dynamiques, thème complet.');
