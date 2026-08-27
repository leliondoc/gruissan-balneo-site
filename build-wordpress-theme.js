const fs = require('fs');
const path = require('path');
const crypto = require('crypto');
const { htmlToEditableGutenberg, htmlToLegacyBalneoGutenberg } = require('./scripts/gutenberg-blocks');

const root = __dirname;
const themeRoot = path.join(root, 'wordpress-theme', 'balneo-v2');
const pagePartsRoot = path.join(themeRoot, 'template-parts', 'pages');

// Dimensions des images WebP livrées avec le thème afin d’éviter les sauts de mise en page.
const imageDimensions = {
  'aquagym.webp': [1900, 1262],
  'balneo-188.webp': [2560, 1707],
  'balneo-37.webp': [2560, 1705],
  'balneo-60.webp': [2560, 1703],
  'balneo-73.webp': [2560, 1707],
  'balneo-tgn.webp': [1900, 1262],
  'bassins-exterieurs.webp': [1600, 900],
  'bebe-nageur.webp': [2560, 1706],
  'dsc-0451.webp': [1900, 1068],
  'dsc-0930.webp': [1900, 1267],
  'gruissan-050.webp': [1900, 766],
  'logo-balneo-officiel.png': [300, 210],
  'maillots.webp': [849, 1273],
  'parc-aquatique.webp': [1900, 1259],
  'parc-ete-upright.webp': [1672, 940],
  'parc-ete.webp': [1900, 1068],
  'riviere.webp': [2560, 1440],
  'sport.webp': [2560, 1708],
  'stage-enfant.webp': [850, 414],
};

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

/**
 * Ajoute les dimensions et la stratégie de chargement aux images du thème.
 */
function optimizeImages(markup) {
  return markup.replace(/<img\b([^>]*)>/gi, (image, attributes) => {
    const source = attributes.match(/(?:^|\s)src="([^"]+)"/i);
    if (!source) return image;

    const isLogo = /logo-balneo-officiel\.png$/i.test(source[1]);
    const fileName = isLogo
      ? 'logo-balneo-officiel.png'
      : path.basename(source[1]).replace(/\.(?:jpe?g|png)$/i, '.webp');
    const dimensions = imageDimensions[fileName];
    let cleanAttributes = attributes.replace(
      /\s(?:decoding|fetchpriority|height|loading|width)="[^"]*"/gi,
      '',
    );

    if (dimensions) cleanAttributes += ` width="${dimensions[0]}" height="${dimensions[1]}"`;
    cleanAttributes += ' decoding="async"';
    cleanAttributes += isLogo ? ' loading="eager"' : ' loading="lazy"';
    return `<img${cleanAttributes}>`;
  });
}

/**
 * Ajoute un srcset calculé par WordPress aux images des gabarits de secours.
 */
function addResponsiveSourcesToPhpMarkup(markup) {
  return markup.replace(
    /<img\b([^>]*?)src="(<\?php echo esc_url\( get_theme_file_uri\( '\/assets\/photos\/([^']+\.webp)' \) \); \?>)"([^>]*)>/g,
    (_image, before, source, filename, after) => {
      const attributes = `${before}${after}`;
      if (/\ssrcset=/.test(attributes)) return _image;
      const sizes = attributes.includes('fetchpriority="high"')
        ? '100vw'
        : '(max-width: 760px) 100vw, 50vw';
      return `<img${before}src="${source}"${after} srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( '${filename}' ) ); ?>" sizes="${sizes}">`;
    },
  );
}

function transformMarkup(markup) {
  let output = optimizeFirstHeroImage(optimizeImages(markup));

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

  return addResponsiveSourcesToPhpMarkup(output);
}

function optimizeFirstHeroImage(markup) {
  return markup.replace(
    /(<div class="(?:hero__media|page-hero__media)[^"]*"[^>]*>[\s\S]*?<img\s+)([^>]*)(>)/,
    (_match, start, attributes, end) => {
      const cleanAttributes = attributes
        .replace(/\sdecoding="[^"]*"/g, '')
        .replace(/\sloading="[^"]*"/g, '')
        .replace(/\sfetchpriority="[^"]*"/g, '');
      return `${start}${cleanAttributes} loading="eager" fetchpriority="high" decoding="async"${end}`;
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
  <!-- Configuration du document et compatibilité mobile -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Référencement, données structurées, polices et styles WordPress -->
  <?php wp_head(); ?>
  <!-- Fin des ressources de l’en-tête -->
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Accessibilité : lien d’évitement vers le contenu principal -->
<a class="skip-link" href="#contenu-principal"><?php esc_html_e( 'Aller au contenu principal', 'balneo-v2' ); ?></a>
<!-- En-tête : identité, informations pratiques et navigation principale -->
${header}`;
}

function buildFooter(homeHtml) {
  const footerStart = homeHtml.indexOf('<a class="cta-orb"');
  const footerEnd = homeHtml.indexOf('</footer>', footerStart);
  if (footerStart === -1 || footerEnd === -1) throw new Error('Pied de page introuvable');
  let footer = transformMarkup(homeHtml.slice(footerStart, footerEnd + '</footer>'.length));
  footer = footer
    .replace('<a class="cta-orb"', '<!-- Appel à l’action persistant : billetterie en ligne -->\n<a class="cta-orb"')
    .replace('<footer class="site-footer">', '<!-- Pied de page : navigation secondaire et informations légales -->\n<footer class="site-footer">');
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
<!-- Scripts différés et fonctionnalités interactives -->
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
  const homeBody = optimizeFirstHeroImage(optimizeImages(sliceBetween(homeHtml, '</header>', '<a class="cta-orb"', 'index.html')));
  const homeLegacyContent = transformLegacyEditableMarkup(homeBody);
  const homeSchema2Content = transformEditableMarkup(homeBody, htmlToLegacyBalneoGutenberg);
  entries.push(`    'accueil' => array(\n        'title' => 'Accueil',\n        'legacy_hash' => '${crypto.createHash('sha256').update(homeLegacyContent).digest('hex')}',\n        'schema2_hash' => '${crypto.createHash('sha256').update(homeSchema2Content).digest('hex')}',\n        'content' => ${phpNowdoc(transformEditableMarkup(homeBody), 'accueil')},\n    ),`);

  Object.entries(pages).forEach(([slug, title]) => {
    const sourceName = `${slug}.html`;
    const html = fs.readFileSync(path.join(root, 'pages', sourceName), 'utf8');
    const body = optimizeFirstHeroImage(optimizeImages(sliceBetween(html, '</header>', '<a class="cta-orb"', sourceName)));
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
  const formHandlerStart = script.indexOf('  // Simulation du formulaire dans la maquette statique uniquement.');
  const backToTopStart = script.indexOf('  // Retour en haut de page.', formHandlerStart);
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

define( 'BALNEO_V2_VERSION', '1.5.0' );

require_once get_theme_file_path( '/inc/content.php' );
require_once get_theme_file_path( '/inc/blocks.php' );
require_once get_theme_file_path( '/inc/class-balneo-v2-primary-menu-walker.php' );
require_once get_theme_file_path( '/inc/navigation.php' );
require_once get_theme_file_path( '/inc/forms.php' );
require_once get_theme_file_path( '/inc/redirects.php' );
require_once get_theme_file_path( '/inc/seo.php' );
require_once get_theme_file_path( '/inc/ai-discovery.php' );
require_once get_theme_file_path( '/inc/security.php' );
require_once get_theme_file_path( '/inc/performance.php' );
require_once get_theme_file_path( '/inc/analytics.php' );
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
        array(
            'strategy'  => 'defer',
            'in_footer' => true,
        )
    );
}
add_action( 'wp_enqueue_scripts', 'balneo_v2_assets' );

/**
 * Précharge uniquement les deux polices réellement visibles au premier écran.
 */
function balneo_v2_preload_critical_fonts() {
    $fonts = array(
        'BarlowCondensed-Regular.woff2',
        'Buttercy.woff2',
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
  ensureDir(path.join(themeRoot, 'js'));
  fs.writeFileSync(path.join(themeRoot, 'js', 'main.js'), buildMainScript(), 'utf8');
  fs.copyFileSync(path.join(root, 'js', 'analytics.js'), path.join(themeRoot, 'js', 'analytics.js'));

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
Version: 1.5.0
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

?>
<!-- Page Accueil : contenu éditorial administré dans Gutenberg -->
<?php
while ( have_posts() ) {
    the_post();
    if ( '' !== trim( (string) get_the_content() ) ) {
        the_content();
    } else {
        get_template_part( 'template-parts/pages/home' );
    }
}

?>
<!-- Fin de la page Accueil -->
<?php
get_footer();`);

  write('page.php', `<?php
/**
 * Gabarit des pages.
 *
 * @package BalneoV2
 */

get_header();

?>
<!-- Page intérieure : contenu éditorial administré dans Gutenberg -->
<?php
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

?>
<!-- Fin du contenu éditorial de la page -->
<?php
get_footer();`);

  write('index.php', `<?php
/**
 * Gabarit de secours WordPress.
 *
 * @package BalneoV2
 */

get_header();
?>
<!-- Liste de contenus WordPress -->
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
<!-- Fin de la liste de contenus WordPress -->
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
<h1><?php /* translators: %s : requête de recherche. */ printf( esc_html__( 'Résultats pour « %s »', 'balneo-v2' ), esc_html( get_search_query() ) ); ?></h1>
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
/* Les images de héros sont gérées dans les sources avec Codex, jamais dans Gutenberg. */
.editor-styles-wrapper .hero__media,.editor-styles-wrapper .page-hero__media{display:none!important}
.editor-styles-wrapper .balneo-editor-image img{display:block;width:100%;height:auto;max-height:440px;object-fit:cover}
.editor-styles-wrapper .balneo-editor-image .components-button{margin:.5rem .5rem .5rem 0}`);

  write('languages/balneo-v2.pot', `msgid ""
msgstr ""
"Project-Id-Version: Balnéo V2 1.5.0\\n"
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
