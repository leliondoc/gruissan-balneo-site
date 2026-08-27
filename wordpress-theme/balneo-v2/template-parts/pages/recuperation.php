<?php
/**
 * Contenu importé de la maquette validée : recuperation.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="hero-page">
    <div class="hero-page__media media-plein">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/sport.webp' ) ); ?>" alt="" width="2560" height="1708" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'sport.webp' ) ); ?>" sizes="100vw">
    </div>
    <div class="hero-page__voile"></div>
    <div class="hero-page__contenu">
      <p class="hero-page__libelle">Se dépasser</p>
      <h1 class="hero-page__titre">Récupération</h1>
      <span class="filet-titre" aria-hidden="true"></span>
    </div>
  </section>
<section class="section-contenu section-contenu--claire">
  <div class="conteneur bloc-contenu apparition">
    <p>Après l'effort, accordez au corps un vrai temps de retour au calme. L'Espace Balnéo réunit plusieurs approches complémentaires pour relâcher les tensions et retrouver de bonnes sensations.</p>
    <div class="grille-liens">
      <a class="carte-lien" href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Eau &amp; chaleur</h2><p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p><span>Découvrir l'Espace Balnéo →</span></a>
      <a class="carte-lien" href="<?php echo esc_url( home_url( '/hydromassages/' ) ); ?>"><i class="fa-solid fa-droplet" aria-hidden="true"></i><h2>Hydromassages</h2><p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p><span>Voir les hydromassages →</span></a>
      <a class="carte-lien" href="<?php echo esc_url( home_url( '/massages/' ) ); ?>"><i class="fa-solid fa-hands" aria-hidden="true"></i><h2>Massage décontractant</h2><p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p><span>Voir les massages →</span></a>
    </div>
    <div class="encadre-info"><p class="encadre-info__titre">Composer sa récupération</p><ul><li>Choisissez une intensité adaptée à votre état de forme</li><li>Hydratez-vous avant et après les espaces de chaleur</li><li>Les soins et hydromassages sont proposés sur rendez-vous</li></ul></div>
    <p><a class="bouton" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
  </div>
</section>
</main>
