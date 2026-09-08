<?php
/**
 * Demandes privées de newsletter, conservation et protection contre les abus.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Enregistre un espace réservé aux administrateurs. */
function balneo_v2_register_newsletter_requests(): void {
	register_post_type(
		'balneo_nl_request',
		array(
			'labels'       => array(
				'name'          => __( 'Demandes newsletter', 'balneo-v2' ),
				'singular_name' => __( 'Demande newsletter', 'balneo-v2' ),
			),
			'public'       => false,
			'show_ui'      => true,
			'show_in_rest' => false,
			'rewrite'      => false,
			'query_var'    => false,
			'supports'     => array(),
			'map_meta_cap' => false,
			'capabilities' => array(
				'edit_post'              => 'manage_options',
				'read_post'              => 'manage_options',
				'delete_post'            => 'manage_options',
				'edit_posts'             => 'manage_options',
				'edit_others_posts'      => 'manage_options',
				'publish_posts'          => 'manage_options',
				'read_private_posts'     => 'manage_options',
				'delete_posts'           => 'manage_options',
				'delete_private_posts'   => 'manage_options',
				'delete_published_posts' => 'manage_options',
				'delete_others_posts'    => 'manage_options',
				'edit_private_posts'     => 'manage_options',
				'edit_published_posts'   => 'manage_options',
				'create_posts'           => 'do_not_allow',
			),
			'menu_icon'    => 'dashicons-email-alt',
		)
	);
	if ( ! wp_next_scheduled( 'balneo_v2_expire_newsletter_requests' ) ) {
		wp_schedule_event( time() + HOUR_IN_SECONDS, 'daily', 'balneo_v2_expire_newsletter_requests' );
	}
}
add_action( 'init', 'balneo_v2_register_newsletter_requests' );

/**
 * Réserve atomiquement une place dans une fenêtre fixe, même sans cache persistant.
 * Les clés ne contiennent ni adresse IP ni e-mail en clair et expirent avec les transients.
 *
 * @param string $scope Périmètre de limitation.
 * @param int    $limit Nombre maximal de demandes par fenêtre.
 * @param int    $seconds Durée de la fenêtre.
 * @return bool
 */
function balneo_v2_newsletter_rate_slot( string $scope, int $limit, int $seconds ): bool {
	$window = (int) floor( time() / $seconds );
	$hash   = hash_hmac( 'sha256', $scope . '|' . $window, wp_salt( 'nonce' ) );
	for ( $slot = 0; $slot < $limit; ++$slot ) {
		$key = 'balneo_nl_' . $hash . '_' . $slot;
		// add_option repose sur l'unicité SQL du nom, sans séquence lecture/écriture non atomique.
		add_option( '_transient_timeout_' . $key, ( $window + 1 ) * $seconds, '', false );
		if ( add_option( '_transient_' . $key, 1, '', false ) ) {
			return true;
		}
	}
	return false;
}

/**
 * Valide et conserve une demande avant toute tentative de notification.
 *
 * @param array  $input Champs du formulaire, après suppression des slashes WordPress.
 * @param string $remote_address Adresse du client fournie par le serveur.
 * @return bool Demande conservée, ou doublon déjà conservé.
 */
function balneo_v2_store_newsletter_request( array $input, string $remote_address ): bool {
	$limits = array(
		'prenom'       => 80,
		'nom'          => 80,
		'email'        => 254,
		'cp'           => 12,
		'ville'        => 120,
		'consentement' => 1,
		'website'      => 200,
	);
	$data   = array();
	foreach ( $limits as $key => $limit ) {
		$value = $input[ $key ] ?? '';
		if ( ! is_string( $value ) || strlen( $value ) > $limit * 4 || preg_match_all( '/./us', $value ) > $limit ) {
			return false;
		}
		$data[ $key ] = sanitize_text_field( $value );
	}
	$data['email'] = strtolower( trim( $data['email'] ) );
	if ( '' !== $data['website'] || '' === $data['prenom'] || '' === $data['nom'] || ! is_email( $data['email'] ) || '1' !== $data['consentement'] || ( $data['cp'] && ! preg_match( '/^[0-9A-Za-z -]+$/', $data['cp'] ) ) ) {
		return false;
	}
	if ( ! balneo_v2_newsletter_rate_slot( 'global', 100, HOUR_IN_SECONDS ) || ! balneo_v2_newsletter_rate_slot( 'ip:' . $remote_address, 5, 10 * MINUTE_IN_SECONDS ) || ! balneo_v2_newsletter_rate_slot( 'email:' . $data['email'], 1, HOUR_IN_SECONDS ) ) {
		return false;
	}
	$existing = get_posts(
		array(
			'post_type'      => 'balneo_nl_request',
			'post_status'    => 'private',
			'posts_per_page' => 1,
			'fields'         => 'ids',
			'meta_key'       => '_balneo_email', // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key -- Registre privé borné par la conservation.
			'meta_value'     => $data['email'], // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_value -- Recherche exacte pour éviter les doublons.
		)
	); // phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key,WordPress.DB.SlowDBQuery.slow_db_query_meta_value -- Petit registre privé, conservation de 90 jours.
	if ( $existing ) {
		return true;
	}
	$meta = array(
		'_balneo_email'           => $data['email'],
		'_balneo_prenom'          => $data['prenom'],
		'_balneo_nom'             => $data['nom'],
		'_balneo_cp'              => $data['cp'],
		'_balneo_ville'           => $data['ville'],
		'_balneo_consent_at'      => gmdate( 'c' ),
		'_balneo_consent_text'    => 'J’accepte de recevoir les actualités et j’ai lu la politique de confidentialité.',
		'_balneo_consent_version' => '2026-09-08',
	);
	$id   = wp_insert_post(
		wp_slash(
			array(
				'post_type'   => 'balneo_nl_request',
				'post_status' => 'private',
				'post_title'  => __( 'Demande newsletter', 'balneo-v2' ) . ' ' . gmdate( 'Y-m-d H:i:s' ),
				'meta_input'  => $meta,
			)
		),
		true
	);
	if ( is_wp_error( $id ) || ! $id ) {
		return false;
	}
	foreach ( $meta as $key => $value ) {
		if ( get_post_meta( $id, $key, true ) !== $value ) {
			wp_trash_post( $id );
			return false;
		}
	}
	// Aucune donnée personnelle dans la notification, le dossier reste disponible si le mail échoue.
	$sent = wp_mail( get_option( 'admin_email' ), __( 'Nouvelle demande newsletter Balnéo', 'balneo-v2' ), __( 'Une demande est à traiter dans WordPress :', 'balneo-v2' ) . "\n" . admin_url( 'post.php?post=' . $id . '&action=edit' ) );
	update_post_meta( $id, '_balneo_notified', $sent ? '1' : '0' );
	return true;
}

/** Affiche les demandes et leur preuve de consentement sans exposer de champs publics. */
function balneo_v2_newsletter_meta_boxes(): void {
	add_meta_box( 'balneo-newsletter-request', __( 'Demande à traiter par l’équipe', 'balneo-v2' ), 'balneo_v2_newsletter_request_details', 'balneo_nl_request', 'normal', 'high' );
}
add_action( 'add_meta_boxes_balneo_nl_request', 'balneo_v2_newsletter_meta_boxes' );

/**
 * Affiche le dossier réservé aux administrateurs.
 *
 * @param WP_Post $post Demande.
 */
function balneo_v2_newsletter_request_details( WP_Post $post ): void {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	echo '<p>' . esc_html__( 'Cette demande ne déclenche pas d’inscription automatique. Après traitement dans votre outil de newsletter, placez-la dans la corbeille. Les demandes sont conservées ici pendant 90 jours au maximum.', 'balneo-v2' ) . '</p><dl>';
	$labels = array(
		'email'           => 'E-mail',
		'prenom'          => 'Prénom',
		'nom'             => 'Nom',
		'cp'              => 'Code postal',
		'ville'           => 'Ville',
		'consent_at'      => 'Consentement reçu (UTC)',
		'consent_text'    => 'Texte accepté',
		'consent_version' => 'Version de la politique',
	);
	foreach ( $labels as $key => $label ) {
		echo '<dt><strong>' . esc_html( $label ) . '</strong></dt><dd>' . esc_html( get_post_meta( $post->ID, '_balneo_' . $key, true ) ) . '</dd>';
	}
	echo '</dl>';
	if ( '0' === get_post_meta( $post->ID, '_balneo_notified', true ) ) {
		echo '<p><strong>' . esc_html__( 'La notification par e-mail a échoué. La demande est bien enregistrée.', 'balneo-v2' ) . '</strong></p>';
	}
}

/** Place les demandes de plus de 90 jours dans la corbeille WordPress. */
function balneo_v2_expire_newsletter_requests(): void {
	$batches = 0;
	do {
		$ids = get_posts(
			array(
				'post_type'      => 'balneo_nl_request',
				'post_status'    => 'private',
				'posts_per_page' => 100,
				'fields'         => 'ids',
				'date_query'     => array(
					array(
						'before' => gmdate( 'Y-m-d H:i:s', time() - 90 * DAY_IN_SECONDS ),
						'column' => 'post_date_gmt',
					),
				),
			)
		);
		foreach ( $ids as $id ) {
			wp_trash_post( $id );
		}
		++$batches;
		$batch_size = count( $ids );
	} while ( 100 === $batch_size && $batches < 50 );
}
add_action( 'balneo_v2_expire_newsletter_requests', 'balneo_v2_expire_newsletter_requests' );
