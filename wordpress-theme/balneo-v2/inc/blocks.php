<?php
/**
 * Blocs Gutenberg structurels du thème.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Retourne une balise autorisée pour les blocs Balnéo.
 *
 * @param string $tag_name Balise demandée.
 * @return string
 */
function balneo_v2_block_tag( string $tag_name ): string {
	$allowed = array(
		'a',
		'article',
		'aside',
		'button',
		'details',
		'div',
		'figcaption',
		'figure',
		'footer',
		'h1',
		'h2',
		'h3',
		'h4',
		'h5',
		'h6',
		'header',
		'i',
		'label',
		'main',
		'nav',
		'p',
		'section',
		'small',
		'span',
		'strong',
		'summary',
		'time',
	);

	return in_array( $tag_name, $allowed, true ) ? $tag_name : 'div';
}

/**
 * Sérialise les attributs HTML conservés par la maquette.
 *
 * @param array<string, mixed> $attributes Attributs à sérialiser.
 * @return string
 */
function balneo_v2_block_html_attributes( array $attributes ): string {
	$output = '';

	foreach ( $attributes as $name => $value ) {
		$name = strtolower( (string) $name );
		if ( ! preg_match( '/^(?:aria-[a-z0-9_-]+|data-[a-z0-9_-]+|alt|class|fetchpriority|height|href|id|loading|rel|role|src|style|target|title|width)$/', $name ) ) {
			continue;
		}

		if ( true === $value ) {
			$output .= ' ' . esc_attr( $name );
			continue;
		}

		$value = (string) $value;
		if ( 'href' === $name || 'src' === $name ) {
			$value = esc_url( $value );
		} elseif ( 'style' === $name ) {
			$value = safecss_filter_attr( $value );
		} elseif ( 'class' === $name ) {
			$classes = preg_split( '/\s+/', $value );
			$value   = implode( ' ', array_filter( array_map( 'sanitize_html_class', false !== $classes ? $classes : array() ) ) );
		} else {
			$value = esc_attr( $value );
		}

		$output .= sprintf( ' %s="%s"', esc_attr( $name ), $value );
	}

	return $output;
}

/**
 * Rend un conteneur tout en conservant ses blocs internes éditables.
 *
 * @param array<string, mixed> $attributes Attributs du bloc.
 * @param string               $content    Blocs internes rendus.
 * @return string
 */
function balneo_v2_render_container_block( array $attributes, string $content ): string {
	$tag_name        = balneo_v2_block_tag( isset( $attributes['tagName'] ) ? (string) $attributes['tagName'] : 'div' );
	$html_attributes = isset( $attributes['htmlAttributes'] ) && is_array( $attributes['htmlAttributes'] ) ? $attributes['htmlAttributes'] : array();

	return sprintf( '<%1$s%2$s>%3$s</%1$s>', $tag_name, balneo_v2_block_html_attributes( $html_attributes ), $content );
}

/**
 * Rend un texte riche fidèle à sa balise d’origine.
 *
 * @param array<string, mixed> $attributes Attributs du bloc.
 * @return string
 */
function balneo_v2_render_rich_text_block( array $attributes ): string {
	$tag_name        = balneo_v2_block_tag( isset( $attributes['tagName'] ) ? (string) $attributes['tagName'] : 'span' );
	$html_attributes = isset( $attributes['htmlAttributes'] ) && is_array( $attributes['htmlAttributes'] ) ? $attributes['htmlAttributes'] : array();
	$content         = isset( $attributes['content'] ) ? wp_kses_post( (string) $attributes['content'] ) : '';

	return sprintf( '<%1$s%2$s>%3$s</%1$s>', $tag_name, balneo_v2_block_html_attributes( $html_attributes ), $content );
}

/**
 * Rend une image sans wrapper supplémentaire afin de préserver la maquette.
 *
 * @param array<string, mixed> $attributes Attributs du bloc.
 * @return string
 */
function balneo_v2_render_image_block( array $attributes ): string {
	$html_attributes        = isset( $attributes['htmlAttributes'] ) && is_array( $attributes['htmlAttributes'] ) ? $attributes['htmlAttributes'] : array();
	$html_attributes['src'] = isset( $attributes['src'] ) ? (string) $attributes['src'] : '';
	$html_attributes['alt'] = isset( $attributes['alt'] ) ? (string) $attributes['alt'] : '';

	return '<img' . balneo_v2_block_html_attributes( $html_attributes ) . '>';
}

/**
 * Enregistre les trois blocs nécessaires à la structure de la maquette.
 */
function balneo_v2_register_blocks(): void {
	register_block_type( get_theme_file_path( '/blocks/container' ), array( 'render_callback' => 'balneo_v2_render_container_block' ) );
	register_block_type( get_theme_file_path( '/blocks/rich-text' ), array( 'render_callback' => 'balneo_v2_render_rich_text_block' ) );
	register_block_type( get_theme_file_path( '/blocks/image' ), array( 'render_callback' => 'balneo_v2_render_image_block' ) );
}
add_action( 'init', 'balneo_v2_register_blocks' );

/**
 * Charge l’interface des blocs uniquement dans l’éditeur.
 */
function balneo_v2_enqueue_block_editor_assets(): void {
	$script_path = get_theme_file_path( '/blocks/editor.js' );
	wp_enqueue_script(
		'balneo-v2-blocks-editor',
		get_theme_file_uri( '/blocks/editor.js' ),
		array( 'wp-block-editor', 'wp-blocks', 'wp-components', 'wp-element', 'wp-i18n' ),
		file_exists( $script_path ) ? (string) filemtime( $script_path ) : BALNEO_V2_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'balneo_v2_enqueue_block_editor_assets' );
