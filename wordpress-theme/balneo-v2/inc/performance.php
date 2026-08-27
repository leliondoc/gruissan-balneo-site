<?php
/**
 * Optimisations légères du rendu public.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Retire les ressources historiques inutiles sur ce site institutionnel.
 */
function balneo_v2_remove_unneeded_frontend_assets(): void {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
}
add_action( 'init', 'balneo_v2_remove_unneeded_frontend_assets' );

/**
 * Complète les attributs des images gérées par la médiathèque WordPress.
 *
 * @param array<string, string> $attributes Attributs de l’image.
 * @return array<string, string>
 */
function balneo_v2_attachment_image_attributes( array $attributes ): array {
	$attributes['decoding'] = 'async';
	if ( empty( $attributes['loading'] ) && 'high' !== ( $attributes['fetchpriority'] ?? '' ) ) {
		$attributes['loading'] = 'lazy';
	}

	return $attributes;
}
add_filter( 'wp_get_attachment_image_attributes', 'balneo_v2_attachment_image_attributes' );

/**
 * Construit le srcset d’une photo embarquée dans le thème.
 *
 * @param string $filename Nom du fichier WebP principal.
 */
function balneo_v2_theme_image_srcset( string $filename ): string {
	$filename = sanitize_file_name( wp_basename( $filename ) );
	if ( ! str_ends_with( strtolower( $filename ), '.webp' ) ) {
		return '';
	}

	$base_name = substr( $filename, 0, -5 );
	$sources   = array();
	foreach ( array( 768, 1280 ) as $width ) {
		$variant = $base_name . '-' . $width . '.webp';
		if ( file_exists( get_theme_file_path( '/assets/photos/' . $variant ) ) ) {
			$sources[] = esc_url( get_theme_file_uri( '/assets/photos/' . $variant ) ) . ' ' . $width . 'w';
		}
	}

	$main_path = get_theme_file_path( '/assets/photos/' . $filename );
	$image     = file_exists( $main_path ) ? wp_getimagesize( $main_path ) : false;
	if ( $image && ! empty( $image[0] ) ) {
		$sources[] = esc_url( get_theme_file_uri( '/assets/photos/' . $filename ) ) . ' ' . absint( $image[0] ) . 'w';
	}

	return implode( ', ', $sources );
}
