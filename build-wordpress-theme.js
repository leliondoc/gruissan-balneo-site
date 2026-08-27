const fs = require('fs');
const path = require('path');
const crypto = require('crypto');
const { htmlToEditableGutenberg, htmlToLegacyBalneoGutenberg } = require('./scripts/gutenberg-blocks');

const root = __dirname;
const themeRoot = path.join(root, 'wordpress-theme', 'balneo-v2');
const pagePartsRoot = path.join(themeRoot, 'template-parts', 'pages');

const pages = {
  'acces-parking': 'Accès & parking',
  actualites: 'Actualités',
  aquabike: 'Aquabike',
  aquagym: 'Aquagym',
  'article-parc-ete': 'Ouverture du parc été',
  'article-riviere': 'Réouverture de la rivière extérieure',
  'article-stages-natation': 'Stages de natation enfants été',
  balneo: 'Balnéo',
  'bebes-nageurs': 'Bébés nageurs',
  brochures: 'Brochures',
  contact: 'Contact',
  'donnees-personnelles': 'Données personnelles',
  faq: 'FAQ',
  horaires: 'Horaires',
  hydromassages: 'Hydromassages',
  'infos-pratiques': 'Infos pratiques',
  massages: 'Massages',
  'mentions-legales': 'Mentions légales',
  natation: 'Natation',
  'parc-ete': 'Parc été',
  privatisation: 'Privatisation',
  recuperation: 'Récupération',
  reglement: 'Règlement intérieur',
  'salle-de-sport': 'Salle For.Me',
  tarifs: 'Tarifs',
};

function ensureDir(directory) {
  fs.mkdirSync(directory, { recursive: true });
}

function phpThemeAsset(assetPath) {
  const optimizedPath = assetPath.replace(/^(assets\/photos\/[^.]+)\.(?:jpe?g|png)$/i, '$1.webp');
  return `<?php echo esc_url( get_theme_file_uri( '/${optimizedPath}' ) ); ?>`;
}

function phpSiteUrl(slug = '') {
  const pathname = slug ? `/${slug}/` : '/';
  return `<?php echo esc_url( home_url( '${pathname}' ) ); ?>`;
}

function transformMarkup(markup) {
  let output = markup;

  output = output.replace(
    /((?:src|href|data-[a-z-]+)=\")(?:\.\.\/|\.\/)?assets\/([^\"]+)(\")/g,
    (_match, start, asset, end) => `${start}${phpThemeAsset(`assets/${asset}`)}${end}`,
  );

  output = output.replace(
    /((?:src|href|data-[a-z-]+)=\")(?:\.\.\/|\.\/)?pages\/([a-z0-9-]+)\.html(#[^\"]*)?(\")/g,
    (_match, start, slug, hash = '', end) => `${start}${phpSiteUrl(slug)}${hash || ''}${end}`,
  );

  output = output.replace(
    /((?:src|href|data-[a-z-]+)=\")([a-z0-9-]+)\.html(#[^\"]*)?(\")/g,
    (_match, start, slug, hash = '', end) => `${start}${phpSiteUrl(slug)}${hash || ''}${end}`,
  );

  output = output.replace(
    /((?:src|href|data-[a-z-]+)=\")(?:\.\.\/|\.\/)?index\.html(#[^\"]*)?(\")/g,
    (_match, start, hash = '', end) => `${start}${phpSiteUrl()}${hash || ''}${end}`,
  );

  output = output.replace(
    '<div class="form-success">Merci pour votre inscription !</div>',
    `<div class="form-success<?php echo isset( $_GET['inscription'] ) && 'merci' === $_GET['inscription'] ? ' visible' : ''; ?>">Merci pour votre inscription !</div>
          <div class="form-error<?php echo isset( $_GET['inscription'] ) && 'erreur' === $_GET['inscription'] ? ' visible' : ''; ?>">L'inscription n'a pas pu être envoyée. Vérifiez votre adresse e-mail ou réessayez.</div>`,
  );
  output = output.replace(
    '<form data-form>',
    `<form data-form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="balneo_v2_newsletter">
            <?php wp_nonce_field( 'balneo_v2_newsletter', 'balneo_v2_newsletter_nonce' ); ?>
            <div class="balneo-honeypot" aria-hidden="true"><label>Site web<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>`,
  );

  return output;
}

function optimizeFirstHeroImage(markup) {
  return markup.replace(
    /(<div class="(?:hero__media|page-hero__media)[^"]*"[^>]*>[\s\S]*?<img\s+)([^>]*)(>)/,
    (_match, start, attributes, end) => {
      const cleanAttributes = attributes
        .replace(/\sloading="[^"]*"/g, '')
        .replace(/\sfetchpriority="[^"]*"/g, '');
      return `${start}${cleanAttributes} loading="eager" fetchpriority="high"${end}`;
    },
  );
}

function transformEditableMarkup(markup, converter = htmlToEditableGutenberg) {
  let output = markup;

  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")(?:\.\.\/|\.\/)?assets\/([^"]+)(")/g,
    (_match, start, asset, end) => {
      const optimizedAsset = asset.replace(/^(photos\/[^.]+)\.(?:jpe?g|png)$/i, '$1.webp');
      return `${start}/wp-content/themes/balneo-v2/assets/${optimizedAsset}${end}`;
    },
  );
  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")(?:\.\.\/|\.\/)?pages\/([a-z0-9-]+)\.html(#[^"]*)?(")/g,
    (_match, start, slug, hash = '', end) => `${start}/${slug}/${hash || ''}${end}`,
  );
  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")([a-z0-9-]+)\.html(#[^"]*)?(")/g,
    (_match, start, slug, hash = '', end) => `${start}/${slug}/${hash || ''}${end}`,
  );
  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")(?:\.\.\/|\.\/)?index\.html(#[^"]*)?(")/g,
    (_match, start, hash = '', end) => `${start}/${hash || ''}${end}`,
  );
  output = output.replace(
    /<div class="form-success">[\s\S]*?<\/div>\s*<form data-form>[\s\S]*?<\/form>/,
    '[balneo_newsletter_form]',
  );

  return converter(output);
}

function transformLegacyEditableMarkup(markup) {
  let output = markup;

  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")(?:\.\.\/|\.\/)?assets\/([^"]+)(")/g,
    (_match, start, asset, end) => {
      const optimizedAsset = asset.replace(/^(photos\/[^.]+)\.(?:jpe?g|png)$/i, '$1.webp');
      return `${start}/wp-content/themes/balneo-v2/assets/${optimizedAsset}${end}`;
    },
  );
  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")(?:\.\.\/|\.\/)?pages\/([a-z0-9-]+)\.html(#[^"]*)?(")/g,
    (_match, start, slug, hash = '', end) => `${start}/${slug}/${hash || ''}${end}`,
  );
  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")([a-z0-9-]+)\.html(#[^"]*)?(")/g,
    (_match, start, slug, hash = '', end) => `${start}/${slug}/${hash || ''}${end}`,
  );
  output = output.replace(
    /((?:src|href|data-[a-z-]+)=")(?:\.\.\/|\.\/)?index\.html(#[^"]*)?(")/g,
    (_match, start, hash = '', end) => `${start}/${hash || ''}${end}`,
  );
  output = output.replace(
    /<div class="form-success">[\s\S]*?<\/div>\s*<form data-form>[\s\S]*?<\/form>/,
    '[balneo_newsletter_form]',
  );

  return `<!-- wp:freeform -->\n${output.trim()}\n<!-- /wp:freeform -->`;
}

function sliceBetween(source, startMarker, endMarker, file) {
  const start = source.indexOf(startMarker);
  const end = source.indexOf(endMarker, start + startMarker.length);
  if (start === -1 || end === -1 || end <= start) {
    throw new Error(`Impossible d'extraire ${file}: ${startMarker} → ${endMarker}`);
  }
  return source.slice(start + startMarker.length, end).trim();
}

function write(relativePath, contents) {
  const destination = path.join(themeRoot, relativePath);
  ensureDir(path.dirname(destination));
  fs.writeFileSync(destination, `${contents.trim()}\n`, 'utf8');
}

function buildHeader(homeHtml) {
  const headerStart = homeHtml.indexOf('<header class="site-header">');
  const headerEnd = homeHtml.indexOf('</header>', headerStart);
  if (headerStart === -1 || headerEnd === -1) throw new Error('En-tête introuvable');
  let header = transformMarkup(homeHtml.slice(headerStart, headerEnd + '</header>'.length));
  header = header.replace(
    /<a href="<\?php echo esc_url\( home_url\( '\/' \) \); \?>" class="site-logo"[\s\S]*?<\/a>/,
    "<?php balneo_v2_site_logo( 'header' ); ?>",
  );
  header = header.replace(/<ul class="main-nav">[\s\S]*?<\/ul>/, '<?php balneo_v2_primary_navigation(); ?>');
  header = header
    .replace('Au cœur de Gruissan, entre mer et lagune', "<?php esc_html_e( 'Au cœur de Gruissan, entre mer et lagune', 'balneo-v2' ); ?>")
    .replace('aria-label="Liens pratiques"', "aria-label=\"<?php esc_attr_e( 'Liens pratiques', 'balneo-v2' ); ?>\"")
    .replace('aria-label="Ouvrir le menu"', "aria-label=\"<?php esc_attr_e( 'Ouvrir le menu', 'balneo-v2' ); ?>\"")
    .replace('>Contact</a>', "><?php esc_html_e( 'Contact', 'balneo-v2' ); ?></a>")
    .replace('>Gruissan Tourisme</a>', "><?php esc_html_e( 'Gruissan Tourisme', 'balneo-v2' ); ?></a>");

  return `<?php
/**
 * En-tête du thème Balnéo V2.
 *
 * @package BalneoV2
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
${header}`;
}

function buildFooter(homeHtml) {
  const footerStart = homeHtml.indexOf('<a class="cta-orb"');
  const footerEnd = homeHtml.indexOf('</footer>', footerStart);
  if (footerStart === -1 || footerEnd === -1) throw new Error('Pied de page introuvable');
  let footer = transformMarkup(homeHtml.slice(footerStart, footerEnd + '</footer>'.length));
  footer = footer.replace(
    /<a href="<\?php echo esc_url\( home_url\( '\/' \) \); \?>" class="footer-wordmark">[\s\S]*?<\/a>/,
    "<?php balneo_v2_site_logo( 'footer' ); ?>",
  );
  footer = footer
    .replace(/>Acheter<\/span><small>en ligne<\/small>/, "><?php esc_html_e( 'Acheter', 'balneo-v2' ); ?></span><small><?php esc_html_e( 'en ligne', 'balneo-v2' ); ?></small>")
    .replace('aria-label="Informations légales"', "aria-label=\"<?php esc_attr_e( 'Informations légales', 'balneo-v2' ); ?>\"")
    .replace('>Mentions légales</a>', "><?php esc_html_e( 'Mentions légales', 'balneo-v2' ); ?></a>")
    .replace('>Données personnelles</a>', "><?php esc_html_e( 'Données personnelles', 'balneo-v2' ); ?></a>")
    .replace('>Règlement intérieur</a>', "><?php esc_html_e( 'Règlement intérieur', 'balneo-v2' ); ?></a>")
    .replace('>Espace For.Me</a>', "><?php esc_html_e( 'Espace For.Me', 'balneo-v2' ); ?></a>")
    .replace('>Espace Balnéo</a>', "><?php esc_html_e( 'Espace Balnéo', 'balneo-v2' ); ?></a>")
    .replace('>Massages</a>', "><?php esc_html_e( 'Massages', 'balneo-v2' ); ?></a>")
    .replace('>Aquagym</a>', "><?php esc_html_e( 'Aquagym', 'balneo-v2' ); ?></a>")
    .replace('>Parc été</a>', "><?php esc_html_e( 'Parc été', 'balneo-v2' ); ?></a>")
    .replace('>Infos pratiques</a>', "><?php esc_html_e( 'Infos pratiques', 'balneo-v2' ); ?></a>")
    .replace('>Tarifs</a>', "><?php esc_html_e( 'Tarifs', 'balneo-v2' ); ?></a>")
    .replace('>Horaires</a>', "><?php esc_html_e( 'Horaires', 'balneo-v2' ); ?></a>")
    .replace('>Accès &amp; parking</a>', "><?php esc_html_e( 'Accès & parking', 'balneo-v2' ); ?></a>")
    .replace('&reg; D.B.G — Espace Balnéo de Gruissan', "<?php esc_html_e( '® D.B.G — Espace Balnéo de Gruissan', 'balneo-v2' ); ?>")
    .replace('Photos : J.B. Roubinet', "<?php esc_html_e( 'Photos : J.B. Roubinet', 'balneo-v2' ); ?>");

  return `<?php
/**
 * Pied de page du thème Balnéo V2.
 *
 * @package BalneoV2
 */

?>
${footer}
<?php wp_footer(); ?>
</body>
</html>`;
}

function buildPagePart(html, sourceName) {
  const body = sliceBetween(html, '</header>', '<a class="cta-orb"', sourceName);
  const optimizedBody = optimizeFirstHeroImage(body).replace(
    /<div class="form-success">[\s\S]*?<\/div>\s*<form data-form>[\s\S]*?<\/form>/,
    "<?php echo do_shortcode( '[balneo_newsletter_form]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Sortie échappée dans le shortcode. ?>",
  );
  return `<?php
/**
 * Contenu importé de la maquette validée : ${sourceName}.
 *
 * @package BalneoV2
 */

?>
${transformMarkup(optimizedBody)}`;
}

function phpNowdoc(value, slug) {
  const delimiter = `BALNEO_${slug.replace(/-/g, '_').toUpperCase()}_CONTENT`;
  if (value.includes(delimiter)) throw new Error(`Délimiteur PHP présent dans ${slug}`);
  return `<<<'${delimiter}'\n${value}\n${delimiter}`;
}

function buildContentSeeds(homeHtml) {
  const entries = [];
  const homeBody = optimizeFirstHeroImage(sliceBetween(homeHtml, '</header>', '<a class="cta-orb"', 'index.html'));
  const homeLegacyContent = transformLegacyEditableMarkup(homeBody);
  const homeSchema2Content = transformEditableMarkup(homeBody, htmlToLegacyBalneoGutenberg);
  entries.push(`    'accueil' => array(\n        'title' => 'Accueil',\n        'legacy_hash' => '${crypto.createHash('sha256').update(homeLegacyContent).digest('hex')}',\n        'schema2_hash' => '${crypto.createHash('sha256').update(homeSchema2Content).digest('hex')}',\n        'content' => ${phpNowdoc(transformEditableMarkup(homeBody), 'accueil')},\n    ),`);

  Object.entries(pages).forEach(([slug, title]) => {
    const sourceName = `${slug}.html`;
    const html = fs.readFileSync(path.join(root, 'pages', sourceName), 'utf8');
    const body = optimizeFirstHeroImage(sliceBetween(html, '</header>', '<a class="cta-orb"', sourceName));
    const legacyContent = transformLegacyEditableMarkup(body);
    const schema2Content = transformEditableMarkup(body, htmlToLegacyBalneoGutenberg);
    entries.push(`    '${slug}' => array(\n        'title' => '${title.replace(/'/g, "\\'")}',\n        'legacy_hash' => '${crypto.createHash('sha256').update(legacyContent).digest('hex')}',\n        'schema2_hash' => '${crypto.createHash('sha256').update(schema2Content).digest('hex')}',\n        'content' => ${phpNowdoc(transformEditableMarkup(body), slug)},\n    ),`);
  });

  return `<?php\n/** Contenus initiaux Gutenberg issus de la maquette validée. @package BalneoV2 */\n\nif ( ! defined( 'ABSPATH' ) ) { exit; }\n\nreturn array(\n${entries.join('\n')}\n);`;
}

function buildMainScript() {
  let script = fs.readFileSync(path.join(root, 'js', 'main.js'), 'utf8');
  script = script.replace(/(['"])pages\/([a-z0-9-]+)\.html\1/g, (_match, quote, slug) => `${quote}/${slug}/${quote}`);
  script = script.replace(
    /var pathPrefix = window\.location\.pathname\.indexOf\('\/pages\/'\) !== -1 \? '\.\.\/' : '';/,
    "var pathPrefix = '';",
  );
  const formHandlerStart = script.indexOf('  // Form handling (front-only)');
  const backToTopStart = script.indexOf('  // Back to top', formHandlerStart);
  if (formHandlerStart !== -1 && backToTopStart !== -1) {
    script = `${script.slice(0, formHandlerStart)}${script.slice(backToTopStart)}`;
  }
  script = script.replace(
    "var currentPath = window.location.pathname.split('/').pop() || 'index.html';",
    "var currentPath = window.location.pathname.split('/').filter(Boolean).pop() || '';",
  );
  script = script.replace(
    "var linkPath = href.split('/').pop();",
    "var linkPath = new URL(href, window.location.origin).pathname.split('/').filter(Boolean).pop() || '';",
  );
  script = script.replace(
    "if (linkPath === currentPath || (currentPath === '' && linkPath === 'index.html')) {",
    "if (linkPath === currentPath && currentPath !== '') {",
  );
  return script;
}

function buildFunctions() {
  return `<?php
/**
 * Fonctions du thème Balnéo V2.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BALNEO_V2_VERSION', '1.4.3' );

require_once get_theme_file_path( '/inc/content.php' );
require_once get_theme_file_path( '/inc/blocks.php' );
require_once get_theme_file_path( '/inc/class-balneo-v2-primary-menu-walker.php' );
require_once get_theme_file_path( '/inc/navigation.php' );
require_once get_theme_file_path( '/inc/forms.php' );
require_once get_theme_file_path( '/inc/redirects.php' );
require_once get_theme_file_path( '/inc/seo.php' );
require_once get_theme_file_path( '/inc/ai-discovery.php' );
require_once get_theme_file_path( '/inc/admin-branding.php' );

/**
 * Configure les fonctionnalités natives du thème.
 */
function balneo_v2_setup() {
    load_theme_textdomain( 'balneo-v2', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'wp-block-styles' );
    add_theme_support( 'editor-styles' );
    add_editor_style( 'css/editor.css' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 200,
            'width'       => 260,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );
    register_nav_menus(
        array(
            'primary' => __( 'Navigation principale', 'balneo-v2' ),
            'footer'  => __( 'Navigation de pied de page', 'balneo-v2' ),
        )
    );
}
add_action( 'after_setup_theme', 'balneo_v2_setup' );

/**
 * Charge les feuilles de style et scripts publics.
 */
function balneo_v2_assets() {
    $style_path  = get_theme_file_path( '/css/styles.css' );
    $script_path = get_theme_file_path( '/js/main.js' );

    wp_enqueue_style(
        'balneo-v2-fontawesome',
        get_theme_file_uri( '/assets/vendor/fontawesome/css/all.min.css' ),
        array(),
        '6.7.2'
    );
    wp_enqueue_style(
        'balneo-v2',
        get_theme_file_uri( '/css/styles.css' ),
        array( 'balneo-v2-fontawesome' ),
        file_exists( $style_path ) ? (string) filemtime( $style_path ) : BALNEO_V2_VERSION
    );
    wp_enqueue_script(
        'balneo-v2',
        get_theme_file_uri( '/js/main.js' ),
        array(),
        file_exists( $script_path ) ? (string) filemtime( $script_path ) : BALNEO_V2_VERSION,
        true
    );
    wp_script_add_data( 'balneo-v2', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'balneo_v2_assets' );

/**
 * Précharge les trois polices utilisées dès le premier écran.
 */
function balneo_v2_preload_critical_fonts() {
    $fonts = array(
        'BarlowCondensed-Regular.woff2',
        'Buttercy.woff2',
        'BrandonSmithStamp.woff2',
    );

    foreach ( $fonts as $font ) {
        printf(
            '<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\\n",
            esc_url( get_theme_file_uri( '/assets/fonts/' . $font ) )
        );
    }
}
add_action( 'wp_head', 'balneo_v2_preload_critical_fonts', 1 );

/**
 * Ajoute les classes de contexte nécessaires à la maquette.
 *
 * @param string[] $classes Classes WordPress existantes.
 * @return string[]
 */
function balneo_v2_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-home';
    }
    return $classes;
}
add_filter( 'body_class', 'balneo_v2_body_classes' );`;

  const pageMap = Object.entries(pages)
    .map(([slug, title]) => `    '${slug}' => '${title.replace(/'/g, "\\'")}',`)
    .join('\n');

  return `<?php
/**
 * Fonctions du thème Balnéo V2.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BALNEO_V2_VERSION', '1.2.1' );

require_once get_theme_file_path( '/inc/seo.php' );
require_once get_theme_file_path( '/inc/ai-discovery.php' );
require_once get_theme_file_path( '/inc/admin-branding.php' );

function balneo_v2_setup() {
    load_theme_textdomain( 'balneo-v2', get_template_directory() . '/languages' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 200,
            'width'       => 260,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );
    register_nav_menus(
        array(
            'primary' => __( 'Navigation principale', 'balneo-v2' ),
            'footer'  => __( 'Navigation de pied de page', 'balneo-v2' ),
        )
    );
}
add_action( 'after_setup_theme', 'balneo_v2_setup' );

function balneo_v2_assets() {
    $style_path  = get_theme_file_path( '/css/styles.css' );
    $script_path = get_theme_file_path( '/js/main.js' );

    wp_enqueue_style(
        'balneo-v2-fontawesome',
        get_theme_file_uri( '/assets/vendor/fontawesome/css/all.min.css' ),
        array(),
        '6.7.2'
    );
    wp_enqueue_style(
        'balneo-v2',
        get_theme_file_uri( '/css/styles.css' ),
        array( 'balneo-v2-fontawesome' ),
        file_exists( $style_path ) ? (string) filemtime( $style_path ) : BALNEO_V2_VERSION
    );
    wp_enqueue_script(
        'balneo-v2',
        get_theme_file_uri( '/js/main.js' ),
        array(),
        file_exists( $script_path ) ? (string) filemtime( $script_path ) : BALNEO_V2_VERSION,
        true
    );
    wp_script_add_data( 'balneo-v2', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'balneo_v2_assets' );

function balneo_v2_body_classes( $classes ) {
    if ( is_front_page() ) {
        $classes[] = 'is-home';
    }
    return $classes;
}
add_filter( 'body_class', 'balneo_v2_body_classes' );

function balneo_v2_seed_pages() {
    $pages = array(
${pageMap}
    );

    $home = get_page_by_path( 'accueil', OBJECT, 'page' );
    if ( ! $home ) {
        $home_id = wp_insert_post(
            array(
                'post_title'   => 'Accueil',
                'post_name'    => 'accueil',
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            )
        );
    } else {
        $home_id = $home->ID;
    }

    foreach ( $pages as $slug => $title ) {
        if ( ! get_page_by_path( $slug, OBJECT, 'page' ) ) {
            wp_insert_post(
                array(
                    'post_title'   => $title,
                    'post_name'    => $slug,
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                    'post_content' => '',
                )
            );
        }
    }

    if ( ! is_wp_error( $home_id ) && $home_id ) {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', (int) $home_id );
    }

    if ( ! get_option( 'permalink_structure' ) ) {
        update_option( 'permalink_structure', '/%postname%/' );
    }

    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'balneo_v2_seed_pages' );

function balneo_v2_newsletter_signup() {
    $referer = wp_get_referer() ? wp_get_referer() : home_url( '/' );
    $referer = remove_query_arg( 'inscription', $referer );

    if (
        ! isset( $_POST['balneo_v2_newsletter_nonce'] ) ||
        ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['balneo_v2_newsletter_nonce'] ) ), 'balneo_v2_newsletter' ) ||
        ! empty( $_POST['website'] )
    ) {
        wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
        exit;
    }

    $first_name = isset( $_POST['prenom'] ) ? sanitize_text_field( wp_unslash( $_POST['prenom'] ) ) : '';
    $last_name  = isset( $_POST['nom'] ) ? sanitize_text_field( wp_unslash( $_POST['nom'] ) ) : '';
    $email      = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
    $postcode   = isset( $_POST['cp'] ) ? sanitize_text_field( wp_unslash( $_POST['cp'] ) ) : '';
    $city       = isset( $_POST['ville'] ) ? sanitize_text_field( wp_unslash( $_POST['ville'] ) ) : '';

    if ( ! $first_name || ! $last_name || ! is_email( $email ) ) {
        wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
        exit;
    }

    $message = implode(
        "\\n",
        array(
            'Nouvelle demande d’inscription à la newsletter Balnéo V2',
            '',
            'Prénom : ' . $first_name,
            'Nom : ' . $last_name,
            'E-mail : ' . $email,
            'Code postal : ' . $postcode,
            'Ville : ' . $city,
        )
    );
    $headers = array( 'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>' );
    $sent    = wp_mail( get_option( 'admin_email' ), 'Inscription newsletter Balnéo', $message, $headers );

    wp_safe_redirect( add_query_arg( 'inscription', $sent ? 'merci' : 'erreur', $referer ) . '#contact' );
    exit;
}
add_action( 'admin_post_nopriv_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
add_action( 'admin_post_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );

function balneo_v2_legacy_redirects() {
    if ( is_admin() || wp_doing_ajax() ) {
        return;
    }

    $path = isset( $_SERVER['REQUEST_URI'] ) ? wp_parse_url( wp_unslash( $_SERVER['REQUEST_URI'] ), PHP_URL_PATH ) : '';
    if ( '/index.html' === $path ) {
        wp_safe_redirect( home_url( '/' ), 301 );
        exit;
    }

    if ( preg_match( '#^/pages/([a-z0-9-]+)\\.html$#', (string) $path, $matches ) ) {
        $allowed = array(
${Object.keys(pages).map((slug) => `            '${slug}',`).join('\n')}
        );
        if ( in_array( $matches[1], $allowed, true ) ) {
            wp_safe_redirect( home_url( '/' . $matches[1] . '/' ), 301 );
            exit;
        }
    }
}
add_action( 'template_redirect', 'balneo_v2_legacy_redirects' );`;
}

function buildTheme() {
  ensureDir(themeRoot);
  ensureDir(pagePartsRoot);

  const sourceAssetsRoot = path.join(root, 'assets');
  const sourcePhotosRoot = path.join(sourceAssetsRoot, 'photos');
  fs.cpSync(sourceAssetsRoot, path.join(themeRoot, 'assets'), {
    recursive: true,
    force: true,
    filter: (source) => {
      if (source === sourcePhotosRoot) return true;
      if (path.dirname(source) === sourcePhotosRoot) return path.extname(source).toLowerCase() === '.webp';
      return true;
    },
  });
  fs.cpSync(path.join(root, 'css'), path.join(themeRoot, 'css'), { recursive: true, force: true });
  fs.cpSync(path.join(root, 'wordpress-admin', 'css'), path.join(themeRoot, 'css'), { recursive: true, force: true });
  ensureDir(path.join(themeRoot, 'inc'));
  fs.copyFileSync(
    path.join(root, 'wordpress-admin', 'admin-branding.php'),
    path.join(themeRoot, 'inc', 'admin-branding.php'),
  );
  fs.appendFileSync(
    path.join(themeRoot, 'css', 'styles.css'),
    `\n/* Formulaire newsletter WordPress */\n.form-error { display: none; margin-bottom: 1rem; padding: .9rem 1rem; color: #7b1f1b; background: #fde8e7; }\n.form-error.visible { display: block; }\n.balneo-honeypot { position: absolute !important; left: -9999px !important; width: 1px; height: 1px; overflow: hidden; }\n`,
    'utf8',
  );
  ensureDir(path.join(themeRoot, 'js'));
  fs.writeFileSync(path.join(themeRoot, 'js', 'main.js'), buildMainScript(), 'utf8');

  const homeHtml = fs.readFileSync(path.join(root, 'index.html'), 'utf8');
  write('header.php', buildHeader(homeHtml));
  write('footer.php', buildFooter(homeHtml));
  write('inc/content-seeds.php', buildContentSeeds(homeHtml));
  write('template-parts/pages/home.php', buildPagePart(homeHtml, 'index.html'));

  Object.keys(pages).forEach((slug) => {
    const sourceName = `${slug}.html`;
    const source = fs.readFileSync(path.join(root, 'pages', sourceName), 'utf8');
    write(`template-parts/pages/${slug}.php`, buildPagePart(source, sourceName));
  });

  write('style.css', `/*
Theme Name: Balnéo V2
Theme URI: https://balneov2.gruissan-balneo.com/
Author: Gruissan Méditerranée
Description: Thème sur mesure de l'Espace Balnéo de Gruissan, issu de la maquette Balnéo V2 validée.
Version: 1.4.3
Requires at least: 6.8
Tested up to: 7.1
Requires PHP: 8.1
License: GNU General Public License v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: balneo-v2
*/`);

  write('functions.php', buildFunctions());
  write('front-page.php', `<?php
/**
 * Page d'accueil.
 *
 * @package BalneoV2
 */

get_header();

while ( have_posts() ) {
    the_post();
    if ( '' !== trim( (string) get_the_content() ) ) {
        the_content();
    } else {
        get_template_part( 'template-parts/pages/home' );
    }
}

get_footer();`);

  write('page.php', `<?php
/**
 * Gabarit des pages.
 *
 * @package BalneoV2
 */

get_header();

while ( have_posts() ) {
    the_post();
    $slug = get_post_field( 'post_name', get_the_ID() );

    if ( '' !== trim( (string) get_the_content() ) ) {
        the_content();
    } elseif ( $slug && file_exists( get_theme_file_path( '/template-parts/pages/' . $slug . '.php' ) ) ) {
        get_template_part( 'template-parts/pages/' . $slug );
    } else {
        ?>
        <main class="section">
            <article class="container entry-content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </main>
        <?php
    }
}

get_footer();`);

  write('index.php', `<?php
/**
 * Gabarit de secours WordPress.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section">
    <div class="container entry-content">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h1><?php esc_html_e( 'Aucun contenu', 'balneo-v2' ); ?></h1>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();`);

  write('404.php', `<?php
/**
 * Page 404.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section">
    <div class="container entry-content" style="padding-block:var(--space-2xl);text-align:center">
        <p class="section__label"><?php esc_html_e( 'Erreur 404', 'balneo-v2' ); ?></p>
        <h1><?php esc_html_e( 'Cette page n’existe pas', 'balneo-v2' ); ?></h1>
        <p><a class="btn btn--filled" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Retour à l’accueil', 'balneo-v2' ); ?></a></p>
    </div>
</main>
<?php
get_footer();`);

  write('README.md', `# Balnéo V2

Thème WordPress sur mesure généré depuis la maquette statique validée.

- Nom WordPress : **Balnéo V2**
- Slug : \`balneo-v2\`
- Text domain : \`balneo-v2\`
- Génération : \`node build-wordpress-theme.js\`

Le thème crée les pages nécessaires lors de sa première activation, configure l'accueil statique et active les permaliens lisibles sur une installation neuve.`);

  write('comments.php', `<?php
/**
 * Commentaires désactivés pour les pages institutionnelles Balnéo.
 *
 * @package BalneoV2
 */

if ( post_password_required() ) {
    return;
}

if ( have_comments() ) {
    ?>
    <section class="comments-area container">
        <h2><?php esc_html_e( 'Commentaires', 'balneo-v2' ); ?></h2>
        <ol class="comment-list"><?php wp_list_comments(); ?></ol>
        <?php the_comments_navigation(); ?>
    </section>
    <?php
}

if ( comments_open() ) {
    comment_form();
}`);

  write('search.php', `<?php
/**
 * Résultats de recherche.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section"><div class="container entry-content">
<h1><?php /* translators: %s: search query. */ printf( esc_html__( 'Résultats pour « %s »', 'balneo-v2' ), esc_html( get_search_query() ) ); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article <?php post_class(); ?>><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?></article>
<?php endwhile; the_posts_navigation(); else : ?><p><?php esc_html_e( 'Aucun résultat.', 'balneo-v2' ); ?></p><?php endif; ?>
</div></main>
<?php get_footer();`);

  write('theme.json', JSON.stringify({
    $schema: 'https://schemas.wp.org/trunk/theme.json',
    version: 3,
    settings: {
      appearanceTools: true,
      layout: { contentSize: '1120px', wideSize: '1440px' },
      color: {
        custom: false,
        customGradient: false,
        palette: [
          { slug: 'marine', color: '#024360', name: 'Marine Balnéo' },
          { slug: 'mer', color: '#006392', name: 'Bleu mer' },
          { slug: 'ciel', color: '#AACCDE', name: 'Bleu ciel' },
          { slug: 'vert', color: '#009885', name: 'Vert Balnéo' },
          { slug: 'corail', color: '#E94740', name: 'Corail' },
          { slug: 'soleil', color: '#FFED42', name: 'Jaune soleil' },
          { slug: 'blanc', color: '#FFFFFF', name: 'Blanc' },
        ],
      },
      typography: {
        fluid: true,
        fontFamilies: [
          { slug: 'barlow', name: 'Barlow', fontFamily: '"Barlow", sans-serif', fontFace: [
            { fontFamily: 'Barlow', fontStyle: 'normal', fontWeight: '400', src: ['file:./assets/fonts/Barlow-Regular.woff2'] },
            { fontFamily: 'Barlow', fontStyle: 'normal', fontWeight: '500', src: ['file:./assets/fonts/Barlow-Medium.woff2'] },
            { fontFamily: 'Barlow', fontStyle: 'normal', fontWeight: '600', src: ['file:./assets/fonts/Barlow-SemiBold.woff2'] },
          ] },
          { slug: 'barlow-condensed', name: 'Barlow Condensed', fontFamily: '"Barlow Condensed", sans-serif', fontFace: [
            { fontFamily: 'Barlow Condensed', fontStyle: 'normal', fontWeight: '400', src: ['file:./assets/fonts/BarlowCondensed-Regular.woff2'] },
          ] },
          { slug: 'buttercy', name: 'Buttercy', fontFamily: 'Buttercy, "Barlow Condensed", sans-serif', fontFace: [{ fontFamily: 'Buttercy', fontStyle: 'normal', fontWeight: '400', src: ['file:./assets/fonts/Buttercy.woff2'] }] },
          { slug: 'brandon', name: 'Brandon Smith Stamp', fontFamily: '"Brandon Smith Stamp", "Barlow Condensed", sans-serif', fontFace: [{ fontFamily: 'Brandon Smith Stamp', fontStyle: 'normal', fontWeight: '400', src: ['file:./assets/fonts/BrandonSmithStamp.woff2'] }] },
        ],
        fontSizes: [
          { slug: 'small', size: '0.875rem', name: 'Petit' },
          { slug: 'medium', size: '1.125rem', name: 'Courant' },
          { slug: 'large', size: '1.75rem', name: 'Grand' },
          { slug: 'x-large', size: 'clamp(2.4rem, 6vw, 5rem)', name: 'Titre Balnéo' },
        ],
      },
    },
  }, null, 2));

  write('css/editor.css', `@font-face{font-family:"Barlow";src:url("../assets/fonts/Barlow-Regular.woff2") format("woff2");font-style:normal;font-weight:400;font-display:swap}
@font-face{font-family:"Barlow";src:url("../assets/fonts/Barlow-Medium.woff2") format("woff2");font-style:normal;font-weight:500;font-display:swap}
@font-face{font-family:"Barlow";src:url("../assets/fonts/Barlow-SemiBold.woff2") format("woff2");font-style:normal;font-weight:600;font-display:swap}
@font-face{font-family:"Barlow Condensed";src:url("../assets/fonts/BarlowCondensed-Regular.woff2") format("woff2");font-style:normal;font-weight:400;font-display:swap}
@font-face{font-family:Buttercy;src:url("../assets/fonts/Buttercy.woff2") format("woff2");font-style:normal;font-weight:400;font-display:swap}
.editor-styles-wrapper{color:#024360;background:#fff;font-family:"Barlow",sans-serif;font-size:17px;line-height:1.55}
.editor-styles-wrapper .wp-block{max-width:1120px}
.editor-styles-wrapper .wp-block[data-align="wide"]{max-width:1440px}
.editor-styles-wrapper .block-editor-block-list__layout h1,.editor-styles-wrapper .block-editor-block-list__layout h2,.editor-styles-wrapper .block-editor-block-list__layout h3{color:#024360;font-family:"Barlow Condensed",sans-serif;font-weight:400}
.editor-styles-wrapper .block-editor-block-list__layout h1{font-size:clamp(2.4rem,6vw,5rem)}
.editor-styles-wrapper .editor-post-title__input{font-size:2.25rem!important;line-height:1.1}
.editor-styles-wrapper a{color:#006392}
.editor-styles-wrapper .balneo-editor-container{margin:0;padding:0;border:0;background:transparent}
.editor-styles-wrapper .balneo-editor-container__content{display:contents}
.editor-styles-wrapper .balneo-editor-rich-text{padding:0;border:0}
.editor-styles-wrapper .balneo-editor-image img{display:block;width:100%;height:auto;max-height:440px;object-fit:cover}
.editor-styles-wrapper .balneo-editor-image .components-button{margin:.5rem .5rem .5rem 0}`);

  write('languages/balneo-v2.pot', `msgid ""
msgstr ""
"Project-Id-Version: Balnéo V2 1.4.3\\n"
"Content-Type: text/plain; charset=UTF-8\\n"
"Content-Transfer-Encoding: 8bit\\n"
"Language: fr_FR\\n"

#: functions.php
msgid "Navigation principale"
msgstr ""

#: header.php
msgid "Au cœur de Gruissan, entre mer et lagune"
msgstr ""

#: inc/forms.php
msgid "Merci pour votre inscription !"
msgstr ""

#: 404.php
msgid "Cette page n’existe pas"
msgstr ""`);

  console.log(`Balnéo V2 généré : ${themeRoot}`);
  console.log(`${Object.keys(pages).length + 1} gabarits de contenu créés.`);
}

buildTheme();
