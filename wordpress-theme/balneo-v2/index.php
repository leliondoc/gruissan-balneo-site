<?php
/**
 * Gabarit de secours WordPress.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section-contenu">
    <div class="conteneur contenu-entree">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h1><?php esc_html_e( 'Aucun contenu', 'balneo-v2' ); ?></h1>
        <?php endif; ?>
    </div>
</main>
<?php
get_footer();
