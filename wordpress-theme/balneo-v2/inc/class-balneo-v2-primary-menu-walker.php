<?php
/**
 * Walker de la navigation principale.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Conserve la structure visuelle de la maquette avec un menu WordPress éditable.
 */
class Balneo_V2_Primary_Menu_Walker extends Walker_Nav_Menu {
	/**
	 * Libellé du parent en cours.
	 *
	 * @var string
	 */
	private $parent_title = '';

	/**
	 * Ouvre le sous-menu courant.
	 *
	 * @param string   $output Sortie HTML accumulée.
	 * @param int      $depth  Profondeur du menu.
	 * @param stdClass $args   Arguments du menu.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ): void {
		$is_mega  = 0 === $depth && __( 'Lâcher-prise', 'balneo-v2' ) === $this->parent_title;
		$is_right = 0 === $depth && __( 'Préparer', 'balneo-v2' ) === $this->parent_title;
		$class    = 'dropdown';
		$class   .= $is_mega ? ' dropdown--mega' : '';
		$class   .= $is_right ? ' dropdown--right dropdown--practical' : '';
		$output  .= '<div class="' . esc_attr( $class ) . '">';
	}

	/**
	 * Ferme le sous-menu courant.
	 *
	 * @param string   $output Sortie HTML accumulée.
	 * @param int      $depth  Profondeur du menu.
	 * @param stdClass $args   Arguments du menu.
	 */
	public function end_lvl( &$output, $depth = 0, $args = null ): void {
		$output .= '</div>';
	}

	/**
	 * Affiche un élément de menu.
	 *
	 * @param string   $output Sortie HTML accumulée.
	 * @param WP_Post  $item   Élément de menu.
	 * @param int      $depth  Profondeur du menu.
	 * @param stdClass $args   Arguments du menu.
	 * @param int      $id     Identifiant historique inutilisé.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ): void {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes, true );
		$is_booking   = in_array( 'main-nav__booking', $classes, true );

		if ( 0 === $depth ) {
			$this->parent_title = (string) $item->title;
			$classes[]          = $has_children ? 'has-dropdown' : '';
			$classes[]          = $is_booking ? 'main-nav__booking' : '';
			$classes            = array_filter( array_map( 'sanitize_html_class', $classes ) );
			$output            .= '<li class="' . esc_attr( implode( ' ', array_unique( $classes ) ) ) . '">';

			if ( $has_children ) {
				$output .= '<button class="nav-link" type="button" aria-expanded="false">' . esc_html( $item->title ) . '</button>';
				return;
			}

			$attributes = ' href="' . esc_url( $item->url ) . '"';
			if ( '_blank' === $item->target ) {
				$attributes .= ' target="_blank" rel="noopener"';
			}
			$output .= '<a' . $attributes . '>' . esc_html( $item->title ) . '</a>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Attributs et libellé échappés séparément.
			return;
		}

		$slug = 'post_type' === $item->type ? (string) get_post_field( 'post_name', $item->object_id ) : '';
		if ( __( 'Lâcher-prise', 'balneo-v2' ) === $this->parent_title && in_array( $slug, array( 'massages', 'hydromassages', 'balneo' ), true ) ) {
			$cards   = array(
				'massages'      => array( 'dsc-0930.webp', __( 'Soin du corps', 'balneo-v2' ), __( 'Massages', 'balneo-v2' ), 'fa-calendar-check', __( 'Sur rendez-vous', 'balneo-v2' ) ),
				'hydromassages' => array( 'balneo-73.webp', __( 'Rituels & hydrojets', 'balneo-v2' ), __( 'Hydromassages', 'balneo-v2' ), 'fa-calendar-check', __( 'Sur rendez-vous', 'balneo-v2' ) ),
				'balneo'        => array( 'balneo-188.webp', __( 'Bains & chaleur', 'balneo-v2' ), __( 'Espace Balnéo', 'balneo-v2' ), 'fa-clock', __( 'Accès libre', 'balneo-v2' ) ),
			);
			$card    = $cards[ $slug ];
			$output .= sprintf(
				'<a class="mega-menu__card mega-menu__card--%1$s" href="%2$s"><img src="%3$s" alt=""><span class="mega-menu__veil" aria-hidden="true"></span><span class="mega-menu__content"><small>%4$s</small><strong>%5$s</strong><span class="mega-menu__meta"><i class="fa-regular %6$s" aria-hidden="true"></i>%7$s</span></span></a>',
				esc_attr( $slug ),
				esc_url( $item->url ),
				esc_url( get_theme_file_uri( '/assets/photos/' . $card[0] ) ),
				esc_html( $card[1] ),
				esc_html( $card[2] ),
				esc_attr( $card[3] ),
				esc_html( $card[4] )
			);
			return;
		}

		$output .= '<a href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
	}

	/**
	 * Ferme un élément de premier niveau.
	 *
	 * @param string   $output Sortie HTML accumulée.
	 * @param WP_Post  $item   Élément de menu.
	 * @param int      $depth  Profondeur du menu.
	 * @param stdClass $args   Arguments du menu.
	 */
	public function end_el( &$output, $item, $depth = 0, $args = null ): void {
		if ( 0 === $depth ) {
			$output .= '</li>';
		}
	}
}
