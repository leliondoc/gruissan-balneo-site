<?php
/**
 * Contenu importé de la maquette validée : horaires.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-188.webp' ) ); ?>" alt="" width="2560" height="1707" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'balneo-188.webp' ) ); ?>" sizes="100vw">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">Préparer</p>
      <h1 class="page-hero__title">Horaires</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>
<?php echo do_shortcode( '[balneo_daily_schedule]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Le module échappe son rendu. ?>
</main>
