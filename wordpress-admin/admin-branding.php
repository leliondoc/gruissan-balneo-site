<?php
/**
 * Identité visuelle de l’administration du thème Balnéo V2.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Charge l’habillage uniquement dans l’administration.
 */
function balneo_admin_branding_enqueue_admin_assets(): void {
	$stylesheet = get_theme_file_path( '/css/admin.css' );

	wp_enqueue_style(
		'balneo-admin-branding',
		get_theme_file_uri( '/css/admin.css' ),
		array(),
		file_exists( $stylesheet ) ? (string) filemtime( $stylesheet ) : BALNEO_V2_VERSION
	);
}
add_action( 'admin_enqueue_scripts', 'balneo_admin_branding_enqueue_admin_assets' );

/**
 * Charge l’habillage de l’écran de connexion.
 */
function balneo_admin_branding_enqueue_login_assets(): void {
	$stylesheet = get_theme_file_path( '/css/login.css' );

	wp_enqueue_style(
		'balneo-admin-branding-login',
		get_theme_file_uri( '/css/login.css' ),
		array(),
		file_exists( $stylesheet ) ? (string) filemtime( $stylesheet ) : BALNEO_V2_VERSION
	);
}
add_action( 'login_enqueue_scripts', 'balneo_admin_branding_enqueue_login_assets' );

/**
 * Renvoie le logo de connexion vers l’accueil du site.
 */
function balneo_admin_branding_login_url(): string {
	return home_url( '/' );
}
add_filter( 'login_headerurl', 'balneo_admin_branding_login_url' );

/**
 * Donne au logo de connexion un libellé accessible explicite.
 */
function balneo_admin_branding_login_title(): string {
	return 'Espace Balnéo de Gruissan';
}
add_filter( 'login_headertext', 'balneo_admin_branding_login_title' );

/**
 * Remplace la signature générique sans retirer la version WordPress.
 */
function balneo_admin_branding_footer_text(): string {
	return sprintf(
		'<span class="balneo-admin-signature">%1$s <a href="%2$s" target="_blank" rel="noopener">%3$s</a></span>',
		esc_html__( 'Administration', 'balneo-v2' ),
		esc_url( home_url( '/' ) ),
		esc_html__( 'Espace Balnéo de Gruissan', 'balneo-v2' )
	);
}
add_filter( 'admin_footer_text', 'balneo_admin_branding_footer_text' );

/**
 * Classe stable pour limiter strictement la portée du CSS.
 *
 * @param string $classes Classes existantes de l’administration.
 */
function balneo_admin_branding_body_class( string $classes ): string {
	return trim( $classes . ' balneo-admin-personnalise' );
}
add_filter( 'admin_body_class', 'balneo_admin_branding_body_class' );
