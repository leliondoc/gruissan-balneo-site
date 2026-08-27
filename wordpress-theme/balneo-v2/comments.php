<?php
/**
 * Commentaires désactivés pour les pages institutionnelles Balnéo.
 *
 * @package BalneoV2
 */

if ( post_password_required() ) {
    return;
}

if ( have_comments() ) {
    ?>
    <section class="zone-commentaires conteneur">
        <h2><?php esc_html_e( 'Commentaires', 'balneo-v2' ); ?></h2>
        <ol class="liste-commentaires"><?php wp_list_comments(); ?></ol>
        <?php the_comments_navigation(); ?>
    </section>
    <?php
}

if ( comments_open() ) {
    comment_form();
}
