<?php
/**
 * Gabarit des pages.
 *
 * @package BalneoV2
 */

get_header();

?>
<!-- Page intérieure : contenu éditorial administré dans Gutenberg -->
<?php
while ( have_posts() ) {
	the_post();
	$slug = get_post_field( 'post_name', get_the_ID() );

	if ( '' !== trim( (string) get_the_content() ) ) {
		if ( function_exists( 'balneo_v2_render_page_content' ) ) {
			balneo_v2_render_page_content();
		} else {
			the_content();
		}
	} elseif ( $slug && file_exists( get_theme_file_path( '/template-parts/pages/' . $slug . '.php' ) ) ) {
		get_template_part( 'template-parts/pages/' . $slug );
	} else {
		?>
		<main id="contenu-principal" tabindex="-1" class="section entry-content--standard">
			<article class="container entry-content">
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		</main>
		<?php
	}
}

?>
<!-- Fin du contenu éditorial de la page -->
<?php
get_footer();
