const fs = require('fs');
const path = require('path');
const { parse: parseSerializedBlocks } = require('@wordpress/block-serialization-default-parser');
const { htmlToEditableGutenberg } = require('./gutenberg-blocks');
const { correspondances } = require('./franciser-classes-css');

htmlToEditableGutenberg('<p>Audit Gutenberg</p>');
const { parse: parseGutenbergBlocks } = require('@wordpress/blocks');

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
  'inc/redirects.php', 'inc/seo.php', 'inc/ai-discovery.php', 'inc/security.php',
  'inc/performance.php', 'inc/analytics.php', 'inc/admin-branding.php', 'js/analytics.js',
  'assets/fonts/BarlowCondensed-Regular.woff2', 'assets/fonts/Buttercy.woff2',
  'assets/fonts/BrandonSmithStamp.woff2',
  'languages/balneo-v2.pot',
];
required.forEach(read);

const functionsPhp = read('functions.php');
assert(functionsPhp.includes("add_theme_support( 'editor-styles' )"), 'Support des styles Gutenberg absent.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/content.php' )"), 'Module de contenu non chargé.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/blocks.php' )"), 'Blocs Gutenberg Balnéo non chargés.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/security.php' )"), 'Module de sécurité non chargé.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/performance.php' )"), 'Module de performance non chargé.');
assert(functionsPhp.includes("require_once get_theme_file_path( '/inc/analytics.php' )"), 'Gestion du consentement analytics non chargée.');
assert(functionsPhp.includes('balneo_v2_preload_critical_fonts'), 'Préchargement des polices critiques absent.');
const fontPreloadFunction = functionsPhp.match(/function balneo_v2_preload_critical_fonts[\s\S]*?add_action\( 'wp_head'/)?.[0] || '';
assert(!fontPreloadFunction.includes('BrandonSmithStamp.woff2'), 'La fonte décorative lourde ne doit pas être préchargée.');
assert(functionsPhp.includes("'strategy'  => 'defer'"), 'Le script public n’utilise pas la stratégie différée native.');

const publicCss = read('css/styles.css');
assert(!publicCss.includes('cursive'), 'Une police cursive système peut encore provoquer un flash Comic Sans.');
assert(!publicCss.includes('BrandonSmithStamp.woff\''), 'L’ancienne police Brandon WOFF lourde est encore chargée.');
assert(!publicCss.includes('Buttercy.ttf'), 'L’ancienne police Buttercy TTF est encore chargée.');
assert(publicCss.includes('navSpaBreathe .96s'), 'Les animations posées des icônes du menu ont disparu.');
assert(publicCss.includes('animation: ctaSunTurn 26s linear infinite'), 'La rotation lente de la pastille Acheter a disparu.');
assert(publicCss.includes('.consentement-cookies__carte'), 'Styles du panneau de consentement absents.');
assert(publicCss.includes('body.consentement-ouvert'), 'Verrouillage du fond derrière le panneau de consentement absent.');

Object.keys(correspondances).forEach((ancienneClasse) => {
  const motif = new RegExp(`\\.${ancienneClasse.replace(/[.*+?^${}()|[\]\\]/g, '\\$&')}(?![A-Za-z0-9_-])`);
  assert(!motif.test(publicCss), `Ancienne classe CSS encore présente : .${ancienneClasse}`);
});
assert(!/(?:Header tools|Persistent practical|Fade-in on scroll|Back to top)/.test(publicCss), 'Un commentaire CSS public reste en anglais.');

const header = read('header.php');
assert(header.includes('balneo_v2_primary_navigation()'), 'Navigation principale encore codée en dur.');
assert(header.includes("balneo_v2_site_logo( 'header' )"), 'Logo d’en-tête non piloté par WordPress.');
assert(header.includes('class="lien-evitement"'), 'Lien d’évitement vers le contenu principal absent.');

const footer = read('footer.php');
assert(footer.includes("balneo_v2_site_logo( 'footer' )"), 'Logo de pied de page non piloté par WordPress.');

const securityPhp = read('inc/security.php');
assert(securityPhp.includes('X-Content-Type-Options'), 'Protection contre le reniflage MIME absente.');
assert(securityPhp.includes('Permissions-Policy'), 'Politique de permissions absente.');
assert(securityPhp.includes('Referrer-Policy'), 'Politique de référent absente.');

const seoPhp = read('inc/seo.php');
assert(seoPhp.includes("'@graph'"), 'Graphe de données structurées absent.');
assert(seoPhp.includes("'Article'"), 'Données structurées Article absentes.');
assert(seoPhp.includes("'sameAs'"), 'Profils officiels absents des données structurées.');
assert(seoPhp.includes('SEOPRESS_VERSION'), 'Détection des extensions SEO courantes incomplète.');

const aiDiscoveryPhp = read('inc/ai-discovery.php');
assert(aiDiscoveryPhp.includes('OAI-SearchBot'), 'Accès du robot de recherche OpenAI non déclaré.');
assert(aiDiscoveryPhp.includes('ChatGPT-User'), 'Accès aux consultations ChatGPT non déclaré.');
assert(aiDiscoveryPhp.includes('llms.txt'), 'Résumé éditorial pour assistants absent.');

const formsPhp = read('inc/forms.php');
assert(formsPhp.includes('wp_verify_nonce'), 'Protection CSRF du formulaire absente.');
assert(formsPhp.includes("name=\"consentement\""), 'Consentement explicite à la newsletter absent.');
assert(formsPhp.includes('set_transient'), 'Limitation anti-abus du formulaire absente.');
assert(formsPhp.includes('wp_validate_redirect'), 'Validation de la redirection du formulaire absente.');

const analyticsPhp = read('inc/analytics.php');
const analyticsJs = read('js/analytics.js');
assert(analyticsPhp.includes("'strategy'  => 'defer'"), 'Le gestionnaire de consentement n’est pas différé.');
assert(analyticsJs.includes("analytics_storage: 'denied'"), 'Le consentement analytics n’est pas refusé par défaut.');
assert(analyticsJs.includes("ad_storage: 'denied'"), 'Le consentement publicitaire n’est pas refusé par défaut.');
assert(analyticsJs.includes('loadGoogleTag('), 'Le chargement conditionnel de Google Tag est absent.');
assert(analyticsJs.includes("document.body.classList.add('consentement-ouvert')"), 'Le dialogue de consentement ne verrouille pas le fond.');

const pot = read('languages/balneo-v2.pot');
assert((pot.match(/^msgid /gm) || []).length >= 30, 'Le catalogue de traduction paraît incomplet.');

const seeds = read('inc/content-seeds.php');
const seedCount = (seeds.match(/'content'\s*=>\s*<<<'BALNEO_/g) || []).length;
assert(seedCount === 26, `26 contenus attendus, ${seedCount} trouvés.`);
assert((seeds.match(/'legacy_hash'\s*=>/g) || []).length === 26, 'Les empreintes de migration non destructive sont incomplètes.');
assert((seeds.match(/'schema2_hash'\s*=>/g) || []).length === 26, 'Les empreintes de migration du schéma 2 sont incomplètes.');
assert(!seeds.includes('<!-- wp:freeform -->'), 'Un ancien monobloc Classique subsiste dans les contenus.');
assert(!seeds.includes('<!-- wp:balneo/container'), 'Un ancien conteneur technique subsiste dans les nouveaux contenus.');
assert((seeds.match(/<!-- wp:group(?:\s|-->)/g) || []).length >= 100, 'Les groupes Gutenberg natifs paraissent incomplets.');
assert((seeds.match(/<!-- wp:details(?:\s|-->)/g) || []).length >= 5, 'Les accordéons Gutenberg natifs paraissent incomplets.');
assert((seeds.match(/<!-- wp:paragraph/g) || []).length >= 100, 'Les paragraphes ne sont pas suffisamment découpés en blocs natifs.');
assert((seeds.match(/<!-- wp:heading/g) || []).length >= 50, 'Les titres ne sont pas suffisamment découpés en blocs natifs.');
assert((seeds.match(/<!-- wp:table/g) || []).length >= 5, 'Les tableaux natifs Gutenberg paraissent incomplets.');
assert(!/(?:\.\.\/|\.\/)pages\/[a-z0-9-]+\.html/.test(seeds), 'Liens HTML historiques présents dans les contenus Gutenberg.');
assert(!/(?:src|href)="(?:\.\.\/|\.\/)?assets\//.test(seeds), 'Chemins d’assets statiques présents dans les contenus Gutenberg.');
assert(seeds.includes('[balneo_newsletter_form]'), 'Shortcode newsletter absent du contenu d’accueil.');
assert((seeds.match(/"anchor":"contenu-principal"/g) || []).length === 26, 'La cible du lien d’évitement manque sur une page.');

const classesSerialisees = Array.from(seeds.matchAll(/"className":"([^"]+)"/g), (match) => match[1])
  .flatMap((liste) => liste.split(/\s+/));
Object.keys(correspondances).forEach((ancienneClasse) => {
  assert(!classesSerialisees.includes(ancienneClasse), `Ancienne classe présente dans Gutenberg : ${ancienneClasse}`);
});

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
  const parsed = parseSerializedBlocks(content);
  const flat = flattenBlocks(parsed);
  const editorBlocks = flattenBlocks(parseGutenbergBlocks(content));
  const editableLeaves = flat.filter((block) => editableLeafNames.has(block.blockName));
  const oversizedHtml = flat.filter(
    (block) => block.blockName === 'core/html' && (block.innerHTML || '').length > 500,
  );
  const oversizedRichText = flat.filter(
    (block) => block.blockName === 'balneo/rich-text' && String(block.attrs?.content || '').length > 500,
  );
  const imageBlocks = flat.filter((block) => block.blockName === 'balneo/image');

  assert(parsed.length > 0, `Le contenu ${index + 1} ne contient aucun bloc.`);
  assert(editorBlocks.every((block) => block.isValid !== false), `Le contenu ${index + 1} contient un bloc invalide dans l’éditeur.`);
  assert(editableLeaves.length >= 3, `Le contenu ${index + 1} reste trop monolithique.`);
  assert(oversizedHtml.length === 0, `Le contenu ${index + 1} contient encore un gros bloc HTML.`);
  assert(oversizedRichText.length === 0, `Le contenu ${index + 1} contient encore un gros bloc de texte technique.`);
  assert(
    imageBlocks.every((block) => block.attrs?.htmlAttributes?.width && block.attrs?.htmlAttributes?.height),
    `Le contenu ${index + 1} contient une image sans dimensions.`,
  );
  assert(
    imageBlocks.every((block) => block.attrs?.htmlAttributes?.decoding === 'async'),
    `Le contenu ${index + 1} contient une image sans décodage asynchrone.`,
  );
});

const contentMigration = read('inc/content.php');
assert(contentMigration.includes("'3.0.0'"), 'La migration vers le schéma Gutenberg 3 est absente.');

const pagePhp = read('page.php');
const frontPagePhp = read('front-page.php');
assert(pagePhp.includes('the_content();'), 'Les pages ne rendent pas le contenu WordPress.');
assert(frontPagePhp.includes('the_content();'), 'L’accueil ne rend pas le contenu WordPress.');

if (failures.length) {
  console.error(`Audit WordPress échoué (${failures.length}) :`);
  failures.forEach((failure) => console.error(`- ${failure}`));
  process.exit(1);
}

console.log('Audit WordPress réussi : SEO, IA, sécurité, performance et 26 pages Gutenberg contrôlés.');
