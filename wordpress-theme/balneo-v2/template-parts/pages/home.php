<?php
/**
 * Contenu importé de la maquette validée : index.html.
 *
 * @package BalneoV2
 */

?>
<div class="info-banner">
    <div class="container"><span class="info-banner__message"><strong>Accès des mineurs à la Balnéo :</strong> du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.</span>
      <button class="info-banner__close" aria-label="Fermer">&times;</button>
    </div>
  </div>

<main>
  <section class="hero">
    <div class="hero__media media-fill">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-188.webp' ) ); ?>" alt="Bassin intérieur de l’Espace Balnéo de Gruissan" loading="eager" fetchpriority="high">
    </div>
    <div class="hero__veil"></div>
    <div class="hero__content fade-in">
      <p class="hero__kicker">Balnéo · Piscine · Soins · Sport</p>
      <h1 class="hero__title">Entrez dans<br>votre <em>parenthèse.</em></h1>
      <p class="hero__tagline">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
      <div class="btn-group">
        <a href="#experiences" class="btn btn--on-photo btn--filled">Explorer les espaces<i class="fa-solid fa-compass" aria-hidden="true"></i></a>
        <a href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>" class="text-link text-link--light">Voir les horaires <span>→</span></a>
      </div>
    </div>
    <div class="hero-seals" aria-label="Informations saison 2026">
      <div class="brand-seal brand-seal--open"><strong>Ouvert</strong><span>7j/7</span></div>
    </div>
    <a class="hero__scroll" href="#bienvenue"><span></span>Découvrir</a>
  </section>

  <nav class="quick-access" aria-label="Accès rapides">
    <a href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>"><span>01</span><strong>Horaires</strong><small>Préparer ma visite</small></a>
    <a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span>02</span><strong>Billetterie &amp; cadeaux</strong><small>Acheter en ligne</small></a>
    <a href="<?php echo esc_url( home_url( '/acces-parking/' ) ); ?>"><span>03</span><strong>Venir à la Balnéo</strong><small>Accès &amp; parking</small></a>
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
        <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="text-link">Découvrir la Balnéo <span>→</span></a>
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
      <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="experience-card experience-card--large fade-in">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/riviere.webp' ) ); ?>" alt="Rivière extérieure et bassins de l’Espace Balnéo">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se délasser</small><h3>Les bains &amp; la Balnéo</h3><p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/massages/' ) ); ?>" class="experience-card fade-in">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-73.webp' ) ); ?>" alt="Massage bien-être">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se retrouver</small><h3>Soins &amp; massages</h3><p>Des gestes enveloppants pour une profonde détente.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/salle-de-sport/' ) ); ?>" class="experience-card fade-in">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-tgn.webp' ) ); ?>" alt="Salle de sport For.Me">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se dépasser</small><h3>Sport &amp; aquasports</h3><p>Cardio, renforcement et activités aquatiques à votre rythme.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/parc-ete/' ) ); ?>" class="experience-card experience-card--wide fade-in">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/parc-aquatique.webp' ) ); ?>" alt="Parc aquatique paysager de Gruissan">
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
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/aquagym.webp' ) ); ?>" alt="Cours d'aquagym dans le bassin extérieur">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-seedling"></i></span></div>
            <h3>Au printemps,<br>je retrouve mon rythme</h3>
            <a href="<?php echo esc_url( home_url( '/aquagym/' ) ); ?>" class="btn btn--on-photo">Bouger dans l'eau<i class="fa-solid fa-person-swimming" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--summer" data-season="summer">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/parc-ete-upright.webp' ) ); ?>" alt="Familles profitant du parc aquatique en été">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-sun"></i></span></div>
            <h3>En été,<br>toute la famille se jette à l'eau</h3>
            <a href="<?php echo esc_url( home_url( '/parc-ete/' ) ); ?>" class="btn btn--on-photo">Profiter du parc aquatique<i class="fa-solid fa-sun" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--fall" data-season="fall">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0930.webp' ) ); ?>" alt="Massage relaxant à l'Espace Balnéo">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-leaf"></i></span></div>
            <h3>En automne,<br>je relâche les tensions</h3>
            <a href="<?php echo esc_url( home_url( '/massages/' ) ); ?>" class="btn btn--on-photo">Découvrir les massages<i class="fa-solid fa-spa" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--winter" data-season="winter">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/gruissan-050.webp' ) ); ?>" alt="Espace Balnéo illuminé au crépuscule en hiver">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-snowflake"></i></span></div>
            <h3>En hiver,<br>je plonge dans la chaleur</h3>
            <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="btn btn--on-photo">Explorer l'espace Balnéo<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
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
    <div class="manifesto__photo media-fill"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/bassins-exterieurs.webp' ) ); ?>" alt="Bassins extérieurs et jets massants de l'Espace Balnéo"></div>
    <div class="manifesto__content fade-in">
      <p class="section__label">L'expérience Balnéo</p>
      <h2 class="display-title">Le corps s'apaise.<br>L'esprit s'évade.</h2>
      <p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
      <div class="manifesto__numbers">
        <div><strong>32°</strong><span>L'eau des bassins</span></div>
        <div><strong>5</strong><span>Univers à explorer</span></div>
        <div><strong>7j/7</strong><span>La salle For.Me</span></div>
      </div>
      <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="btn">Entrer dans l'univers<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="section news-section">
    <div class="container">
      <div class="section-heading fade-in">
        <div><p class="section__label">En ce moment</p><h2 class="display-title">Les nouvelles de la Balnéo</h2></div>
        <a href="<?php echo esc_url( home_url( '/actualites/' ) ); ?>" class="text-link">Toutes les actualités <span>→</span></a>
      </div>
      <div class="news-grid">
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0451.webp' ) ); ?>" alt="Ouverture du parc été">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">3 juin</p>
            <h3 class="news-card__title">Ouverture du parc été</h3>
            <p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
            <a href="<?php echo esc_url( home_url( '/article-parc-ete/' ) ); ?>" class="news-card__link">Lire plus</a>
          </div>
        </article>
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/stage-enfant.webp' ) ); ?>" alt="Stages de natation enfants">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">1 juin</p>
            <h3 class="news-card__title">Stages de natation enfants été</h3>
            <p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
            <a href="<?php echo esc_url( home_url( '/article-stages-natation/' ) ); ?>" class="news-card__link">Lire plus</a>
          </div>
        </article>
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/sport.webp' ) ); ?>" alt="Rivière extérieure de l’Espace Balnéo">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">1 avril</p>
            <h3 class="news-card__title">Réouverture de la rivière extérieure</h3>
            <p class="news-card__excerpt">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
            <a href="<?php echo esc_url( home_url( '/article-riviere/' ) ); ?>" class="news-card__link">Lire plus</a>
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
          <?php echo do_shortcode( '[balneo_newsletter_form]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Sortie échappée dans le shortcode. ?>
        </div>
      </div>
    </div>
  </section>
</main>
