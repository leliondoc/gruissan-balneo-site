<?php
/**
 * Contenu importé de la maquette validée : faq.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/riviere.webp' ) ); ?>" alt="" width="2560" height="1440" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'riviere.webp' ) ); ?>" sizes="100vw">
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
    <details><summary>Où consulter les horaires et les tarifs ?</summary><p>Consultez les pages <a href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>">Horaires</a> et <a href="<?php echo esc_url( home_url( '/tarifs/' ) ); ?>">Tarifs</a>. Pour une information du jour, appelez l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p></details>
    <details><summary>Comment venir et où stationner ?</summary><p>Retrouvez l'adresse, l'itinéraire et les informations de stationnement sur la page <a href="<?php echo esc_url( home_url( '/acces-parking/' ) ); ?>">Accès &amp; parking</a>.</p></details>
  </div>
  <p><a class="btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Une autre question ?<i class="fa-solid fa-circle-question" aria-hidden="true"></i></a></p>
</div></section>
</main>
