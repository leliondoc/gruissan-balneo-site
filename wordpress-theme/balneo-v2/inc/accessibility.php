<?php
/**
 * Corrections sémantiques des anciens blocs, sans réécrire les pages en base.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Complète uniquement les deux structures historiques identifiées par l'audit.
 *
 * @param string $content HTML du groupe Gutenberg.
 * @return string
 */
function balneo_v2_accessible_groups( string $content ): string {
	if ( str_contains( $content, 'hero-seals' ) ) {
		$tags = new WP_HTML_Tag_Processor( $content );
		while ( $tags->next_tag( array( 'class_name' => 'hero-seals' ) ) ) {
			if ( $tags->get_attribute( 'aria-label' ) && ! $tags->get_attribute( 'role' ) ) {
				$tags->set_attribute( 'role', 'group' );
			}
		}
		$content = $tags->get_updated_html();
	}
	if ( is_page( 'contact' ) && str_contains( $content, 'contact-info__label' ) &&
		preg_match( '/^\s*<section\b/', $content ) && ! preg_match( '/<h[1-6]\b/i', $content ) ) {
		$content = preg_replace_callback(
			'/^(\s*<section\b[^>]*>)/',
			static function ( $section_match ) {
				return $section_match[1] . '<h2 class="sr-only">' . esc_html__( 'Nos coordonnées', 'balneo-v2' ) . '</h2>';
			},
			$content,
			1
		);
	}
	return $content;
}
add_filter( 'render_block_core/group', 'balneo_v2_accessible_groups' );
