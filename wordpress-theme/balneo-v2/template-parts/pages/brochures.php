<?php
/**
 * Contenu importé de la maquette validée : brochures.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="hero-page">
    <div class="hero-page__media media-plein">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/bassins-exterieurs.webp' ) ); ?>" alt="" width="1600" height="900" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'bassins-exterieurs.webp' ) ); ?>" sizes="100vw">
    </div>
    <div class="hero-page__voile"></div>
    <div class="hero-page__contenu">
      <p class="hero-page__libelle">Préparer</p>
      <h1 class="hero-page__titre">Brochures</h1>
      <span class="filet-titre" aria-hidden="true"></span>
    </div>
  </section>
<section class="section-contenu section-contenu--claire"><div class="conteneur bloc-contenu apparition">
  <p>Explorez nos univers comme dans une brochure, avec des informations maintenues à jour directement sur le site.</p>
  <div class="grille-liens">
    <a class="carte-lien" href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Guide Balnéo</h2><p>Bassins, chaleur, détente et conditions d'accès.</p><span>Consulter le guide →</span></a>
    <a class="carte-lien" href="<?php echo esc_url( home_url( '/aquagym/' ) ); ?>"><i class="fa-solid fa-person-swimming" aria-hidden="true"></i><h2>Guide des activités</h2><p>Aquagym, Aquabike, Bébés nageurs et Natation.</p><span>Découvrir les activités →</span></a>
    <a class="carte-lien" href="<?php echo esc_url( home_url( '/parc-ete/' ) ); ?>"><i class="fa-solid fa-sun" aria-hidden="true"></i><h2>Guide Parc été</h2><p>Espaces, services, règles et tarifs de la saison estivale.</p><span>Préparer sa journée →</span></a>
  </div>
  <div class="encadre-info"><p class="encadre-info__titre">Besoin d'un document imprimable ?</p><p>Contactez l'accueil : l'équipe vous transmettra la documentation disponible pour votre demande.</p></div>
  <p><a class="bouton" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Demander une brochure<i class="fa-solid fa-file-lines" aria-hidden="true"></i></a></p>
</div></section>
</main>
