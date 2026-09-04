<?php
/**
 * Évaluation commune au rendu serveur et aux indicateurs de l'administration.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Jour civil de Gruissan, indépendant du fuseau du serveur.
 *
 * @return DateTimeImmutable
 */
function balneo_v2_schedule_today(): DateTimeImmutable {
	return current_datetime()->setTimezone( new DateTimeZone( 'Europe/Paris' ) )->setTime( 12, 0 );
}

/**
 * Applique les règles dans le même ordre que le calendrier JavaScript.
 *
 * @param array             $entry Activité.
 * @param DateTimeImmutable $date  Jour à consulter.
 * @return array
 */
function balneo_v2_schedule_state_for( array $entry, DateTimeImmutable $date ): array {
	$key   = $date->format( 'Y-m-d' );
	$state = $entry['default'];
	foreach ( $entry['rules'] ?? array() as $rule ) {
		if ( ( ! empty( $rule['startDate'] ) && $key < $rule['startDate'] ) ||
			( ! empty( $rule['endDate'] ) && $key > $rule['endDate'] ) ||
			( isset( $rule['dates'] ) && ! in_array( $key, $rule['dates'], true ) ) ||
			( isset( $rule['months'] ) && ! in_array( (int) $date->format( 'n' ), $rule['months'], true ) ) ||
			( isset( $rule['weekdays'] ) && ! in_array( (int) $date->format( 'w' ), $rule['weekdays'], true ) ) ) {
			continue;
		}
		$state = array_merge( $state, $rule );
	}
	return $state;
}

/**
 * Contexte daté pour une page utilisable avant le chargement de JavaScript.
 *
 * @return array
 */
function balneo_v2_schedule_context(): array {
	$date    = balneo_v2_schedule_today();
	$entries = balneo_v2_schedule_entries();
	$count   = 0;
	foreach ( $entries as $entry ) {
		if ( empty( balneo_v2_schedule_state_for( $entry, $date )['hidden'] ) ) {
			++$count;
		}
	}
	return array(
		'date'  => $date,
		'count' => $count,
		'label' => wp_date( 'l j F Y', $date->getTimestamp(), new DateTimeZone( 'Europe/Paris' ) ),
	);
}

/**
 * Résume l'activation, la prochaine date et la borne de programmation.
 *
 * La recherche bornée ne prétend pas prouver l'absence de créneaux à l'infini.
 *
 * @param array             $entry Activité enregistrée.
 * @param DateTimeImmutable $today Date de référence.
 * @return array
 */
function balneo_v2_schedule_status( array $entry, DateTimeImmutable $today ): array {
	$result = array(
		'label' => __( 'Désactivée', 'balneo-v2' ),
		'next'  => '',
		'until' => '',
	);
	if ( empty( $entry['enabled'] ) ) {
		return $result;
	}
	$starts    = array( $today->modify( '+1 day' )->format( 'Y-m-d' ) );
	$ends      = array();
	$unbounded = empty( $entry['default']['hidden'] );
	foreach ( $entry['rules'] as $rule ) {
		$state = array_merge( $entry['default'], $rule );
		if ( ! empty( $state['hidden'] ) ) {
			continue;
		}
		if ( ! empty( $rule['dates'] ) ) {
			$starts = array_merge( $starts, $rule['dates'] );
			$ends   = array_merge( $ends, $rule['dates'] );
		} else {
			if ( ! empty( $rule['startDate'] ) ) {
				$starts[] = $rule['startDate'];
			}
			if ( ! empty( $rule['endDate'] ) ) {
				$ends[] = $rule['endDate'];
			} else {
				$unbounded = true;
			}
		}
	}
	$result['until'] = ! $unbounded && $ends ? max( $ends ) : '';
	$state           = balneo_v2_schedule_state_for( $entry, $today );
	if ( empty( $state['hidden'] ) ) {
		$result['label'] = ! empty( $state['closed'] ) ? __( 'Fermeture affichée aujourd’hui', 'balneo-v2' ) : __( 'Programmée aujourd’hui', 'balneo-v2' );
	} elseif ( $result['until'] && $result['until'] < $today->format( 'Y-m-d' ) ) {
		$result['label'] = __( 'Période terminée', 'balneo-v2' );
		return $result;
	} else {
		$result['label'] = __( 'Activée · pas de créneau aujourd’hui', 'balneo-v2' );
	}
	foreach ( array_unique( $starts ) as $start ) {
		$date = new DateTimeImmutable( max( $start, $today->modify( '+1 day' )->format( 'Y-m-d' ) ), $today->getTimezone() );
		for ( $day = 0; $day < 370; ++$day, $date = $date->modify( '+1 day' ) ) {
			$key = $date->format( 'Y-m-d' );
			if ( ( $result['until'] && $key > $result['until'] ) || ( $result['next'] && $key >= $result['next'] ) ) {
				break;
			}
			$future = balneo_v2_schedule_state_for( $entry, $date );
			if ( empty( $future['hidden'] ) && empty( $future['closed'] ) ) {
				$result['next'] = $key;
				break;
			}
		}
	}
	if ( ! $entry['rules'] && ! empty( $entry['default']['hidden'] ) ) {
		$result['label'] = __( 'Activée · sans créneau', 'balneo-v2' );
	}
	return $result;
}
