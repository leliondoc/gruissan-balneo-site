<?php
/** Contenus initiaux Gutenberg issus de la maquette validée. @package BalneoV2 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(
    'accueil' => array(
        'title' => 'Accueil',
        'legacy_hash' => 'd0adee495e6226d0091a78c04b16bacb6a0f51760b514cf4bb1fe2f2b3aa2b47',
        'content' => <<<'BALNEO_ACCUEIL_CONTENT'
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-banner"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<span class=\"info-banner__message\"><strong>Accès des mineurs à la Balnéo :</strong> du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.</span>\n      <button class=\"info-banner__close\" aria-label=\"Fermer\">×</button>\n    ","htmlAttributes":{"class":"container"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"Bassin intérieur de l’Espace Balnéo de Gruissan","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"Bassin intérieur de l’Espace Balnéo de Gruissan","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"hero__content fade-in"}} -->
<!-- wp:paragraph {"className":"hero__kicker"} -->
<p class="hero__kicker">Balnéo · Piscine · Soins · Sport</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"hero__title"} -->
<h1 class="wp-block-heading hero__title">Entrez dans<br>votre <em>parenthèse.</em></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"hero__tagline"} -->
<p class="hero__tagline">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"\n        <a href=\"#experiences\" class=\"btn btn\u002d\u002don-photo btn\u002d\u002dfilled\">Explorer les espaces<i class=\"fa-solid fa-compass\" aria-hidden=\"true\"></i></a>\n        <a href=\"/horaires/\" class=\"text-link text-link\u002d\u002dlight\">Voir les horaires <span>→</span></a>\n      ","htmlAttributes":{"class":"btn-group"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"hero-seals","aria-label":"Informations saison 2026"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<strong>Ouvert</strong><span>7j/7</span>","htmlAttributes":{"class":"brand-seal brand-seal\u002d\u002dopen"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"<span></span>Découvrir","htmlAttributes":{"class":"hero__scroll","href":"#bienvenue"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"nav","content":"\n    <a href=\"/horaires/\"><span>01</span><strong>Horaires</strong><small>Préparer ma visite</small></a>\n    <a href=\"https://gruissan-balneo.horanet.com/\" target=\"_blank\" rel=\"noopener\"><span>02</span><strong>Billetterie &amp; cadeaux</strong><small>Acheter en ligne</small></a>\n    <a href=\"/acces-parking/\"><span>03</span><strong>Venir à la Balnéo</strong><small>Accès &amp; parking</small></a>\n  ","htmlAttributes":{"class":"quick-access","aria-label":"Accès rapides"}} /-->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"welcome section","id":"bienvenue"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container welcome__grid fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Bienvenue à Gruissan</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Un rêve où se mêlent l'eau, le bois, la lumière et le sel.</h2>
<!-- /wp:heading -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"welcome__copy"}} -->
<!-- wp:paragraph -->
<p>À quelques pas de la Méditerranée, l'Espace Balnéo invite à ralentir. Des bassins chauffés à 32°C, des soins enveloppants et des activités pensées pour retrouver son rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Seul, à deux ou en famille, venez respirer, bouger et vous laisser porter.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Découvrir la Balnéo <span>→</span>","htmlAttributes":{"href":"/balneo/","class":"text-link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"experience-section","id":"experiences"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container section-heading fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Nos expériences</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">À chacun son horizon</h2>
<!-- /wp:heading -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p>Des univers complémentaires, réunis autour d'une même envie : prendre soin de soi.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"\n      <a href=\"/balneo/\" class=\"experience-card experience-card\u002d\u002dlarge fade-in\">\n        <img src=\"/wp-content/themes/balneo-v2/assets/photos/riviere.webp\" alt=\"Rivière extérieure et bassins de l’Espace Balnéo\">\n        <span class=\"experience-card__veil\"></span>\n        <div class=\"experience-card__content\"><small>Se délasser</small><h3>Les bains &amp; la Balnéo</h3><p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p><span class=\"circle-arrow\">→</span></div>\n      </a>\n      <a href=\"/massages/\" class=\"experience-card fade-in\">\n        <img src=\"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp\" alt=\"Massage bien-être\">\n        <span class=\"experience-card__veil\"></span>\n        <div class=\"experience-card__content\"><small>Se retrouver</small><h3>Soins &amp; massages</h3><p>Des gestes enveloppants pour une profonde détente.</p><span class=\"circle-arrow\">→</span></div>\n      </a>\n      <a href=\"/salle-de-sport/\" class=\"experience-card fade-in\">\n        <img src=\"/wp-content/themes/balneo-v2/assets/photos/balneo-tgn.webp\" alt=\"Salle de sport For.Me\">\n        <span class=\"experience-card__veil\"></span>\n        <div class=\"experience-card__content\"><small>Se dépasser</small><h3>Sport &amp; aquasports</h3><p>Cardio, renforcement et activités aquatiques à votre rythme.</p><span class=\"circle-arrow\">→</span></div>\n      </a>\n      <a href=\"/parc-ete/\" class=\"experience-card experience-card\u002d\u002dwide fade-in\">\n        <img src=\"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp\" alt=\"Parc aquatique paysager de Gruissan\">\n        <span class=\"experience-card__veil\"></span>\n        <div class=\"experience-card__content\"><small>Partager</small><h3>Le parc été en famille</h3><p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p><span class=\"circle-arrow\">→</span></div>\n      </a>\n    ","htmlAttributes":{"class":"experience-grid"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"seasonal-section","aria-labelledby":"seasonal-title","data-seasonal":""}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container seasonal-heading fade-in"}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Au fil des saisons</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Une envie pour chaque saison</h2>
<!-- /wp:heading -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"seasonal-slider"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"seasonal-slider__track"}} -->
<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"seasonal-slide seasonal-slide\u002d\u002dspring","data-season":"spring"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"Cours d'aquagym dans le bassin extérieur","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"Cours d'aquagym dans le bassin extérieur"}} /-->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"seasonal-slide__content"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<span class=\"seasonal-emblem__orbit\"></span><span class=\"seasonal-emblem__icon\"><i class=\"fa-solid fa-seedling\"></i></span>","htmlAttributes":{"class":"seasonal-emblem","aria-hidden":"true"}} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Au printemps,<br>je retrouve mon rythme</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Bouger dans l'eau<i class=\"fa-solid fa-person-swimming\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"/aquagym/","class":"btn btn\u002d\u002don-photo"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"seasonal-slide seasonal-slide\u002d\u002dsummer","data-season":"summer"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp","alt":"Familles profitant du parc aquatique en été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp","alt":"Familles profitant du parc aquatique en été"}} /-->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"seasonal-slide__content"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<span class=\"seasonal-emblem__orbit\"></span><span class=\"seasonal-emblem__icon\"><i class=\"fa-solid fa-sun\"></i></span>","htmlAttributes":{"class":"seasonal-emblem","aria-hidden":"true"}} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En été,<br>toute la famille se jette à l'eau</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Profiter du parc aquatique<i class=\"fa-solid fa-sun\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"/parc-ete/","class":"btn btn\u002d\u002don-photo"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"seasonal-slide seasonal-slide\u002d\u002dfall","data-season":"fall"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp","alt":"Massage relaxant à l'Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp","alt":"Massage relaxant à l'Espace Balnéo"}} /-->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"seasonal-slide__content"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<span class=\"seasonal-emblem__orbit\"></span><span class=\"seasonal-emblem__icon\"><i class=\"fa-solid fa-leaf\"></i></span>","htmlAttributes":{"class":"seasonal-emblem","aria-hidden":"true"}} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En automne,<br>je relâche les tensions</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Découvrir les massages<i class=\"fa-solid fa-spa\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"/massages/","class":"btn btn\u002d\u002don-photo"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"seasonal-slide seasonal-slide\u002d\u002dwinter","data-season":"winter"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"Espace Balnéo illuminé au crépuscule en hiver","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"Espace Balnéo illuminé au crépuscule en hiver"}} /-->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"seasonal-slide__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"seasonal-slide__content"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<span class=\"seasonal-emblem__orbit\"></span><span class=\"seasonal-emblem__icon\"><i class=\"fa-solid fa-snowflake\"></i></span>","htmlAttributes":{"class":"seasonal-emblem","aria-hidden":"true"}} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">En hiver,<br>je plonge dans la chaleur</h3>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Explorer l'espace Balnéo<i class=\"fa-solid fa-hot-tub-person\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"/balneo/","class":"btn btn\u002d\u002don-photo"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"\n      <button class=\"seasonal-tab seasonal-tab\u002d\u002dspring\" type=\"button\" role=\"tab\" data-season-target=\"spring\" aria-label=\"Afficher le printemps\"><span aria-hidden=\"true\"><i class=\"fa-solid fa-seedling\"></i></span><strong>Printemps</strong></button>\n      <button class=\"seasonal-tab seasonal-tab\u002d\u002dsummer\" type=\"button\" role=\"tab\" data-season-target=\"summer\" aria-label=\"Afficher l'été\"><span aria-hidden=\"true\"><i class=\"fa-solid fa-sun\"></i></span><strong>Été</strong></button>\n      <button class=\"seasonal-tab seasonal-tab\u002d\u002dfall\" type=\"button\" role=\"tab\" data-season-target=\"fall\" aria-label=\"Afficher l'automne\"><span aria-hidden=\"true\"><i class=\"fa-solid fa-leaf\"></i></span><strong>Automne</strong></button>\n      <button class=\"seasonal-tab seasonal-tab\u002d\u002dwinter\" type=\"button\" role=\"tab\" data-season-target=\"winter\" aria-label=\"Afficher l'hiver\"><span aria-hidden=\"true\"><i class=\"fa-solid fa-snowflake\"></i></span><strong>Hiver</strong></button>\n    ","htmlAttributes":{"class":"seasonal-tabs","role":"tablist","aria-label":"Choisir une saison"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"manifesto section","id":"experience-balneo"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"manifesto__photo media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"Bassins extérieurs et jets massants de l'Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"Bassins extérieurs et jets massants de l'Espace Balnéo"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"manifesto__content fade-in"}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">L'expérience Balnéo</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Le corps s'apaise.<br>L'esprit s'évade.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"manifesto__numbers"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<strong>32°</strong><span>L'eau des bassins</span>","htmlAttributes":{}} /-->

<!-- wp:balneo/rich-text {"tagName":"div","content":"<strong>5</strong><span>Univers à explorer</span>","htmlAttributes":{}} /-->

<!-- wp:balneo/rich-text {"tagName":"div","content":"<strong>7j/7</strong><span>La salle For.Me</span>","htmlAttributes":{}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Entrer dans l'univers<i class=\"fa-solid fa-hot-tub-person\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"/balneo/","class":"btn"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section news-section"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"section-heading fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">En ce moment</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"display-title"} -->
<h2 class="wp-block-heading display-title">Les nouvelles de la Balnéo</h2>
<!-- /wp:heading -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Toutes les actualités <span>→</span>","htmlAttributes":{"href":"/actualites/","class":"text-link"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-grid"}} -->
<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Ouverture du parc été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-parc-ete/","class":"news-card__link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation enfants","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation enfants"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Stages de natation enfants été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-stages-natation/","class":"news-card__link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"Rivière extérieure de l’Espace Balnéo","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"Rivière extérieure de l’Espace Balnéo"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Réouverture de la rivière extérieure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-riviere/","class":"news-card__link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section contact-section","id":"contact"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-grid fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"section__header","style":"text-align:left;margin-bottom:var(\u002d\u002dspace-md)"}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Nous contacter</h2>
<!-- /wp:heading -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info__item"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info__item"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">E-mail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info__item"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"section__header","style":"text-align:left;margin-bottom:var(\u002d\u002dspace-md)"}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Inscrivez-vous</h2>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Recevez les dernières actualités de l'Espace Balnéo par mail.","htmlAttributes":{"style":"font-size:0.9rem;color:var(\u002d\u002dcharcoal-soft);font-weight:300"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:shortcode -->
[balneo_newsletter_form]
<!-- /wp:shortcode -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_ACCUEIL_CONTENT,
    ),
    'acces-parking' => array(
        'title' => 'Accès & parking',
        'legacy_hash' => '5429f7e84f566ef649a839f41ea0d0ec9d74f38437874913604dc79bf9863562',
        'content' => <<<'BALNEO_ACCES_PARKING_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Accès &amp; parking</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>L'Espace Balnéo se situe avenue des Bains à Gruissan, à proximité immédiate des espaces sportifs et de loisirs.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Espace Balnéo de Gruissan</strong><br>Avenue des Bains<br>11430 Gruissan</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Venir sur place</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-grid"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-card"}} -->
<!-- wp:balneo/rich-text {"tagName":"i","content":"","htmlAttributes":{"class":"fa-solid fa-car","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">En voiture</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Suivez la direction de l'Espace Balnéo. Le stationnement se fait sur les zones prévues autour du site.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-card"}} -->
<!-- wp:balneo/rich-text {"tagName":"i","content":"","htmlAttributes":{"class":"fa-solid fa-person-walking","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">À pied ou à vélo</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Rejoignez l'équipement par les cheminements locaux depuis les secteurs proches.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a class="btn btn--filled" href="https://maps.google.fr/?saddr=&amp;daddr=43.1182048,3.11328202" target="_blank" rel="noopener">Ouvrir l'itinéraire<i class="fa-solid fa-route" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pour une question d'accessibilité ou de dépose, contactez l'accueil avant votre venue.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_ACCES_PARKING_CONTENT,
    ),
    'actualites' => array(
        'title' => 'Actualités',
        'legacy_hash' => 'fcd63688f77f710b32a69d505f814d544426fd16da618b56908ea167b3a28bdf',
        'content' => <<<'BALNEO_ACTUALITES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Actualités</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-grid"}} -->
<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"Ouverture du parc été"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Ouverture du parc été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-parc-ete/","class":"news-card__link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"Stages de natation"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Stages de natation enfants été</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-stages-natation/","class":"news-card__link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"Rivière extérieure"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Réouverture de la rivière extérieure</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Lire plus","htmlAttributes":{"href":"/article-riviere/","class":"news-card__link"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"article","htmlAttributes":{"class":"news-card fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/maillots.webp","alt":"Tenue de bain","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/maillots.webp","alt":"Tenue de bain"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"news-card__body"}} -->
<!-- wp:paragraph {"className":"news-card__date"} -->
<p class="news-card__date">2026</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"news-card__title"} -->
<h3 class="wp-block-heading news-card__title">Tenue de bain</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"news-card__excerpt"} -->
<p class="news-card__excerpt">Rappel : shorts et jupes de bain interdits dans l'ensemble de l'établissement.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_ACTUALITES_CONTENT,
    ),
    'aquabike' => array(
        'title' => 'Aquabike',
        'legacy_hash' => 'a105daec4d8b2750731b67304cbd28b16d13da62cdf874036de2efcb6488cfee',
        'content' => <<<'BALNEO_AQUABIKE_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Aquabike</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>À mi-chemin entre l'aquagym et le vélo en salle, l'Aquabike associe travail cardio et renforcement musculaire sur un vélo immergé, en petit groupe.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>11 €</td></tr><tr><td>12 séances — validité 1 an</td><td>121 €</td></tr><tr><td>24 séances — validité 1 an</td><td>231 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a href="/aquagym/">Découvrir aussi l'Aquagym →</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Réservez votre séance d'Aquabike par téléphone.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Appeler le 04 68 75 60 50<i class=\"fa-solid fa-phone\" aria-hidden=\"true\"></i>","htmlAttributes":{"class":"btn","href":"tel:+33468756050"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_AQUABIKE_CONTENT,
    ),
    'aquagym' => array(
        'title' => 'Aquagym',
        'legacy_hash' => '3581229d361e0cd793f2171e6d52cabeb165209efeddec997288e86e16bb9abf',
        'content' => <<<'BALNEO_AQUAGYM_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/aquagym.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Aquagym</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Un cours aquatique dynamique de 45 minutes pour travailler le cardio, les abdominaux, les jambes, les cuisses, les fessiers et le buste, avec des exercices adaptables au niveau de chacun.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>9 €</td></tr><tr><td>5 séances — validité 1 mois</td><td>41 €</td></tr><tr><td>10 séances — validité 1 an</td><td>81 €</td></tr><tr><td>Trimestre — hors été</td><td>105 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a href="/aquabike/">Découvrir aussi l'Aquabike →</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Réservez votre séance d'Aquagym par téléphone.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Appeler le 04 68 75 60 50<i class=\"fa-solid fa-phone\" aria-hidden=\"true\"></i>","htmlAttributes":{"class":"btn","href":"tel:+33468756050"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_AQUAGYM_CONTENT,
    ),
    'article-parc-ete' => array(
        'title' => 'Ouverture du parc été',
        'legacy_hash' => '5f1f2f1d6f54186e76215212172606971c0552d5224e09e7d3215864ea70c202',
        'content' => <<<'BALNEO_ARTICLE_PARC_ETE_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Actualité — 3 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Ouverture du parc été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>L'été arrive ! À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Venez profiter de nos bassins, toboggans et espaces de détente tout l'été, en famille ou entre amis ! Toute l'équipe se réjouit de vous accueillir.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/parc-ete/">Découvrir le parc été →</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"<a href=\"/actualites/\" class=\"btn\"><i class=\"fa-solid fa-arrow-left\" aria-hidden=\"true\"></i>Toutes les actualités</a>","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_ARTICLE_PARC_ETE_CONTENT,
    ),
    'article-riviere' => array(
        'title' => 'Réouverture de la rivière extérieure',
        'legacy_hash' => '63349f305d94db81e53d032ec022ade1f87cd1e49c7530d677e891dc88370b82',
        'content' => <<<'BALNEO_ARTICLE_RIVIERE_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Actualité — 1 avril</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Réouverture de la rivière extérieure</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Chers clients, nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo. Profitez-en dès maintenant pour vous détendre.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>À très bientôt dans votre Espace Balnéo !</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"<a href=\"/actualites/\" class=\"btn\"><i class=\"fa-solid fa-arrow-left\" aria-hidden=\"true\"></i>Toutes les actualités</a>","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_ARTICLE_RIVIERE_CONTENT,
    ),
    'article-stages-natation' => array(
        'title' => 'Stages de natation enfants été',
        'legacy_hash' => 'c60f2f581b727cb13bbeada46befbafbcc3bff696d933f636d22e3ace06910f6',
        'content' => <<<'BALNEO_ARTICLE_STAGES_NATATION_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Actualité — 1 juin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Stages de natation enfants été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
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

<!-- wp:balneo/rich-text {"tagName":"p","content":"<a href=\"/actualites/\" class=\"btn\"><i class=\"fa-solid fa-arrow-left\" aria-hidden=\"true\"></i>Toutes les actualités</a>","htmlAttributes":{"style":"margin-top:var(\u002d\u002dspace-lg)"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_ARTICLE_STAGES_NATATION_CONTENT,
    ),
    'balneo' => array(
        'title' => 'Balnéo',
        'legacy_hash' => 'd5919a612164da7c913d8800193b0e24b7ea6a65f9c39b87d3ac7b202fc519dc',
        'content' => <<<'BALNEO_BALNEO_CONTENT'
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-banner"}} -->
<!-- wp:balneo/rich-text {"tagName":"div","content":"<span class=\"info-banner__message\"><strong>Période estivale :</strong> toute entrée Balnéo (10h–19h) donne accès au parc aqualudique (11h–18h) selon la durée choisie.</span>\n      <button class=\"info-banner__close\" aria-label=\"Fermer\">×</button>\n    ","htmlAttributes":{"class":"container"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Espace bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Accès à la Balnéo sans réservation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Tarif forfait 2h30</h3>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 6 ans et + pour 2h30</td><td>23 €</td></tr><tr><td>Entrée 3 à moins de 6 ans (sans toboggans)</td><td>11 €</td></tr><tr><td>Entrée moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr><tr><td>Dépassement de temps</td><td>9 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Dernière heure (17h45 – 18h45)</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>11 €</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Pass sans limite de temps</h3>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>6 ans et +</td><td>29 €</td></tr><tr><td>3 à moins de 6 ans (sans toboggans)</td><td>16 €</td></tr><tr><td>Moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

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

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr><tr><td>6 mois</td><td>350 €</td><td>580 €</td></tr><tr><td>12 mois (-1 mois de vidange)</td><td>650 €</td><td>1 045 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Balnéo + Piscine + For.Me</h3>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr><tr><td>6 mois</td><td>500 €</td><td>755 €</td></tr><tr><td>12 mois (-1 mois de vidange)</td><td>930 €</td><td>1 395 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p>Avec un abonnement : remise de 50 % sur les activités et tarifs préférentiels sur les massages bien-être (sur réservation).</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Envie de se détendre</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"two-col","style":"margin-top:var(\u002d\u002dspace-md)"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:heading {"level":3} -->
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
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"two-col__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"Espace aquatique","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"Espace aquatique"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

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
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Achetez votre entrée Balnéo en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie &amp; cadeaux<i class=\"fa-solid fa-ticket\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_BALNEO_CONTENT,
    ),
    'bebes-nageurs' => array(
        'title' => 'Bébés nageurs',
        'legacy_hash' => '74fdf14ef518f18b6fcf90c7a8174968e82c82aedd7771331e446e815c76872d',
        'content' => <<<'BALNEO_BEBES_NAGEURS_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer en famille</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Bébés nageurs</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Un premier contact avec l'eau à 32°C, en famille et sous le regard de nos maîtres-nageurs. La séance permet au tout-petit d'explorer le milieu aquatique à son rythme.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>1 séance : <strong>9 € par parent accompagnateur</strong> — gratuit pour l'enfant.<br>Carte 10 séances : <strong>81 €</strong>, valable 1 an.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_BEBES_NAGEURS_CONTENT,
    ),
    'brochures' => array(
        'title' => 'Brochures',
        'legacy_hash' => '16d6c39b0f1ade037fd348739956d6c27e4a6ace3a4571a63342948cf31760ca',
        'content' => <<<'BALNEO_BROCHURES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Brochures</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Explorez nos univers comme dans une brochure, avec des informations maintenues à jour directement sur le site.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"\n    <a class=\"link-card\" href=\"/balneo/\"><i class=\"fa-solid fa-water\" aria-hidden=\"true\"></i><h2>Guide Balnéo</h2><p>Bassins, chaleur, détente et conditions d'accès.</p><span>Consulter le guide →</span></a>\n    <a class=\"link-card\" href=\"/aquagym/\"><i class=\"fa-solid fa-person-swimming\" aria-hidden=\"true\"></i><h2>Guide des activités</h2><p>Aquagym, Aquabike, Bébés nageurs et Natation.</p><span>Découvrir les activités →</span></a>\n    <a class=\"link-card\" href=\"/parc-ete/\"><i class=\"fa-solid fa-sun\" aria-hidden=\"true\"></i><h2>Guide Parc été</h2><p>Espaces, services, règles et tarifs de la saison estivale.</p><span>Préparer sa journée →</span></a>\n  ","htmlAttributes":{"class":"link-grid"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Besoin d'un document imprimable ?</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Contactez l'accueil : l'équipe vous transmettra la documentation disponible pour votre demande.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Demander une brochure<i class="fa-solid fa-file-lines" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_BROCHURES_CONTENT,
    ),
    'contact' => array(
        'title' => 'Contact',
        'legacy_hash' => '4b46318821934c9af6d7334f991f6ccee2a5d0db82330721a589411b439f2888',
        'content' => <<<'BALNEO_CONTACT_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Nous contacter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Contact</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in","style":"text-align:center"}} -->
<!-- wp:paragraph -->
<p>Vous pouvez nous contacter par téléphone, par e-mail ou nous rendre directement visite.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"style":"margin:var(\u002d\u002dspace-lg) 0"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"<a href=\"tel:+33468756050\">04 68 75 60 50</a>","htmlAttributes":{"style":"font-size:1.5rem;font-weight:300"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"E-mail","htmlAttributes":{"class":"contact-info__label","style":"margin-top:var(\u002d\u002dspace-md)"}} /-->

<!-- wp:paragraph -->
<p><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Adresse","htmlAttributes":{"class":"contact-info__label","style":"margin-top:var(\u002d\u002dspace-md)"}} /-->

<!-- wp:paragraph -->
<p>Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie en ligne<i class=\"fa-solid fa-ticket\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section contact-section","id":"contact"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-grid fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"section__header","style":"text-align:left;margin-bottom:var(\u002d\u002dspace-md)"}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Contact</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Nous contacter</h2>
<!-- /wp:heading -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info__item"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Téléphone</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info__item"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">E-mail</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"contact-info__item"}} -->
<!-- wp:paragraph {"className":"contact-info__label"} -->
<p class="contact-info__label">Adresse</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"contact-info__value"} -->
<p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"section__header","style":"text-align:left;margin-bottom:var(\u002d\u002dspace-md)"}} -->
<!-- wp:paragraph {"className":"section__label"} -->
<p class="section__label">Newsletter</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"className":"section__title"} -->
<h2 class="wp-block-heading section__title">Inscrivez-vous</h2>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Recevez les dernières actualités de l'Espace Balnéo par mail.","htmlAttributes":{"style":"font-size:0.9rem;color:var(\u002d\u002dcharcoal-soft);font-weight:300"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:shortcode -->
[balneo_newsletter_form]
<!-- /wp:shortcode -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_CONTACT_CONTENT,
    ),
    'donnees-personnelles' => array(
        'title' => 'Données personnelles',
        'legacy_hash' => 'cac12c08cc15233f5d2a27ac81abd12163ec018af092da50f333dbb178fdca91',
        'content' => <<<'BALNEO_DONNEES_PERSONNELLES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Données personnelles</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Conformément à la loi Informatique et Libertés du 6 janvier 1978 modifiée, et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et d'opposition aux données vous concernant.</p>
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
<p>Les données collectées via le formulaire d'inscription à la newsletter (prénom, nom, e-mail, code postal, ville) sont utilisées uniquement pour l'envoi d'actualités de l'Espace Balnéo.</p>
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
<p>Ce prototype statique n'utilise pas de cookies de tracking. La version WordPress pourra intégrer un bandeau de consentement conforme.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/reglement/">Règlement intérieur →</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_DONNEES_PERSONNELLES_CONTENT,
    ),
    'faq' => array(
        'title' => 'FAQ',
        'legacy_hash' => '0c589b2f677e7ac56a876efaf68000acd0ba7f23c8153a05ec84be534a432a8b',
        'content' => <<<'BALNEO_FAQ_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/riviere.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Questions fréquentes</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"faq-list"}} -->
<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Faut-il réserver pour accéder à l'Espace Balnéo ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>L'accès libre à la Balnéo ne nécessite pas de réservation. Les massages, hydromassages et activités encadrées sont proposés sur réservation.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Quelle tenue de bain est autorisée ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>Les shorts et jupes de bain sont interdits. Les cheveux longs doivent être attachés.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Les serviettes sont-elles fournies ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>Non, pensez à apporter votre serviette.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Les enfants peuvent-ils accéder à la Balnéo ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>Les moins de 18 ans doivent être accompagnés d'un adulte. Les moins de 3 ans accèdent uniquement aux trois alvéoles thématiques. Les saunas et le hammam sont accessibles à partir de 16 ans.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Quels moyens de paiement sont acceptés ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>Espèces, carte bancaire et chèques ANCV au format papier.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Où consulter les horaires et les tarifs ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>Consultez les pages <a href="/horaires/">Horaires</a> et <a href="/tarifs/">Tarifs</a>. Pour une information du jour, appelez l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"details","htmlAttributes":{}} -->
<!-- wp:balneo/rich-text {"tagName":"summary","content":"Comment venir et où stationner ?","htmlAttributes":{}} /-->

<!-- wp:paragraph -->
<p>Retrouvez l'adresse, l'itinéraire et les informations de stationnement sur la page <a href="/acces-parking/">Accès &amp; parking</a>.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Une autre question ?<i class="fa-solid fa-circle-question" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_FAQ_CONTENT,
    ),
    'horaires' => array(
        'title' => 'Horaires',
        'legacy_hash' => '98cc56872210caa88de8ebadcad59a1a1d9bd3d577f1f63d35e686a57ef35676',
        'content' => <<<'BALNEO_HORAIRES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Horaires</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Les horaires évoluent selon les espaces et les périodes de l'année. Retrouvez ici les repères essentiels avant votre venue.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"pricing-grid"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"pricing-card"}} -->
<!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Espace For.Me</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>6h–23h</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">7j/7 — dernier accès à 22h.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"pricing-card"}} -->
<!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Espace Balnéo — été</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>10h–19h</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Évacuation des bassins 15 minutes avant la fermeture.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"pricing-card"}} -->
<!-- wp:paragraph {"className":"pricing-card__name"} -->
<p class="pricing-card__name">Parc été</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__price"} -->
<p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>11h–18h</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"pricing-card__desc"} -->
<p class="pricing-card__desc">Ouverture saisonnière en juillet et août.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Horaires du jour</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Pour les horaires hors saison, les jours fériés, les activités encadrées ou une fermeture technique, vérifiez auprès de l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Contacter l'accueil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_HORAIRES_CONTENT,
    ),
    'hydromassages' => array(
        'title' => 'Hydromassages',
        'legacy_hash' => '07514bc62bd6ac85fdb06f744314450c2185f30dd81d78eb4ab695afc10faad7',
        'content' => <<<'BALNEO_HYDROMASSAGES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Soins bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Hydromassages</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Accordez-vous un Rituel Océan Relax ou une séance d'hydromassage, installé confortablement sur une table à jets d'eau chaude.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
<p class="info-box__title">Bon à savoir</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul class="wp-block-list"><!-- wp:list-item -->
<li>À partir de 15 ans — sur rendez-vous au <a href="tel:+33468756050">04 68 75 60 50</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Arriver 20 min avant pour prendre une douche</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->
<!-- /wp:balneo/container -->

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

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min hydromassage sans balnéo</td><td>27 €</td></tr><tr><td>60 min rituel océan sans balnéo</td><td>65 €</td></tr><tr><td>90 min rituel océan sans balnéo</td><td>95 €</td></tr><tr><td>60 min rituel + 2h30 balnéo</td><td>78 €</td></tr><tr><td>90 min rituel + 2h30 balnéo</td><td>108 €</td></tr><tr><td>60 min rituel + balnéo illimitée</td><td>85 €</td></tr><tr><td>90 min rituel + balnéo illimitée</td><td>115 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a href="/massages/">Voir aussi : Massages</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Réservez par téléphone au 04 68 75 60 50</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie &amp; cadeaux<i class=\"fa-solid fa-ticket\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_HYDROMASSAGES_CONTENT,
    ),
    'infos-pratiques' => array(
        'title' => 'Infos pratiques',
        'legacy_hash' => 'd44e84fbd192fbdfeb0e019e600ea100822533762e68dec7251785419fdf2180',
        'content' => <<<'BALNEO_INFOS_PRATIQUES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Infos pratiques</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Retrouvez en un coup d'œil toutes les informations nécessaires pour préparer votre venue.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"\n    <a class=\"link-card\" href=\"/horaires/\"><i class=\"fa-solid fa-clock\" aria-hidden=\"true\"></i><h2>Horaires</h2><p>Consultez les horaires des différents espaces.</p><span>Voir les horaires →</span></a>\n    <a class=\"link-card\" href=\"/tarifs/\"><i class=\"fa-solid fa-tag\" aria-hidden=\"true\"></i><h2>Tarifs</h2><p>Entrées, cartes, activités et abonnements.</p><span>Voir les tarifs →</span></a>\n    <a class=\"link-card\" href=\"/acces-parking/\"><i class=\"fa-solid fa-route\" aria-hidden=\"true\"></i><h2>Accès &amp; parking</h2><p>Adresse, itinéraire et stationnement.</p><span>Préparer le trajet →</span></a>\n    <a class=\"link-card\" href=\"/brochures/\"><i class=\"fa-solid fa-file-lines\" aria-hidden=\"true\"></i><h2>Brochures</h2><p>Les informations essentielles par univers.</p><span>Consulter les brochures →</span></a>\n    <a class=\"link-card\" href=\"/faq/\"><i class=\"fa-solid fa-circle-question\" aria-hidden=\"true\"></i><h2>FAQ</h2><p>Les réponses aux questions les plus fréquentes.</p><span>Consulter la FAQ →</span></a>\n    <a class=\"link-card\" href=\"/contact/\"><i class=\"fa-solid fa-envelope\" aria-hidden=\"true\"></i><h2>Contact</h2><p>Une question particulière ? Écrivez-nous ou appelez-nous.</p><span>Nous contacter →</span></a>\n  ","htmlAttributes":{"class":"link-grid"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_INFOS_PRATIQUES_CONTENT,
    ),
    'massages' => array(
        'title' => 'Massages',
        'legacy_hash' => '26745b9a65d5f84414c22208e82d01e640e58f758cd48dd6b1f0e37fb1167e9a',
        'content' => <<<'BALNEO_MASSAGES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Soins bien-être</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Massages</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Accordez-vous une parenthèse hors du temps, où chaque geste est pensé pour vous offrir une profonde relaxation, une harmonie intérieure et un véritable moment de lâcher-prise.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">La carte des massages bien-être</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-list"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Détente anti-stress</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30, 60 ou 90 min</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph {"className":"service-item__desc"} -->
<p class="service-item__desc">Massage profondément relaxant associant gestes lents, fluides et enveloppants à des manœuvres plus profondes.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Tonique et décontractant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30 ou 60 min</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph {"className":"service-item__desc"} -->
<p class="service-item__desc">Dynamisant et revitalisant, idéal pour les sportifs et la récupération musculaire.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Tête — Mains — Pieds</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30 ou 60 min</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Harmonisation des énergies</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">60 ou 90 min</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Massage femme enceinte</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">30 ou 60 min — 4e au 8e mois</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Massage douceur enfant</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">5 à 14 ans — accompagné en cabine</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"service-item"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{}} -->
<!-- wp:paragraph {"className":"service-item__name"} -->
<p class="service-item__name">Rituel Océan Relax</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"service-item__duration"} -->
<p class="service-item__duration">60 ou 90 min — à partir de 15 ans</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph {"className":"service-item__desc"} -->
<p class="service-item__desc">30 min d'hydromassage + massage manuel personnalisé de 30 ou 60 min.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Massages bien-être avec 2h30 de balnéo</h3>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min + 2h30 balnéo</td><td>66 €</td></tr><tr><td>60 min + 2h30 balnéo</td><td>83 €</td></tr><tr><td>90 min + 2h30 balnéo</td><td>136 €</td></tr><tr><td>Carte 6 massages 1h + 2h30 balnéo</td><td>450 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Massages bien-être avec balnéo illimitée</h3>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>30 min + balnéo illimitée</td><td>73 €</td></tr><tr><td>60 min + balnéo illimitée</td><td>90 €</td></tr><tr><td>90 min + balnéo illimitée</td><td>143 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p>Les massages peuvent être réalisés en duo dans notre cabine double (2 prestations à acheter). Le Rituel Océan Relax s'effectue en cabine simple uniquement.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a href="/hydromassages/">Voir aussi : Hydromassages</a> · <a href="/recuperation/">Composer sa récupération</a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Réservez par téléphone au 04 68 75 60 50</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie &amp; cadeaux<i class=\"fa-solid fa-ticket\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_MASSAGES_CONTENT,
    ),
    'mentions-legales' => array(
        'title' => 'Mentions légales',
        'legacy_hash' => '87d665811e62fe3eb51c952228159e251829bd2ed139b3266a57f6fc496d9385',
        'content' => <<<'BALNEO_MENTIONS_LEGALES_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Mentions légales</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:heading -->
<h2 class="wp-block-heading">Éditeur du site</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Espace Balnéoludique de Gruissan<br>Avenue des Bains — 11430 Gruissan<br>Téléphone : 04 68 75 60 50<br>E-mail : espace.balneoludique@gruissan-mediterranee.com</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Hébergement</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Site prototype en cours de refonte. Version WordPress à venir.</p>
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
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_MENTIONS_LEGALES_CONTENT,
    ),
    'natation' => array(
        'title' => 'Natation',
        'legacy_hash' => '7b8210659011ab8b4058b18bab1b48256e0ffb043f42e3006ecdeb74975e8f83',
        'content' => <<<'BALNEO_NATATION_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Pratiquer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Natation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>De l'apprentissage au perfectionnement, les cours sont accessibles dès 5 ans avec des groupes adaptés au niveau des enfants, des adolescents et des adultes.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Cours à l'année</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Niveaux enfants : Cranquettes, Hippocampes, Dorades, Dauphins, Requins et Orques/Ados. Deux niveaux adultes sont proposés : perfectionnement et coaching.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Adultes</th><th>Enfants / ados</th></tr><tr><td>Carte 10 séances — 1 an</td><td>126 €</td><td>—</td></tr><tr><td>Carte 20 séances — 1 an</td><td>238 €</td><td>—</td></tr><tr><td>Abonnement annuel septembre–juin</td><td>295 €</td><td>185 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Stages</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des stages de cinq séances consécutives sont proposés pendant les vacances de Pâques et d'été, pour les enfants à partir de 5 ans révolus. Consultez les actualités ou contactez l'accueil pour les prochaines dates.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_NATATION_CONTENT,
    ),
    'parc-ete' => array(
        'title' => 'Parc été',
        'legacy_hash' => 'f05ed67cc975fe019a2c47ba9971230d1f4f2993da0321f70ffbfe75727c5d2b',
        'content' => <<<'BALNEO_PARC_ETE_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Parc aqualudique</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Parc été</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p><strong>Ouvert uniquement juillet et août, 7j/7 de 11h00 à 18h00.</strong><br>
    Ouverture le 27 juin 2026 à 11h00 — Fermeture le 30 août 2026 à 18h00.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Pass journée (6 ans et +)</td><td>16 €</td></tr><tr><td>Enfants - de 6 ans (sans toboggans)</td><td>6,50 €</td></tr><tr><td>Enfants - de 3 ans (pataugeoires uniquement)</td><td>Gratuit</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Vous trouverez</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Rivière à courant, toboggans, pentagliss, pataugeoires avec jeux d'eau, bassin sportif intérieur, village de jeux gonflables (village Barberousse). Tous les bassins chauffés à 28°. Aire de pique-nique ombragée, espaces verts et transats. Restauration à la Grignoterie (11h–17h) ou pique-nique autorisé.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Achetez vos billets parc été en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie &amp; cadeaux<i class=\"fa-solid fa-ticket\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_PARC_ETE_CONTENT,
    ),
    'privatisation' => array(
        'title' => 'Privatisation',
        'legacy_hash' => 'e6c5242b9b97d4dd47213d1521bf134f25d80dea34c5ff2fdd805d1f0636772d',
        'content' => <<<'BALNEO_PRIVATISATION_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Privatisation</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Vous préparez un moment pour un groupe, une association, un club ou une entreprise ? L'équipe étudie avec vous les possibilités d'accueil selon votre projet, la période et les espaces disponibles.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-grid"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-card"}} -->
<!-- wp:balneo/rich-text {"tagName":"i","content":"","htmlAttributes":{"class":"fa-solid fa-users","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Groupes</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Une demande adaptée au nombre de participants et au rythme souhaité.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-card"}} -->
<!-- wp:balneo/rich-text {"tagName":"i","content":"","htmlAttributes":{"class":"fa-solid fa-briefcase","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Entreprises</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Un cadre différent pour un temps d'équipe ou une parenthèse bien-être.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"link-card"}} -->
<!-- wp:balneo/rich-text {"tagName":"i","content":"","htmlAttributes":{"class":"fa-solid fa-medal","aria-hidden":"true"}} /-->

<!-- wp:heading -->
<h2 class="wp-block-heading">Clubs</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Des pistes autour de l'activité, de la récupération et de la détente.</p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Construisons votre demande</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Indiquez la date envisagée, le nombre de participants, les espaces souhaités et vos contraintes horaires. L'équipe vous répondra sur la faisabilité et les conditions.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><a class="btn btn--filled" href="/contact/">Demander une privatisation<i class="fa-solid fa-users" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_PRIVATISATION_CONTENT,
    ),
    'recuperation' => array(
        'title' => 'Récupération',
        'legacy_hash' => 'f8f52a837e02a41515084bee8673009cff43f9ad9db91c90e6f09807096d4d63',
        'content' => <<<'BALNEO_RECUPERATION_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/sport.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Se dépasser</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Récupération</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Après l'effort, accordez au corps un vrai temps de retour au calme. L'Espace Balnéo réunit plusieurs approches complémentaires pour relâcher les tensions et retrouver de bonnes sensations.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"\n      <a class=\"link-card\" href=\"/balneo/\"><i class=\"fa-solid fa-water\" aria-hidden=\"true\"></i><h2>Eau &amp; chaleur</h2><p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p><span>Découvrir l'Espace Balnéo →</span></a>\n      <a class=\"link-card\" href=\"/hydromassages/\"><i class=\"fa-solid fa-droplet\" aria-hidden=\"true\"></i><h2>Hydromassages</h2><p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p><span>Voir les hydromassages →</span></a>\n      <a class=\"link-card\" href=\"/massages/\"><i class=\"fa-solid fa-hands\" aria-hidden=\"true\"></i><h2>Massage décontractant</h2><p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p><span>Voir les massages →</span></a>\n    ","htmlAttributes":{"class":"link-grid"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a class="btn" href="/contact/">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_RECUPERATION_CONTENT,
    ),
    'reglement' => array(
        'title' => 'Règlement intérieur',
        'legacy_hash' => 'e3adca33cdf16420d45f7f1667f4d2d1c71d0076ab1fa810f9d1fa9caef08731',
        'content' => <<<'BALNEO_REGLEMENT_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Informations légales</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Règlement intérieur</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
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
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_REGLEMENT_CONTENT,
    ),
    'salle-de-sport' => array(
        'title' => 'Salle For.Me',
        'legacy_hash' => '48e99972de94ca31289934c5d55fe1ca7ee074317a64a39bf7cbeb8ba6a31645',
        'content' => <<<'BALNEO_SALLE_DE_SPORT_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">For.Me</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">S'entraîner / Se dépasser</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Cet espace est doté de machines dernière génération Wellness® développées par Technogym®. Que vous ayez un objectif précis ou que vous souhaitiez pratiquer une activité physique régulière, vous trouverez votre programme et votre rythme grâce au système Wellness®.</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"info-box"}} -->
<!-- wp:paragraph {"className":"info-box__title"} -->
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
<!-- /wp:list -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Tarifs</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance (jour même)</td><td>11 €</td></tr><tr><td>Carte 10 séances (2 mois)</td><td>100 €</td></tr><tr><td>Abonnement 3 mois</td><td>105 €</td></tr><tr><td>Abonnement 6 mois</td><td>199 €</td></tr><tr><td>Abonnement annuel</td><td>387 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

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

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th></th><th>6 mois</th><th>12 mois</th></tr><tr><td>1 personne</td><td>500 €</td><td>930 €</td></tr><tr><td>Couple</td><td>755 €</td><td>1 395 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"cta-band"}} -->
<!-- wp:paragraph -->
<p>Achetez vos abonnements en ligne</p>
<!-- /wp:paragraph -->

<!-- wp:balneo/rich-text {"tagName":"a","content":"Billetterie &amp; cadeaux<i class=\"fa-solid fa-ticket\" aria-hidden=\"true\"></i>","htmlAttributes":{"href":"https://gruissan-balneo.horanet.com/","class":"btn btn\u002d\u002dfilled","target":"_blank","rel":"noopener"}} /-->

<!-- wp:balneo/rich-text {"tagName":"p","content":"Les e-billets ne sont pas nominatifs","htmlAttributes":{"style":"margin-top:0.75rem;font-size:0.75rem;opacity:0.7"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_SALLE_DE_SPORT_CONTENT,
    ),
    'tarifs' => array(
        'title' => 'Tarifs',
        'legacy_hash' => '6cb1c50394e3aff90a811ee994d775173ff8d22c72a91e2080580c7a12cfbfeb',
        'content' => <<<'BALNEO_TARIFS_CONTENT'
<!-- wp:balneo/container {"tagName":"main","htmlAttributes":{}} -->
<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"page-hero"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__media media-fill"}} -->
<!-- wp:balneo/image {"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","htmlAttributes":{"src":"/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp","alt":"","loading":"eager","fetchpriority":"high"}} /-->
<!-- /wp:balneo/container -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"","htmlAttributes":{"class":"page-hero__veil"}} /-->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"page-hero__content"}} -->
<!-- wp:paragraph {"className":"page-hero__label"} -->
<p class="page-hero__label">Préparer</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"className":"page-hero__title"} -->
<h1 class="wp-block-heading page-hero__title">Tarifs</h1>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"span","content":"","htmlAttributes":{"class":"title-rule","aria-hidden":"true"}} /-->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->

<!-- wp:balneo/container {"tagName":"section","htmlAttributes":{"class":"section section\u002d\u002dlight"}} -->
<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"container content-block fade-in"}} -->
<!-- wp:paragraph -->
<p>Cette page rassemble les principaux tarifs. Les cartes détaillées et les conditions propres à chaque activité restent disponibles dans les pages correspondantes.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Espace Balnéo</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 2h30 — 6 ans et plus</td><td>23 €</td></tr><tr><td>Entrée 2h30 — 3 à moins de 6 ans</td><td>11 €</td></tr><tr><td>Pass sans limite de temps — 6 ans et plus</td><td>29 €</td></tr><tr><td>Dernière heure</td><td>11 €</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:paragraph -->
<p><a href="/balneo/">Voir tous les tarifs Balnéo et abonnements →</a></p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Activités</h2>
<!-- /wp:heading -->

<!-- wp:balneo/container {"tagName":"div","htmlAttributes":{"class":"table-wrap"}} -->
<!-- wp:table -->
<figure class="wp-block-table"><table class="has-fixed-layout"><tbody><tr><th>Activité</th><th>À partir de</th></tr><tr><td>Aquagym</td><td>9 € la séance</td></tr><tr><td>Aquabike</td><td>11 € la séance</td></tr><tr><td>Bébés nageurs</td><td>9 € par parent accompagnateur</td></tr><tr><td>Natation adultes</td><td>126 € les 10 séances</td></tr></tbody></table></figure>
<!-- /wp:table -->
<!-- /wp:balneo/container -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Autres univers</h2>
<!-- /wp:heading -->

<!-- wp:balneo/rich-text {"tagName":"div","content":"<a class=\"link-card\" href=\"/salle-de-sport/\"><i class=\"fa-solid fa-dumbbell\" aria-hidden=\"true\"></i><h2>Espace For.Me</h2><p>Séances et abonnements.</p><span>Voir les tarifs →</span></a><a class=\"link-card\" href=\"/massages/\"><i class=\"fa-solid fa-spa\" aria-hidden=\"true\"></i><h2>Massages</h2><p>Prestations avec ou sans Balnéo.</p><span>Voir la carte →</span></a><a class=\"link-card\" href=\"/parc-ete/\"><i class=\"fa-solid fa-water-ladder\" aria-hidden=\"true\"></i><h2>Parc été</h2><p>Pass journée et tarifs enfants.</p><span>Voir les tarifs →</span></a>","htmlAttributes":{"class":"link-grid"}} /-->

<!-- wp:paragraph -->
<p><a class="btn btn--filled" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a></p>
<!-- /wp:paragraph -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
<!-- /wp:balneo/container -->
BALNEO_TARIFS_CONTENT,
    ),
);
