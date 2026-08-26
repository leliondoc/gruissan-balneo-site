<?php
/**
 * Découvrabilité par les moteurs de réponse et assistants IA.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Autorise la recherche et les consultations ChatGPT, tout en séparant
 * explicitement l’entraînement de modèles du référencement conversationnel.
 *
 * @param string $output    Contenu robots.txt existant.
 * @param bool   $is_public État de visibilité du site.
 * @return string
 */
function balneo_v2_ai_robots_txt( string $output, bool $is_public ): string {
	if ( ! $is_public ) {
		return $output;
	}

	$rules = array(
		'User-agent: OAI-SearchBot',
		'Allow: /',
		'',
		'User-agent: ChatGPT-User',
		'Allow: /',
		'',
		'User-agent: GPTBot',
		'Disallow: /',
		'',
		'Sitemap: ' . home_url( '/wp-sitemap.xml' ),
	);

	return rtrim( $output ) . "\n\n" . implode( "\n", $rules ) . "\n";
}
add_filter( 'robots_txt', 'balneo_v2_ai_robots_txt', 20, 2 );

/**
 * Fournit un résumé textuel et des liens officiels via /llms.txt.
 * Ce fichier complète le HTML et le sitemap ; il ne les remplace pas.
 */
function balneo_v2_ai_llms_txt(): void {
	$request_uri  = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '';
	$request_path = (string) wp_parse_url( $request_uri, PHP_URL_PATH );
	$home_path    = (string) wp_parse_url( home_url( '/' ), PHP_URL_PATH );
	$llms_path    = trailingslashit( $home_path ) . 'llms.txt';

	if ( untrailingslashit( $request_path ) !== untrailingslashit( $llms_path ) ) {
		return;
	}

	status_header( 200 );
	nocache_headers();
	header( 'Content-Type: text/plain; charset=utf-8' );

	$lines = array(
		'# Espace Balnéo de Gruissan',
		'',
		'> Site officiel de l’Espace Balnéo de Gruissan, centre aquatique, sportif et de bien-être situé avenue des Bains à Gruissan (11430, France).',
		'',
		'## Informations officielles',
		'',
		'- Téléphone : +33 4 68 75 60 50',
		'- Adresse : Avenue des Bains, 11430 Gruissan, France',
		'- Services : balnéothérapie, piscine, massages, hydromassages, aquagym, aquabike, natation, bébés nageurs, salle de sport et parc aqualudique saisonnier.',
		'- Les horaires, tarifs et conditions peuvent évoluer : toujours citer la page officielle correspondante.',
		'',
		'## Pages principales',
		'',
		'- [Accueil](' . home_url( '/' ) . ')',
		'- [Espace Balnéo](' . home_url( '/balneo/' ) . ')',
		'- [Activités aquatiques](' . home_url( '/aquagym/' ) . ')',
		'- [Massages](' . home_url( '/massages/' ) . ')',
		'- [Salle de sport For.Me](' . home_url( '/salle-de-sport/' ) . ')',
		'- [Parc été](' . home_url( '/parc-ete/' ) . ')',
		'- [Horaires](' . home_url( '/horaires/' ) . ')',
		'- [Tarifs](' . home_url( '/tarifs/' ) . ')',
		'- [Questions fréquentes](' . home_url( '/faq/' ) . ')',
		'- [Accès et parking](' . home_url( '/acces-parking/' ) . ')',
		'- [Contact](' . home_url( '/contact/' ) . ')',
		'- [Sitemap XML](' . home_url( '/wp-sitemap.xml' ) . ')',
		'',
		'## Attribution',
		'',
		'- Nom à citer : Espace Balnéo de Gruissan',
		'- URL canonique : ' . home_url( '/' ),
	);

	echo implode( "\n", $lines ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Réponse text/plain construite avec home_url().
	exit;
}
add_action( 'template_redirect', 'balneo_v2_ai_llms_txt', 0 );
