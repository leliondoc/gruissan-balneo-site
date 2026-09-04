<?php
/**
 * Navigation pilotée par WordPress et logo personnalisable.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Crée le menu initial sans jamais remplacer un menu déjà assigné.
 */
function balneo_v2_seed_primary_navigation(): void {
	$locations = get_theme_mod( 'nav_menu_locations', array() );
	if ( ! empty( $locations['primary'] ) ) {
		return;
	}

	$menu_id = wp_create_nav_menu( __( 'Navigation principale Balnéo', 'balneo-v2' ) );
	if ( is_wp_error( $menu_id ) ) {
		$menu = wp_get_nav_menu_object( __( 'Navigation principale Balnéo', 'balneo-v2' ) );
		if ( ! $menu ) {
			return;
		}
		$menu_id = (int) $menu->term_id;
	}

	$groups = array(
		__( 'Se dépasser', 'balneo-v2' )  => array( 'salle-de-sport', 'recuperation' ),
		__( 'Lâcher-prise', 'balneo-v2' ) => array( 'massages', 'hydromassages', 'balneo' ),
		__( 'Pratiquer', 'balneo-v2' )    => array( 'aquagym', 'aquabike', 'bebes-nageurs', 'natation' ),
		__( 'S’amuser', 'balneo-v2' )     => array( 'parc-ete' ),
		__( 'Préparer', 'balneo-v2' )     => array( 'infos-pratiques', 'tarifs', 'brochures', 'horaires', 'privatisation', 'acces-parking', 'faq', 'contact' ),
	);

	foreach ( $groups as $group_title => $slugs ) {
		$parent_id = wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'  => $group_title,
				'menu-item-url'    => '#',
				'menu-item-status' => 'publish',
			)
		);

		if ( is_wp_error( $parent_id ) ) {
			continue;
		}

		foreach ( $slugs as $slug ) {
			$page = get_page_by_path( $slug, OBJECT, 'page' );
			if ( ! $page ) {
				continue;
			}

			wp_update_nav_menu_item(
				$menu_id,
				0,
				array(
					'menu-item-object-id' => $page->ID,
					'menu-item-object'    => 'page',
					'menu-item-parent-id' => $parent_id,
					'menu-item-type'      => 'post_type',
					'menu-item-status'    => 'publish',
				)
			);
		}
	}

	wp_update_nav_menu_item(
		$menu_id,
		0,
		array(
			'menu-item-title'   => __( 'Acheter', 'balneo-v2' ),
			'menu-item-url'     => 'https://gruissan-balneo.horanet.com/',
			'menu-item-target'  => '_blank',
			'menu-item-classes' => 'main-nav__booking',
			'menu-item-status'  => 'publish',
		)
	);

	$locations['primary'] = (int) $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}
add_action( 'after_switch_theme', 'balneo_v2_seed_primary_navigation', 20 );
add_action( 'init', 'balneo_v2_seed_primary_navigation', 30 );

/**
 * Affiche la navigation principale à l’emplacement de la maquette.
 */
function balneo_v2_primary_navigation(): void {
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'container'      => false,
			'items_wrap'     => '<ul class="main-nav">%3$s</ul>',
			'depth'          => 2,
			'fallback_cb'    => false,
			'walker'         => new Balneo_V2_Primary_Menu_Walker(),
		)
	);
}

/**
 * Affiche le logo WordPress personnalisé ou le logo officiel livré avec le thème.
 *
 * @param string $context Emplacement du logo : header ou footer.
 */
function balneo_v2_site_logo( string $context = 'header' ): void {
	$class   = 'footer' === $context ? 'footer-wordmark' : 'site-logo';
	$logo_id = (int) get_theme_mod( 'custom_logo' );
	?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="<?php echo esc_attr( $class ); ?>" aria-label="<?php esc_attr_e( 'Accueil — Espace Balnéo Gruissan', 'balneo-v2' ); ?>">
		<?php
		if ( $logo_id ) {
			echo wp_get_attachment_image(
				$logo_id,
				'full',
				false,
				array(
					'class'    => 'logo-img',
					'loading'  => 'eager',
					'decoding' => 'async',
				)
			); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		} else {
			?>
			<img class="logo-img" src="<?php echo esc_url( get_theme_file_uri( '/assets/logo-balneo-officiel.png' ) ); ?>" width="300" height="210" loading="eager" decoding="async" alt="<?php esc_attr_e( 'Espace Balnéo Gruissan', 'balneo-v2' ); ?>">
			<?php
		}
		?>
	</a>
	<?php
}
