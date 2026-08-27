<?php
/**
 * Page 404.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section-contenu">
    <div class="conteneur contenu-entree" style="padding-block:var(--space-2xl);text-align:center">
        <p class="section-contenu__libelle"><?php esc_html_e( 'Erreur 404', 'balneo-v2' ); ?></p>
        <h1><?php esc_html_e( 'Cette page n’existe pas', 'balneo-v2' ); ?></h1>
        <p><a class="bouton bouton--plein" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Retour à l’accueil', 'balneo-v2' ); ?></a></p>
    </div>
</main>
<?php
get_footer();
