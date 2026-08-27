<?php
/**
 * Page d'accueil.
 *
 * @package BalneoV2
 */

get_header();

?>
<!-- Page Accueil : contenu éditorial administré dans Gutenberg -->
<?php
while ( have_posts() ) {
    the_post();
    if ( '' !== trim( (string) get_the_content() ) ) {
        the_content();
    } else {
        get_template_part( 'template-parts/pages/home' );
    }
}

?>
<!-- Fin de la page Accueil -->
<?php
get_footer();
