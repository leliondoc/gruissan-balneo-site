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
 * @return array<string, array{title: string, legacy_hash: string, schema2_hash: string, content: string}>
 */
function balneo_v2_content_seeds(): array {
	$seed_file = get_theme_file_path( '/inc/content-seeds.php' );

	return file_exists( $seed_file ) ? require $seed_file : array();
}

/**
 * Retourne le nom éditorial d'un groupe à partir de ses classes historiques.
 *
 * @param string $tag_name   Balise du groupe.
 * @param string $class_name Classes du groupe.
 * @return string
 */
function balneo_v2_group_editor_name( string $tag_name, string $class_name ): string {
	$classes = preg_split( '/\s+/', $class_name, -1, PREG_SPLIT_NO_EMPTY );
	$classes = false !== $classes ? $classes : array();
	$labels  = array(
		'page-hero__media' => 'Image de couverture',
		'page-hero__content' => 'Contenu de la bannière',
		'page-hero' => 'Bannière de page',
		'hero__media' => 'Image d’accueil',
		'hero__content' => 'Introduction de l’accueil',
		'hero-seals' => 'Pastilles d’information',
		'quick-access' => 'Accès rapides',
		'content-block' => 'Contenu de la page',
		'info-box' => 'Encart d’information',
		'link-grid' => 'Grille de liens',
		'link-card' => 'Carte liée',
		'experience-grid' => 'Grille des expériences',
		'experience-card' => 'Carte expérience',
		'seasonal-section' => 'Sélection saisonnière',
		'seasonal-slide' => 'Carte saisonnière',
		'news-grid' => 'Grille des actualités',
		'news-card' => 'Carte actualité',
		'contact-grid' => 'Bloc contact',
		'two-col' => 'Deux colonnes',
		'faq-list' => 'Questions fréquentes',
		'section-heading' => 'En-tête de section',
		'section__header' => 'En-tête de section',
		'btn-group' => 'Boutons',
	);

	foreach ( $labels as $class => $label ) {
		if ( in_array( $class, $classes, true ) ) {
			return $label;
		}
	}

	$tag_labels = array(
		'main' => 'Contenu de la page',
		'section' => 'Section',
		'article' => 'Carte',
		'a' => 'Lien',
		'nav' => 'Navigation',
	);

	return $tag_labels[ $tag_name ] ?? '';
}

/**
 * Convertit les attributs d'un ancien conteneur en attributs du bloc Groupe.
 *
 * @param string               $tag_name        Balise d'origine.
 * @param array<string, mixed> $html_attributes Attributs HTML historiques.
 * @return array<string, mixed>
 */
function balneo_v2_core_group_attributes( string $tag_name, array $html_attributes ): array {
	$classes   = preg_split( '/\s+/', (string) ( $html_attributes['class'] ?? '' ), -1, PREG_SPLIT_NO_EMPTY );
	$classes   = false !== $classes ? $classes : array();
	$style_key = rtrim( (string) preg_replace( '/\s+/', '', (string) ( $html_attributes['style'] ?? '' ) ), ';' );
	$utilities = array(
		'text-align:left;margin-bottom:var(--space-md)' => array( 'balneo-align-left', 'balneo-space-bottom-md' ),
		'margin-top:var(--space-md)' => array( 'balneo-space-top-md' ),
		'text-align:center' => array( 'balneo-align-center' ),
		'margin:var(--space-lg)0' => array( 'balneo-space-y-lg' ),
	);
	if ( isset( $utilities[ $style_key ] ) ) {
		$classes = array_merge( $classes, $utilities[ $style_key ] );
	}
	$classes = array_values( array_unique( array_filter( array_map( 'sanitize_html_class', $classes ) ) ) );

	$metadata = array();
	$label    = balneo_v2_group_editor_name( $tag_name, implode( ' ', $classes ) );
	if ( $label ) {
		$metadata['name'] = $label;
	}

	$extra_attributes = array_diff_key( $html_attributes, array_flip( array( 'class', 'id', 'style' ) ) );
	if ( $extra_attributes ) {
		$metadata['balneoAttributes'] = $extra_attributes;
	}

	$attributes = array( 'layout' => array( 'type' => 'default' ) );
	if ( 'div' !== $tag_name ) {
		$attributes['tagName'] = $tag_name;
	}
	if ( ! empty( $html_attributes['id'] ) ) {
		$attributes['anchor'] = sanitize_title( (string) $html_attributes['id'] );
	}
	if ( $classes ) {
		$attributes['className'] = implode( ' ', $classes );
	}
	if ( $metadata ) {
		$attributes['metadata'] = $metadata;
	}

	return $attributes;
}

/**
 * Construit un bloc enveloppe sérialisable autour de blocs internes.
 *
 * @param string               $block_name  Nom du bloc.
 * @param array<string, mixed> $attributes  Attributs du bloc.
 * @param array<int, array>    $inner_blocks Blocs internes.
 * @param string               $opening      HTML ouvrant.
 * @param string               $closing      HTML fermant.
 * @return array<string, mixed>
 */
function balneo_v2_wrapped_block( string $block_name, array $attributes, array $inner_blocks, string $opening, string $closing ): array {
	$inner_content = array( $opening );
	foreach ( $inner_blocks as $index => $_inner_block ) {
		$inner_content[] = null;
		if ( $index < count( $inner_blocks ) - 1 ) {
			$inner_content[] = "\n\n";
		}
	}
	$inner_content[] = $closing;

	return array(
		'blockName' => $block_name,
		'attrs' => $attributes,
		'innerBlocks' => $inner_blocks,
		'innerHTML' => $opening . $closing,
		'innerContent' => $inner_content,
	);
}

/**
 * Convertit récursivement les anciens conteneurs techniques en blocs natifs.
 *
 * @param array<string, mixed> $block Bloc analysé par WordPress.
 * @return array<string, mixed>
 */
function balneo_v2_migrate_container_block( array $block ): array {
	if ( 'balneo/container' !== ( $block['blockName'] ?? '' ) ) {
		$block['innerBlocks'] = array_map( 'balneo_v2_migrate_container_block', $block['innerBlocks'] ?? array() );
		return $block;
	}

	$legacy_attributes = isset( $block['attrs']['htmlAttributes'] ) && is_array( $block['attrs']['htmlAttributes'] ) ? $block['attrs']['htmlAttributes'] : array();
	$tag_name          = balneo_v2_block_tag( (string) ( $block['attrs']['tagName'] ?? 'div' ) );
	$legacy_inner      = $block['innerBlocks'] ?? array();

	if ( 'details' === $tag_name ) {
		$summary = '';
		if ( isset( $legacy_inner[0] ) && 'balneo/rich-text' === ( $legacy_inner[0]['blockName'] ?? '' ) && 'summary' === ( $legacy_inner[0]['attrs']['tagName'] ?? '' ) ) {
			$summary = (string) ( $legacy_inner[0]['attrs']['content'] ?? '' );
			array_shift( $legacy_inner );
		}
		$inner_blocks = array_map( 'balneo_v2_migrate_container_block', $legacy_inner );
		return balneo_v2_wrapped_block(
			'core/details',
			array(),
			$inner_blocks,
			'<details class="wp-block-details"><summary>' . wp_kses_post( $summary ) . '</summary>',
			'</details>'
		);
	}

	$attributes   = balneo_v2_core_group_attributes( $tag_name, $legacy_attributes );
	$inner_blocks = array_map( 'balneo_v2_migrate_container_block', $legacy_inner );
	$class_name   = trim( 'wp-block-group ' . (string) ( $attributes['className'] ?? '' ) );
	$id_attribute = ! empty( $attributes['anchor'] ) ? ' id="' . esc_attr( (string) $attributes['anchor'] ) . '"' : '';
	$opening      = sprintf( '<%1$s%2$s class="%3$s">', $tag_name, $id_attribute, esc_attr( $class_name ) );

	return balneo_v2_wrapped_block( 'core/group', $attributes, $inner_blocks, $opening, '</' . $tag_name . '>' );
}

/**
 * Migre un contenu existant sans toucher à ses textes ni à ses médias.
 *
 * @param string $content Contenu Gutenberg historique.
 * @return string
 */
function balneo_v2_migrate_container_content( string $content ): string {
	$blocks = array_map( 'balneo_v2_migrate_container_block', parse_blocks( $content ) );
	return serialize_blocks( $blocks );
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
			$current_content = (string) $page->post_content;
			if ( ! get_post_meta( $page->ID, '_balneo_v2_pre_schema3_backup', true ) ) {
				update_post_meta( $page->ID, '_balneo_v2_pre_schema3_backup', $current_content );
			}

			$new_content = isset( $seed['schema2_hash'] ) && hash_equals( (string) $seed['schema2_hash'], hash( 'sha256', $current_content ) )
				? $seed['content']
				: balneo_v2_migrate_container_content( $current_content );

			wp_update_post(
				wp_slash(
					array(
						'ID' => $page->ID,
						'post_content' => $new_content,
					)
				)
			);
			$page             = get_post( $page->ID );
			$content_migrated = true;
		} elseif ( has_block( 'core/group', (string) $page->post_content ) ) {
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
			update_post_meta( $page->ID, '_balneo_v2_seed_source', 'maquette-gutenberg-3' );
			if ( $content_migrated ) {
				update_post_meta( $page->ID, '_balneo_v2_content_schema', '3.0.0' );
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

	update_option( 'balneo_v2_content_schema_version', '3.0.0' );
}
add_action( 'after_switch_theme', 'balneo_v2_seed_pages', 10 );

/**
 * Applique la migration sur les installations où le thème était déjà actif.
 */
function balneo_v2_maybe_migrate_content(): void {
	if ( '3.0.0' === get_option( 'balneo_v2_content_schema_version' ) ) {
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
