<?php
/** Contenus initiaux Gutenberg issus de la maquette validée. @package BalneoV2 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(
    'accueil' => array(
        'title' => 'Accueil',
        'legacy_hash' => 'ee3f37e7a399447c3f4c505faaaba44b3e4c1604109c2700e5dc0c6dbfa966ee',
        'schema2_hash' => '9f903d36033b7f5177409534ee40e97a021e544e28ba3d3fb6e37693fa94674d',
        'content' => <<<'BALNEO_ACCUEIL_CONTENT'
<!-- wp:group {"className":"info-banner","layout":{"type":"default"}} -->
<div class="wp-block-group info-banner"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:balneo/rich-text {"content":"\u003cstrong\u003eAccès des mineurs à la Balnéo :\u003c/strong\u003e du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.","htmlAttributes":{"class":"info-banner__message"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"×","htmlAttributes":{"class":"info-banner__close","type":"button","aria-label":"Fermer"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group hero"><!-- wp:group {"className":"hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image d’accueil"}} -->
<div class="wp-block-group hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"Bassin intérieur de l’Espace Balnéo de Gruissan","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"Bassin intérieur de l’Espace Balnéo de Gruissan","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero__content fade-in","layout":{"type":"default"},"metadata":{"name":"Introduction de l’accueil"}} -->
<div class="wp-block-group hero__content fade-in"><!-- wp:paragraph {"className":"hero__kicker"} -->
<p class="hero__kicker">Balnéo · Piscine · Soins · Sport</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero__title"} -->
<h1 class="wp-block-heading hero__title">Entrez dans<br>votre <em>parenthèse.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero__tagline"} -->
<p class="hero__tagline">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"btn-group","layout":{"type":"default"},"metadata":{"name":"Boutons"}} -->
<div class="wp-block-group btn-group"><!-- wp:balneo/rich-text {"tagName":"a","content":"Explorer les espaces\u003ci class=\u0022fa-solid fa-compass\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"#experiences","class":"btn btn\u002d\u002don-photo btn\u002d\u002dfilled"}} /-->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Voir les horaires \u003cspan\u003e→\u003c/span\u003e","htmlAttributes":{"href":"/horaires/","class":"text-link text-link\u002d\u002dlight"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-seals","layout":{"type":"default"},"metadata":{"name":"Pastilles d’information","balneoAttributes":{"aria-label":"Informations saison 2026"}}} -->
<div class="wp-block-group hero-seals"><!-- wp:group {"className":"brand-seal brand-seal\u002d\u002dopen","layout":{"type":"default"}} -->
<div class="wp-block-group brand-seal brand-seal--open"><!-- wp:balneo/rich-text {"tagName":"strong","content":"Ouvert"} /-->

<!-- wp:balneo/rich-text {"content":"7j/7"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e\u003c/span\u003eDécouvrir","htmlAttributes":{"class":"hero__scroll","href":"#welcome"}} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","className":"quick-access","layout":{"type":"default"},"metadata":{"name":"Accès rapides","balneoAttributes":{"aria-label":"Accès rapides"}}} -->
<nav class="wp-block-group quick-access"><!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e01\u003c/span\u003e\u003cstrong\u003eHoraires\u003c/strong\u003e\u003csmall\u003ePréparer ma visite\u003c/small\u003e","htmlAttributes":{"href":"/horaires/"}} /-->

<!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e02\u003c/span\u003e\u003cstrong\u003eBilletterie \u0026amp; cadeaux\u003c/strong\u003e\u003csmall\u003eAcheter en ligne\u003c/small\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e03\u003c/span\u003e\u003cstrong\u003eVenir à la Balnéo\u003c/strong\u003e\u003csmall\u003eAccès \u0026amp; parking\u003c/small\u003e","htmlAttributes":{"href":"/acces-parking/"}} /--></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"welcome","className":"welcome section","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="welcome" class="wp-block-group welcome section"><!-- wp:group {"className":"container welcome__grid fade-in","layout":{"type":"default"}} -->
<div class="wp-block-group container welcome__grid fade-in"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Bienvenue à Gruissan</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Un rêve où se mêlent l'eau, le bois, la lumière et le sel.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"welcome__copy","layout":{"type":"default"}} -->
<div class="wp-block-group welcome__copy"><!-- wp:paragraph -->
<p>À quelques pas de la Méditerranée, l'Espace Balnéo invite à ralentir. Des bassins chauffés à 32°C, des soins enveloppants et des activités pensées pour retrouver son rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Seul, à deux ou en famille, venez respirer, bouger et vous laisser porter.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Découvrir la Balnéo \u003cspan\u003e→\u003c/span\u003e","htmlAttributes":{"href":"/balneo/","class":"text-link"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"experiences","className":"experience-section","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="experiences" class="wp-block-group experience-section"><!-- wp:group {"className":"container section-heading fade-in","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group container section-heading fade-in"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Nos expériences</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">À chacun son horizon</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Des univers complémentaires, réunis autour d'une même envie : prendre soin de soi.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"experience-grid","layout":{"type":"default"},"metadata":{"name":"Grille des expériences"}} -->
<div class="wp-block-group experience-grid"><!-- wp:group {"tagName":"a","className":"experience-card experience-card\u002d\u002dlarge fade-in","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/balneo/"}}} -->
<a class="wp-block-group experience-card experience-card--large fade-in"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure et bassins de l’Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure et bassins de l’Espace Balnéo","width":"2560","height":"1440","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"experience-card__veil"}} /-->

<!-- wp:group {"className":"experience-card__content","layout":{"type":"default"}} -->
<div class="wp-block-group experience-card__content"><!-- wp:balneo/rich-text {"tagName":"small","content":"Se délasser"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Les bains &amp; la Balnéo</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"circle-arrow"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"experience-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/massages/"}}} -->
<a class="wp-block-group experience-card fade-in"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"Massage bien-être","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"Massage bien-être","width":"2560","height":"1707","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"experience-card__veil"}} /-->

<!-- wp:group {"className":"experience-card__content","layout":{"type":"default"}} -->
<div class="wp-block-group experience-card__content"><!-- wp:balneo/rich-text {"tagName":"small","content":"Se retrouver"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Soins &amp; massages</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des gestes enveloppants pour une profonde détente.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"circle-arrow"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"experience-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/salle-de-sport/"}}} -->
<a class="wp-block-group experience-card fade-in"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-tgn.webp","alt":"Salle de sport For.Me","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-tgn.webp","alt":"Salle de sport For.Me","width":"1900","height":"1262","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"experience-card__veil"}} /-->

<!-- wp:group {"className":"experience-card__content","layout":{"type":"default"}} -->
<div class="wp-block-group experience-card__content"><!-- wp:balneo/rich-text {"tagName":"small","content":"Se dépasser"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sport &amp; aquasports</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Cardio, renforcement et activités aquatiques à votre rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"circle-arrow"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"experience-card experience-card\u002d\u002dwide fade-in","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/parc-ete/"}}} -->
<a class="wp-block-group experience-card experience-card--wide fade-in"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"Parc aquatique paysager de Gruissan","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"Parc aquatique paysager de Gruissan","width":"1900","height":"1259","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"experience-card__veil"}} /-->

<!-- wp:group {"className":"experience-card__content","layout":{"type":"default"}} -->
<div class="wp-block-group experience-card__content"><!-- wp:balneo/rich-text {"tagName":"small","content":"Partager"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Le parc été en famille</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"circle-arrow"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"seasonal-section","layout":{"type":"default"},"metadata":{"name":"Sélection saisonnière","balneoAttributes":{"aria-labelledby":"seasonal-title","data-seasonal":""}}} -->
<section class="wp-block-group seasonal-section"><!-- wp:group {"className":"container seasonal-heading fade-in","layout":{"type":"default"}} -->
<div class="wp-block-group container seasonal-heading fade-in"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Au fil des saisons</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Une envie pour chaque saison</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"seasonal-slider","layout":{"type":"default"}} -->
<div class="wp-block-group seasonal-slider"><!-- wp:group {"className":"seasonal-slider__track","layout":{"type":"default"}} -->
<div class="wp-block-group seasonal-slider__track"><!-- wp:group {"tagName":"article","className":"seasonal-slide seasonal-slide\u002d\u002dspring","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"spring"}}} -->
<article class="wp-block-group seasonal-slide seasonal-slide--spring"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"Cours d'aquagym dans le bassin extérieur","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"Cours d'aquagym dans le bassin extérieur","width":"1900","height":"1262","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:group {"className":"seasonal-slide__content","layout":{"type":"default"}} -->
<div class="wp-block-group seasonal-slide__content"><!-- wp:group {"className":"seasonal-emblem","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group seasonal-emblem"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-emblem__orbit"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-seedling\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"seasonal-emblem__icon"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Au printemps,<br>je retrouve mon rythme</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Bouger dans l'eau\u003ci class=\u0022fa-solid fa-person-swimming\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/aquagym/","class":"btn btn\u002d\u002don-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"seasonal-slide seasonal-slide\u002d\u002dsummer","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"summer"}}} -->
<article class="wp-block-group seasonal-slide seasonal-slide--summer"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp","alt":"Familles profitant du parc aquatique en été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp","alt":"Familles profitant du parc aquatique en été","width":"1672","height":"940","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:group {"className":"seasonal-slide__content","layout":{"type":"default"}} -->
<div class="wp-block-group seasonal-slide__content"><!-- wp:group {"className":"seasonal-emblem","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group seasonal-emblem"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-emblem__orbit"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-sun\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"seasonal-emblem__icon"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En été,<br>toute la famille se jette à l'eau</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Profiter du parc aquatique\u003ci class=\u0022fa-solid fa-sun\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/parc-ete/","class":"btn btn\u002d\u002don-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"seasonal-slide seasonal-slide\u002d\u002dfall","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"fall"}}} -->
<article class="wp-block-group seasonal-slide seasonal-slide--fall"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp","alt":"Massage relaxant à l'Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp","alt":"Massage relaxant à l'Espace Balnéo","width":"1900","height":"1267","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:group {"className":"seasonal-slide__content","layout":{"type":"default"}} -->
<div class="wp-block-group seasonal-slide__content"><!-- wp:group {"className":"seasonal-emblem","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group seasonal-emblem"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-emblem__orbit"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-leaf\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"seasonal-emblem__icon"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En automne,<br>je relâche les tensions</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Découvrir les massages\u003ci class=\u0022fa-solid fa-spa\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/massages/","class":"btn btn\u002d\u002don-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"seasonal-slide seasonal-slide\u002d\u002dwinter","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"winter"}}} -->
<article class="wp-block-group seasonal-slide seasonal-slide--winter"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"Espace Balnéo illuminé au crépuscule en hiver","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"Espace Balnéo illuminé au crépuscule en hiver","width":"1900","height":"766","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:group {"className":"seasonal-slide__content","layout":{"type":"default"}} -->
<div class="wp-block-group seasonal-slide__content"><!-- wp:group {"className":"seasonal-emblem","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group seasonal-emblem"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"seasonal-emblem__orbit"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-snowflake\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"seasonal-emblem__icon"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En hiver,<br>je plonge dans la chaleur</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Explorer l'espace Balnéo\u003ci class=\u0022fa-solid fa-hot-tub-person\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/balneo/","class":"btn btn\u002d\u002don-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"seasonal-tabs","layout":{"type":"default"},"metadata":{"balneoAttributes":{"role":"tablist","aria-label":"Choisir une saison"}}} -->
<div class="wp-block-group seasonal-tabs"><!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-seedling\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003ePrintemps\u003c/strong\u003e","htmlAttributes":{"class":"seasonal-tab seasonal-tab\u002d\u002dspring","type":"button","role":"tab","data-season-target":"spring","aria-label":"Afficher le printemps"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-sun\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003eÉté\u003c/strong\u003e","htmlAttributes":{"class":"seasonal-tab seasonal-tab\u002d\u002dsummer","type":"button","role":"tab","data-season-target":"summer","aria-label":"Afficher l'été"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-leaf\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003eAutomne\u003c/strong\u003e","htmlAttributes":{"class":"seasonal-tab seasonal-tab\u002d\u002dfall","type":"button","role":"tab","data-season-target":"fall","aria-label":"Afficher l'automne"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-snowflake\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003eHiver\u003c/strong\u003e","htmlAttributes":{"class":"seasonal-tab seasonal-tab\u002d\u002dwinter","type":"button","role":"tab","data-season-target":"winter","aria-label":"Afficher l'hiver"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"experience-balneo","className":"manifesto section","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="experience-balneo" class="wp-block-group manifesto section"><!-- wp:group {"className":"manifesto__photo media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group manifesto__photo media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"Bassins extérieurs et jets massants de l'Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"Bassins extérieurs et jets massants de l'Espace Balnéo","width":"1600","height":"900","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"manifesto__content fade-in","layout":{"type":"default"}} -->
<div class="wp-block-group manifesto__content fade-in"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">L'expérience Balnéo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Le corps s'apaise.<br>L'esprit s'évade.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"manifesto__numbers","layout":{"type":"default"}} -->
<div class="wp-block-group manifesto__numbers"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:balneo/rich-text {"tagName":"strong","content":"32°"} /-->

<!-- wp:balneo/rich-text {"content":"L'eau des bassins"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:balneo/rich-text {"tagName":"strong","content":"5"} /-->

<!-- wp:balneo/rich-text {"content":"Univers à explorer"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:balneo/rich-text {"tagName":"strong","content":"7j/7"} /-->

<!-- wp:balneo/rich-text {"content":"La salle For.Me"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Entrer dans l'univers\u003ci class=\u0022fa-solid fa-hot-tub-person\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/balneo/","class":"btn"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section news-section","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section news-section"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:group {"className":"section-heading fade-in","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section-heading fade-in"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">En ce moment</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Les nouvelles de la Balnéo</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Toutes les actualités \u003cspan\u003e→\u003c/span\u003e","htmlAttributes":{"href":"/actualites/","class":"text-link"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-grid","layout":{"type":"default"},"metadata":{"name":"Grille des actualités"}} -->
<div class="wp-block-group news-grid"><!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","width":"1900","height":"1068","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Ouverture du parc été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-parc-ete/","class":"news-card__link"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation enfants","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation enfants","width":"850","height":"414","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Stages de natation enfants été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-stages-natation/","class":"news-card__link"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"Rivière extérieure de l’Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"Rivière extérieure de l’Espace Balnéo","width":"2560","height":"1708","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Réouverture de la rivière extérieure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-riviere/","class":"news-card__link"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"contact","className":"section contact-section","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="contact" class="wp-block-group section contact-section"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:group {"className":"contact-grid fade-in","layout":{"type":"default"},"metadata":{"name":"Bloc contact"}} -->
<div class="wp-block-group contact-grid fade-in"><!-- wp:group {"className":"contact-info","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info"><!-- wp:group {"className":"section__header balneo-align-left balneo-space-bottom-md","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section__header balneo-align-left balneo-space-bottom-md"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Nous contacter</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-info__item","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info__item"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-info__item","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info__item"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">E-mail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-info__item","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info__item"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section__header balneo-align-left balneo-space-bottom-md","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section__header balneo-align-left balneo-space-bottom-md"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Inscrivez-vous</h2>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Recevez les dernières actualités de l'Espace Balnéo par mail.","htmlAttributes":{"style":"font-size:0.9rem;color:var(\u002d\u002dcharcoal-soft);font-weight:300"}} /--></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
[balneo_newsletter_form]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ACCUEIL_CONTENT,
    ),
    'acces-parking' => array(
        'title' => 'Accès & parking',
        'legacy_hash' => '6aaaba703935950011353ac60f02486bf4a6f4e3570967e4645c07508ce9f730',
        'schema2_hash' => '4303524f65c48908a9a5c89d2a847c39d75ff448995728766f9d8ec18e12d1d3',
        'content' => <<<'BALNEO_ACCES_PARKING_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Accès &amp; parking</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>L'Espace Balnéo se situe avenue des Bains à Gruissan, à proximité immédiate des espaces sportifs et de loisirs.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Espace Balnéo de Gruissan</strong><br>Avenue des Bains<br>11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Venir sur place</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"link-grid","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group link-grid"><!-- wp:group {"className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-car","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">En voiture</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Suivez la direction de l'Espace Balnéo. Le stationnement se fait sur les zones prévues autour du site.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-person-walking","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">À pied ou à vélo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Rejoignez l'équipement par les cheminements locaux depuis les secteurs proches.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="btn btn--filled" href="https://maps.google.fr/?saddr=&amp;daddr=43.1182048,3.11328202" target="_blank" rel="noopener">Ouvrir l'itinéraire<i class="fa-solid fa-route" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pour une question d'accessibilité ou de dépose, contactez l'accueil avant votre venue.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ACCES_PARKING_CONTENT,
    ),
    'actualites' => array(
        'title' => 'Actualités',
        'legacy_hash' => '2d25c5935e74cb819816d6cf22196c79030f163378c6125f6858884668ed119e',
        'schema2_hash' => 'efebf9ee7747b018ef5301c0147e2400b67bea6ce47f0142c4cbcf885026d8e7',
        'content' => <<<'BALNEO_ACTUALITES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","width":"1900","height":"1068","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Actualités</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:group {"className":"news-grid","layout":{"type":"default"},"metadata":{"name":"Grille des actualités"}} -->
<div class="wp-block-group news-grid"><!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","width":"1900","height":"1068","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Ouverture du parc été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-parc-ete/","class":"news-card__link"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation","width":"850","height":"414","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Stages de natation enfants été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-stages-natation/","class":"news-card__link"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure","width":"2560","height":"1440","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Réouverture de la rivière extérieure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-riviere/","class":"news-card__link"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"news-card fade-in","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group news-card fade-in"><!-- wp:group {"className":"news-card__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/maillots.webp","alt":"Tenue de bain","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/maillots.webp","alt":"Tenue de bain","width":"849","height":"1273","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group news-card__body"><!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">2026</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Tenue de bain</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Rappel : shorts et jupes de bain interdits dans l'ensemble de l'établissement.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ACTUALITES_CONTENT,
    ),
    'aquabike' => array(
        'title' => 'Aquabike',
        'legacy_hash' => 'd1ac52b7a593a37c0f07dddc1ab3a0f053b2a1502b229c256929f5a82ed79a5d',
        'schema2_hash' => 'a915cd8c628c8391edbeade7e79da6d5a75d26b5a40c9a62f5d617989d645121',
        'content' => <<<'BALNEO_AQUABIKE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","width":"2560","height":"1705","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Aquabike</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>À mi-chemin entre l'aquagym et le vélo en salle, l'Aquabike associe travail cardio et renforcement musculaire sur un vélo immergé, en petit groupe.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Côté pratique</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Séance de 45 minutes</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shorts et jupes de bain interdits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pas de cours les jours fériés, sauf programme estival</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>11 €</td></tr><tr><td>12 séances — validité 1 an</td><td>121 €</td></tr><tr><td>24 séances — validité 1 an</td><td>231 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/aquagym/">Découvrir aussi l'Aquagym →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Réservez votre séance d'Aquabike par téléphone.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Appeler le 04 68 75 60 50\u003ci class=\u0022fa-solid fa-phone\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"btn","href":"tel:+33468756050"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_AQUABIKE_CONTENT,
    ),
    'aquagym' => array(
        'title' => 'Aquagym',
        'legacy_hash' => 'fa661837cb50b8c34f1aeff5381a3a229f78e5d3ac4c6df3da7ec7f114ebef04',
        'schema2_hash' => 'cffbe880cf12eddcabb8415ba470fec99a9dbd02d10dce839cdb07520b1e71b6',
        'content' => <<<'BALNEO_AQUAGYM_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"","width":"1900","height":"1262","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Aquagym</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Un cours aquatique dynamique de 45 minutes pour travailler le cardio, les abdominaux, les jambes, les cuisses, les fessiers et le buste, avec des exercices adaptables au niveau de chacun.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Côté pratique</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shorts et jupes de bain interdits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pas de cours les jours fériés, sauf programme estival</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pendant les vacances de la zone C : aquagym le mardi à 9h45</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>9 €</td></tr><tr><td>5 séances — validité 1 mois</td><td>41 €</td></tr><tr><td>10 séances — validité 1 an</td><td>81 €</td></tr><tr><td>Trimestre — hors été</td><td>105 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/aquabike/">Découvrir aussi l'Aquabike →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Réservez votre séance d'Aquagym par téléphone.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Appeler le 04 68 75 60 50\u003ci class=\u0022fa-solid fa-phone\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"btn","href":"tel:+33468756050"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_AQUAGYM_CONTENT,
    ),
    'article-parc-ete' => array(
        'title' => 'Ouverture du parc été',
        'legacy_hash' => 'f12ea601d30059fcf5bd7471764a15036e5c817869cefe1367097f27d794a985',
        'schema2_hash' => '5a605161846df3ec8bd5305bd83a0a380d82b3fb75b11e13635ca8f9203aa204',
        'content' => <<<'BALNEO_ARTICLE_PARC_ETE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","width":"1900","height":"1068","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Actualité — 3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Ouverture du parc été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>L'été arrive ! À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Venez profiter de nos bassins, toboggans et espaces de détente tout l'été, en famille ou entre amis ! Toute l'équipe se réjouit de vous accueillir.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/parc-ete/">Découvrir le parc été →</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022/actualites/\u0022 class=\u0022btn\u0022\u003e\u003ci class=\u0022fa-solid fa-arrow-left\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003eToutes les actualités\u003c/a\u003e","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ARTICLE_PARC_ETE_CONTENT,
    ),
    'article-riviere' => array(
        'title' => 'Réouverture de la rivière extérieure',
        'legacy_hash' => 'a140274b10b885825ce9f83538b1bea28376a5b3998d8f54a825ec88c7c47029',
        'schema2_hash' => '4f54bbbee8163484363ee9789c08b33a84e5fd3f91bbc2de4a039a2b0e425cdc',
        'content' => <<<'BALNEO_ARTICLE_RIVIERE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","width":"2560","height":"1440","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Actualité — 1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Réouverture de la rivière extérieure</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Chers clients, nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo. Profitez-en dès maintenant pour vous détendre.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>À très bientôt dans votre Espace Balnéo !</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022/actualites/\u0022 class=\u0022btn\u0022\u003e\u003ci class=\u0022fa-solid fa-arrow-left\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003eToutes les actualités\u003c/a\u003e","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ARTICLE_RIVIERE_CONTENT,
    ),
    'article-stages-natation' => array(
        'title' => 'Stages de natation enfants été',
        'legacy_hash' => 'dd7a023eb34a3a8a086f1e298d2226b58c689f6edb08e297d8f7c3bf5f935aa2',
        'schema2_hash' => '257d6f814ddee435b0511d9e47c4d9c64b7f20af57be560b2fa3556e06d43070',
        'content' => <<<'BALNEO_ARTICLE_STAGES_NATATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","width":"850","height":"414","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Actualité — 1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Stages de natation enfants été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Inscriptions ouvertes ! Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Niveau 1 : 9h à 9h45 ou 11h à 11h45 — Niveau 2 : 10h à 10h45. 8 enfants maximum par groupe.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Avant de réserver, contactez-nous au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/natation/">Voir les cours et stages de natation →</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022/actualites/\u0022 class=\u0022btn\u0022\u003e\u003ci class=\u0022fa-solid fa-arrow-left\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003eToutes les actualités\u003c/a\u003e","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ARTICLE_STAGES_NATATION_CONTENT,
    ),
    'balneo' => array(
        'title' => 'Balnéo',
        'legacy_hash' => '75edd0b0f2526b7d41b0ed58d26ab60ef910d95bd3b8cb7a8346c1ba57112976',
        'schema2_hash' => 'dae9a8c89666231f6096f73e23e53b2a2575b50cd50df7550682b7efe469e28a',
        'content' => <<<'BALNEO_BALNEO_CONTENT'
<!-- wp:group {"className":"info-banner","layout":{"type":"default"}} -->
<div class="wp-block-group info-banner"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:balneo/rich-text {"content":"\u003cstrong\u003ePériode estivale :\u003c/strong\u003e toute entrée Balnéo (10h–19h) donne accès au parc aqualudique (11h–18h) selon la durée choisie.","htmlAttributes":{"class":"info-banner__message"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"×","htmlAttributes":{"class":"info-banner__close","type":"button","aria-label":"Fermer"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Espace bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Accès à la Balnéo sans réservation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Côté pratique</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Shorts et jupes de bain interdits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Les enfants de moins de 18 ans doivent être accompagnés par un adulte en balnéo. Les enfants de moins de 3 ans ont accès uniquement aux trois alvéoles thématiques</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Les saunas et le hammam sont accessibles à partir de 16 ans</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cheveux longs attachés — serviettes non fournies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>En cas d'orage, les bassins extérieurs peuvent être fermés</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Moyens de paiement : espèces, CB, chèques ANCV (format papier)</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Tarif forfait 2h30</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 6 ans et + pour 2h30</td><td>23 €</td></tr><tr><td>Entrée 3 à moins de 6 ans (sans toboggans)</td><td>11 €</td></tr><tr><td>Entrée moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr><tr><td>Dépassement de temps</td><td>9 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Dernière heure (17h45 – 18h45)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>11 €</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Pass sans limite de temps</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>6 ans et +</td><td>29 €</td></tr><tr><td>3 à moins de 6 ans (sans toboggans)</td><td>16 €</td></tr><tr><td>Moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Avec l'entrée Balnéo, accès au bassin de nage de 25m aux horaires d'ouverture de celui-ci.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Carte 10 entrées 2h30 : 180 € — Carte 20 entrées 2h30 : 350 € — Carte de 10 heures (nominative) : 105 €</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pour l'achat d'1 entrée Balnéo : accès à l'espace Forme (même jour) : 6 €</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Abonnements</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Balnéo + Piscine</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr><tr><td>6 mois</td><td>350 €</td><td>580 €</td></tr><tr><td>12 mois (-1 mois de vidange)</td><td>650 €</td><td>1 045 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Balnéo + Piscine + For.Me</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr><tr><td>6 mois</td><td>500 €</td><td>755 €</td></tr><tr><td>12 mois (-1 mois de vidange)</td><td>930 €</td><td>1 395 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Avec un abonnement : remise de 50 % sur les activités et tarifs préférentiels sur les massages bien-être (sur réservation).</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Envie de se détendre</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"two-col balneo-space-top-md","layout":{"type":"default"},"metadata":{"name":"Deux colonnes"}} -->
<div class="wp-block-group two-col balneo-space-top-md"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bains et espace aquatique</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des bains et un espace aquatique pour une expérience sensorielle exclusive dans une eau à 32°C : jets massants, spas, rivière à courant, cascades.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Bassin nordique</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Canons à eau, jets massants mollets/jambes/cuisses, zone d'apesanteur, canapé d'air, massages plantaires, 27 jets massants entre bains chauds et air frais, 2 spas.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"two-col__media media-fill","layout":{"type":"default"}} -->
<div class="wp-block-group two-col__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"Espace aquatique","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"Espace aquatique","width":"2560","height":"1705","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Les saunas</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Véritables institutions en Scandinavie, ils revigorent et détendent. Ils permettent d'éliminer les toxines et de nettoyer la peau.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Le hammam</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Un bain de vapeur aux senteurs balsamiques, aux huiles essentielles d'eucalyptus, pour vous détendre et purifier votre peau.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Le frigidarium</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Plongez-vous dans une eau froide, après le sauna ou le hammam, et bénéficiez d'un bain tonique et énergisant.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">L'escale Gruissanaise</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bain lavande, bain vino, en clin d'œil aux Vignerons de Gruissan.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Achetez votre entrée Balnéo en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_BALNEO_CONTENT,
    ),
    'bebes-nageurs' => array(
        'title' => 'Bébés nageurs',
        'legacy_hash' => '3999f718ff68154f0a11cdce34762842411e36592ed053b30c1df1b2b37f80b3',
        'schema2_hash' => 'b63101dcdacf1188d347490c1178e12d337387cbb33f9ab4f5d1011d31c21cf1',
        'content' => <<<'BALNEO_BEBES_NAGEURS_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp","alt":"","width":"2560","height":"1706","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer en famille</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Bébés nageurs</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Un premier contact avec l'eau à 32°C, en famille et sous le regard de nos maîtres-nageurs. La séance permet au tout-petit d'explorer le milieu aquatique à son rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Côté pratique</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Pour les enfants de 5 à 36 mois</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Le dimanche de 9h15 à 10h00</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Vaccinations à jour et certificat médical de non contre-indication</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 parent accompagnateur minimum, 2 maximum</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>1 séance : <strong>9 € par parent accompagnateur</strong> — gratuit pour l'enfant.<br>Carte 10 séances : <strong>81 €</strong>, valable 1 an.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_BEBES_NAGEURS_CONTENT,
    ),
    'brochures' => array(
        'title' => 'Brochures',
        'legacy_hash' => 'aa9088dd1aec569b5935cd95481b7ec9a5d27401ac3f75a05f39caaaf4f126b9',
        'schema2_hash' => 'a57671f4e4fc68ef12886347f201b2824050d73a990c392b33bc659649127650',
        'content' => <<<'BALNEO_BROCHURES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","width":"1600","height":"900","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Brochures</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Explorez nos univers comme dans une brochure, avec des informations maintenues à jour directement sur le site.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"link-grid","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group link-grid"><!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/balneo/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-water","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Guide Balnéo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bassins, chaleur, détente et conditions d'accès.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Consulter le guide →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/aquagym/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-person-swimming","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Guide des activités</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Aquagym, Aquabike, Bébés nageurs et Natation.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Découvrir les activités →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/parc-ete/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-sun","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Guide Parc été</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Espaces, services, règles et tarifs de la saison estivale.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Préparer sa journée →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Besoin d'un document imprimable ?</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Contactez l'accueil : l'équipe vous transmettra la documentation disponible pour votre demande.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Demander une brochure<i class="fa-solid fa-file-lines" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_BROCHURES_CONTENT,
    ),
    'contact' => array(
        'title' => 'Contact',
        'legacy_hash' => '47b7bf443fb391fbb071d23eefd535250efee8ea8302d43ffac2224ba961a946',
        'schema2_hash' => 'b423d7602e2c3f78ff101202a35b692a8e78a571a9376205a543635b0ad3b85f',
        'content' => <<<'BALNEO_CONTACT_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Nous contacter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Contact</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in balneo-align-center","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in balneo-align-center"><!-- wp:paragraph -->
<p>Vous pouvez nous contacter par téléphone, par e-mail ou nous rendre directement visite.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"balneo-space-y-lg","layout":{"type":"default"}} -->
<div class="wp-block-group balneo-space-y-lg"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022tel:+33468756050\u0022\u003e04 68 75 60 50\u003c/a\u003e","htmlAttributes":{"style":"font-size:1.5rem;font-weight:300"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"E-mail","htmlAttributes":{"class":"contact-info__label","style":"margin-top:var(\u002d\u002dspace-md)"}} /-->

<!-- wp:paragraph -->
<p><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Adresse","htmlAttributes":{"class":"contact-info__label","style":"margin-top:var(\u002d\u002dspace-md)"}} /-->

<!-- wp:paragraph -->
<p>Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie en ligne\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"contact","className":"section contact-section","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="contact" class="wp-block-group section contact-section"><!-- wp:group {"className":"container","layout":{"type":"default"}} -->
<div class="wp-block-group container"><!-- wp:group {"className":"contact-grid fade-in","layout":{"type":"default"},"metadata":{"name":"Bloc contact"}} -->
<div class="wp-block-group contact-grid fade-in"><!-- wp:group {"className":"contact-info","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info"><!-- wp:group {"className":"section__header balneo-align-left balneo-space-bottom-md","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section__header balneo-align-left balneo-space-bottom-md"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Nous contacter</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-info__item","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info__item"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-info__item","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info__item"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">E-mail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"contact-info__item","layout":{"type":"default"}} -->
<div class="wp-block-group contact-info__item"><!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section__header balneo-align-left balneo-space-bottom-md","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section__header balneo-align-left balneo-space-bottom-md"><!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Inscrivez-vous</h2>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Recevez les dernières actualités de l'Espace Balnéo par mail.","htmlAttributes":{"style":"font-size:0.9rem;color:var(\u002d\u002dcharcoal-soft);font-weight:300"}} /--></div>
<!-- /wp:group -->

<!-- wp:shortcode -->
[balneo_newsletter_form]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_CONTACT_CONTENT,
    ),
    'donnees-personnelles' => array(
        'title' => 'Données personnelles',
        'legacy_hash' => '44324376f4b60376e3b9b1d64793d4590dc926c9652e5bf28dc168fcc0fa1951',
        'schema2_hash' => '90cd7f1480a0292f1a6f10a1be37d7df09fb365875b973f7a940df941ceec719',
        'content' => <<<'BALNEO_DONNEES_PERSONNELLES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Données personnelles</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Conformément à la loi Informatique et Libertés modifiée et au Règlement général sur la protection des données (RGPD), vous disposez notamment de droits d’accès, de rectification, d’effacement, de limitation et d’opposition lorsque ceux-ci s’appliquent.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Responsable du traitement</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Le directeur de l'Espace Balnéoludique de Gruissan.<br>Pour exercer vos droits : espace.balneoludique@gruissan-mediterranee.com</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Données collectées</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les données collectées via le formulaire d’inscription à la newsletter (prénom, nom, e-mail et, facultativement, code postal et ville) servent uniquement à l’envoi des actualités de l’Espace Balnéo. Le traitement repose sur votre consentement et les données sont accessibles aux seules personnes habilitées.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Durée et retrait du consentement</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les données sont conservées jusqu’au retrait de votre consentement, sous réserve des obligations légales applicables. Vous pouvez vous désinscrire ou exercer vos droits en écrivant à l’adresse indiquée ci-dessus. Vous pouvez également introduire une réclamation auprès de la CNIL.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Vidéosurveillance</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>L'espace For.Me est placé sous vidéosurveillance. Les enregistrements sont conservés 30 jours maximum, puis automatiquement effacés.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cookies</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Avec votre accord, le site utilise Google Analytics pour mesurer sa fréquentation et Google Ads pour mesurer l’efficacité et personnaliser les campagnes publicitaires. Ces services Google ne sont chargés qu’après votre consentement.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Vous pouvez accepter, refuser ou personnaliser ces traceurs depuis le panneau de consentement. Le btn « Gérer mes cookies », disponible sur toutes les pages, permet de modifier ou retirer votre choix à tout moment.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/reglement/">Règlement intérieur →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_DONNEES_PERSONNELLES_CONTENT,
    ),
    'faq' => array(
        'title' => 'FAQ',
        'legacy_hash' => 'a83cc6368c1e4f848110a33f62b4784c39aa9523e6c0c7d7e1286e2c97cc4ceb',
        'schema2_hash' => 'd54b04afb68eed0afdcba2a87418cbec3d4248a1d41bf1d9d1d388c3b4c9a9db',
        'content' => <<<'BALNEO_FAQ_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","width":"2560","height":"1440","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Questions fréquentes</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:group {"className":"faq-list","layout":{"type":"default"},"metadata":{"name":"Questions fréquentes"}} -->
<div class="wp-block-group faq-list"><!-- wp:details -->
<details class="wp-block-details"><summary>Faut-il réserver pour accéder à l'Espace Balnéo ?</summary><!-- wp:paragraph -->
<p>L'accès libre à la Balnéo ne nécessite pas de réservation. Les massages, hydromassages et activités encadrées sont proposés sur réservation.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Quelle tenue de bain est autorisée ?</summary><!-- wp:paragraph -->
<p>Les shorts et jupes de bain sont interdits. Les cheveux longs doivent être attachés.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Les serviettes sont-elles fournies ?</summary><!-- wp:paragraph -->
<p>Non, pensez à apporter votre serviette.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Les enfants peuvent-ils accéder à la Balnéo ?</summary><!-- wp:paragraph -->
<p>Les moins de 18 ans doivent être accompagnés d'un adulte. Les moins de 3 ans accèdent uniquement aux trois alvéoles thématiques. Les saunas et le hammam sont accessibles à partir de 16 ans.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Quels moyens de paiement sont acceptés ?</summary><!-- wp:paragraph -->
<p>Espèces, carte bancaire et chèques ANCV au format papier.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Où consulter les horaires et les tarifs ?</summary><!-- wp:paragraph -->
<p>Consultez les pages <a href="/horaires/">Horaires</a> et <a href="/tarifs/">Tarifs</a>. Pour une information du jour, appelez l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details -->

<!-- wp:details -->
<details class="wp-block-details"><summary>Comment venir et où stationner ?</summary><!-- wp:paragraph -->
<p>Retrouvez l'adresse, l'itinéraire et les informations de stationnement sur la page <a href="/acces-parking/">Accès &amp; parking</a>.</p>
<!-- /wp:paragraph --></details>
<!-- /wp:details --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Une autre question ?<i class="fa-solid fa-circle-question" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_FAQ_CONTENT,
    ),
    'horaires' => array(
        'title' => 'Horaires',
        'legacy_hash' => '7d6d60f41621c111f5f82f95b9fd53d9afc4a5f6a7ed7895e956ec0d6f9813f1',
        'schema2_hash' => '44d6980e39925ae9e100a296f35b16633a4d5a7ab03b71f16d233d744f2ec1fc',
        'content' => <<<'BALNEO_HORAIRES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Horaires</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:shortcode -->
[balneo_daily_schedule]
<!-- /wp:shortcode --></main>
<!-- /wp:group -->
BALNEO_HORAIRES_CONTENT,
    ),
    'hydromassages' => array(
        'title' => 'Hydromassages',
        'legacy_hash' => '4f5e8d3718b57de64af39c57d56e6bf714d45d91fae7746043199e0f3239ff3b',
        'schema2_hash' => '651491a736e31688583fc24ad0851a6baa520fbb78a8c31d2e685f89075f408d',
        'content' => <<<'BALNEO_HYDROMASSAGES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Soins bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Hydromassages</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Accordez-vous un Rituel Océan Relax ou une séance d'hydromassage, installé confortablement sur une table à jets d'eau chaude.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Bon à savoir</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>À partir de 15 ans — sur rendez-vous au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Arriver 20 min avant pour prendre une douche</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">La carte d'hydromassages</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Séance d'hydromassage (30 min)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Confortablement installé, habillé, profitez de l'action des jets d'eau pour relâcher les tensions musculaires et favoriser une profonde relaxation.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Rituel Océan Relax (60 ou 90 min)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>30 min d'hydromassage suivi d'un massage manuel personnalisé de 30 ou 60 min.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min hydromassage sans balnéo</td><td>27 €</td></tr><tr><td>60 min rituel océan sans balnéo</td><td>65 €</td></tr><tr><td>90 min rituel océan sans balnéo</td><td>95 €</td></tr><tr><td>60 min rituel + 2h30 balnéo</td><td>78 €</td></tr><tr><td>90 min rituel + 2h30 balnéo</td><td>108 €</td></tr><tr><td>60 min rituel + balnéo illimitée</td><td>85 €</td></tr><tr><td>90 min rituel + balnéo illimitée</td><td>115 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/massages/">Voir aussi : Massages</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Réservez par téléphone au 04 68 75 60 50</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_HYDROMASSAGES_CONTENT,
    ),
    'infos-pratiques' => array(
        'title' => 'Infos pratiques',
        'legacy_hash' => '2252d3e560fe42c324efd00fd977558a40a57fd778abb4a5e3e24c25ccfa61e7',
        'schema2_hash' => 'b5d95056fe9b8c67df013681512c1c488c0f65176c95e71e71ec9c0f098b39e0',
        'content' => <<<'BALNEO_INFOS_PRATIQUES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Infos pratiques</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Retrouvez en un coup d'œil toutes les informations nécessaires pour préparer votre venue.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"link-grid","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group link-grid"><!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/horaires/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-clock","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Horaires</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Consultez les horaires des différents espaces.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les horaires →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/tarifs/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-tag","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Entrées, cartes, activités et abonnements.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les tarifs →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/acces-parking/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-route","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Accès &amp; parking</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Adresse, itinéraire et stationnement.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Préparer le trajet →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/brochures/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-file-lines","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Brochures</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les informations essentielles par univers.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Consulter les brochures →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/faq/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-circle-question","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">FAQ</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les réponses aux questions les plus fréquentes.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Consulter la FAQ →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/contact/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-envelope","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Contact</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une question particulière ? Écrivez-nous ou appelez-nous.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Nous contacter →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Avant d'entrer dans l'eau</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Shorts et jupes de bain interdits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cheveux longs attachés</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Serviettes non fournies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Évacuation des bassins 15 minutes avant la fermeture</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_INFOS_PRATIQUES_CONTENT,
    ),
    'massages' => array(
        'title' => 'Massages',
        'legacy_hash' => 'bedbc8e88a6d308fd0c66a3c175ad39af65cca9ef408551cf9178305946c43f0',
        'schema2_hash' => 'a48bbb730872fb3731e61e477f5ca797b535c4a1b4de7b7778bb3efab6f5a817',
        'content' => <<<'BALNEO_MASSAGES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Soins bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Massages</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Accordez-vous une parenthèse hors du temps, où chaque geste est pensé pour vous offrir une profonde relaxation, une harmonie intérieure et un véritable moment de lâcher-prise.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Bon à savoir</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Les massages se font <strong>sur rendez-vous</strong>, par téléphone au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>La durée indiquée comprend l'installation, l'entretien personnel et le massage</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Merci d'arriver 20 min avant votre massage afin de prendre une douche</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">La carte des massages bien-être</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"service-list","layout":{"type":"default"}} -->
<div class="wp-block-group service-list"><!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Détente anti-stress</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30, 60 ou 90 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"service-item__desc"} -->
<p class="service-item__desc">Massage profondément relaxant associant gestes lents, fluides et enveloppants à des manœuvres plus profondes.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Tonique et décontractant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30 ou 60 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"service-item__desc"} -->
<p class="service-item__desc">Dynamisant et revitalisant, idéal pour les sportifs et la récupération musculaire.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Tête — Mains — Pieds</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30 ou 60 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Harmonisation des énergies</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">60 ou 90 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Massage femme enceinte</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30 ou 60 min — 4e au 8e mois</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Massage douceur enfant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">5 à 14 ans — accompagné en cabine</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"service-item","layout":{"type":"default"}} -->
<div class="wp-block-group service-item"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Rituel Océan Relax</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">60 ou 90 min — à partir de 15 ans</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"service-item__desc"} -->
<p class="service-item__desc">30 min d'hydromassage + massage manuel personnalisé de 30 ou 60 min.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Massages bien-être avec 2h30 de balnéo</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min + 2h30 balnéo</td><td>66 €</td></tr><tr><td>60 min + 2h30 balnéo</td><td>83 €</td></tr><tr><td>90 min + 2h30 balnéo</td><td>136 €</td></tr><tr><td>Carte 6 massages 1h + 2h30 balnéo</td><td>450 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Massages bien-être avec balnéo illimitée</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min + balnéo illimitée</td><td>73 €</td></tr><tr><td>60 min + balnéo illimitée</td><td>90 €</td></tr><tr><td>90 min + balnéo illimitée</td><td>143 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Les massages peuvent être réalisés en duo dans notre cabine double (2 prestations à acheter). Le Rituel Océan Relax s'effectue en cabine simple uniquement.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/hydromassages/">Voir aussi : Hydromassages</a> · <a href="/recuperation/">Composer sa récupération</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Réservez par téléphone au 04 68 75 60 50</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_MASSAGES_CONTENT,
    ),
    'mentions-legales' => array(
        'title' => 'Mentions légales',
        'legacy_hash' => '22a155670089dea45c0db70c529e19d427498582b5945234b76ab86aa4b6a38b',
        'schema2_hash' => '93454a7bf7c2963549e0b2145b6755a7dcd413ab713d04c0b6abf22c82b182f4',
        'content' => <<<'BALNEO_MENTIONS_LEGALES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Mentions légales</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:heading -->
<h2 class="wp-block-heading">Éditeur du site</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Espace Balnéoludique de Gruissan<br>Avenue des Bains — 11430 Gruissan<br>Téléphone : 04 68 75 60 50<br>E-mail : espace.balneoludique@gruissan-mediterranee.com</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Hébergement</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les coordonnées complètes de l’hébergeur doivent être renseignées par l’éditeur du site avant la mise en production.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Propriété intellectuelle</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>L'ensemble du contenu de ce site (textes, images, graphismes) est la propriété de l'Espace Balnéoludique de Gruissan ou de ses partenaires. Toute reproduction est interdite sans autorisation préalable.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Photos : J.B. Roubinet — utilisées avec autorisation.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Crédits</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>® D.B.G — Espace Balnéo de Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_MENTIONS_LEGALES_CONTENT,
    ),
    'natation' => array(
        'title' => 'Natation',
        'legacy_hash' => '1b3b0d06494b70d675539e2fe816f05a42e8bae846640b8a06d84b8f7cc2ddec',
        'schema2_hash' => '3731a76e20fe239962158c599226302525180c056f063315ec51d02a598d6abb',
        'content' => <<<'BALNEO_NATATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","width":"850","height":"414","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Natation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>De l'apprentissage au perfectionnement, les cours sont accessibles dès 5 ans avec des groupes adaptés au niveau des enfants, des adolescents et des adultes.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Côté pratique</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shorts et jupes de bain interdits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Bonnet de bain conseillé</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Pas de cours pendant les vacances scolaires et les jours fériés, hors stages annoncés</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cours à l'année</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Niveaux enfants : Cranquettes, Hippocampes, Dorades, Dauphins, Requins et Orques/Ados. Deux niveaux adultes sont proposés : perfectionnement et coaching.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Adultes</th><th>Enfants / ados</th></tr><tr><td>Carte 10 séances — 1 an</td><td>126 €</td><td>—</td></tr><tr><td>Carte 20 séances — 1 an</td><td>238 €</td><td>—</td></tr><tr><td>Abonnement annuel septembre–juin</td><td>295 €</td><td>185 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Stages</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des stages de cinq séances consécutives sont proposés pendant les vacances de Pâques et d'été, pour les enfants à partir de 5 ans révolus. Consultez les actualités ou contactez l'accueil pour les prochaines dates.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_NATATION_CONTENT,
    ),
    'parc-ete' => array(
        'title' => 'Parc été',
        'legacy_hash' => '4a4a6b495e07a89ba0f186ab6c45b734974ef90db1d994c187abaf37c58c9cba',
        'schema2_hash' => 'd616ce99d73056cdd030997a028ac0362da6ff394d14bb8bf61ac2f2d0fac948',
        'content' => <<<'BALNEO_PARC_ETE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"","width":"1900","height":"1259","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Parc aqualudique</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Parc été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p><strong>Ouvert uniquement juillet et août, 7j/7 de 11h00 à 18h00.</strong><br>
    Ouverture le 27 juin 2026 à 11h00 — Fermeture le 30 août 2026 à 18h00.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Côté pratique</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Shorts et jupes de bain interdits</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cheveux longs attachés</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Lunettes de soleil, masques et lunettes interdits sur les toboggans</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>1 pièce de 1 € ou 1 jeton pour les casiers</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Grignoterie ouverte de 11h à 17h</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Billetterie et entrée au bas du parking</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>En cas d'orage, bassins extérieurs susceptibles d'être fermés</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>L'entrée au parc (16 €) ne permet pas l'accès à la balnéo</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Interdiction de fumer au sein du parc</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Pass journée (6 ans et +)</td><td>16 €</td></tr><tr><td>Enfants - de 6 ans (sans toboggans)</td><td>6,50 €</td></tr><tr><td>Enfants - de 3 ans (pataugeoires uniquement)</td><td>Gratuit</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Vous trouverez</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Rivière à courant, toboggans, pentagliss, pataugeoires avec jeux d'eau, bassin sportif intérieur, village de jeux gonflables (village Barberousse). Tous les bassins chauffés à 28°. Aire de pique-nique ombragée, espaces verts et transats. Restauration à la Grignoterie (11h–17h) ou pique-nique autorisé.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Achetez vos billets parc été en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_PARC_ETE_CONTENT,
    ),
    'privatisation' => array(
        'title' => 'Privatisation',
        'legacy_hash' => 'fde86142939302de1639700dee182a043ae34b289b2368faccdbfe8be22d2fbc',
        'schema2_hash' => 'e76fa8aa84b65628e21cf4fd3aef830a193140344325f021bdcab40de25f1fd9',
        'content' => <<<'BALNEO_PRIVATISATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","width":"1600","height":"900","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Privatisation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Vous préparez un moment pour un groupe, une association, un club ou une entreprise ? L'équipe étudie avec vous les possibilités d'accueil selon votre projet, la période et les espaces disponibles.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"link-grid","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group link-grid"><!-- wp:group {"className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-users","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Groupes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une demande adaptée au nombre de participants et au rythme souhaité.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-briefcase","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Entreprises</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Un cadre différent pour un temps d'équipe ou une parenthèse bien-être.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-medal","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Clubs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des pistes autour de l'activité, de la récupération et de la détente.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Construisons votre demande</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Indiquez la date envisagée, le nombre de participants, les espaces souhaités et vos contraintes horaires. L'équipe vous répondra sur la faisabilité et les conditions.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a class="btn btn--filled" href="/contact/">Demander une privatisation<i class="fa-solid fa-users" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_PRIVATISATION_CONTENT,
    ),
    'recuperation' => array(
        'title' => 'Récupération',
        'legacy_hash' => '49e66550d8faca5967413540d0ef98f118c563853c942a93f0f00a8f0d0a1fa5',
        'schema2_hash' => '6d542dac5f49d71ab82b61531ae3e1bfe7f236e8ae1e8899ff95eaa909c31c95',
        'content' => <<<'BALNEO_RECUPERATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"","width":"2560","height":"1708","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Se dépasser</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Récupération</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Après l'effort, accordez au corps un vrai temps de retour au calme. L'Espace Balnéo réunit plusieurs approches complémentaires pour relâcher les tensions et retrouver de bonnes sensations.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"link-grid","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group link-grid"><!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/balneo/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-water","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Eau &amp; chaleur</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Découvrir l'Espace Balnéo →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/hydromassages/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-droplet","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Hydromassages</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les hydromassages →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/massages/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-hands","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Massage décontractant</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les massages →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Composer sa récupération</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Choisissez une intensité adaptée à votre état de forme</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Hydratez-vous avant et après les espaces de chaleur</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Les soins et hydromassages sont proposés sur rendez-vous</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_RECUPERATION_CONTENT,
    ),
    'reglement' => array(
        'title' => 'Règlement intérieur',
        'legacy_hash' => 'b93cfab7130ed854a50114c0a6946ef2eeb54e38c1a4eed1e1e23130f5c9f173',
        'schema2_hash' => 'd7a00365039cbb386ae26eba33eba4fe37545576f0348c28efd277d716999552',
        'content' => <<<'BALNEO_REGLEMENT_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","width":"1900","height":"1068","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Règlement intérieur</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>L'établissement est ouvert au public suivant l'horaire affiché dans le hall d'accueil. L'Office de Tourisme de Gruissan se réserve le droit de modifier les heures d'ouverture et conditions d'utilisation des bassins et des locaux lorsqu'il le juge nécessaire.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Conditions d'accès</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Se conformer scrupuleusement aux consignes du personnel</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Shorts et jupes de bain interdits dans l'ensemble de l'établissement</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cheveux longs attachés — serviettes non fournies</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Massages et soins bien-être</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Nos prestations sont axées uniquement sur le bien-être et ne comportent aucun caractère médical et/ou thérapeutique. Un passage en douche est demandé à tous avant d'accéder à l'Espace Massage.</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Prestations sur rendez-vous uniquement</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Enfants de moins de 12 ans : massages de 30 minutes uniquement</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Enfants de moins de 15 ans : accompagnement d'un adulte en cabine obligatoire</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Femmes enceintes : massages entre le 4e et le 8e mois, 30 ou 60 minutes</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Espace For.Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>L'espace For.Me est placé sous vidéosurveillance 24h/24 et 7j/7. Les données sont archivées durant 30 jours puis automatiquement effacées (loi informatique et libertés).</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Modification des horaires et tarifs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>La Direction se réserve le droit de modifier tout ou partie des horaires d'ouverture ou des tarifs, par affichage interne, avec un préavis.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/donnees-personnelles/">Données personnelles →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_REGLEMENT_CONTENT,
    ),
    'salle-de-sport' => array(
        'title' => 'Salle For.Me',
        'legacy_hash' => '8c37a7c7cae45219fb5d9a7e49c98698bab3c41e6944e08f837ccf59ccbc0183',
        'schema2_hash' => 'c145192bb8a0c352b484748f3a050b4452de83bf422e7a3081da42a5ed484e16',
        'content' => <<<'BALNEO_SALLE_DE_SPORT_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","width":"2560","height":"1705","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">For.Me</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">S'entraîner / Se dépasser</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Cet espace est doté de machines dernière génération Wellness® développées par Technogym®. Que vous ayez un objectif précis ou que vous souhaitiez pratiquer une activité physique régulière, vous trouverez votre programme et votre rythme grâce au système Wellness®.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"info-box","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group info-box"><!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Infos pratiques</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>Ouvert 6h00 – 23h00 (dernier accès 22h00), 7j/7</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Réservé aux majeurs (+18 ans) ou mineurs à partir de 16 ans accompagnés d'un adulte</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Billetterie à l'accueil de la Balnéo, tous les jours à partir de 9h00 (sauf mardi hors vacances scolaires)</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Paiement : espèces, CB, chèques ANCV</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance (jour même)</td><td>11 €</td></tr><tr><td>Carte 10 séances (2 mois)</td><td>100 €</td></tr><tr><td>Abonnement 3 mois</td><td>105 €</td></tr><tr><td>Abonnement 6 mois</td><td>199 €</td></tr><tr><td>Abonnement annuel</td><td>387 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Abonnements composés</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Piscine + Salle (1 personne)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>6 mois : 254 € — 12 mois (-1 mois vidange) : 485 €</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Balnéo + Piscine + Salle</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Remise 50 % sur activités aquatiques et tarifs préférentiels sur massages.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th></th><th>6 mois</th><th>12 mois</th></tr><tr><td>1 personne</td><td>500 €</td><td>930 €</td></tr><tr><td>Couple</td><td>755 €</td><td>1 395 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"cta-band","layout":{"type":"default"}} -->
<div class="wp-block-group cta-band"><!-- wp:paragraph -->
<p>Achetez vos abonnements en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_SALLE_DE_SPORT_CONTENT,
    ),
    'tarifs' => array(
        'title' => 'Tarifs',
        'legacy_hash' => '6f1cc58cac4d019cc27a40049e625b41f97be1f31e1d1ace3b09a6b1ac7f43fd',
        'schema2_hash' => 'e28a942628ee6197084a7f747584bfa6bfd19dbc3e66203187183c9f42640870',
        'content' => <<<'BALNEO_TARIFS_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"page-hero","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group page-hero"><!-- wp:group {"className":"page-hero__media media-fill","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group page-hero__media media-fill"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__veil","layout":{"type":"default"}} -->
<div class="wp-block-group page-hero__veil"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"page-hero__content","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group page-hero__content"><!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Tarifs</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section section\u002d\u002dlight","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section section--light"><!-- wp:group {"className":"container content-block fade-in","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group container content-block fade-in"><!-- wp:paragraph -->
<p>Cette page rassemble les principaux tarifs. Les cartes détaillées et les conditions propres à chaque activité restent disponibles dans les pages correspondantes.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Espace Balnéo</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 2h30 — 6 ans et plus</td><td>23 €</td></tr><tr><td>Entrée 2h30 — 3 à moins de 6 ans</td><td>11 €</td></tr><tr><td>Pass sans limite de temps — 6 ans et plus</td><td>29 €</td></tr><tr><td>Dernière heure</td><td>11 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/balneo/">Voir tous les tarifs Balnéo et abonnements →</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Activités</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"table-wrap","layout":{"type":"default"}} -->
<div class="wp-block-group table-wrap"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Activité</th><th>À partir de</th></tr><tr><td>Aquagym</td><td>9 € la séance</td></tr><tr><td>Aquabike</td><td>11 € la séance</td></tr><tr><td>Bébés nageurs</td><td>9 € par parent accompagnateur</td></tr><tr><td>Natation adultes</td><td>126 € les 10 séances</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Autres univers</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"link-grid","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group link-grid"><!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/salle-de-sport/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-dumbbell","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Espace For.Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Séances et abonnements.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les tarifs →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/massages/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-spa","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Massages</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Prestations avec ou sans Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir la carte →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"link-card","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/parc-ete/"}}} -->
<a class="wp-block-group link-card"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-water-ladder","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Parc été</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Pass journée et tarifs enfants.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les tarifs →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="btn btn--filled" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_TARIFS_CONTENT,
    ),
);
