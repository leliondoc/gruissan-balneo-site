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
		if ( ! preg_match( '/^(?:aria-[a-z0-9_-]+|data-[a-z0-9_-]+|alt|class|decoding|fetchpriority|height|href|id|loading|rel|role|sizes|src|srcset|style|target|title|width)$/', $name ) ) {
			continue;
		}

		if ( true === $value ) {
			$output .= ' ' . esc_attr( $name );
			continue;
		}

		$value = (string) $value;
		if ( 'href' === $name || 'src' === $name ) {
			$value = esc_url( $value );
		} elseif ( 'srcset' === $name ) {
			$candidates = array();
			foreach ( explode( ',', $value ) as $candidate ) {
				if ( preg_match( '/^\s*(\S+)\s+(\d+)w\s*$/', $candidate, $matches ) ) {
					$url = esc_url( $matches[1] );
					if ( $url ) {
						$candidates[] = $url . ' ' . absint( $matches[2] ) . 'w';
					}
				}
			}
			$value = implode( ', ', $candidates );
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
 * Réinjecte les rares attributs HTML conservés dans les métadonnées d'un Groupe.
 *
 * Les éditeurs manipulent ainsi un bloc Groupe natif et non une balise technique,
 * tandis que le rendu public conserve les liens, rôles et attributs de la maquette.
 *
 * @param string               $block_content HTML rendu du bloc.
 * @param array<string, mixed> $block         Bloc analysé.
 * @return string
 */
function balneo_v2_render_core_group_attributes( string $block_content, array $block ): string {
	$metadata   = isset( $block['attrs']['metadata'] ) && is_array( $block['attrs']['metadata'] ) ? $block['attrs']['metadata'] : array();
	$attributes = isset( $metadata['balneoAttributes'] ) && is_array( $metadata['balneoAttributes'] ) ? $metadata['balneoAttributes'] : array();
	if ( ! $attributes || ! class_exists( 'WP_HTML_Tag_Processor' ) ) {
		return $block_content;
	}

	$processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $processor->next_tag() ) {
		return $block_content;
	}

	foreach ( $attributes as $name => $value ) {
		$name = strtolower( (string) $name );
		if ( ! preg_match( '/^(?:aria-[a-z0-9_-]+|data-[a-z0-9_-]+|href|rel|role|target|title|type)$/', $name ) ) {
			continue;
		}

		if ( 'href' === $name ) {
			$value = esc_url_raw( (string) $value );
		} elseif ( 'target' === $name ) {
			$value = (string) $value;
			if ( ! in_array( $value, array( '_blank', '_self', '_parent', '_top' ), true ) ) {
				continue;
			}
		} elseif ( 'rel' === $name ) {
			$tokens = preg_split( '/\s+/', (string) $value, -1, PREG_SPLIT_NO_EMPTY );
			$value  = implode( ' ', array_filter( array_map( 'sanitize_key', false !== $tokens ? $tokens : array() ) ) );
		} elseif ( in_array( $name, array( 'role', 'type' ), true ) ) {
			$value = sanitize_key( (string) $value );
		} else {
			$value = sanitize_text_field( (string) $value );
		}

		$processor->set_attribute( $name, $value );
	}

	return $processor->get_updated_html();
}
add_filter( 'render_block_core/group', 'balneo_v2_render_core_group_attributes', 10, 2 );

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

	if ( empty( $html_attributes['srcset'] ) && str_contains( $html_attributes['src'], '/assets/photos/' ) ) {
		$srcset = balneo_v2_theme_image_srcset( wp_basename( (string) wp_parse_url( $html_attributes['src'], PHP_URL_PATH ) ) );
		if ( $srcset ) {
			$html_attributes['srcset'] = $srcset;
			$html_attributes['sizes']  = 'high' === ( $html_attributes['fetchpriority'] ?? '' ) ? '100vw' : '(max-width: 760px) 100vw, 50vw';
		}
	}

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
