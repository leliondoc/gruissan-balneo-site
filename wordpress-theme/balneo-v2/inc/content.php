<?php
/**
 * Création et migration non destructive des pages éditables.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Retourne les contenus Gutenberg issus de la maquette validée.
 *
 * @return array<string, array{title: string, legacy_hash: string, content: string}>
 */
function balneo_v2_content_seeds(): array {
	$seed_file = get_theme_file_path( '/inc/content-seeds.php' );

	return file_exists( $seed_file ) ? require $seed_file : array();
}

/**
 * Crée les pages manquantes et ne remplit que celles dont le contenu est vide.
 */
function balneo_v2_seed_pages(): void {
	$seeds   = balneo_v2_content_seeds();
	$home_id = 0;

	foreach ( $seeds as $slug => $seed ) {
		$page             = get_page_by_path( $slug, OBJECT, 'page' );
		$content_migrated = false;

		if ( ! $page ) {
			$page_id = wp_insert_post(
				wp_slash(
					array(
						'post_title'   => $seed['title'],
						'post_name'    => $slug,
						'post_status'  => 'publish',
						'post_type'    => 'page',
						'post_content' => $seed['content'],
					)
				)
			);

			if ( is_wp_error( $page_id ) ) {
				continue;
			}

			$page             = get_post( $page_id );
			$content_migrated = true;
		} elseif ( '' === trim( (string) $page->post_content ) ) {
			wp_update_post(
				wp_slash(
					array(
						'ID'           => $page->ID,
						'post_content' => $seed['content'],
					)
				)
			);
			$page             = get_post( $page->ID );
			$content_migrated = true;
		} elseif ( has_block( 'balneo/container', (string) $page->post_content ) ) {
			$content_migrated = true;
		} elseif (
			isset( $seed['legacy_hash'] ) &&
			hash_equals( (string) $seed['legacy_hash'], hash( 'sha256', (string) $page->post_content ) )
		) {
			if ( ! get_post_meta( $page->ID, '_balneo_v2_pre_gutenberg_backup', true ) ) {
				update_post_meta( $page->ID, '_balneo_v2_pre_gutenberg_backup', (string) $page->post_content );
			}

			wp_update_post(
				wp_slash(
					array(
						'ID'           => $page->ID,
						'post_content' => $seed['content'],
					)
				)
			);
			$page             = get_post( $page->ID );
			$content_migrated = true;
		} else {
			update_post_meta( $page->ID, '_balneo_v2_gutenberg_migration_skipped', 'content-modified' );
		}

		if ( $page ) {
			update_post_meta( $page->ID, '_balneo_v2_seed_source', 'maquette-1.4' );
			if ( $content_migrated ) {
				update_post_meta( $page->ID, '_balneo_v2_content_schema', '2.0.0' );
				delete_post_meta( $page->ID, '_balneo_v2_gutenberg_migration_skipped' );
			}
			if ( 'accueil' === $slug ) {
				$home_id = (int) $page->ID;
			}
		}
	}

	if ( $home_id ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $home_id );
	}

	update_option( 'balneo_v2_content_schema_version', '2.0.0' );
}
add_action( 'after_switch_theme', 'balneo_v2_seed_pages', 10 );

/**
 * Applique la migration sur les installations où le thème était déjà actif.
 */
function balneo_v2_maybe_migrate_content(): void {
	if ( '2.0.0' === get_option( 'balneo_v2_content_schema_version' ) ) {
		return;
	}

	balneo_v2_seed_pages();
}
add_action( 'init', 'balneo_v2_maybe_migrate_content', 20 );

/**
 * Configure les permaliens uniquement au moment de l’activation du thème.
 */
function balneo_v2_activate_rewrites(): void {
	if ( ! get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
	}

	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'balneo_v2_activate_rewrites', 30 );
