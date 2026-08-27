<?php
/**
 * Contenu importé de la maquette validée : actualites.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="hero-page">
    <div class="hero-page__media media-plein">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0451.webp' ) ); ?>" alt="" width="1900" height="1068" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'dsc-0451.webp' ) ); ?>" sizes="100vw">
    </div>
    <div class="hero-page__voile"></div>
    <div class="hero-page__contenu">
      <p class="hero-page__libelle">Informations</p>
      <h1 class="hero-page__titre">Actualités</h1>
      <span class="filet-titre" aria-hidden="true"></span>
    </div>
  </section>
<section class="section-contenu section-contenu--claire">
  <div class="conteneur">
    <div class="grille-actualites">
      <article class="carte-actualite apparition">
        <div class="carte-actualite__media media-plein">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0451.webp' ) ); ?>" alt="Ouverture du parc été" width="1900" height="1068" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'dsc-0451.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        </div>
        <div class="carte-actualite__corps">
          <p class="carte-actualite__date">3 juin</p>
          <h3 class="carte-actualite__titre">Ouverture du parc été</h3>
          <p class="carte-actualite__extrait">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
          <a href="<?php echo esc_url( home_url( '/article-parc-ete/' ) ); ?>" class="carte-actualite__lien">Lire plus</a>
        </div>
      </article>
      <article class="carte-actualite apparition">
        <div class="carte-actualite__media media-plein">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/stage-enfant.webp' ) ); ?>" alt="Stages de natation" width="850" height="414" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'stage-enfant.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        </div>
        <div class="carte-actualite__corps">
          <p class="carte-actualite__date">1 juin</p>
          <h3 class="carte-actualite__titre">Stages de natation enfants été</h3>
          <p class="carte-actualite__extrait">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
          <a href="<?php echo esc_url( home_url( '/article-stages-natation/' ) ); ?>" class="carte-actualite__lien">Lire plus</a>
        </div>
      </article>
      <article class="carte-actualite apparition">
        <div class="carte-actualite__media media-plein">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/riviere.webp' ) ); ?>" alt="Rivière extérieure" width="2560" height="1440" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'riviere.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        </div>
        <div class="carte-actualite__corps">
          <p class="carte-actualite__date">1 avril</p>
          <h3 class="carte-actualite__titre">Réouverture de la rivière extérieure</h3>
          <p class="carte-actualite__extrait">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
          <a href="<?php echo esc_url( home_url( '/article-riviere/' ) ); ?>" class="carte-actualite__lien">Lire plus</a>
        </div>
      </article>
      <article class="carte-actualite apparition">
        <div class="carte-actualite__media media-plein">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/maillots.webp' ) ); ?>" alt="Tenue de bain" width="849" height="1273" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'maillots.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        </div>
        <div class="carte-actualite__corps">
          <p class="carte-actualite__date">2026</p>
          <h3 class="carte-actualite__titre">Tenue de bain</h3>
          <p class="carte-actualite__extrait">Rappel : shorts et jupes de bain interdits dans l'ensemble de l'établissement.</p>
        </div>
      </article>
    </div>
  </div>
</section>
</main>
