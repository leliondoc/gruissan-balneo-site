<?php
/**
 * En-tête du thème Balnéo V2.
 *
 * @package BalneoV2
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="lien-evitement" href="#contenu-principal"><?php esc_html_e( 'Aller au contenu principal', 'balneo-v2' ); ?></a>
<header class="entete-site">
    <div class="barre-utilitaire">
      <div class="barre-utilitaire__interieur">
        <p><?php esc_html_e( 'Au cœur de Gruissan, entre mer et lagune', 'balneo-v2' ); ?></p>
        <nav aria-label="<?php esc_attr_e( 'Liens pratiques', 'balneo-v2' ); ?>">
          <a href="tel:+33468756050"><i class="fa-solid fa-phone icone-contexte" aria-hidden="true"></i>04 68 75 60 50</a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-envelope icone-contexte" aria-hidden="true"></i><?php esc_html_e( 'Contact', 'balneo-v2' ); ?></a>
          <a href="https://www.gruissan-mediterranee.com" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square icone-contexte" aria-hidden="true"></i><?php esc_html_e( 'Gruissan Tourisme', 'balneo-v2' ); ?></a>
        </nav>
      </div>
    </div>
    <div class="entete-site__interieur">
      <?php balneo_v2_site_logo( 'header' ); ?>
      <button class="bouton-navigation" type="button" aria-label="<?php esc_attr_e( 'Ouvrir le menu', 'balneo-v2' ); ?>" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <?php balneo_v2_primary_navigation(); ?>
    </div>
  </header>
