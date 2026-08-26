<?php
/**
 * Résultats de recherche.
 *
 * @package BalneoV2
 */

get_header();
?>
<main class="section"><div class="container entry-content">
<h1><?php /* translators: %s: search query. */ printf( esc_html__( 'Résultats pour « %s »', 'balneo-v2' ), esc_html( get_search_query() ) ); ?></h1>
<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
<article <?php post_class(); ?>><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><?php the_excerpt(); ?></article>
		<?php
	endwhile;
	the_posts_navigation(); else :
		?>
	<p><?php esc_html_e( 'Aucun résultat.', 'balneo-v2' ); ?></p><?php endif; ?>
</div></main>
<?php
get_footer();
