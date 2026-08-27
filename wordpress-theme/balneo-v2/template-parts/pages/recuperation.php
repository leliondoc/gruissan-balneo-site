<?php
/**
 * Contenu importé de la maquette validée : recuperation.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/sport.webp' ) ); ?>" alt="" width="2560" height="1708" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'sport.webp' ) ); ?>" sizes="100vw">
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
      <a class="link-card" href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Eau &amp; chaleur</h2><p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p><span>Découvrir l'Espace Balnéo →</span></a>
      <a class="link-card" href="<?php echo esc_url( home_url( '/hydromassages/' ) ); ?>"><i class="fa-solid fa-droplet" aria-hidden="true"></i><h2>Hydromassages</h2><p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p><span>Voir les hydromassages →</span></a>
      <a class="link-card" href="<?php echo esc_url( home_url( '/massages/' ) ); ?>"><i class="fa-solid fa-hands" aria-hidden="true"></i><h2>Massage décontractant</h2><p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p><span>Voir les massages →</span></a>
    </div>
    <div class="info-box"><p class="info-box__title">Composer sa récupération</p><ul><li>Choisissez une intensité adaptée à votre état de forme</li><li>Hydratez-vous avant et après les espaces de chaleur</li><li>Les soins et hydromassages sont proposés sur rendez-vous</li></ul></div>
    <p><a class="btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
  </div>
</section>
</main>
