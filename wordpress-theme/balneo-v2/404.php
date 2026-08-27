<?php
/**
 * Page 404.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section">
    <div class="container entry-content" style="padding-block:var(--space-2xl);text-align:center">
        <p class="section__label"><?php esc_html_e( 'Erreur 404', 'balneo-v2' ); ?></p>
        <h1><?php esc_html_e( 'Cette page n’existe pas', 'balneo-v2' ); ?></h1>
        <p><a class="btn btn--filled" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Retour à l’accueil', 'balneo-v2' ); ?></a></p>
    </div>
</main>
<?php
get_footer();
