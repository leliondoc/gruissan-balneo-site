<?php
/**
 * Redirections des anciennes URL de la maquette statique.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Conserve les anciens liens HTML fonctionnels après le passage à WordPress.
 */
function balneo_v2_legacy_redirects(): void {
	if ( is_admin() || wp_doing_ajax() ) {
		return;
	}

	$request_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
	$path        = wp_parse_url( $request_uri, PHP_URL_PATH );
	if ( '/index.html' === $path ) {
		wp_safe_redirect( home_url( '/' ), 301 );
		exit;
	}

	if ( preg_match( '#^/pages/([a-z0-9-]+)\.html$#', (string) $path, $matches ) ) {
		$seeds = balneo_v2_content_seeds();
		if ( isset( $seeds[ $matches[1] ] ) ) {
			wp_safe_redirect( home_url( '/' . $matches[1] . '/' ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'balneo_v2_legacy_redirects' );
