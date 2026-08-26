<?php
/**
 * Fonctions du thème Balnéo V2.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BALNEO_V2_VERSION', '1.3.2' );

require_once get_theme_file_path( '/inc/content.php' );
require_once get_theme_file_path( '/inc/class-balneo-v2-primary-menu-walker.php' );
require_once get_theme_file_path( '/inc/navigation.php' );
require_once get_theme_file_path( '/inc/forms.php' );
require_once get_theme_file_path( '/inc/redirects.php' );
require_once get_theme_file_path( '/inc/seo.php' );
require_once get_theme_file_path( '/inc/ai-discovery.php' );
require_once get_theme_file_path( '/inc/admin-branding.php' );

/**
 * Configure les fonctionnalités natives du thème.
 */
function balneo_v2_setup() {
	load_theme_textdomain( 'balneo-v2', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor.css' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 200,
			'width'       => 260,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
	register_nav_menus(
		array(
			'primary' => __( 'Navigation principale', 'balneo-v2' ),
			'footer'  => __( 'Navigation de pied de page', 'balneo-v2' ),
		)
	);
}
add_action( 'after_setup_theme', 'balneo_v2_setup' );

/**
 * Charge les feuilles de style et scripts publics.
 */
function balneo_v2_assets() {
	$style_path  = get_theme_file_path( '/css/styles.css' );
	$script_path = get_theme_file_path( '/js/main.js' );

	wp_enqueue_style(
		'balneo-v2-fontawesome',
		get_theme_file_uri( '/assets/vendor/fontawesome/css/all.min.css' ),
		array(),
		'6.7.2'
	);
	wp_enqueue_style(
		'balneo-v2',
		get_theme_file_uri( '/css/styles.css' ),
		array( 'balneo-v2-fontawesome' ),
		file_exists( $style_path ) ? (string) filemtime( $style_path ) : BALNEO_V2_VERSION
	);
	wp_enqueue_script(
		'balneo-v2',
		get_theme_file_uri( '/js/main.js' ),
		array(),
		file_exists( $script_path ) ? (string) filemtime( $script_path ) : BALNEO_V2_VERSION,
		true
	);
	wp_script_add_data( 'balneo-v2', 'strategy', 'defer' );
}
add_action( 'wp_enqueue_scripts', 'balneo_v2_assets' );

/**
 * Ajoute les classes de contexte nécessaires à la maquette.
 *
 * @param string[] $classes Classes WordPress existantes.
 * @return string[]
 */
function balneo_v2_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'is-home';
	}
	return $classes;
}
add_filter( 'body_class', 'balneo_v2_body_classes' );
