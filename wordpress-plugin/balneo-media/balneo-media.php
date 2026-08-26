<?php
/**
 * Plugin Name: Balnéo Médias
 * Description: Normalise les noms des images et convertit automatiquement les JPEG/PNG en WebP lors de leur ajout à la médiathèque.
 * Version: 1.0.1
 * Requires at least: 6.8
 * Requires PHP: 8.1
 * Author: Gruissan Méditerranée
 * Text Domain: balneo-media
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function balneo_media_clean_image_filename( $filename ) {
	$extension = strtolower( pathinfo( $filename, PATHINFO_EXTENSION ) );
	if ( ! in_array( $extension, array( 'jpg', 'jpeg', 'png', 'webp' ), true ) ) {
		return $filename;
	}

	$stem = pathinfo( $filename, PATHINFO_FILENAME );
	$stem = sanitize_title( remove_accents( $stem ) );
	$stem = preg_replace( '/-(?:copie|copy|final|nouveau|new)(?:-[0-9]+)?$/', '', $stem );

	if ( ! $stem || preg_match( '/^(?:img|dsc|dcim|photo|image|capture|screenshot|whatsapp)-?[0-9_-]*$/i', $stem ) ) {
		$number = preg_replace( '/\\D+/', '', $stem );
		$stem   = 'balneo-' . wp_date( 'Y-m-d' ) . ( $number ? '-' . $number : '' );
	}

	return $stem . '.' . $extension;
}
add_filter( 'sanitize_file_name', 'balneo_media_clean_image_filename', 20 );

function balneo_media_convert_upload_to_webp( $upload, $context ) {
	unset( $context );
	if ( ! empty( $upload['error'] ) || empty( $upload['file'] ) || empty( $upload['type'] ) ) {
		return $upload;
	}
	if ( ! in_array( $upload['type'], array( 'image/jpeg', 'image/png' ), true ) ) {
		return $upload;
	}

	$editor = wp_get_image_editor( $upload['file'] );
	if ( is_wp_error( $editor ) || ! $editor->supports_mime_type( 'image/webp' ) ) {
		return $upload;
	}

	$editor->set_quality( 82 );
	$directory       = dirname( $upload['file'] );
	$target_basename = preg_replace( '/\\.(?:jpe?g|png)$/i', '.webp', wp_basename( $upload['file'] ) );
	if ( file_exists( trailingslashit( $directory ) . $target_basename ) ) {
		$target_basename = wp_unique_filename( $directory, $target_basename );
	}
	$saved           = $editor->save( trailingslashit( $directory ) . $target_basename, 'image/webp' );
	if ( is_wp_error( $saved ) || empty( $saved['path'] ) ) {
		return $upload;
	}

	if ( wp_normalize_path( $saved['path'] ) !== wp_normalize_path( $upload['file'] ) ) {
		wp_delete_file( $upload['file'] );
	}

	$upload['file'] = $saved['path'];
	$upload['url']  = trailingslashit( dirname( $upload['url'] ) ) . wp_basename( $saved['path'] );
	$upload['type'] = 'image/webp';
	return $upload;
}
add_filter( 'wp_handle_upload', 'balneo_media_convert_upload_to_webp', 20, 2 );

function balneo_media_image_output_format( $formats ) {
	$formats['image/jpeg'] = 'image/webp';
	$formats['image/png']  = 'image/webp';
	return $formats;
}
add_filter( 'image_editor_output_format', 'balneo_media_image_output_format' );

function balneo_media_image_quality( $quality, $mime_type ) {
	return 'image/webp' === $mime_type ? 82 : $quality;
}
add_filter( 'wp_editor_set_quality', 'balneo_media_image_quality', 10, 2 );

function balneo_media_attachment_title( $data, $postarr ) {
	if ( empty( $postarr['post_mime_type'] ) || ! str_starts_with( $postarr['post_mime_type'], 'image/' ) ) {
		return $data;
	}

	if ( ! empty( $data['post_title'] ) ) {
		$title = str_replace( array( '-', '_' ), ' ', $data['post_title'] );
		$title = preg_replace( '/\\s+(?:copie|copy|final|nouveau|new)(?:\\s+[0-9]+)?$/iu', '', $title );
		$title = trim( $title );
		$data['post_title'] = function_exists( 'mb_convert_case' )
			? mb_convert_case( $title, MB_CASE_TITLE, 'UTF-8' )
			: ucwords( $title );
	}
	return $data;
}
add_filter( 'wp_insert_attachment_data', 'balneo_media_attachment_title', 10, 2 );

function balneo_media_site_health_tests( $tests ) {
	$tests['direct']['balneo_media_webp'] = array(
		'label' => __( 'Conversion WebP Balnéo', 'balneo-media' ),
		'test'  => 'balneo_media_webp_health_test',
	);
	return $tests;
}
add_filter( 'site_status_tests', 'balneo_media_site_health_tests' );

function balneo_media_webp_health_test() {
	$supported = wp_image_editor_supports( array( 'mime_type' => 'image/webp' ) );
	return array(
		'label'       => $supported
			? __( 'La conversion automatique WebP est disponible', 'balneo-media' )
			: __( 'La conversion automatique WebP est indisponible', 'balneo-media' ),
		'status'      => $supported ? 'good' : 'critical',
		'badge'       => array(
			'label' => __( 'Médias', 'balneo-media' ),
			'color' => 'blue',
		),
		'description' => $supported
			? '<p>' . esc_html__( 'Les JPEG et PNG ajoutés à la médiathèque sont renommés proprement et convertis en WebP.', 'balneo-media' ) . '</p>'
			: '<p>' . esc_html__( 'Le serveur ne fournit pas de moteur d’image compatible WebP. Les fichiers restent dans leur format d’origine.', 'balneo-media' ) . '</p>',
		'actions'     => '',
		'test'        => 'balneo_media_webp',
	);
}
