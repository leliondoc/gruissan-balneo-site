<?php
/**
 * Données et validation du planning.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/** Univers de la charte : les éditrices choisissent un thème, jamais du CSS. */
function balneo_v2_schedule_themes(): array {
	return array(
		'balneo'    => array(
			'label'    => 'Balnéo · bleu',
			'category' => 'Lâcher-prise',
			'icon'     => 'fa-water',
		),
		'sport'     => array(
			'label'    => 'Sport · vert',
			'category' => 'Se dépasser',
			'icon'     => 'fa-dumbbell',
		),
		'aquatique' => array(
			'label'    => 'Activités aquatiques · corail',
			'category' => 'Pratiquer',
			'icon'     => 'fa-person-swimming',
		),
		'soins'     => array(
			'label'    => 'Soins · rose',
			'category' => 'Prendre soin de soi',
			'icon'     => 'fa-spa',
		),
		'parc'      => array(
			'label'    => 'Parc été · jaune',
			'category' => 'S’amuser',
			'icon'     => 'fa-sun',
		),
	);
}

/** Les données du fichier ne servent que tant qu'aucun planning n'a été enregistré. */
function balneo_v2_schedule_store(): array {
	$stored = get_option( 'balneo_v2_schedule', null );
	if ( is_array( $stored ) && isset( $stored['entries'] ) && is_array( $stored['entries'] ) ) {
		return $stored;
	}
	if ( null !== $stored ) {
		return array(
			'version' => 0,
			'entries' => array(),
		);
	}
	$file    = get_theme_file_path( '/inc/schedule-defaults.json' );
	$entries = file_exists( $file ) ? json_decode( (string) file_get_contents( $file ), true ) : array(); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- Fichier JSON local du thème, jamais une URL.
	$entries = is_array( $entries ) ? $entries : array();
	foreach ( $entries as $index => &$entry ) {
		$entry['enabled']  = true;
		$entry['position'] = ( $index + 1 ) * 10;
	}
	unset( $entry );
	return array(
		'version' => 1,
		'entries' => $entries,
	);
}

/**
 * Empreinte du planning pour détecter une fiche périmée.
 *
 * @param array $store Planning complet.
 * @return string
 */
function balneo_v2_schedule_revision( array $store ): string {
	return hash( 'sha256', (string) wp_json_encode( $store ) );
}

/**
 * Activités activées, dans leur ordre éditorial.
 *
 * @return array
 */
function balneo_v2_schedule_entries(): array {
	$store   = balneo_v2_schedule_store();
	$entries = array_values(
		array_filter(
			$store['entries'],
			static function ( $entry ) {
				return is_array( $entry ) && ! empty( $entry['enabled'] );
			}
		)
	);
	usort(
		$entries,
		static function ( $a, $b ) {
			return ( $a['position'] ?? 0 ) <=> ( $b['position'] ?? 0 );
		}
	);
	return $entries;
}

/**
 * N'accepte jamais un tableau à la place d'un texte de formulaire.
 *
 * @param array  $source Champs à valider.
 * @param string $key    Clé du champ.
 * @return string
 */
function balneo_v2_schedule_text( array $source, string $key ): string {
	return isset( $source[ $key ] ) && is_scalar( $source[ $key ] ) ? sanitize_text_field( (string) $source[ $key ] ) : '';
}

/**
 * Vérifie une date civile ISO et ses bornes.
 *
 * @param string $value Date saisie.
 * @return bool
 */
function balneo_v2_schedule_valid_date( string $value ): bool {
	$date = DateTimeImmutable::createFromFormat( '!Y-m-d', $value );
	return $date && $date->format( 'Y-m-d' ) === $value && $value >= '1900-01-01' && $value <= '9999-12-31';
}

/**
 * Longueur UTF-16, identique à maxlength dans les formulaires HTML.
 *
 * @param string $value Texte UTF-8.
 * @return int
 */
function balneo_v2_schedule_text_length( string $value ): int {
	$characters = preg_match_all( '/./us', $value, $matches );
	$astral     = preg_match_all( '/[\x{10000}-\x{10FFFF}]/u', $value );
	return false === $characters ? strlen( $value ) : $characters + (int) $astral;
}

/**
 * Valide les informations visibles d'une activité ou d'une règle.
 *
 * @param array  $source Champs soumis.
 * @param array  $errors Erreurs cumulées, par référence.
 * @param string $label  Nom de la section du formulaire.
 * @return array
 */
function balneo_v2_schedule_state( array $source, array &$errors, string $label ): array {
	$mode = balneo_v2_schedule_text( $source, 'mode' );
	if ( ! in_array( $mode, array( 'info', 'closed', 'hidden' ), true ) ) {
		$errors[] = $label . ' : choisissez un état valide.';
	}
	$time   = balneo_v2_schedule_text( $source, 'time' );
	$status = balneo_v2_schedule_text( $source, 'status' );
	$note   = isset( $source['note'] ) && is_scalar( $source['note'] ) ? sanitize_textarea_field( (string) $source['note'] ) : '';
	if ( 'hidden' !== $mode && '' === $time ) {
		$errors[] = $label . ' : renseignez les horaires ou un libellé (par exemple « Fermé »).';
	}
	if ( balneo_v2_schedule_text_length( $time ) > 120 || balneo_v2_schedule_text_length( $status ) > 120 || balneo_v2_schedule_text_length( $note ) > 2000 ) {
		$errors[] = $label . ' : un texte dépasse la longueur autorisée.';
	}
	return array(
		'time'   => $time,
		'status' => $status,
		'note'   => $note,
		'closed' => 'closed' === $mode,
		'hidden' => 'hidden' === $mode,
	);
}

/**
 * Valide toute la fiche avant écriture, en plaçant les exceptions en dernier.
 *
 * @param array $input Fiche soumise.
 * @return array
 */
function balneo_v2_schedule_validate( array $input ): array {
	$errors = array();
	$themes = balneo_v2_schedule_themes();
	$theme  = balneo_v2_schedule_text( $input, 'theme' );
	$title  = balneo_v2_schedule_text( $input, 'title' );
	if ( '' === $title || balneo_v2_schedule_text_length( $title ) > 120 ) {
		$errors[] = 'Le nom de l’activité est obligatoire (120 caractères maximum).';
	}
	if ( ! isset( $themes[ $theme ] ) ) {
		$errors[] = 'Choisissez une thématique valide.';
	}
	$url = balneo_v2_schedule_text( $input, 'url' );
	if ( '' !== $url && ( ! filter_var( $url, FILTER_VALIDATE_URL ) || ! preg_match( '#^https?://#i', $url ) ) ) {
		$errors[] = 'Le lien doit être une adresse complète commençant par https:// ou http://.';
	}
	$position = balneo_v2_schedule_text( $input, 'position' );
	if ( ! preg_match( '/^\d{1,4}$/', $position ) ) {
		$errors[] = 'L’ordre d’affichage doit être un nombre entre 0 et 9999.';
	}
	$default   = balneo_v2_schedule_state( is_array( $input['default'] ?? null ) ? $input['default'] : array(), $errors, 'Informations habituelles' );
	$raw_rules = $input['rules'] ?? array();
	if ( ! is_array( $raw_rules ) || count( $raw_rules ) > 20 ) {
		$errors[]  = 'Une activité peut contenir jusqu’à 20 périodes et exceptions.';
		$raw_rules = array();
	}
	$periods    = array();
	$exceptions = array();
	foreach ( array_values( $raw_rules ) as $index => $raw ) {
		$label = 'Règle ' . ( $index + 1 );
		if ( ! is_array( $raw ) ) {
			$errors[] = $label . ' : formulaire invalide.';
			continue;
		}
		$rule         = balneo_v2_schedule_state( $raw, $errors, $label );
		$kind         = balneo_v2_schedule_text( $raw, 'kind' );
		$rule['kind'] = $kind;
		if ( 'exception' === $kind ) {
			$date = balneo_v2_schedule_text( $raw, 'date' );
			if ( ! balneo_v2_schedule_valid_date( $date ) ) {
				$errors[] = $label . ' : la date de l’exception est invalide.';
			}
			$rule['dates'] = array( $date );
			$exceptions[]  = $rule;
		} elseif ( 'period' === $kind ) {
			foreach ( array( 'startDate', 'endDate' ) as $field ) {
				$value = balneo_v2_schedule_text( $raw, $field );
				if ( '' !== $value ) {
					if ( ! balneo_v2_schedule_valid_date( $value ) ) {
						$errors[] = $label . ' : date de période invalide.';
					}
					$rule[ $field ] = $value;
				}
			}
			if ( isset( $rule['startDate'], $rule['endDate'] ) && $rule['startDate'] > $rule['endDate'] ) {
				$errors[] = $label . ' : la fin précède le début.';
			}
			foreach ( array(
				'weekdays' => array( 0, 6 ),
				'months'   => array( 1, 12 ),
			) as $field => $range ) {
				$values = $raw[ $field ] ?? array();
				if ( ! is_array( $values ) ) {
					$errors[] = $label . ' : sélection invalide.';
					continue;
				}
				$valid = array();
				foreach ( $values as $value ) {
					if ( ! is_scalar( $value ) || ! ctype_digit( (string) $value ) || (int) $value < $range[0] || (int) $value > $range[1] ) {
						$errors[] = $label . ' : jour ou mois invalide.';
						continue;
					}
					$valid[] = (int) $value;
				}
				if ( $valid ) {
					$rule[ $field ] = array_values( array_unique( $valid ) );
				}
			}
			$periods[] = $rule;
		} else {
			$errors[] = $label . ' : type de règle invalide.';
		}
	}
	return array(
		'errors' => array_unique( $errors ),
		'entry'  => array(
			'id'       => sanitize_key( balneo_v2_schedule_text( $input, 'id' ) ),
			'title'    => $title,
			'theme'    => $theme,
			'category' => $themes[ $theme ]['category'] ?? '',
			'icon'     => $themes[ $theme ]['icon'] ?? 'fa-calendar',
			'url'      => esc_url_raw( $url, array( 'http', 'https' ) ),
			'position' => (int) $position,
			'enabled'  => '1' === balneo_v2_schedule_text( $input, 'enabled' ),
			'default'  => $default,
			'rules'    => array_merge( $periods, $exceptions ),
		),
	);
}

/**
 * Écrit seulement si la valeur en base est toujours celle qui a été vérifiée.
 *
 * L'appel update_option() seul ne permet pas une comparaison-et-échange atomique.
 * La clause binaire protège aussi les différences de casse et de sérialisation.
 *
 * @param array|null $previous Valeur lue avant validation de la révision.
 * @param array      $store    Nouveau planning.
 * @return bool Succès de l'écriture atomique.
 */
function balneo_v2_schedule_compare_exchange( ?array $previous, array $store ): bool {
	global $wpdb;
	if ( null === $previous ) {
		return add_option( 'balneo_v2_schedule', $store, '', false );
	}
	// phpcs:ignore WordPress.DB.DirectDatabaseQuery.DirectQuery, WordPress.DB.DirectDatabaseQuery.NoCaching -- CAS atomique ; invalidation explicite ci-dessous.
	$updated = $wpdb->query(
		$wpdb->prepare(
			'UPDATE %i SET option_value = %s, autoload = %s WHERE option_name = %s AND BINARY option_value = %s',
			$wpdb->options,
			maybe_serialize( $store ),
			'off',
			'balneo_v2_schedule',
			maybe_serialize( $previous )
		)
	);
	wp_cache_delete( 'balneo_v2_schedule', 'options' );
	wp_cache_delete( 'alloptions', 'options' );
	wp_cache_delete( 'notoptions', 'options' );
	if ( 1 !== $updated ) {
		return false;
	}
	do_action( 'update_option_balneo_v2_schedule', $previous, $store, 'balneo_v2_schedule' );
	do_action( 'updated_option', 'balneo_v2_schedule', $previous, $store );
	return true;
}

/**
 * Contrôle de révision suivi d'une écriture atomique, sans écrasement concurrent.
 *
 * @param array  $input    Fiche soumise.
 * @param string $revision Empreinte du planning lors de l'ouverture du formulaire.
 * @return array
 */
function balneo_v2_schedule_save( array $input, string $revision ): array {
	$result   = balneo_v2_schedule_validate( $input );
	$previous = get_option( 'balneo_v2_schedule', null );
	$store    = balneo_v2_schedule_store();
	if ( ! current_user_can( 'edit_pages' ) ) {
		$result['errors'][] = 'Vous n’avez pas le droit de modifier le planning.';
		return $result;
	}
	if ( 1 !== ( $store['version'] ?? 0 ) ) {
		$result['errors'][] = 'Le format du planning n’est pas pris en charge. Aucune donnée n’a été modifiée.';
	}
	if ( ! hash_equals( balneo_v2_schedule_revision( $store ), $revision ) ) {
		$result['errors'][] = 'Le planning a été modifié par une autre personne. Vos champs sont conservés ci-dessous ; rechargez la fiche avant de réappliquer vos modifications.';
	}
	$id    = $result['entry']['id'];
	$found = null;
	foreach ( $store['entries'] as $index => $entry ) {
		if ( $entry['id'] === $id ) {
			$found = $index;
			break;
		}
	}
	if ( null === $found && '' !== $id ) {
		$result['errors'][] = 'Cette activité n’existe plus. Revenez à la liste du planning.';
	}
	if ( $result['errors'] ) {
		return $result;
	}
	if ( null === $found ) {
		$result['entry']['id'] = wp_generate_uuid4();
		$store['entries'][]    = $result['entry'];
	} else {
		$store['entries'][ $found ] = $result['entry'];
	}
		$store['updated_at'] = gmdate( 'c' );
		$store['updated_by'] = get_current_user_id();
		$unchanged           = get_option( 'balneo_v2_schedule', null ) === $store;
	if ( ! $unchanged && ! balneo_v2_schedule_compare_exchange( $previous, $store ) ) {
		$result['entry']['id'] = $id;
		$result['errors'][]    = 'Le planning a changé pendant l’enregistrement ou la base est indisponible. Vos champs sont conservés ; rechargez la fiche avant de réessayer.';
	}
		return $result;
}
