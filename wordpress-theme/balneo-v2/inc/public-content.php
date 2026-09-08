<?php
/**
 * Structure des pages et recherche dans les contenus publiés.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Garantit une zone principale sans imbriquer celles des pages historiques.
 *
 * @param string $content Contenu WordPress déjà rendu.
 * @param string $title Titre de la page.
 * @return string
 */
function balneo_v2_page_markup( string $content, string $title ): string {
	$tags = new WP_HTML_Tag_Processor( $content );
	if ( $tags->next_tag( 'MAIN' ) ) {
		$tags->set_attribute( 'id', 'contenu-principal' );
		$tags->set_attribute( 'tabindex', '-1' );
		return $tags->get_updated_html();
	}
	$headings = new WP_HTML_Tag_Processor( $content );
	$heading  = $headings->next_tag( 'H1' ) ? '' : '<h1>' . esc_html( $title ) . '</h1>';
	return '<main id="contenu-principal" tabindex="-1" class="section entry-content--standard"><article class="container entry-content">' . $heading . $content . '</article></main>';
}

/** Rend une page avec ses filtres WordPress et sa structure accessible. */
function balneo_v2_render_page_content(): void {
	$content = apply_filters( 'the_content', get_the_content() );
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Contenu filtré par WordPress, structure ajoutée et titre échappé dans page_markup.
	echo balneo_v2_page_markup( $content, get_the_title() );
}

/**
 * Ajoute l'ancre aux autres gabarits, y compris archives et erreurs.
 *
 * @param string $content HTML d'un groupe natif.
 * @return string
 */
function balneo_v2_main_group_anchor( string $content ): string {
	$tags = new WP_HTML_Tag_Processor( $content );
	if ( $tags->next_tag() && 'MAIN' === $tags->get_tag() ) {
		$tags->set_attribute( 'id', 'contenu-principal' );
		$tags->set_attribute( 'tabindex', '-1' );
	}
	return $tags->get_updated_html();
}
add_filter( 'render_block_core/group', 'balneo_v2_main_group_anchor', 30 );

/**
 * Extrait les textes des blocs sans exécuter de shortcode ou de requête externe.
 *
 * @param array $blocks Blocs Gutenberg.
 * @return string
 */
function balneo_v2_search_block_text( array $blocks ): string {
	$text = '';
	foreach ( $blocks as $block ) {
		$text .= ' ' . ( $block['innerHTML'] ?? '' );
		if ( 'balneo/rich-text' === ( $block['blockName'] ?? '' ) ) {
			$text .= ' ' . ( $block['attrs']['content'] ?? '' );
		}
		$text .= ' ' . balneo_v2_search_block_text( $block['innerBlocks'] ?? array() );
	}
	return wp_strip_all_tags( strip_shortcodes( $text ) );
}

/** Alimente la recherche depuis les seules pages publiées et non protégées. */
function balneo_v2_search_index(): void {
	$entries = get_transient( 'balneo_v2_search_index' );
	if ( false === $entries ) {
		$entries = array();
		$pages   = get_posts(
			array(
				'post_type'      => array( 'page', 'post' ),
				'post_status'    => 'publish',
				'has_password'   => false,
				'posts_per_page' => 500, // phpcs:ignore WordPress.WP.PostsPerPage.posts_per_page_posts_per_page -- Petit site, index borné et mis en cache une heure.
				'orderby'        => 'title',
				'order'          => 'ASC',
			)
		);
		foreach ( $pages as $page ) {
			// Aucun shortcode n'est exécuté pour construire l'index.
			$text      = balneo_v2_search_block_text( parse_blocks( $page->post_content ) );
			$text      = preg_replace( '/\s+/u', ' ', $text );
			$entries[] = array( get_the_title( $page ), get_permalink( $page ), $text );
		}
		set_transient( 'balneo_v2_search_index', $entries, HOUR_IN_SECONDS );
	}
	wp_add_inline_script( 'balneo-v2', 'window.BALNEO_SEARCH = ' . wp_json_encode( $entries, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT ) . ';', 'before' );
}
add_action( 'wp_enqueue_scripts', 'balneo_v2_search_index', 25 );

/** Invalide immédiatement l'index après une modification éditoriale. */
function balneo_v2_clear_search_index(): void {
	delete_transient( 'balneo_v2_search_index' );
}
add_action( 'save_post', 'balneo_v2_clear_search_index' );
add_action( 'deleted_post', 'balneo_v2_clear_search_index' );

/**
 * Applique la convention de ponctuation aux contenus historiques au rendu.
 *
 * @param string $content Texte ou HTML affiché.
 * @return string
 */
function balneo_v2_plain_punctuation( string $content ): string {
	return str_replace( array( "\u{2014}", '&mdash;', '&#8212;', '&#x2014;' ), ' - ', $content );
}
add_filter( 'the_content', 'balneo_v2_plain_punctuation', 99 );
add_filter( 'the_title', 'balneo_v2_plain_punctuation', 99 );

/**
 * Actualise les annonces historiques sans remplacer les autres blocs éditoriaux.
 *
 * @param string $content HTML du groupe.
 * @param array  $block Bloc WordPress.
 * @return string
 */
function balneo_v2_home_practical_content( string $content, array $block ): string {
	if ( ! is_front_page() ) {
		return $content;
	}
	$classes = explode( ' ', $block['attrs']['className'] ?? '' );
	if ( in_array( 'info-banner', $classes, true ) &&
		( ( str_contains( $content, '27 juin' ) && str_contains( $content, '30 août' ) && str_contains( $content, 'mineurs' ) ) ||
		str_contains( $content, 'Horaires et accès des mineurs' ) ) ) {
		$label = __( 'Horaires et accès des mineurs : consultez le programme de votre journée.', 'balneo-v2' );
		$today = balneo_v2_schedule_today();
		foreach ( balneo_v2_schedule_entries() as $entry ) {
			if ( 'balneo' !== $entry['id'] ) {
				continue;
			}
			$state = balneo_v2_schedule_state_for( $entry, $today );
			if ( empty( $state['hidden'] ) && ! empty( $state['time'] ) ) {
				$label = sprintf(
					/* translators: 1: date du jour, 2: créneau ou fermeture, 3: précision. */
					__( 'Balnéo le %1$s : %2$s. %3$s', 'balneo-v2' ),
					wp_date( 'j F', $today->getTimestamp(), $today->getTimezone() ),
					$state['time'],
					$state['note'] ?? ''
				);
			}
		}
		return '<div class="info-banner"><div class="container"><span class="info-banner__message"><a href="' . esc_url( home_url( '/horaires/' ) ) . '">' . esc_html( $label ) . '</a></span><button class="info-banner__close" type="button" aria-label="' . esc_attr__( 'Fermer', 'balneo-v2' ) . '">&times;</button></div></div>';
	}
	if ( in_array( 'brand-seal--open', $classes, true ) ) {
		$content = str_replace( '>Ouvert<', '>For.Me<', $content );
	}
	if ( in_array( 'news-section', $classes, true ) ) {
		$content = str_replace( 'En ce moment', 'Le journal', $content );
	}
	return $content;
}
add_filter( 'render_block_core/group', 'balneo_v2_home_practical_content', 25, 2 );
