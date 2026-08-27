<?php
/** Contenus initiaux Gutenberg issus de la maquette validée. @package BalneoV2 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(
    'accueil' => array(
        'title' => 'Accueil',
        'legacy_hash' => 'df7b633eeddfaf5b8c2d77962746f1e3732a176fd228cd476a23b51575db65e1',
        'schema2_hash' => '5024f096f3953e6b0f3588256d8fc597ff5d86f75724910d440ac3f929a494a6',
        'content' => <<<'BALNEO_ACCUEIL_CONTENT'
<!-- wp:group {"className":"bandeau-info","layout":{"type":"default"}} -->
<div class="wp-block-group bandeau-info"><!-- wp:group {"className":"conteneur","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur"><!-- wp:balneo/rich-text {"content":"\u003cstrong\u003eAccès des mineurs à la Balnéo :\u003c/strong\u003e du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.","htmlAttributes":{"class":"bandeau-info__message"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"×","htmlAttributes":{"class":"bandeau-info__fermer","type":"button","aria-label":"Fermer"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-accueil","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group hero-accueil"><!-- wp:group {"className":"hero-accueil__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image d’accueil"}} -->
<div class="wp-block-group hero-accueil__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"Bassin intérieur de l’Espace Balnéo de Gruissan","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"Bassin intérieur de l’Espace Balnéo de Gruissan","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-accueil__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-accueil__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-accueil__contenu apparition","layout":{"type":"default"},"metadata":{"name":"Introduction de l’accueil"}} -->
<div class="wp-block-group hero-accueil__contenu apparition"><!-- wp:paragraph {"className":"hero-accueil__surtitre"} -->
<p class="hero-accueil__surtitre">Balnéo · Piscine · Soins · Sport</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-accueil__titre"} -->
<h1 class="wp-block-heading hero-accueil__titre">Entrez dans<br>votre <em>parenthèse.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero-accueil__accroche"} -->
<p class="hero-accueil__accroche">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"groupe-boutons","layout":{"type":"default"},"metadata":{"name":"Boutons"}} -->
<div class="wp-block-group groupe-boutons"><!-- wp:balneo/rich-text {"tagName":"a","content":"Explorer les espaces\u003ci class=\u0022fa-solid fa-compass\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"#experiences","class":"bouton bouton\u002d\u002dsur-photo bouton\u002d\u002dplein"}} /-->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Voir les horaires \u003cspan\u003e→\u003c/span\u003e","htmlAttributes":{"href":"/horaires/","class":"lien-texte lien-texte\u002d\u002dclair"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-accueil__sceaux","layout":{"type":"default"},"metadata":{"name":"Pastilles d’information","balneoAttributes":{"aria-label":"Informations saison 2026"}}} -->
<div class="wp-block-group hero-accueil__sceaux"><!-- wp:group {"className":"sceau-marque sceau-marque\u002d\u002douvert","layout":{"type":"default"}} -->
<div class="wp-block-group sceau-marque sceau-marque--ouvert"><!-- wp:balneo/rich-text {"tagName":"strong","content":"Ouvert"} /-->

<!-- wp:balneo/rich-text {"content":"7j/7"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e\u003c/span\u003eDécouvrir","htmlAttributes":{"class":"hero-accueil__defilement","href":"#bienvenue"}} /--></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"nav","className":"acces-rapides","layout":{"type":"default"},"metadata":{"name":"Accès rapides","balneoAttributes":{"aria-label":"Accès rapides"}}} -->
<nav class="wp-block-group acces-rapides"><!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e01\u003c/span\u003e\u003cstrong\u003eHoraires\u003c/strong\u003e\u003csmall\u003ePréparer ma visite\u003c/small\u003e","htmlAttributes":{"href":"/horaires/"}} /-->

<!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e02\u003c/span\u003e\u003cstrong\u003eBilletterie \u0026amp; cadeaux\u003c/strong\u003e\u003csmall\u003eAcheter en ligne\u003c/small\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"a","content":"\u003cspan\u003e03\u003c/span\u003e\u003cstrong\u003eVenir à la Balnéo\u003c/strong\u003e\u003csmall\u003eAccès \u0026amp; parking\u003c/small\u003e","htmlAttributes":{"href":"/acces-parking/"}} /--></nav>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"bienvenue","className":"bienvenue section-contenu","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="bienvenue" class="wp-block-group bienvenue section-contenu"><!-- wp:group {"className":"conteneur bienvenue__grille apparition","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur bienvenue__grille apparition"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Bienvenue à Gruissan</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titre-affichage"} -->
<h2 class="wp-block-heading titre-affichage">Un rêve où se mêlent l'eau, le bois, la lumière et le sel.</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"bienvenue__texte","layout":{"type":"default"}} -->
<div class="wp-block-group bienvenue__texte"><!-- wp:paragraph -->
<p>À quelques pas de la Méditerranée, l'Espace Balnéo invite à ralentir. Des bassins chauffés à 32°C, des soins enveloppants et des activités pensées pour retrouver son rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Seul, à deux ou en famille, venez respirer, bouger et vous laisser porter.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Découvrir la Balnéo \u003cspan\u003e→\u003c/span\u003e","htmlAttributes":{"href":"/balneo/","class":"lien-texte"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"experiences","className":"section-experiences","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="experiences" class="wp-block-group section-experiences"><!-- wp:group {"className":"conteneur entete-section apparition","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group conteneur entete-section apparition"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Nos expériences</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titre-affichage"} -->
<h2 class="wp-block-heading titre-affichage">À chacun son horizon</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Des univers complémentaires, réunis autour d'une même envie : prendre soin de soi.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"grille-experiences","layout":{"type":"default"},"metadata":{"name":"Grille des expériences"}} -->
<div class="wp-block-group grille-experiences"><!-- wp:group {"tagName":"a","className":"carte-experience carte-experience\u002d\u002dgrande apparition","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/balneo/"}}} -->
<a class="wp-block-group carte-experience carte-experience--grande apparition"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure et bassins de l’Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure et bassins de l’Espace Balnéo","width":"2560","height":"1440","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"carte-experience__voile"}} /-->

<!-- wp:group {"className":"carte-experience__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group carte-experience__contenu"><!-- wp:balneo/rich-text {"tagName":"small","content":"Se délasser"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Les bains &amp; la Balnéo</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"fleche-ronde"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-experience apparition","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/massages/"}}} -->
<a class="wp-block-group carte-experience apparition"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"Massage bien-être","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"Massage bien-être","width":"2560","height":"1707","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"carte-experience__voile"}} /-->

<!-- wp:group {"className":"carte-experience__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group carte-experience__contenu"><!-- wp:balneo/rich-text {"tagName":"small","content":"Se retrouver"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Soins &amp; massages</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des gestes enveloppants pour une profonde détente.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"fleche-ronde"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-experience apparition","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/salle-de-sport/"}}} -->
<a class="wp-block-group carte-experience apparition"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-tgn.webp","alt":"Salle de sport For.Me","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-tgn.webp","alt":"Salle de sport For.Me","width":"1900","height":"1262","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"carte-experience__voile"}} /-->

<!-- wp:group {"className":"carte-experience__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group carte-experience__contenu"><!-- wp:balneo/rich-text {"tagName":"small","content":"Se dépasser"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Sport &amp; aquasports</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Cardio, renforcement et activités aquatiques à votre rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"fleche-ronde"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-experience carte-experience\u002d\u002dlarge apparition","layout":{"type":"default"},"metadata":{"name":"Carte expérience","balneoAttributes":{"href":"/parc-ete/"}}} -->
<a class="wp-block-group carte-experience carte-experience--large apparition"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"Parc aquatique paysager de Gruissan","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"Parc aquatique paysager de Gruissan","width":"1900","height":"1259","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"carte-experience__voile"}} /-->

<!-- wp:group {"className":"carte-experience__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group carte-experience__contenu"><!-- wp:balneo/rich-text {"tagName":"small","content":"Partager"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Le parc été en famille</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"→","htmlAttributes":{"class":"fleche-ronde"}} /--></div>
<!-- /wp:group --></a>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-saisons","layout":{"type":"default"},"metadata":{"name":"Sélection saisonnière","balneoAttributes":{"aria-labelledby":"seasonal-title","data-seasonal":""}}} -->
<section class="wp-block-group section-saisons"><!-- wp:group {"className":"conteneur titre-saisons apparition","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur titre-saisons apparition"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Au fil des saisons</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titre-affichage"} -->
<h2 class="wp-block-heading titre-affichage">Une envie pour chaque saison</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carrousel-saisons","layout":{"type":"default"}} -->
<div class="wp-block-group carrousel-saisons"><!-- wp:group {"className":"carrousel-saisons__piste","layout":{"type":"default"}} -->
<div class="wp-block-group carrousel-saisons__piste"><!-- wp:group {"tagName":"article","className":"diapositive-saison diapositive-saison\u002d\u002dprintemps","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"spring"}}} -->
<article class="wp-block-group diapositive-saison diapositive-saison--printemps"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"Cours d'aquagym dans le bassin extérieur","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"Cours d'aquagym dans le bassin extérieur","width":"1900","height":"1262","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"diapositive-saison__voile"}} /-->

<!-- wp:group {"className":"diapositive-saison__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group diapositive-saison__contenu"><!-- wp:group {"className":"embleme-saison","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group embleme-saison"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"embleme-saison__orbite"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-seedling\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"embleme-saison__icone"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Au printemps,<br>je retrouve mon rythme</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Bouger dans l'eau\u003ci class=\u0022fa-solid fa-person-swimming\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/aquagym/","class":"bouton bouton\u002d\u002dsur-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"diapositive-saison diapositive-saison\u002d\u002dete","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"summer"}}} -->
<article class="wp-block-group diapositive-saison diapositive-saison--ete"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp","alt":"Familles profitant du parc aquatique en été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp","alt":"Familles profitant du parc aquatique en été","width":"1672","height":"940","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"diapositive-saison__voile"}} /-->

<!-- wp:group {"className":"diapositive-saison__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group diapositive-saison__contenu"><!-- wp:group {"className":"embleme-saison","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group embleme-saison"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"embleme-saison__orbite"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-sun\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"embleme-saison__icone"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En été,<br>toute la famille se jette à l'eau</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Profiter du parc aquatique\u003ci class=\u0022fa-solid fa-sun\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/parc-ete/","class":"bouton bouton\u002d\u002dsur-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"diapositive-saison diapositive-saison\u002d\u002dautomne","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"fall"}}} -->
<article class="wp-block-group diapositive-saison diapositive-saison--automne"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp","alt":"Massage relaxant à l'Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp","alt":"Massage relaxant à l'Espace Balnéo","width":"1900","height":"1267","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"diapositive-saison__voile"}} /-->

<!-- wp:group {"className":"diapositive-saison__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group diapositive-saison__contenu"><!-- wp:group {"className":"embleme-saison","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group embleme-saison"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"embleme-saison__orbite"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-leaf\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"embleme-saison__icone"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En automne,<br>je relâche les tensions</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Découvrir les massages\u003ci class=\u0022fa-solid fa-spa\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/massages/","class":"bouton bouton\u002d\u002dsur-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"diapositive-saison diapositive-saison\u002d\u002dhiver","layout":{"type":"default"},"metadata":{"name":"Carte saisonnière","balneoAttributes":{"data-season":"winter"}}} -->
<article class="wp-block-group diapositive-saison diapositive-saison--hiver"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"Espace Balnéo illuminé au crépuscule en hiver","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"Espace Balnéo illuminé au crépuscule en hiver","width":"1900","height":"766","decoding":"async","loading":"lazy"}} /-->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"diapositive-saison__voile"}} /-->

<!-- wp:group {"className":"diapositive-saison__contenu","layout":{"type":"default"}} -->
<div class="wp-block-group diapositive-saison__contenu"><!-- wp:group {"className":"embleme-saison","layout":{"type":"default"},"metadata":{"balneoAttributes":{"aria-hidden":"true"}}} -->
<div class="wp-block-group embleme-saison"><!-- wp:balneo/rich-text {"htmlAttributes":{"class":"embleme-saison__orbite"}} /-->

<!-- wp:balneo/rich-text {"content":"\u003ci class=\u0022fa-solid fa-snowflake\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"embleme-saison__icone"}} /--></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En hiver,<br>je plonge dans la chaleur</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Explorer l'espace Balnéo\u003ci class=\u0022fa-solid fa-hot-tub-person\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/balneo/","class":"bouton bouton\u002d\u002dsur-photo"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"onglets-saisons","layout":{"type":"default"},"metadata":{"balneoAttributes":{"role":"tablist","aria-label":"Choisir une saison"}}} -->
<div class="wp-block-group onglets-saisons"><!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-seedling\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003ePrintemps\u003c/strong\u003e","htmlAttributes":{"class":"onglet-saison onglet-saison\u002d\u002dprintemps","type":"button","role":"tab","data-season-target":"spring","aria-label":"Afficher le printemps"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-sun\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003eÉté\u003c/strong\u003e","htmlAttributes":{"class":"onglet-saison onglet-saison\u002d\u002dete","type":"button","role":"tab","data-season-target":"summer","aria-label":"Afficher l'été"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-leaf\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003eAutomne\u003c/strong\u003e","htmlAttributes":{"class":"onglet-saison onglet-saison\u002d\u002dautomne","type":"button","role":"tab","data-season-target":"fall","aria-label":"Afficher l'automne"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"\u003cspan aria-hidden=\u0022true\u0022\u003e\u003ci class=\u0022fa-solid fa-snowflake\u0022\u003e\u003c/i\u003e\u003c/span\u003e\u003cstrong\u003eHiver\u003c/strong\u003e","htmlAttributes":{"class":"onglet-saison onglet-saison\u002d\u002dhiver","type":"button","role":"tab","data-season-target":"winter","aria-label":"Afficher l'hiver"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"experience-balneo","className":"manifeste section-contenu","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="experience-balneo" class="wp-block-group manifeste section-contenu"><!-- wp:group {"className":"manifeste__photo media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group manifeste__photo media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"Bassins extérieurs et jets massants de l'Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"Bassins extérieurs et jets massants de l'Espace Balnéo","width":"1600","height":"900","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"manifeste__contenu apparition","layout":{"type":"default"}} -->
<div class="wp-block-group manifeste__contenu apparition"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">L'expérience Balnéo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titre-affichage"} -->
<h2 class="wp-block-heading titre-affichage">Le corps s'apaise.<br>L'esprit s'évade.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"manifeste__chiffres","layout":{"type":"default"}} -->
<div class="wp-block-group manifeste__chiffres"><!-- wp:group {"layout":{"type":"default"}} -->
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

<!-- wp:balneo/rich-text {"tagName":"a","content":"Entrer dans l'univers\u003ci class=\u0022fa-solid fa-hot-tub-person\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"/balneo/","class":"bouton"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-actualites","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-actualites"><!-- wp:group {"className":"conteneur","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur"><!-- wp:group {"className":"entete-section apparition","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group entete-section apparition"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">En ce moment</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"titre-affichage"} -->
<h2 class="wp-block-heading titre-affichage">Les nouvelles de la Balnéo</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Toutes les actualités \u003cspan\u003e→\u003c/span\u003e","htmlAttributes":{"href":"/actualites/","class":"lien-texte"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"grille-actualites","layout":{"type":"default"},"metadata":{"name":"Grille des actualités"}} -->
<div class="wp-block-group grille-actualites"><!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","width":"1900","height":"1068","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Ouverture du parc été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-parc-ete/","class":"carte-actualite__lien"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation enfants","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation enfants","width":"850","height":"414","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Stages de natation enfants été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-stages-natation/","class":"carte-actualite__lien"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"Rivière extérieure de l’Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"Rivière extérieure de l’Espace Balnéo","width":"2560","height":"1708","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Réouverture de la rivière extérieure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-riviere/","class":"carte-actualite__lien"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"contact","className":"section-contenu section-contact","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="contact" class="wp-block-group section-contenu section-contact"><!-- wp:group {"className":"conteneur","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur"><!-- wp:group {"className":"grille-contact apparition","layout":{"type":"default"},"metadata":{"name":"Bloc contact"}} -->
<div class="wp-block-group grille-contact apparition"><!-- wp:group {"className":"infos-contact","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact"><!-- wp:group {"className":"section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section-contenu__titre"} -->
<h2 class="wp-block-heading section-contenu__titre">Nous contacter</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"infos-contact__element","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact__element"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"infos-contact__valeur"} -->
<p class="infos-contact__valeur"><a href="tel:+33468756050">04 68 75 60 50</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"infos-contact__element","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact__element"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">E-mail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"infos-contact__valeur"} -->
<p class="infos-contact__valeur"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"infos-contact__element","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact__element"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"infos-contact__valeur"} -->
<p class="infos-contact__valeur">Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section-contenu__titre"} -->
<h2 class="wp-block-heading section-contenu__titre">Inscrivez-vous</h2>
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
        'legacy_hash' => 'b820bc067ca3d8d06279f55aa47aa4ec95cf3b0ae13820ee4bb6375f6a8861cc',
        'schema2_hash' => '32c3278a3ea16901a9b208a721f37d91fe729e3756570e379ab51eb9cf400370',
        'content' => <<<'BALNEO_ACCES_PARKING_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Accès &amp; parking</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>L'Espace Balnéo se situe avenue des Bains à Gruissan, à proximité immédiate des espaces sportifs et de loisirs.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Espace Balnéo de Gruissan</strong><br>Avenue des Bains<br>11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Venir sur place</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"grille-liens","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group grille-liens"><!-- wp:group {"className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-car","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">En voiture</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Suivez la direction de l'Espace Balnéo. Le stationnement se fait sur les zones prévues autour du site.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-person-walking","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">À pied ou à vélo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Rejoignez l'équipement par les cheminements locaux depuis les secteurs proches.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="bouton bouton--plein" href="https://maps.google.fr/?saddr=&amp;daddr=43.1182048,3.11328202" target="_blank" rel="noopener">Ouvrir l'itinéraire<i class="fa-solid fa-route" aria-hidden="true"></i></a></p>
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
        'legacy_hash' => 'e3764f3da0d640442929003785fd8e8065076d81b5381ec0af7d1513b18c8d78',
        'schema2_hash' => '44239db7be0cb9d324aabba4f5b847f44f411c4d28cd86ad42e8f41c2adde174',
        'content' => <<<'BALNEO_ACTUALITES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","width":"1900","height":"1068","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Informations</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Actualités</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur"><!-- wp:group {"className":"grille-actualites","layout":{"type":"default"},"metadata":{"name":"Grille des actualités"}} -->
<div class="wp-block-group grille-actualites"><!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","width":"1900","height":"1068","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Ouverture du parc été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-parc-ete/","class":"carte-actualite__lien"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation","width":"850","height":"414","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Stages de natation enfants été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-stages-natation/","class":"carte-actualite__lien"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure","width":"2560","height":"1440","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Réouverture de la rivière extérieure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-riviere/","class":"carte-actualite__lien"}} /--></div>
<!-- /wp:group --></article>
<!-- /wp:group -->

<!-- wp:group {"tagName":"article","className":"carte-actualite apparition","layout":{"type":"default"},"metadata":{"name":"Carte actualité"}} -->
<article class="wp-block-group carte-actualite apparition"><!-- wp:group {"className":"carte-actualite__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/maillots.webp","alt":"Tenue de bain","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/maillots.webp","alt":"Tenue de bain","width":"849","height":"1273","decoding":"async","loading":"lazy"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-actualite__corps","layout":{"type":"default"}} -->
<div class="wp-block-group carte-actualite__corps"><!-- wp:paragraph {"className":"carte-actualite__date"} -->
<p class="carte-actualite__date">2026</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"carte-actualite__titre"} -->
<h3 class="wp-block-heading carte-actualite__titre">Tenue de bain</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"carte-actualite__extrait"} -->
<p class="carte-actualite__extrait">Rappel : shorts et jupes de bain interdits dans l'ensemble de l'établissement.</p>
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
        'legacy_hash' => '33e8eeb393e0086cb4b3d82b45b00eb830190b2f990d5f124f358cb65c644737',
        'schema2_hash' => '299ec4cd7480d0cfaae0df3a47ac4313e9b6ca14c746730ba51259fb27a364b3',
        'content' => <<<'BALNEO_AQUABIKE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","width":"2560","height":"1705","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Aquabike</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>À mi-chemin entre l'aquagym et le vélo en salle, l'Aquabike associe travail cardio et renforcement musculaire sur un vélo immergé, en petit groupe.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Côté pratique</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>11 €</td></tr><tr><td>12 séances — validité 1 an</td><td>121 €</td></tr><tr><td>24 séances — validité 1 an</td><td>231 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/aquagym/">Découvrir aussi l'Aquagym →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Réservez votre séance d'Aquabike par téléphone.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Appeler le 04 68 75 60 50\u003ci class=\u0022fa-solid fa-phone\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"bouton","href":"tel:+33468756050"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_AQUABIKE_CONTENT,
    ),
    'aquagym' => array(
        'title' => 'Aquagym',
        'legacy_hash' => 'e0a361d7334fc0b38c166d3ae7cba5dfca92eea6be78cfa3c52b96c2ffaf133e',
        'schema2_hash' => '6ba24af77f2c73209973385fd49e4c0e2ed6639f357c68bd432e1a174fb77295',
        'content' => <<<'BALNEO_AQUAGYM_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"","width":"1900","height":"1262","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Aquagym</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Un cours aquatique dynamique de 45 minutes pour travailler le cardio, les abdominaux, les jambes, les cuisses, les fessiers et le buste, avec des exercices adaptables au niveau de chacun.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Côté pratique</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>9 €</td></tr><tr><td>5 séances — validité 1 mois</td><td>41 €</td></tr><tr><td>10 séances — validité 1 an</td><td>81 €</td></tr><tr><td>Trimestre — hors été</td><td>105 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/aquabike/">Découvrir aussi l'Aquabike →</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Réservez votre séance d'Aquagym par téléphone.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Appeler le 04 68 75 60 50\u003ci class=\u0022fa-solid fa-phone\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"class":"bouton","href":"tel:+33468756050"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_AQUAGYM_CONTENT,
    ),
    'article-parc-ete' => array(
        'title' => 'Ouverture du parc été',
        'legacy_hash' => 'b103bd2b1a97f3ae6e1afe86bd729b7a2743a02cd6ba8bfc6f1a33021617b477',
        'schema2_hash' => '8fea95476fc27b72a5a6f959bb92771deebfa22779d02cb0f5a7d0c3f55ca9ff',
        'content' => <<<'BALNEO_ARTICLE_PARC_ETE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","width":"1900","height":"1068","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Actualité — 3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Ouverture du parc été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>L'été arrive ! À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Venez profiter de nos bassins, toboggans et espaces de détente tout l'été, en famille ou entre amis ! Toute l'équipe se réjouit de vous accueillir.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/parc-ete/">Découvrir le parc été →</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022/actualites/\u0022 class=\u0022bouton\u0022\u003e\u003ci class=\u0022fa-solid fa-arrow-left\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003eToutes les actualités\u003c/a\u003e","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ARTICLE_PARC_ETE_CONTENT,
    ),
    'article-riviere' => array(
        'title' => 'Réouverture de la rivière extérieure',
        'legacy_hash' => 'a9aa6879df7385d7d00b951156fb5cd1c93f96e4fda8ed9ec6c1b1bc4c9a03dd',
        'schema2_hash' => '9cbdb39c92aa185483f089bc9cca788364de5586c316a701440a39e2f73597fb',
        'content' => <<<'BALNEO_ARTICLE_RIVIERE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","width":"2560","height":"1440","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Actualité — 1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Réouverture de la rivière extérieure</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Chers clients, nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo. Profitez-en dès maintenant pour vous détendre.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>À très bientôt dans votre Espace Balnéo !</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022/actualites/\u0022 class=\u0022bouton\u0022\u003e\u003ci class=\u0022fa-solid fa-arrow-left\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003eToutes les actualités\u003c/a\u003e","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ARTICLE_RIVIERE_CONTENT,
    ),
    'article-stages-natation' => array(
        'title' => 'Stages de natation enfants été',
        'legacy_hash' => 'ca439c454c1abc8d8bdae9e58095f86f5be6f95e14c9fd0693bcd46de1af408f',
        'schema2_hash' => 'df4e021f0039ba5392a34aea63f832f5a357034cfb910e533742efffc5d2e861',
        'content' => <<<'BALNEO_ARTICLE_STAGES_NATATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","width":"850","height":"414","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Actualité — 1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Stages de natation enfants été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
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

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022/actualites/\u0022 class=\u0022bouton\u0022\u003e\u003ci class=\u0022fa-solid fa-arrow-left\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003eToutes les actualités\u003c/a\u003e","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_ARTICLE_STAGES_NATATION_CONTENT,
    ),
    'balneo' => array(
        'title' => 'Balnéo',
        'legacy_hash' => '27abce3a72175f0e6cf3e99ee129a7d32675eac8f4c34cb1c65d94284992b72e',
        'schema2_hash' => '5e8f8602439a4e32ee8055124b03e11fc3a2b566a77b60fc7015e428a4800478',
        'content' => <<<'BALNEO_BALNEO_CONTENT'
<!-- wp:group {"className":"bandeau-info","layout":{"type":"default"}} -->
<div class="wp-block-group bandeau-info"><!-- wp:group {"className":"conteneur","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur"><!-- wp:balneo/rich-text {"content":"\u003cstrong\u003ePériode estivale :\u003c/strong\u003e toute entrée Balnéo (10h–19h) donne accès au parc aqualudique (11h–18h) selon la durée choisie.","htmlAttributes":{"class":"bandeau-info__message"}} /-->

<!-- wp:balneo/rich-text {"tagName":"button","content":"×","htmlAttributes":{"class":"bandeau-info__fermer","type":"button","aria-label":"Fermer"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Espace bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Accès à la Balnéo sans réservation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Côté pratique</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr><tr><td>6 mois</td><td>350 €</td><td>580 €</td></tr><tr><td>12 mois (-1 mois de vidange)</td><td>650 €</td><td>1 045 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Balnéo + Piscine + For.Me</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr><tr><td>6 mois</td><td>500 €</td><td>755 €</td></tr><tr><td>12 mois (-1 mois de vidange)</td><td>930 €</td><td>1 395 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p>Avec un abonnement : remise de 50 % sur les activités et tarifs préférentiels sur les massages bien-être (sur réservation).</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Envie de se détendre</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"deux-colonnes balneo-espace-haut-moyen","layout":{"type":"default"},"metadata":{"name":"Deux colonnes"}} -->
<div class="wp-block-group deux-colonnes balneo-espace-haut-moyen"><!-- wp:group {"layout":{"type":"default"}} -->
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

<!-- wp:group {"className":"deux-colonnes__media media-plein","layout":{"type":"default"}} -->
<div class="wp-block-group deux-colonnes__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"Espace aquatique","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"Espace aquatique","width":"2560","height":"1705","decoding":"async","loading":"lazy"}} /--></div>
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

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Achetez votre entrée Balnéo en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"bouton bouton\u002d\u002dplein","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_BALNEO_CONTENT,
    ),
    'bebes-nageurs' => array(
        'title' => 'Bébés nageurs',
        'legacy_hash' => 'a161076714a4d53a3e8edc6d194ad989addddaecf3a8803dac49667cdd0c9937',
        'schema2_hash' => 'a499fcb0d4faca0360150d4545e6c4cd5c0a197ce1df9bd08d37d01c52d8c528',
        'content' => <<<'BALNEO_BEBES_NAGEURS_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp","alt":"","width":"2560","height":"1706","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Pratiquer en famille</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Bébés nageurs</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Un premier contact avec l'eau à 32°C, en famille et sous le regard de nos maîtres-nageurs. La séance permet au tout-petit d'explorer le milieu aquatique à son rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Côté pratique</p>
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
        'legacy_hash' => 'f6b1f13fec1b64cc8f09e93101efabecf425b9c17dc9f717ff727a4ea7d3ed08',
        'schema2_hash' => '85802ebb1e089a3d794d686b8f8b8aabc5ba48226207e338f1e73e277a8487dc',
        'content' => <<<'BALNEO_BROCHURES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","width":"1600","height":"900","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Brochures</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Explorez nos univers comme dans une brochure, avec des informations maintenues à jour directement sur le site.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"grille-liens","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group grille-liens"><!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/balneo/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-water","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Guide Balnéo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bassins, chaleur, détente et conditions d'accès.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Consulter le guide →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/aquagym/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-person-swimming","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Guide des activités</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Aquagym, Aquabike, Bébés nageurs et Natation.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Découvrir les activités →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/parc-ete/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-sun","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Guide Parc été</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Espaces, services, règles et tarifs de la saison estivale.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Préparer sa journée →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Besoin d'un document imprimable ?</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Contactez l'accueil : l'équipe vous transmettra la documentation disponible pour votre demande.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="bouton" href="/contact/">Demander une brochure<i class="fa-solid fa-file-lines" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_BROCHURES_CONTENT,
    ),
    'contact' => array(
        'title' => 'Contact',
        'legacy_hash' => '2323ced22d54d1281b7cee111c6346ac5f47c76ee091e1736f871af7e69f7683',
        'schema2_hash' => '30c5f6231828668888f230d23cff40a1f74398cd1992560be86e7c163530abe6',
        'content' => <<<'BALNEO_CONTACT_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Nous contacter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Contact</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition balneo-aligner-centre","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition balneo-aligner-centre"><!-- wp:paragraph -->
<p>Vous pouvez nous contacter par téléphone, par e-mail ou nous rendre directement visite.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"balneo-espace-vertical-grand","layout":{"type":"default"}} -->
<div class="wp-block-group balneo-espace-vertical-grand"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"\u003ca href=\u0022tel:+33468756050\u0022\u003e04 68 75 60 50\u003c/a\u003e","htmlAttributes":{"style":"font-size:1.5rem;font-weight:300"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"E-mail","htmlAttributes":{"class":"infos-contact__libelle","style":"margin-top:var(\u002d\u002dspace-md)"}} /-->

<!-- wp:paragraph -->
<p><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Adresse","htmlAttributes":{"class":"infos-contact__libelle","style":"margin-top:var(\u002d\u002dspace-md)"}} /-->

<!-- wp:paragraph -->
<p>Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie en ligne\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"bouton bouton\u002d\u002dplein","target":"_blank","rel":"noopener"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","anchor":"contact","className":"section-contenu section-contact","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section id="contact" class="wp-block-group section-contenu section-contact"><!-- wp:group {"className":"conteneur","layout":{"type":"default"}} -->
<div class="wp-block-group conteneur"><!-- wp:group {"className":"grille-contact apparition","layout":{"type":"default"},"metadata":{"name":"Bloc contact"}} -->
<div class="wp-block-group grille-contact apparition"><!-- wp:group {"className":"infos-contact","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact"><!-- wp:group {"className":"section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section-contenu__titre"} -->
<h2 class="wp-block-heading section-contenu__titre">Nous contacter</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"infos-contact__element","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact__element"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"infos-contact__valeur"} -->
<p class="infos-contact__valeur"><a href="tel:+33468756050">04 68 75 60 50</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"infos-contact__element","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact__element"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">E-mail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"infos-contact__valeur"} -->
<p class="infos-contact__valeur"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"infos-contact__element","layout":{"type":"default"}} -->
<div class="wp-block-group infos-contact__element"><!-- wp:paragraph {"className":"infos-contact__libelle"} -->
<p class="infos-contact__libelle">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"infos-contact__valeur"} -->
<p class="infos-contact__valeur">Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen","layout":{"type":"default"},"metadata":{"name":"En-tête de section"}} -->
<div class="wp-block-group section-contenu__entete balneo-aligner-gauche balneo-espace-bas-moyen"><!-- wp:paragraph {"className":"section-contenu__libelle"} -->
<p class="section-contenu__libelle">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section-contenu__titre"} -->
<h2 class="wp-block-heading section-contenu__titre">Inscrivez-vous</h2>
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
        'legacy_hash' => 'd33356109f0722b3131e9395ea530a0df9b9bb6604cd7e711d73c6095f7d9cc2',
        'schema2_hash' => '9ad18e8621abcc092651fdaa66281d357da1280e4fa4309a0cec71c027cbe297',
        'content' => <<<'BALNEO_DONNEES_PERSONNELLES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Données personnelles</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
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
<p>Vous pouvez accepter, refuser ou personnaliser ces traceurs depuis le panneau de consentement. Le bouton « Gérer mes cookies », disponible sur toutes les pages, permet de modifier ou retirer votre choix à tout moment.</p>
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
        'legacy_hash' => 'e86b3c37bfdf33d0b731aafba797043ebd24ed3addf55269b9eaf40200335e4f',
        'schema2_hash' => 'eb93ca19024994fe0d1f271e2615ef9d6f47df1e70a497cf5f969d8375351795',
        'content' => <<<'BALNEO_FAQ_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","width":"2560","height":"1440","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Questions fréquentes</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:group {"className":"liste-faq","layout":{"type":"default"},"metadata":{"name":"Questions fréquentes"}} -->
<div class="wp-block-group liste-faq"><!-- wp:details -->
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
<p><a class="bouton" href="/contact/">Une autre question ?<i class="fa-solid fa-circle-question" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_FAQ_CONTENT,
    ),
    'horaires' => array(
        'title' => 'Horaires',
        'legacy_hash' => '175c072ff2274480b06a568ffd58145b2166dba794c4a3b5bc5238b4a6b53f7b',
        'schema2_hash' => '519261aea5fd7f3468492214fe03d91740b988a249c6fdf0a435bee5a5b23115',
        'content' => <<<'BALNEO_HORAIRES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Horaires</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Les horaires évoluent selon les espaces et les périodes de l'année. Retrouvez ici les repères essentiels avant votre venue.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"grille-tarifs","layout":{"type":"default"}} -->
<div class="wp-block-group grille-tarifs"><!-- wp:group {"className":"carte-tarif","layout":{"type":"default"}} -->
<div class="wp-block-group carte-tarif"><!-- wp:paragraph {"className":"carte-tarif__nom"} -->
<p class="carte-tarif__nom">Espace For.Me</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"carte-tarif__prix"} -->
<p class="carte-tarif__prix"><i class="fa-solid fa-clock icone-contexte" aria-hidden="true"></i>6h–23h</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"carte-tarif__description"} -->
<p class="carte-tarif__description">7j/7 — dernier accès à 22h.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-tarif","layout":{"type":"default"}} -->
<div class="wp-block-group carte-tarif"><!-- wp:paragraph {"className":"carte-tarif__nom"} -->
<p class="carte-tarif__nom">Espace Balnéo — été</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"carte-tarif__prix"} -->
<p class="carte-tarif__prix"><i class="fa-solid fa-clock icone-contexte" aria-hidden="true"></i>10h–19h</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"carte-tarif__description"} -->
<p class="carte-tarif__description">Évacuation des bassins 15 minutes avant la fermeture.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-tarif","layout":{"type":"default"}} -->
<div class="wp-block-group carte-tarif"><!-- wp:paragraph {"className":"carte-tarif__nom"} -->
<p class="carte-tarif__nom">Parc été</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"carte-tarif__prix"} -->
<p class="carte-tarif__prix"><i class="fa-solid fa-clock icone-contexte" aria-hidden="true"></i>11h–18h</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"carte-tarif__description"} -->
<p class="carte-tarif__description">Ouverture saisonnière en juillet et août.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Horaires du jour</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pour les horaires hors saison, les jours fériés, les activités encadrées ou une fermeture technique, vérifiez auprès de l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a class="bouton" href="/contact/">Contacter l'accueil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_HORAIRES_CONTENT,
    ),
    'hydromassages' => array(
        'title' => 'Hydromassages',
        'legacy_hash' => '26fed923ade1827203535f242a46ec4f25d58720f5d1fecdb30aa0ef5fe4340a',
        'schema2_hash' => 'b2d57cb917a92f2c2d2d5d3d35c0af02dbd29824f2b5065138b8de4734e7f135',
        'content' => <<<'BALNEO_HYDROMASSAGES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Soins bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Hydromassages</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Accordez-vous un Rituel Océan Relax ou une séance d'hydromassage, installé confortablement sur une table à jets d'eau chaude.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Bon à savoir</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min hydromassage sans balnéo</td><td>27 €</td></tr><tr><td>60 min rituel océan sans balnéo</td><td>65 €</td></tr><tr><td>90 min rituel océan sans balnéo</td><td>95 €</td></tr><tr><td>60 min rituel + 2h30 balnéo</td><td>78 €</td></tr><tr><td>90 min rituel + 2h30 balnéo</td><td>108 €</td></tr><tr><td>60 min rituel + balnéo illimitée</td><td>85 €</td></tr><tr><td>90 min rituel + balnéo illimitée</td><td>115 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/massages/">Voir aussi : Massages</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Réservez par téléphone au 04 68 75 60 50</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"bouton bouton\u002d\u002dplein","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_HYDROMASSAGES_CONTENT,
    ),
    'infos-pratiques' => array(
        'title' => 'Infos pratiques',
        'legacy_hash' => '7d1e8ef562bb542f131aede1a822cc1d4f757ff1abe6e30345bac13818d71cd0',
        'schema2_hash' => '9c90123a96dc38dc9cb57da9626b9327327985f753f21d5b25daa8e3215e8793',
        'content' => <<<'BALNEO_INFOS_PRATIQUES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Infos pratiques</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Retrouvez en un coup d'œil toutes les informations nécessaires pour préparer votre venue.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"grille-liens","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group grille-liens"><!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/horaires/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-clock","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Horaires</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Consultez les horaires des différents espaces.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les horaires →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/tarifs/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-tag","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Entrées, cartes, activités et abonnements.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les tarifs →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/acces-parking/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-route","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Accès &amp; parking</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Adresse, itinéraire et stationnement.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Préparer le trajet →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/brochures/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-file-lines","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Brochures</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les informations essentielles par univers.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Consulter les brochures →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/faq/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-circle-question","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">FAQ</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Les réponses aux questions les plus fréquentes.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Consulter la FAQ →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/contact/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-envelope","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Contact</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une question particulière ? Écrivez-nous ou appelez-nous.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Nous contacter →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Avant d'entrer dans l'eau</p>
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
        'legacy_hash' => '1bb9ce8a4f5b88816f7df737673bf9c633f9c1b412b139d54f47509f60fd7ad7',
        'schema2_hash' => '4a515adc9db0d61db86fc733311b39e9c457a9ff556c0cd6147a8593c6c8c41b',
        'content' => <<<'BALNEO_MASSAGES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"","width":"2560","height":"1707","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Soins bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Massages</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Accordez-vous une parenthèse hors du temps, où chaque geste est pensé pour vous offrir une profonde relaxation, une harmonie intérieure et un véritable moment de lâcher-prise.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Bon à savoir</p>
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

<!-- wp:group {"className":"liste-services","layout":{"type":"default"}} -->
<div class="wp-block-group liste-services"><!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Détente anti-stress</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">30, 60 ou 90 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"element-service__description"} -->
<p class="element-service__description">Massage profondément relaxant associant gestes lents, fluides et enveloppants à des manœuvres plus profondes.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Tonique et décontractant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">30 ou 60 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"element-service__description"} -->
<p class="element-service__description">Dynamisant et revitalisant, idéal pour les sportifs et la récupération musculaire.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Tête — Mains — Pieds</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">30 ou 60 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Harmonisation des énergies</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">60 ou 90 min</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Massage femme enceinte</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">30 ou 60 min — 4e au 8e mois</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Massage douceur enfant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">5 à 14 ans — accompagné en cabine</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"element-service","layout":{"type":"default"}} -->
<div class="wp-block-group element-service"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"element-service__nom"} -->
<p class="element-service__nom">Rituel Océan Relax</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"element-service__duree"} -->
<p class="element-service__duree">60 ou 90 min — à partir de 15 ans</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"element-service__description"} -->
<p class="element-service__description">30 min d'hydromassage + massage manuel personnalisé de 30 ou 60 min.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Massages bien-être avec 2h30 de balnéo</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min + 2h30 balnéo</td><td>66 €</td></tr><tr><td>60 min + 2h30 balnéo</td><td>83 €</td></tr><tr><td>90 min + 2h30 balnéo</td><td>136 €</td></tr><tr><td>Carte 6 massages 1h + 2h30 balnéo</td><td>450 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Massages bien-être avec balnéo illimitée</h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
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

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Réservez par téléphone au 04 68 75 60 50</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"bouton bouton\u002d\u002dplein","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_MASSAGES_CONTENT,
    ),
    'mentions-legales' => array(
        'title' => 'Mentions légales',
        'legacy_hash' => '2ec94bc4d5770fef76f1f923bea8b52946b2dafd536c44706d11799e3bd679d2',
        'schema2_hash' => 'acb8764f20364c3e76b4042eae19a4bdd026d8b31c7a6cc2686d815fe8a794cd',
        'content' => <<<'BALNEO_MENTIONS_LEGALES_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Mentions légales</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:heading -->
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
        'legacy_hash' => '345bf1bf96c37b7d4afde7d474935488fcaa3bc63e5fc08479f7de5083b44909',
        'schema2_hash' => '63233aeea210646975716bc8042c7c181348c1e2b284c11aade32ae777b56bfd',
        'content' => <<<'BALNEO_NATATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","width":"850","height":"414","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Natation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>De l'apprentissage au perfectionnement, les cours sont accessibles dès 5 ans avec des groupes adaptés au niveau des enfants, des adolescents et des adultes.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Côté pratique</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
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
        'legacy_hash' => '7999bd8c065b7336e27589468bbfefcfa9f87639987da02987fd3c09e1c881fb',
        'schema2_hash' => '91ebc414e48bda00e77ec5304cda03334f6556fa0b2abf3153c4459f54b3263b',
        'content' => <<<'BALNEO_PARC_ETE_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"","width":"1900","height":"1259","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Parc aqualudique</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Parc été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p><strong>Ouvert uniquement juillet et août, 7j/7 de 11h00 à 18h00.</strong><br>
    Ouverture le 27 juin 2026 à 11h00 — Fermeture le 30 août 2026 à 18h00.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Côté pratique</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
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

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Achetez vos billets parc été en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"bouton bouton\u002d\u002dplein","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_PARC_ETE_CONTENT,
    ),
    'privatisation' => array(
        'title' => 'Privatisation',
        'legacy_hash' => '455b086ee3a543285c8b678503cdfb6e4795ee6b3d72cda1c3b653991c04f6c1',
        'schema2_hash' => 'e4397f69be57890646021d2ab469dbb16cfadf38d25c2a26930e4efef642c7cb',
        'content' => <<<'BALNEO_PRIVATISATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","width":"1600","height":"900","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Privatisation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Vous préparez un moment pour un groupe, une association, un club ou une entreprise ? L'équipe étudie avec vous les possibilités d'accueil selon votre projet, la période et les espaces disponibles.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"grille-liens","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group grille-liens"><!-- wp:group {"className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-users","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Groupes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une demande adaptée au nombre de participants et au rythme souhaité.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-briefcase","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Entreprises</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Un cadre différent pour un temps d'équipe ou une parenthèse bien-être.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée"}} -->
<div class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-medal","aria-hidden":"true"}} /-->

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
<p><a class="bouton bouton--plein" href="/contact/">Demander une privatisation<i class="fa-solid fa-users" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_PRIVATISATION_CONTENT,
    ),
    'recuperation' => array(
        'title' => 'Récupération',
        'legacy_hash' => '49cef9b4ee703c35325da381353d58892045748c43ef7709c79744da79779d7e',
        'schema2_hash' => 'a317d2881bc69887f93b3273eea5ddb618a343df01d5ab2313bb6729a8bb0f60',
        'content' => <<<'BALNEO_RECUPERATION_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"","width":"2560","height":"1708","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Se dépasser</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Récupération</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Après l'effort, accordez au corps un vrai temps de retour au calme. L'Espace Balnéo réunit plusieurs approches complémentaires pour relâcher les tensions et retrouver de bonnes sensations.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"grille-liens","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group grille-liens"><!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/balneo/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-water","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Eau &amp; chaleur</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Découvrir l'Espace Balnéo →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/hydromassages/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-droplet","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Hydromassages</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les hydromassages →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/massages/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-hands","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Massage décontractant</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les massages →"} /--></a>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Composer sa récupération</p>
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
<p><a class="bouton" href="/contact/">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_RECUPERATION_CONTENT,
    ),
    'reglement' => array(
        'title' => 'Règlement intérieur',
        'legacy_hash' => 'c7433223b9b46a8d797e37fe61dce0e78d1d8a9043c0168a61e9093e86d3db7c',
        'schema2_hash' => '3e5459f82d3b44b8c18ad18a470a2ed8de020bd51347625ac89950e8f900a295',
        'content' => <<<'BALNEO_REGLEMENT_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","width":"1900","height":"1068","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Règlement intérieur</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
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
        'legacy_hash' => 'ad8c31e64a2dd0ddbbcf586cdb045fc10c262f065ad66af1f14de7b2b1d1ebaa',
        'schema2_hash' => 'c431ed0e82c9a41a4c7a8e2af2414389319e6973dcd8cce5d9917357db4dc326',
        'content' => <<<'BALNEO_SALLE_DE_SPORT_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","width":"2560","height":"1705","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">For.Me</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">S'entraîner / Se dépasser</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Cet espace est doté de machines dernière génération Wellness® développées par Technogym®. Que vous ayez un objectif précis ou que vous souhaitiez pratiquer une activité physique régulière, vous trouverez votre programme et votre rythme grâce au système Wellness®.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"encadre-info","layout":{"type":"default"},"metadata":{"name":"Encart d’information"}} -->
<div class="wp-block-group encadre-info"><!-- wp:paragraph {"className":"encadre-info__titre"} -->
<p class="encadre-info__titre">Infos pratiques</p>
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
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

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th></th><th>6 mois</th><th>12 mois</th></tr><tr><td>1 personne</td><td>500 €</td><td>930 €</td></tr><tr><td>Couple</td><td>755 €</td><td>1 395 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"className":"bande-appel","layout":{"type":"default"}} -->
<div class="wp-block-group bande-appel"><!-- wp:paragraph -->
<p>Achetez vos abonnements en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie \u0026amp; cadeaux\u003ci class=\u0022fa-solid fa-ticket\u0022 aria-hidden=\u0022true\u0022\u003e\u003c/i\u003e","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"bouton bouton\u002d\u002dplein","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_SALLE_DE_SPORT_CONTENT,
    ),
    'tarifs' => array(
        'title' => 'Tarifs',
        'legacy_hash' => '72c2fe3ec6f47359c35194a4dec5a7ca7f94895e93d1dc6c136159ee574bde28',
        'schema2_hash' => 'bb171c532072a1c0d218968bb2ebcc93de3be3e4dc57727d48aa84ee3037ddba',
        'content' => <<<'BALNEO_TARIFS_CONTENT'
<!-- wp:group {"tagName":"main","anchor":"contenu-principal","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<main id="contenu-principal" class="wp-block-group"><!-- wp:group {"tagName":"section","className":"hero-page","layout":{"type":"default"},"metadata":{"name":"Bannière de page"}} -->
<section class="wp-block-group hero-page"><!-- wp:group {"className":"hero-page__media media-plein","layout":{"type":"default"},"metadata":{"name":"Image de couverture"}} -->
<div class="wp-block-group hero-page__media media-plein"><!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","width":"1900","height":"766","loading":"eager","fetchpriority":"high","decoding":"async"}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__voile","layout":{"type":"default"}} -->
<div class="wp-block-group hero-page__voile"></div>
<!-- /wp:group -->

<!-- wp:group {"className":"hero-page__contenu","layout":{"type":"default"},"metadata":{"name":"Contenu de la bannière"}} -->
<div class="wp-block-group hero-page__contenu"><!-- wp:paragraph {"className":"hero-page__libelle"} -->
<p class="hero-page__libelle">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero-page__titre"} -->
<h1 class="wp-block-heading hero-page__titre">Tarifs</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"htmlAttributes":{"class":"filet-titre","aria-hidden":"true"}} /--></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","className":"section-contenu section-contenu\u002d\u002dclaire","layout":{"type":"default"},"metadata":{"name":"Section"}} -->
<section class="wp-block-group section-contenu section-contenu--claire"><!-- wp:group {"className":"conteneur bloc-contenu apparition","layout":{"type":"default"},"metadata":{"name":"Contenu de la page"}} -->
<div class="wp-block-group conteneur bloc-contenu apparition"><!-- wp:paragraph -->
<p>Cette page rassemble les principaux tarifs. Les cartes détaillées et les conditions propres à chaque activité restent disponibles dans les pages correspondantes.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Espace Balnéo</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 2h30 — 6 ans et plus</td><td>23 €</td></tr><tr><td>Entrée 2h30 — 3 à moins de 6 ans</td><td>11 €</td></tr><tr><td>Pass sans limite de temps — 6 ans et plus</td><td>29 €</td></tr><tr><td>Dernière heure</td><td>11 €</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:paragraph -->
<p><a href="/balneo/">Voir tous les tarifs Balnéo et abonnements →</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Activités</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"tableau-adaptatif","layout":{"type":"default"}} -->
<div class="wp-block-group tableau-adaptatif"><!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Activité</th><th>À partir de</th></tr><tr><td>Aquagym</td><td>9 € la séance</td></tr><tr><td>Aquabike</td><td>11 € la séance</td></tr><tr><td>Bébés nageurs</td><td>9 € par parent accompagnateur</td></tr><tr><td>Natation adultes</td><td>126 € les 10 séances</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Autres univers</h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"grille-liens","layout":{"type":"default"},"metadata":{"name":"Grille de liens"}} -->
<div class="wp-block-group grille-liens"><!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/salle-de-sport/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-dumbbell","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Espace For.Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Séances et abonnements.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir les tarifs →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/massages/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-spa","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Massages</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Prestations avec ou sans Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"content":"Voir la carte →"} /--></a>
<!-- /wp:group -->

<!-- wp:group {"tagName":"a","className":"carte-lien","layout":{"type":"default"},"metadata":{"name":"Carte liée","balneoAttributes":{"href":"/parc-ete/"}}} -->
<a class="wp-block-group carte-lien"><!-- wp:balneo/rich-text {"tagName":"i","htmlAttributes":{"class":"fa-solid fa-water-ladder","aria-hidden":"true"}} /-->

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
<p><a class="bouton bouton--plein" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></section>
<!-- /wp:group --></main>
<!-- /wp:group -->
BALNEO_TARIFS_CONTENT,
    ),
);
