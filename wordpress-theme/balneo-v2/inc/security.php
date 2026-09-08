<?php
/**
 * Renforcement défensif des réponses publiques du thème.
 *
 * Les règles qui dépendent du serveur (TLS, HSTS, pare-feu et politique CSP
 * complète) restent à configurer au niveau de l’hébergement.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Ajoute des en-têtes sûrs qui ne bloquent ni l’éditeur ni les extensions.
 *
 * @param array<string, string> $headers En-têtes HTTP préparés par WordPress.
 * @return array<string, string>
 */
function balneo_v2_security_headers( array $headers ): array {
	if ( is_admin() ) {
		return $headers;
	}

	$headers['X-Content-Type-Options']            = 'nosniff';
	$headers['X-Frame-Options']                   = 'SAMEORIGIN';
	$headers['Referrer-Policy']                   = 'strict-origin-when-cross-origin';
	$headers['Permissions-Policy']                = 'accelerometer=(), autoplay=(), camera=(), geolocation=(), gyroscope=(), microphone=(), payment=(), usb=()';
	$headers['X-Permitted-Cross-Domain-Policies'] = 'none';
	if ( ! isset( $headers['Content-Security-Policy'] ) ) {
		$headers['Content-Security-Policy'] = "base-uri 'self'; object-src 'none'; frame-ancestors 'self'; form-action 'self' https://gruissan-balneo.horanet.com; upgrade-insecure-requests";
	}
	if ( is_ssl() && ! isset( $headers['Strict-Transport-Security'] ) ) {
		$headers['Strict-Transport-Security'] = 'max-age=86400';
	}

	return $headers;
}
add_filter( 'wp_headers', 'balneo_v2_security_headers' );

/**
 * Impose des liens externes isolés même lorsqu’ils sont saisis dans l’éditeur.
 *
 * @param string $rel  Valeurs rel existantes.
 * @param string $text HTML du lien.
 * @return string
 */
function balneo_v2_external_link_rel( string $rel, string $text ): string {
	if ( false === stripos( $text, 'target="_blank"' ) && false === stripos( $text, "target='_blank'" ) ) {
		return $rel;
	}

	$tokens = preg_split( '/\s+/', $rel, -1, PREG_SPLIT_NO_EMPTY );
	$tokens = false !== $tokens ? $tokens : array();
	$tokens = array_unique( array_merge( $tokens, array( 'noopener', 'noreferrer' ) ) );

	return implode( ' ', $tokens );
}
add_filter( 'wp_targeted_link_rel', 'balneo_v2_external_link_rel', 10, 2 );

/**
 * Réserve les modifications de code au dépôt et au déploiement contrôlé.
 *
 * @param array  $caps Capacités requises.
 * @param string $cap Capacité demandée.
 * @return array
 */
function balneo_v2_disable_code_editors( array $caps, string $cap ): array {
	return in_array( $cap, array( 'edit_themes', 'edit_plugins' ), true ) ? array( 'do_not_allow' ) : $caps;
}
add_filter( 'map_meta_cap', 'balneo_v2_disable_code_editors', 10, 2 );
