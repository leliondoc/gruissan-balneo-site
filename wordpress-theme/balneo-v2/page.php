<?php
/**
 * Gabarit des pages.
 *
 * @package BalneoV2
 */

get_header();

while ( have_posts() ) {
    the_post();
    $slug = get_post_field( 'post_name', get_the_ID() );

    if ( '' !== trim( (string) get_the_content() ) ) {
        the_content();
    } elseif ( $slug && file_exists( get_theme_file_path( '/template-parts/pages/' . $slug . '.php' ) ) ) {
        get_template_part( 'template-parts/pages/' . $slug );
    } else {
        ?>
        <main class="section-contenu">
            <article class="conteneur contenu-entree">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </article>
        </main>
        <?php
    }
}

get_footer();
