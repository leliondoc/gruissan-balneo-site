<?php
/** Contenus initiaux Gutenberg issus de la maquette validée. @package BalneoV2 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

return array(
    'accueil' => array(
        'title' => 'Accueil',
        'content' => <<<'BALNEO_ACCUEIL_CONTENT'
<!-- wp:freeform -->
<div class="info-banner">
    <div class="container"><span class="info-banner__message"><strong>Accès des mineurs à la Balnéo :</strong> du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.</span>
      <button class="info-banner__close" aria-label="Fermer">&times;</button>
    </div>
  </div>

<main>
  <section class="hero">
    <div class="hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp" alt="Bassin intérieur de l’Espace Balnéo de Gruissan" loading="eager" fetchpriority="high">
    </div>
    <div class="hero__veil"></div>
    <div class="hero__content fade-in">
      <p class="hero__kicker">Balnéo · Piscine · Soins · Sport</p>
      <h1 class="hero__title">Entrez dans<br>votre <em>parenthèse.</em></h1>
      <p class="hero__tagline">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
      <div class="btn-group">
        <a href="#experiences" class="btn btn--on-photo btn--filled">Explorer les espaces<i class="fa-solid fa-compass" aria-hidden="true"></i></a>
        <a href="/horaires/" class="text-link text-link--light">Voir les horaires <span>→</span></a>
      </div>
    </div>
    <div class="hero-seals" aria-label="Informations saison 2026">
      <div class="brand-seal brand-seal--open"><strong>Ouvert</strong><span>7j/7</span></div>
    </div>
    <a class="hero__scroll" href="#bienvenue"><span></span>Découvrir</a>
  </section>

  <nav class="quick-access" aria-label="Accès rapides">
    <a href="/horaires/"><span>01</span><strong>Horaires</strong><small>Préparer ma visite</small></a>
    <a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span>02</span><strong>Billetterie &amp; cadeaux</strong><small>Acheter en ligne</small></a>
    <a href="/acces-parking/"><span>03</span><strong>Venir à la Balnéo</strong><small>Accès &amp; parking</small></a>
  </nav>

  <section class="welcome section" id="bienvenue">
    <div class="container welcome__grid fade-in">
      <div>
        <p class="section__label">Bienvenue à Gruissan</p>
        <h2 class="display-title">Un rêve où se mêlent l'eau, le bois, la lumière et le sel.</h2>
      </div>
      <div class="welcome__copy">
        <p>À quelques pas de la Méditerranée, l'Espace Balnéo invite à ralentir. Des bassins chauffés à 32°C, des soins enveloppants et des activités pensées pour retrouver son rythme.</p>
        <p>Seul, à deux ou en famille, venez respirer, bouger et vous laisser porter.</p>
        <a href="/balneo/" class="text-link">Découvrir la Balnéo <span>→</span></a>
      </div>
    </div>
  </section>

  <section class="experience-section" id="experiences">
    <div class="container section-heading fade-in">
      <div>
        <p class="section__label">Nos expériences</p>
        <h2 class="display-title">À chacun son horizon</h2>
      </div>
      <p>Des univers complémentaires, réunis autour d'une même envie : prendre soin de soi.</p>
    </div>
    <div class="experience-grid">
      <a href="/balneo/" class="experience-card experience-card--large fade-in">
        <img src="/wp-content/themes/balneo-v2/assets/photos/riviere.webp" alt="Rivière extérieure et bassins de l’Espace Balnéo">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se délasser</small><h3>Les bains &amp; la Balnéo</h3><p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="/massages/" class="experience-card fade-in">
        <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp" alt="Massage bien-être">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se retrouver</small><h3>Soins &amp; massages</h3><p>Des gestes enveloppants pour une profonde détente.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="/salle-de-sport/" class="experience-card fade-in">
        <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-tgn.webp" alt="Salle de sport For.Me">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se dépasser</small><h3>Sport &amp; aquasports</h3><p>Cardio, renforcement et activités aquatiques à votre rythme.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="/parc-ete/" class="experience-card experience-card--wide fade-in">
        <img src="/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp" alt="Parc aquatique paysager de Gruissan">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Partager</small><h3>Le parc été en famille</h3><p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p><span class="circle-arrow">→</span></div>
      </a>
    </div>
  </section>

  <section class="seasonal-section" aria-labelledby="seasonal-title" data-seasonal>
    <div class="container seasonal-heading fade-in">
      <p class="section__label">Au fil des saisons</p>
      <h2 class="display-title" id="seasonal-title">Une envie pour chaque saison</h2>
    </div>
    <div class="seasonal-slider">
      <div class="seasonal-slider__track">
        <article class="seasonal-slide seasonal-slide--spring" data-season="spring">
          <img src="/wp-content/themes/balneo-v2/assets/photos/aquagym.webp" alt="Cours d'aquagym dans le bassin extérieur">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-seedling"></i></span></div>
            <h3>Au printemps,<br>je retrouve mon rythme</h3>
            <a href="/aquagym/" class="btn btn--on-photo">Bouger dans l'eau<i class="fa-solid fa-person-swimming" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--summer" data-season="summer">
          <img src="/wp-content/themes/balneo-v2/assets/photos/parc-ete-upright.webp" alt="Familles profitant du parc aquatique en été">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-sun"></i></span></div>
            <h3>En été,<br>toute la famille se jette à l'eau</h3>
            <a href="/parc-ete/" class="btn btn--on-photo">Profiter du parc aquatique<i class="fa-solid fa-sun" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--fall" data-season="fall">
          <img src="/wp-content/themes/balneo-v2/assets/photos/dsc-0930.webp" alt="Massage relaxant à l'Espace Balnéo">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-leaf"></i></span></div>
            <h3>En automne,<br>je relâche les tensions</h3>
            <a href="/massages/" class="btn btn--on-photo">Découvrir les massages<i class="fa-solid fa-spa" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--winter" data-season="winter">
          <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="Espace Balnéo illuminé au crépuscule en hiver">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-snowflake"></i></span></div>
            <h3>En hiver,<br>je plonge dans la chaleur</h3>
            <a href="/balneo/" class="btn btn--on-photo">Explorer l'espace Balnéo<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
          </div>
        </article>
      </div>
    </div>
    <div class="seasonal-tabs" role="tablist" aria-label="Choisir une saison">
      <button class="seasonal-tab seasonal-tab--spring" type="button" role="tab" data-season-target="spring" aria-label="Afficher le printemps"><span aria-hidden="true"><i class="fa-solid fa-seedling"></i></span><strong>Printemps</strong></button>
      <button class="seasonal-tab seasonal-tab--summer" type="button" role="tab" data-season-target="summer" aria-label="Afficher l'été"><span aria-hidden="true"><i class="fa-solid fa-sun"></i></span><strong>Été</strong></button>
      <button class="seasonal-tab seasonal-tab--fall" type="button" role="tab" data-season-target="fall" aria-label="Afficher l'automne"><span aria-hidden="true"><i class="fa-solid fa-leaf"></i></span><strong>Automne</strong></button>
      <button class="seasonal-tab seasonal-tab--winter" type="button" role="tab" data-season-target="winter" aria-label="Afficher l'hiver"><span aria-hidden="true"><i class="fa-solid fa-snowflake"></i></span><strong>Hiver</strong></button>
    </div>
  </section>

  <section class="manifesto section" id="experience-balneo">
    <div class="manifesto__photo media-fill"><img src="/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp" alt="Bassins extérieurs et jets massants de l'Espace Balnéo"></div>
    <div class="manifesto__content fade-in">
      <p class="section__label">L'expérience Balnéo</p>
      <h2 class="display-title">Le corps s'apaise.<br>L'esprit s'évade.</h2>
      <p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
      <div class="manifesto__numbers">
        <div><strong>32°</strong><span>L'eau des bassins</span></div>
        <div><strong>5</strong><span>Univers à explorer</span></div>
        <div><strong>7j/7</strong><span>La salle For.Me</span></div>
      </div>
      <a href="/balneo/" class="btn">Entrer dans l'univers<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="section news-section">
    <div class="container">
      <div class="section-heading fade-in">
        <div><p class="section__label">En ce moment</p><h2 class="display-title">Les nouvelles de la Balnéo</h2></div>
        <a href="/actualites/" class="text-link">Toutes les actualités <span>→</span></a>
      </div>
      <div class="news-grid">
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp" alt="Ouverture du parc été">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">3 juin</p>
            <h3 class="news-card__title">Ouverture du parc été</h3>
            <p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
            <a href="/article-parc-ete/" class="news-card__link">Lire plus</a>
          </div>
        </article>
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp" alt="Stages de natation enfants">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">1 juin</p>
            <h3 class="news-card__title">Stages de natation enfants été</h3>
            <p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
            <a href="/article-stages-natation/" class="news-card__link">Lire plus</a>
          </div>
        </article>
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="/wp-content/themes/balneo-v2/assets/photos/sport.webp" alt="Rivière extérieure de l’Espace Balnéo">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">1 avril</p>
            <h3 class="news-card__title">Réouverture de la rivière extérieure</h3>
            <p class="news-card__excerpt">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
            <a href="/article-riviere/" class="news-card__link">Lire plus</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="section contact-section" id="contact">
    <div class="container">
      <div class="contact-grid fade-in">
        <div class="contact-info">
          <div class="section__header" style="text-align:left;margin-bottom:var(--space-md)">
            <p class="section__label">Contact</p>
            <h2 class="section__title">Nous contacter</h2>
          </div>
          <div class="contact-info__item">
            <p class="contact-info__label">Téléphone</p>
            <p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
          </div>
          <div class="contact-info__item">
            <p class="contact-info__label">E-mail</p>
            <p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
          </div>
          <div class="contact-info__item">
            <p class="contact-info__label">Adresse</p>
            <p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
          </div>
        </div>
        <div>
          <div class="section__header" style="text-align:left;margin-bottom:var(--space-md)">
            <p class="section__label">Newsletter</p>
            <h2 class="section__title">Inscrivez-vous</h2>
            <p style="font-size:0.9rem;color:var(--charcoal-soft);font-weight:300">Recevez les dernières actualités de l'Espace Balnéo par mail.</p>
          </div>
          [balneo_newsletter_form]
        </div>
      </div>
    </div>
  </section>
</main>
<!-- /wp:freeform -->
BALNEO_ACCUEIL_CONTENT,
    ),
    'acces-parking' => array(
        'title' => 'Accès & parking',
        'content' => <<<'BALNEO_ACCES_PARKING_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Accès &amp; parking</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <p>L'Espace Balnéo se situe avenue des Bains à Gruissan, à proximité immédiate des espaces sportifs et de loisirs.</p>
  <div class="info-box"><p class="info-box__title">Adresse</p><p><strong>Espace Balnéo de Gruissan</strong><br>Avenue des Bains<br>11430 Gruissan</p></div>
  <h2>Venir sur place</h2><div class="link-grid"><div class="link-card"><i class="fa-solid fa-car" aria-hidden="true"></i><h2>En voiture</h2><p>Suivez la direction de l'Espace Balnéo. Le stationnement se fait sur les zones prévues autour du site.</p></div><div class="link-card"><i class="fa-solid fa-person-walking" aria-hidden="true"></i><h2>À pied ou à vélo</h2><p>Rejoignez l'équipement par les cheminements locaux depuis les secteurs proches.</p></div></div>
  <p><a class="btn btn--filled" href="https://maps.google.fr/?saddr=&amp;daddr=43.1182048,3.11328202" target="_blank" rel="noopener">Ouvrir l'itinéraire<i class="fa-solid fa-route" aria-hidden="true"></i></a></p>
  <p>Pour une question d'accessibilité ou de dépose, contactez l'accueil avant votre venue.</p>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_ACCES_PARKING_CONTENT,
    ),
    'actualites' => array(
        'title' => 'Actualités',
        'content' => <<<'BALNEO_ACTUALITES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Informations</p>
      <h1 class="page-hero__title">Actualités</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container">
    <div class="news-grid">
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp" alt="Ouverture du parc été">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">3 juin</p>
          <h3 class="news-card__title">Ouverture du parc été</h3>
          <p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
          <a href="/article-parc-ete/" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp" alt="Stages de natation">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">1 juin</p>
          <h3 class="news-card__title">Stages de natation enfants été</h3>
          <p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
          <a href="/article-stages-natation/" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="/wp-content/themes/balneo-v2/assets/photos/riviere.webp" alt="Rivière extérieure">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">1 avril</p>
          <h3 class="news-card__title">Réouverture de la rivière extérieure</h3>
          <p class="news-card__excerpt">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
          <a href="/article-riviere/" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="/wp-content/themes/balneo-v2/assets/photos/maillots.webp" alt="Tenue de bain">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">2026</p>
          <h3 class="news-card__title">Tenue de bain</h3>
          <p class="news-card__excerpt">Rappel : shorts et jupes de bain interdits dans l'ensemble de l'établissement.</p>
        </div>
      </article>
    </div>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_ACTUALITES_CONTENT,
    ),
    'aquabike' => array(
        'title' => 'Aquabike',
        'content' => <<<'BALNEO_AQUABIKE_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Pratiquer</p>
      <h1 class="page-hero__title">Aquabike</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>À mi-chemin entre l'aquagym et le vélo en salle, l'Aquabike associe travail cardio et renforcement musculaire sur un vélo immergé, en petit groupe.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Séance de 45 minutes</li><li>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></li><li>Shorts et jupes de bain interdits</li><li>Pas de cours les jours fériés, sauf programme estival</li></ul></div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>11 €</td></tr><tr><td>12 séances — validité 1 an</td><td>121 €</td></tr><tr><td>24 séances — validité 1 an</td><td>231 €</td></tr></table></div>
    <p><a href="/aquagym/">Découvrir aussi l'Aquagym →</a></p>
  </div>
</section>
<div class="cta-band"><p>Réservez votre séance d'Aquabike par téléphone.</p><a class="btn" href="tel:+33468756050">Appeler le 04 68 75 60 50<i class="fa-solid fa-phone" aria-hidden="true"></i></a></div>
</main>
<!-- /wp:freeform -->
BALNEO_AQUABIKE_CONTENT,
    ),
    'aquagym' => array(
        'title' => 'Aquagym',
        'content' => <<<'BALNEO_AQUAGYM_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/aquagym.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Pratiquer</p>
      <h1 class="page-hero__title">Aquagym</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Un cours aquatique dynamique de 45 minutes pour travailler le cardio, les abdominaux, les jambes, les cuisses, les fessiers et le buste, avec des exercices adaptables au niveau de chacun.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></li><li>Shorts et jupes de bain interdits</li><li>Pas de cours les jours fériés, sauf programme estival</li><li>Pendant les vacances de la zone C : aquagym le mardi à 9h45</li></ul></div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>9 €</td></tr><tr><td>5 séances — validité 1 mois</td><td>41 €</td></tr><tr><td>10 séances — validité 1 an</td><td>81 €</td></tr><tr><td>Trimestre — hors été</td><td>105 €</td></tr></table></div>
    <p><a href="/aquabike/">Découvrir aussi l'Aquabike →</a></p>
  </div>
</section>
<div class="cta-band"><p>Réservez votre séance d'Aquagym par téléphone.</p><a class="btn" href="tel:+33468756050">Appeler le 04 68 75 60 50<i class="fa-solid fa-phone" aria-hidden="true"></i></a></div>
</main>
<!-- /wp:freeform -->
BALNEO_AQUAGYM_CONTENT,
    ),
    'article-parc-ete' => array(
        'title' => 'Ouverture du parc été',
        'content' => <<<'BALNEO_ARTICLE_PARC_ETE_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Actualité — 3 juin</p>
      <h1 class="page-hero__title">Ouverture du parc été</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
<p>L'été arrive ! À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<p>Venez profiter de nos bassins, toboggans et espaces de détente tout l'été, en famille ou entre amis ! Toute l'équipe se réjouit de vous accueillir.</p>
<p><a href="/parc-ete/">Découvrir le parc été →</a></p>
<p style="margin-top:var(--space-lg)"><a href="/actualites/" class="btn"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i>Toutes les actualités</a></p>
</div></section></main>
<!-- /wp:freeform -->
BALNEO_ARTICLE_PARC_ETE_CONTENT,
    ),
    'article-riviere' => array(
        'title' => 'Réouverture de la rivière extérieure',
        'content' => <<<'BALNEO_ARTICLE_RIVIERE_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/riviere.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Actualité — 1 avril</p>
      <h1 class="page-hero__title">Réouverture de la rivière extérieure</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
<p>Chers clients, nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo. Profitez-en dès maintenant pour vous détendre.</p>
<p>À très bientôt dans votre Espace Balnéo !</p>
<p style="margin-top:var(--space-lg)"><a href="/actualites/" class="btn"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i>Toutes les actualités</a></p>
</div></section></main>
<!-- /wp:freeform -->
BALNEO_ARTICLE_RIVIERE_CONTENT,
    ),
    'article-stages-natation' => array(
        'title' => 'Stages de natation enfants été',
        'content' => <<<'BALNEO_ARTICLE_STAGES_NATATION_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Actualité — 1 juin</p>
      <h1 class="page-hero__title">Stages de natation enfants été</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
<p>Inscriptions ouvertes ! Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<p>Niveau 1 : 9h à 9h45 ou 11h à 11h45 — Niveau 2 : 10h à 10h45. 8 enfants maximum par groupe.</p>
<p>Avant de réserver, contactez-nous au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<p><a href="/natation/">Voir les cours et stages de natation →</a></p>
<p style="margin-top:var(--space-lg)"><a href="/actualites/" class="btn"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i>Toutes les actualités</a></p>
</div></section></main>
<!-- /wp:freeform -->
BALNEO_ARTICLE_STAGES_NATATION_CONTENT,
    ),
    'balneo' => array(
        'title' => 'Balnéo',
        'content' => <<<'BALNEO_BALNEO_CONTENT'
<!-- wp:freeform -->
<div class="info-banner">
    <div class="container"><span class="info-banner__message"><strong>Période estivale :</strong> toute entrée Balnéo (10h–19h) donne accès au parc aqualudique (11h–18h) selon la durée choisie.</span>
      <button class="info-banner__close" aria-label="Fermer">&times;</button>
    </div>
  </div>
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Espace bien-être</p>
      <h1 class="page-hero__title">Accès à la Balnéo sans réservation</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <div class="info-box">
      <p class="info-box__title">Côté pratique</p>
      <ul>
        <li>Shorts et jupes de bain interdits</li>
        <li>Les enfants de moins de 18 ans doivent être accompagnés par un adulte en balnéo. Les enfants de moins de 3 ans ont accès uniquement aux trois alvéoles thématiques</li>
        <li>Les saunas et le hammam sont accessibles à partir de 16 ans</li>
        <li>Cheveux longs attachés — serviettes non fournies</li>
        <li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
        <li>En cas d'orage, les bassins extérieurs peuvent être fermés</li>
        <li>Moyens de paiement : espèces, CB, chèques ANCV (format papier)</li>
      </ul>
    </div>

    <h2>Tarifs</h2>
    <h3>Tarif forfait 2h30</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>Entrée 6 ans et + pour 2h30</td><td>23 €</td></tr>
      <tr><td>Entrée 3 à moins de 6 ans (sans toboggans)</td><td>11 €</td></tr>
      <tr><td>Entrée moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr>
      <tr><td>Dépassement de temps</td><td>9 €</td></tr>
    </table></div>

    <h3>Dernière heure (17h45 – 18h45)</h3>
    <p>11 €</p>

    <h3>Pass sans limite de temps</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>6 ans et +</td><td>29 €</td></tr>
      <tr><td>3 à moins de 6 ans (sans toboggans)</td><td>16 €</td></tr>
      <tr><td>Moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr>
    </table></div>

    <p>Avec l'entrée Balnéo, accès au bassin de nage de 25m aux horaires d'ouverture de celui-ci.</p>
    <p>Carte 10 entrées 2h30 : 180 € — Carte 20 entrées 2h30 : 350 € — Carte de 10 heures (nominative) : 105 €</p>
    <p>Pour l'achat d'1 entrée Balnéo : accès à l'espace Forme (même jour) : 6 €</p>

    <h2>Abonnements</h2>
    <h3>Balnéo + Piscine</h3>
    <div class="table-wrap"><table>
      <tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr>
      <tr><td>6 mois</td><td>350 €</td><td>580 €</td></tr>
      <tr><td>12 mois (-1 mois de vidange)</td><td>650 €</td><td>1 045 €</td></tr>
    </table></div>

    <h3>Balnéo + Piscine + For.Me</h3>
    <div class="table-wrap"><table>
      <tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr>
      <tr><td>6 mois</td><td>500 €</td><td>755 €</td></tr>
      <tr><td>12 mois (-1 mois de vidange)</td><td>930 €</td><td>1 395 €</td></tr>
    </table></div>
    <p>Avec un abonnement : remise de 50 % sur les activités et tarifs préférentiels sur les massages bien-être (sur réservation).</p>

    <h2>Envie de se détendre</h2>
    <div class="two-col" style="margin-top:var(--space-md)">
      <div>
        <h3>Bains et espace aquatique</h3>
        <p>Des bains et un espace aquatique pour une expérience sensorielle exclusive dans une eau à 32°C : jets massants, spas, rivière à courant, cascades.</p>
        <h3>Bassin nordique</h3>
        <p>Canons à eau, jets massants mollets/jambes/cuisses, zone d'apesanteur, canapé d'air, massages plantaires, 27 jets massants entre bains chauds et air frais, 2 spas.</p>
      </div>
      <div class="two-col__media media-fill">
        <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp" alt="Espace aquatique">
      </div>
    </div>
    <h3>Les saunas</h3>
    <p>Véritables institutions en Scandinavie, ils revigorent et détendent. Ils permettent d'éliminer les toxines et de nettoyer la peau.</p>
    <h3>Le hammam</h3>
    <p>Un bain de vapeur aux senteurs balsamiques, aux huiles essentielles d'eucalyptus, pour vous détendre et purifier votre peau.</p>
    <h3>Le frigidarium</h3>
    <p>Plongez-vous dans une eau froide, après le sauna ou le hammam, et bénéficiez d'un bain tonique et énergisant.</p>
    <h3>L'escale Gruissanaise</h3>
    <p>Bain lavande, bain vino, en clin d'œil aux Vignerons de Gruissan.</p>
  </div>
</section>
<div class="cta-band">
    <p>Achetez votre entrée Balnéo en ligne</p>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
    <p style="margin-top:0.75rem;font-size:0.75rem;opacity:0.7">Les e-billets ne sont pas nominatifs</p>
  </div>
</main>
<!-- /wp:freeform -->
BALNEO_BALNEO_CONTENT,
    ),
    'bebes-nageurs' => array(
        'title' => 'Bébés nageurs',
        'content' => <<<'BALNEO_BEBES_NAGEURS_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/bebe-nageur.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Pratiquer en famille</p>
      <h1 class="page-hero__title">Bébés nageurs</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Un premier contact avec l'eau à 32°C, en famille et sous le regard de nos maîtres-nageurs. La séance permet au tout-petit d'explorer le milieu aquatique à son rythme.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Pour les enfants de 5 à 36 mois</li><li>Le dimanche de 9h15 à 10h00</li><li>Vaccinations à jour et certificat médical de non contre-indication</li><li>1 parent accompagnateur minimum, 2 maximum</li><li>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></li></ul></div>
    <h2>Tarifs</h2><p>1 séance : <strong>9 € par parent accompagnateur</strong> — gratuit pour l'enfant.<br>Carte 10 séances : <strong>81 €</strong>, valable 1 an.</p>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_BEBES_NAGEURS_CONTENT,
    ),
    'brochures' => array(
        'title' => 'Brochures',
        'content' => <<<'BALNEO_BROCHURES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Brochures</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <p>Explorez nos univers comme dans une brochure, avec des informations maintenues à jour directement sur le site.</p>
  <div class="link-grid">
    <a class="link-card" href="/balneo/"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Guide Balnéo</h2><p>Bassins, chaleur, détente et conditions d'accès.</p><span>Consulter le guide →</span></a>
    <a class="link-card" href="/aquagym/"><i class="fa-solid fa-person-swimming" aria-hidden="true"></i><h2>Guide des activités</h2><p>Aquagym, Aquabike, Bébés nageurs et Natation.</p><span>Découvrir les activités →</span></a>
    <a class="link-card" href="/parc-ete/"><i class="fa-solid fa-sun" aria-hidden="true"></i><h2>Guide Parc été</h2><p>Espaces, services, règles et tarifs de la saison estivale.</p><span>Préparer sa journée →</span></a>
  </div>
  <div class="info-box"><p class="info-box__title">Besoin d'un document imprimable ?</p><p>Contactez l'accueil : l'équipe vous transmettra la documentation disponible pour votre demande.</p></div>
  <p><a class="btn" href="/contact/">Demander une brochure<i class="fa-solid fa-file-lines" aria-hidden="true"></i></a></p>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_BROCHURES_CONTENT,
    ),
    'contact' => array(
        'title' => 'Contact',
        'content' => <<<'BALNEO_CONTACT_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Nous contacter</p>
      <h1 class="page-hero__title">Contact</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in" style="text-align:center">
    <p>Vous pouvez nous contacter par téléphone, par e-mail ou nous rendre directement visite.</p>
    <div style="margin:var(--space-lg) 0">
      <p class="contact-info__label">Téléphone</p>
      <p style="font-size:1.5rem;font-weight:300"><a href="tel:+33468756050">04 68 75 60 50</a></p>
      <p class="contact-info__label" style="margin-top:var(--space-md)">E-mail</p>
      <p><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
      <p class="contact-info__label" style="margin-top:var(--space-md)">Adresse</p>
      <p>Avenue des Bains — 11430 Gruissan</p>
    </div>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
  </div>
</section>
<section class="section contact-section" id="contact">
    <div class="container">
      <div class="contact-grid fade-in">
        <div class="contact-info">
          <div class="section__header" style="text-align:left;margin-bottom:var(--space-md)">
            <p class="section__label">Contact</p>
            <h2 class="section__title">Nous contacter</h2>
          </div>
          <div class="contact-info__item">
            <p class="contact-info__label">Téléphone</p>
            <p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
          </div>
          <div class="contact-info__item">
            <p class="contact-info__label">E-mail</p>
            <p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
          </div>
          <div class="contact-info__item">
            <p class="contact-info__label">Adresse</p>
            <p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
          </div>
        </div>
        <div>
          <div class="section__header" style="text-align:left;margin-bottom:var(--space-md)">
            <p class="section__label">Newsletter</p>
            <h2 class="section__title">Inscrivez-vous</h2>
            <p style="font-size:0.9rem;color:var(--charcoal-soft);font-weight:300">Recevez les dernières actualités de l'Espace Balnéo par mail.</p>
          </div>
          [balneo_newsletter_form]
        </div>
      </div>
    </div>
  </section>
</main>
<!-- /wp:freeform -->
BALNEO_CONTACT_CONTENT,
    ),
    'donnees-personnelles' => array(
        'title' => 'Données personnelles',
        'content' => <<<'BALNEO_DONNEES_PERSONNELLES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Informations légales</p>
      <h1 class="page-hero__title">Données personnelles</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Conformément à la loi Informatique et Libertés du 6 janvier 1978 modifiée, et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et d'opposition aux données vous concernant.</p>
    <h2>Responsable du traitement</h2>
    <p>Le directeur de l'Espace Balnéoludique de Gruissan.<br>Pour exercer vos droits : espace.balneoludique@gruissan-mediterranee.com</p>
    <h2>Données collectées</h2>
    <p>Les données collectées via le formulaire d'inscription à la newsletter (prénom, nom, e-mail, code postal, ville) sont utilisées uniquement pour l'envoi d'actualités de l'Espace Balnéo.</p>
    <h2>Vidéosurveillance</h2>
    <p>L'espace For.Me est placé sous vidéosurveillance. Les enregistrements sont conservés 30 jours maximum, puis automatiquement effacés.</p>
    <h2>Cookies</h2>
    <p>Ce prototype statique n'utilise pas de cookies de tracking. La version WordPress pourra intégrer un bandeau de consentement conforme.</p>
    <p><a href="/reglement/">Règlement intérieur →</a></p>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_DONNEES_PERSONNELLES_CONTENT,
    ),
    'faq' => array(
        'title' => 'FAQ',
        'content' => <<<'BALNEO_FAQ_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/riviere.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Questions fréquentes</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <div class="faq-list">
    <details><summary>Faut-il réserver pour accéder à l'Espace Balnéo ?</summary><p>L'accès libre à la Balnéo ne nécessite pas de réservation. Les massages, hydromassages et activités encadrées sont proposés sur réservation.</p></details>
    <details><summary>Quelle tenue de bain est autorisée ?</summary><p>Les shorts et jupes de bain sont interdits. Les cheveux longs doivent être attachés.</p></details>
    <details><summary>Les serviettes sont-elles fournies ?</summary><p>Non, pensez à apporter votre serviette.</p></details>
    <details><summary>Les enfants peuvent-ils accéder à la Balnéo ?</summary><p>Les moins de 18 ans doivent être accompagnés d'un adulte. Les moins de 3 ans accèdent uniquement aux trois alvéoles thématiques. Les saunas et le hammam sont accessibles à partir de 16 ans.</p></details>
    <details><summary>Quels moyens de paiement sont acceptés ?</summary><p>Espèces, carte bancaire et chèques ANCV au format papier.</p></details>
    <details><summary>Où consulter les horaires et les tarifs ?</summary><p>Consultez les pages <a href="/horaires/">Horaires</a> et <a href="/tarifs/">Tarifs</a>. Pour une information du jour, appelez l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p></details>
    <details><summary>Comment venir et où stationner ?</summary><p>Retrouvez l'adresse, l'itinéraire et les informations de stationnement sur la page <a href="/acces-parking/">Accès &amp; parking</a>.</p></details>
  </div>
  <p><a class="btn" href="/contact/">Une autre question ?<i class="fa-solid fa-circle-question" aria-hidden="true"></i></a></p>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_FAQ_CONTENT,
    ),
    'horaires' => array(
        'title' => 'Horaires',
        'content' => <<<'BALNEO_HORAIRES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Horaires</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <p>Les horaires évoluent selon les espaces et les périodes de l'année. Retrouvez ici les repères essentiels avant votre venue.</p>
  <div class="pricing-grid"><div class="pricing-card"><p class="pricing-card__name">Espace For.Me</p><p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>6h–23h</p><p class="pricing-card__desc">7j/7 — dernier accès à 22h.</p></div><div class="pricing-card"><p class="pricing-card__name">Espace Balnéo — été</p><p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>10h–19h</p><p class="pricing-card__desc">Évacuation des bassins 15 minutes avant la fermeture.</p></div><div class="pricing-card"><p class="pricing-card__name">Parc été</p><p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>11h–18h</p><p class="pricing-card__desc">Ouverture saisonnière en juillet et août.</p></div></div>
  <div class="info-box"><p class="info-box__title">Horaires du jour</p><p>Pour les horaires hors saison, les jours fériés, les activités encadrées ou une fermeture technique, vérifiez auprès de l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p></div>
  <p><a class="btn" href="/contact/">Contacter l'accueil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_HORAIRES_CONTENT,
    ),
    'hydromassages' => array(
        'title' => 'Hydromassages',
        'content' => <<<'BALNEO_HYDROMASSAGES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-188.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Soins bien-être</p>
      <h1 class="page-hero__title">Hydromassages</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Accordez-vous un Rituel Océan Relax ou une séance d'hydromassage, installé confortablement sur une table à jets d'eau chaude.</p>
    <div class="info-box">
      <p class="info-box__title">Bon à savoir</p>
      <ul>
        <li>À partir de 15 ans — sur rendez-vous au <a href="tel:+33468756050">04 68 75 60 50</a></li>
        <li>Arriver 20 min avant pour prendre une douche</li>
      </ul>
    </div>
    <h2>La carte d'hydromassages</h2>
    <h3>Séance d'hydromassage (30 min)</h3>
    <p>Confortablement installé, habillé, profitez de l'action des jets d'eau pour relâcher les tensions musculaires et favoriser une profonde relaxation.</p>
    <h3>Rituel Océan Relax (60 ou 90 min)</h3>
    <p>30 min d'hydromassage suivi d'un massage manuel personnalisé de 30 ou 60 min.</p>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>30 min hydromassage sans balnéo</td><td>27 €</td></tr>
      <tr><td>60 min rituel océan sans balnéo</td><td>65 €</td></tr>
      <tr><td>90 min rituel océan sans balnéo</td><td>95 €</td></tr>
      <tr><td>60 min rituel + 2h30 balnéo</td><td>78 €</td></tr>
      <tr><td>90 min rituel + 2h30 balnéo</td><td>108 €</td></tr>
      <tr><td>60 min rituel + balnéo illimitée</td><td>85 €</td></tr>
      <tr><td>90 min rituel + balnéo illimitée</td><td>115 €</td></tr>
    </table></div>
    <p><a href="/massages/">Voir aussi : Massages</a></p>
  </div>
</section>
<div class="cta-band">
    <p>Réservez par téléphone au 04 68 75 60 50</p>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
    <p style="margin-top:0.75rem;font-size:0.75rem;opacity:0.7">Les e-billets ne sont pas nominatifs</p>
  </div>
</main>
<!-- /wp:freeform -->
BALNEO_HYDROMASSAGES_CONTENT,
    ),
    'infos-pratiques' => array(
        'title' => 'Infos pratiques',
        'content' => <<<'BALNEO_INFOS_PRATIQUES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Infos pratiques</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <p>Retrouvez en un coup d'œil toutes les informations nécessaires pour préparer votre venue.</p>
  <div class="link-grid">
    <a class="link-card" href="/horaires/"><i class="fa-solid fa-clock" aria-hidden="true"></i><h2>Horaires</h2><p>Consultez les horaires des différents espaces.</p><span>Voir les horaires →</span></a>
    <a class="link-card" href="/tarifs/"><i class="fa-solid fa-tag" aria-hidden="true"></i><h2>Tarifs</h2><p>Entrées, cartes, activités et abonnements.</p><span>Voir les tarifs →</span></a>
    <a class="link-card" href="/acces-parking/"><i class="fa-solid fa-route" aria-hidden="true"></i><h2>Accès &amp; parking</h2><p>Adresse, itinéraire et stationnement.</p><span>Préparer le trajet →</span></a>
    <a class="link-card" href="/brochures/"><i class="fa-solid fa-file-lines" aria-hidden="true"></i><h2>Brochures</h2><p>Les informations essentielles par univers.</p><span>Consulter les brochures →</span></a>
    <a class="link-card" href="/faq/"><i class="fa-solid fa-circle-question" aria-hidden="true"></i><h2>FAQ</h2><p>Les réponses aux questions les plus fréquentes.</p><span>Consulter la FAQ →</span></a>
    <a class="link-card" href="/contact/"><i class="fa-solid fa-envelope" aria-hidden="true"></i><h2>Contact</h2><p>Une question particulière ? Écrivez-nous ou appelez-nous.</p><span>Nous contacter →</span></a>
  </div>
  <div class="info-box"><p class="info-box__title">Avant d'entrer dans l'eau</p><ul><li>Shorts et jupes de bain interdits</li><li>Cheveux longs attachés</li><li>Serviettes non fournies</li><li>Évacuation des bassins 15 minutes avant la fermeture</li></ul></div>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_INFOS_PRATIQUES_CONTENT,
    ),
    'massages' => array(
        'title' => 'Massages',
        'content' => <<<'BALNEO_MASSAGES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-73.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Soins bien-être</p>
      <h1 class="page-hero__title">Massages</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Accordez-vous une parenthèse hors du temps, où chaque geste est pensé pour vous offrir une profonde relaxation, une harmonie intérieure et un véritable moment de lâcher-prise.</p>
    <div class="info-box">
      <p class="info-box__title">Bon à savoir</p>
      <ul>
        <li>Les massages se font <strong>sur rendez-vous</strong>, par téléphone au <a href="tel:+33468756050">04 68 75 60 50</a></li>
        <li>La durée indiquée comprend l'installation, l'entretien personnel et le massage</li>
        <li>Merci d'arriver 20 min avant votre massage afin de prendre une douche</li>
      </ul>
    </div>
    <h2>La carte des massages bien-être</h2>
    <div class="service-list">
      <div class="service-item"><div><p class="service-item__name">Détente anti-stress</p><p class="service-item__duration">30, 60 ou 90 min</p></div></div>
      <p class="service-item__desc">Massage profondément relaxant associant gestes lents, fluides et enveloppants à des manœuvres plus profondes.</p>
      <div class="service-item"><div><p class="service-item__name">Tonique et décontractant</p><p class="service-item__duration">30 ou 60 min</p></div></div>
      <p class="service-item__desc">Dynamisant et revitalisant, idéal pour les sportifs et la récupération musculaire.</p>
      <div class="service-item"><div><p class="service-item__name">Tête — Mains — Pieds</p><p class="service-item__duration">30 ou 60 min</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Harmonisation des énergies</p><p class="service-item__duration">60 ou 90 min</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Massage femme enceinte</p><p class="service-item__duration">30 ou 60 min — 4e au 8e mois</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Massage douceur enfant</p><p class="service-item__duration">5 à 14 ans — accompagné en cabine</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Rituel Océan Relax</p><p class="service-item__duration">60 ou 90 min — à partir de 15 ans</p></div></div>
      <p class="service-item__desc">30 min d'hydromassage + massage manuel personnalisé de 30 ou 60 min.</p>
    </div>
    <h2>Tarifs</h2>
    <h3>Massages bien-être avec 2h30 de balnéo</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>30 min + 2h30 balnéo</td><td>66 €</td></tr>
      <tr><td>60 min + 2h30 balnéo</td><td>83 €</td></tr>
      <tr><td>90 min + 2h30 balnéo</td><td>136 €</td></tr>
      <tr><td>Carte 6 massages 1h + 2h30 balnéo</td><td>450 €</td></tr>
    </table></div>
    <h3>Massages bien-être avec balnéo illimitée</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>30 min + balnéo illimitée</td><td>73 €</td></tr>
      <tr><td>60 min + balnéo illimitée</td><td>90 €</td></tr>
      <tr><td>90 min + balnéo illimitée</td><td>143 €</td></tr>
    </table></div>
    <p>Les massages peuvent être réalisés en duo dans notre cabine double (2 prestations à acheter). Le Rituel Océan Relax s'effectue en cabine simple uniquement.</p>
    <p><a href="/hydromassages/">Voir aussi : Hydromassages</a> · <a href="/recuperation/">Composer sa récupération</a></p>
  </div>
</section>
<div class="cta-band">
    <p>Réservez par téléphone au 04 68 75 60 50</p>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
    <p style="margin-top:0.75rem;font-size:0.75rem;opacity:0.7">Les e-billets ne sont pas nominatifs</p>
  </div>
</main>
<!-- /wp:freeform -->
BALNEO_MASSAGES_CONTENT,
    ),
    'mentions-legales' => array(
        'title' => 'Mentions légales',
        'content' => <<<'BALNEO_MENTIONS_LEGALES_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Informations légales</p>
      <h1 class="page-hero__title">Mentions légales</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <h2>Éditeur du site</h2>
    <p>Espace Balnéoludique de Gruissan<br>Avenue des Bains — 11430 Gruissan<br>Téléphone : 04 68 75 60 50<br>E-mail : espace.balneoludique@gruissan-mediterranee.com</p>
    <h2>Hébergement</h2>
    <p>Site prototype en cours de refonte. Version WordPress à venir.</p>
    <h2>Propriété intellectuelle</h2>
    <p>L'ensemble du contenu de ce site (textes, images, graphismes) est la propriété de l'Espace Balnéoludique de Gruissan ou de ses partenaires. Toute reproduction est interdite sans autorisation préalable.</p>
    <p>Photos : J.B. Roubinet — utilisées avec autorisation.</p>
    <h2>Crédits</h2>
    <p>&reg; D.B.G — Espace Balnéo de Gruissan</p>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_MENTIONS_LEGALES_CONTENT,
    ),
    'natation' => array(
        'title' => 'Natation',
        'content' => <<<'BALNEO_NATATION_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/stage-enfant.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Pratiquer</p>
      <h1 class="page-hero__title">Natation</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>De l'apprentissage au perfectionnement, les cours sont accessibles dès 5 ans avec des groupes adaptés au niveau des enfants, des adolescents et des adultes.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></li><li>Shorts et jupes de bain interdits</li><li>Bonnet de bain conseillé</li><li>Pas de cours pendant les vacances scolaires et les jours fériés, hors stages annoncés</li></ul></div>
    <h2>Cours à l'année</h2><p>Niveaux enfants : Cranquettes, Hippocampes, Dorades, Dauphins, Requins et Orques/Ados. Deux niveaux adultes sont proposés : perfectionnement et coaching.</p>
    <div class="table-wrap"><table><tr><th>Formule</th><th>Adultes</th><th>Enfants / ados</th></tr><tr><td>Carte 10 séances — 1 an</td><td>126 €</td><td>—</td></tr><tr><td>Carte 20 séances — 1 an</td><td>238 €</td><td>—</td></tr><tr><td>Abonnement annuel septembre–juin</td><td>295 €</td><td>185 €</td></tr></table></div>
    <h2>Stages</h2><p>Des stages de cinq séances consécutives sont proposés pendant les vacances de Pâques et d'été, pour les enfants à partir de 5 ans révolus. Consultez les actualités ou contactez l'accueil pour les prochaines dates.</p>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_NATATION_CONTENT,
    ),
    'parc-ete' => array(
        'title' => 'Parc été',
        'content' => <<<'BALNEO_PARC_ETE_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/parc-aquatique.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Parc aqualudique</p>
      <h1 class="page-hero__title">Parc été</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Ouvert uniquement juillet et août, 7j/7 de 11h00 à 18h00.</strong><br>
    Ouverture le 27 juin 2026 à 11h00 — Fermeture le 30 août 2026 à 18h00.</p>
    <div class="info-box">
      <p class="info-box__title">Côté pratique</p>
      <ul>
        <li>Shorts et jupes de bain interdits</li>
        <li>Cheveux longs attachés</li>
        <li>Lunettes de soleil, masques et lunettes interdits sur les toboggans</li>
        <li>1 pièce de 1 € ou 1 jeton pour les casiers</li>
        <li>Grignoterie ouverte de 11h à 17h</li>
        <li>Billetterie et entrée au bas du parking</li>
        <li>En cas d'orage, bassins extérieurs susceptibles d'être fermés</li>
        <li>L'entrée au parc (16 €) ne permet pas l'accès à la balnéo</li>
        <li>Interdiction de fumer au sein du parc</li>
      </ul>
    </div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>Pass journée (6 ans et +)</td><td>16 €</td></tr>
      <tr><td>Enfants - de 6 ans (sans toboggans)</td><td>6,50 €</td></tr>
      <tr><td>Enfants - de 3 ans (pataugeoires uniquement)</td><td>Gratuit</td></tr>
    </table></div>
    <h2>Vous trouverez</h2>
    <p>Rivière à courant, toboggans, pentagliss, pataugeoires avec jeux d'eau, bassin sportif intérieur, village de jeux gonflables (village Barberousse). Tous les bassins chauffés à 28°. Aire de pique-nique ombragée, espaces verts et transats. Restauration à la Grignoterie (11h–17h) ou pique-nique autorisé.</p>
  </div>
</section>
<div class="cta-band">
    <p>Achetez vos billets parc été en ligne</p>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
    <p style="margin-top:0.75rem;font-size:0.75rem;opacity:0.7">Les e-billets ne sont pas nominatifs</p>
  </div>
</main>
<!-- /wp:freeform -->
BALNEO_PARC_ETE_CONTENT,
    ),
    'privatisation' => array(
        'title' => 'Privatisation',
        'content' => <<<'BALNEO_PRIVATISATION_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/bassins-exterieurs.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Privatisation</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <p>Vous préparez un moment pour un groupe, une association, un club ou une entreprise ? L'équipe étudie avec vous les possibilités d'accueil selon votre projet, la période et les espaces disponibles.</p>
  <div class="link-grid"><div class="link-card"><i class="fa-solid fa-users" aria-hidden="true"></i><h2>Groupes</h2><p>Une demande adaptée au nombre de participants et au rythme souhaité.</p></div><div class="link-card"><i class="fa-solid fa-briefcase" aria-hidden="true"></i><h2>Entreprises</h2><p>Un cadre différent pour un temps d'équipe ou une parenthèse bien-être.</p></div><div class="link-card"><i class="fa-solid fa-medal" aria-hidden="true"></i><h2>Clubs</h2><p>Des pistes autour de l'activité, de la récupération et de la détente.</p></div></div>
  <h2>Construisons votre demande</h2><p>Indiquez la date envisagée, le nombre de participants, les espaces souhaités et vos contraintes horaires. L'équipe vous répondra sur la faisabilité et les conditions.</p>
  <p><a class="btn btn--filled" href="/contact/">Demander une privatisation<i class="fa-solid fa-users" aria-hidden="true"></i></a></p>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_PRIVATISATION_CONTENT,
    ),
    'recuperation' => array(
        'title' => 'Récupération',
        'content' => <<<'BALNEO_RECUPERATION_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/sport.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Se dépasser</p>
      <h1 class="page-hero__title">Récupération</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Après l'effort, accordez au corps un vrai temps de retour au calme. L'Espace Balnéo réunit plusieurs approches complémentaires pour relâcher les tensions et retrouver de bonnes sensations.</p>
    <div class="link-grid">
      <a class="link-card" href="/balneo/"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Eau &amp; chaleur</h2><p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p><span>Découvrir l'Espace Balnéo →</span></a>
      <a class="link-card" href="/hydromassages/"><i class="fa-solid fa-droplet" aria-hidden="true"></i><h2>Hydromassages</h2><p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p><span>Voir les hydromassages →</span></a>
      <a class="link-card" href="/massages/"><i class="fa-solid fa-hands" aria-hidden="true"></i><h2>Massage décontractant</h2><p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p><span>Voir les massages →</span></a>
    </div>
    <div class="info-box"><p class="info-box__title">Composer sa récupération</p><ul><li>Choisissez une intensité adaptée à votre état de forme</li><li>Hydratez-vous avant et après les espaces de chaleur</li><li>Les soins et hydromassages sont proposés sur rendez-vous</li></ul></div>
    <p><a class="btn" href="/contact/">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_RECUPERATION_CONTENT,
    ),
    'reglement' => array(
        'title' => 'Règlement intérieur',
        'content' => <<<'BALNEO_REGLEMENT_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/dsc-0451.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Informations légales</p>
      <h1 class="page-hero__title">Règlement intérieur</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>L'établissement est ouvert au public suivant l'horaire affiché dans le hall d'accueil. L'Office de Tourisme de Gruissan se réserve le droit de modifier les heures d'ouverture et conditions d'utilisation des bassins et des locaux lorsqu'il le juge nécessaire.</p>
    <h2>Conditions d'accès</h2>
    <ul>
      <li>Se conformer scrupuleusement aux consignes du personnel</li>
      <li>Shorts et jupes de bain interdits dans l'ensemble de l'établissement</li>
      <li>Cheveux longs attachés — serviettes non fournies</li>
      <li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
    </ul>
    <h2>Massages et soins bien-être</h2>
    <p>Nos prestations sont axées uniquement sur le bien-être et ne comportent aucun caractère médical et/ou thérapeutique. Un passage en douche est demandé à tous avant d'accéder à l'Espace Massage.</p>
    <ul>
      <li>Prestations sur rendez-vous uniquement</li>
      <li>Enfants de moins de 12 ans : massages de 30 minutes uniquement</li>
      <li>Enfants de moins de 15 ans : accompagnement d'un adulte en cabine obligatoire</li>
      <li>Femmes enceintes : massages entre le 4e et le 8e mois, 30 ou 60 minutes</li>
    </ul>
    <h2>Espace For.Me</h2>
    <p>L'espace For.Me est placé sous vidéosurveillance 24h/24 et 7j/7. Les données sont archivées durant 30 jours puis automatiquement effacées (loi informatique et libertés).</p>
    <h2>Modification des horaires et tarifs</h2>
    <p>La Direction se réserve le droit de modifier tout ou partie des horaires d'ouverture ou des tarifs, par affichage interne, avec un préavis.</p>
    <p><a href="/donnees-personnelles/">Données personnelles →</a></p>
  </div>
</section>
</main>
<!-- /wp:freeform -->
BALNEO_REGLEMENT_CONTENT,
    ),
    'salle-de-sport' => array(
        'title' => 'Salle For.Me',
        'content' => <<<'BALNEO_SALLE_DE_SPORT_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/balneo-37.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">For.Me</p>
      <h1 class="page-hero__title">S'entraîner / Se dépasser</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Cet espace est doté de machines dernière génération Wellness® développées par Technogym®. Que vous ayez un objectif précis ou que vous souhaitiez pratiquer une activité physique régulière, vous trouverez votre programme et votre rythme grâce au système Wellness®.</p>
    <div class="info-box">
      <p class="info-box__title">Infos pratiques</p>
      <ul>
        <li>Ouvert 6h00 – 23h00 (dernier accès 22h00), 7j/7</li>
        <li>Réservé aux majeurs (+18 ans) ou mineurs à partir de 16 ans accompagnés d'un adulte</li>
        <li>Billetterie à l'accueil de la Balnéo, tous les jours à partir de 9h00 (sauf mardi hors vacances scolaires)</li>
        <li>Paiement : espèces, CB, chèques ANCV</li>
      </ul>
    </div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>1 séance (jour même)</td><td>11 €</td></tr>
      <tr><td>Carte 10 séances (2 mois)</td><td>100 €</td></tr>
      <tr><td>Abonnement 3 mois</td><td>105 €</td></tr>
      <tr><td>Abonnement 6 mois</td><td>199 €</td></tr>
      <tr><td>Abonnement annuel</td><td>387 €</td></tr>
    </table></div>
    <h2>Abonnements composés</h2>
    <h3>Piscine + Salle (1 personne)</h3>
    <p>6 mois : 254 € — 12 mois (-1 mois vidange) : 485 €</p>
    <h3>Balnéo + Piscine + Salle</h3>
    <p>Remise 50 % sur activités aquatiques et tarifs préférentiels sur massages.</p>
    <div class="table-wrap"><table>
      <tr><th></th><th>6 mois</th><th>12 mois</th></tr>
      <tr><td>1 personne</td><td>500 €</td><td>930 €</td></tr>
      <tr><td>Couple</td><td>755 €</td><td>1 395 €</td></tr>
    </table></div>
  </div>
</section>
<div class="cta-band">
    <p>Achetez vos abonnements en ligne</p>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
    <p style="margin-top:0.75rem;font-size:0.75rem;opacity:0.7">Les e-billets ne sont pas nominatifs</p>
  </div>
</main>
<!-- /wp:freeform -->
BALNEO_SALLE_DE_SPORT_CONTENT,
    ),
    'tarifs' => array(
        'title' => 'Tarifs',
        'content' => <<<'BALNEO_TARIFS_CONTENT'
<!-- wp:freeform -->
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="/wp-content/themes/balneo-v2/assets/photos/gruissan-050.webp" alt="" loading="eager" fetchpriority="high">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Tarifs</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<section class="section section--light"><div class="container content-block fade-in">
  <p>Cette page rassemble les principaux tarifs. Les cartes détaillées et les conditions propres à chaque activité restent disponibles dans les pages correspondantes.</p>
  <h2>Espace Balnéo</h2><div class="table-wrap"><table><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 2h30 — 6 ans et plus</td><td>23 €</td></tr><tr><td>Entrée 2h30 — 3 à moins de 6 ans</td><td>11 €</td></tr><tr><td>Pass sans limite de temps — 6 ans et plus</td><td>29 €</td></tr><tr><td>Dernière heure</td><td>11 €</td></tr></table></div><p><a href="/balneo/">Voir tous les tarifs Balnéo et abonnements →</a></p>
  <h2>Activités</h2><div class="table-wrap"><table><tr><th>Activité</th><th>À partir de</th></tr><tr><td>Aquagym</td><td>9 € la séance</td></tr><tr><td>Aquabike</td><td>11 € la séance</td></tr><tr><td>Bébés nageurs</td><td>9 € par parent accompagnateur</td></tr><tr><td>Natation adultes</td><td>126 € les 10 séances</td></tr></table></div>
  <h2>Autres univers</h2><div class="link-grid"><a class="link-card" href="/salle-de-sport/"><i class="fa-solid fa-dumbbell" aria-hidden="true"></i><h2>Espace For.Me</h2><p>Séances et abonnements.</p><span>Voir les tarifs →</span></a><a class="link-card" href="/massages/"><i class="fa-solid fa-spa" aria-hidden="true"></i><h2>Massages</h2><p>Prestations avec ou sans Balnéo.</p><span>Voir la carte →</span></a><a class="link-card" href="/parc-ete/"><i class="fa-solid fa-water-ladder" aria-hidden="true"></i><h2>Parc été</h2><p>Pass journée et tarifs enfants.</p><span>Voir les tarifs →</span></a></div>
  <p><a class="btn btn--filled" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a></p>
</div></section>
</main>
<!-- /wp:freeform -->
BALNEO_TARIFS_CONTENT,
    ),
);
