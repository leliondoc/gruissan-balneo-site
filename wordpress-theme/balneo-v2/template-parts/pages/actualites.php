<?php
/**
 * Contenu importé de la maquette validée : actualites.html.
 *
 * @package BalneoV2
 */

?>
<main>
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0451.webp' ) ); ?>" alt="" loading="eager" fetchpriority="high">
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
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/stage-enfant.webp' ) ); ?>" alt="Stages de natation">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">1 juin</p>
          <h3 class="news-card__title">Stages de natation enfants été</h3>
          <p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
          <a href="<?php echo esc_url( home_url( '/article-stages-natation/' ) ); ?>" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/riviere.webp' ) ); ?>" alt="Rivière extérieure">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">1 avril</p>
          <h3 class="news-card__title">Réouverture de la rivière extérieure</h3>
          <p class="news-card__excerpt">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
          <a href="<?php echo esc_url( home_url( '/article-riviere/' ) ); ?>" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/maillots.webp' ) ); ?>" alt="Tenue de bain">
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
