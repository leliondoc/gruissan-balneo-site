<?php
/**
 * Consentement et balises Google.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Charge la CMP locale. Le script Google reste absent tant qu'aucune catégorie
 * Google n'a été acceptée.
 */
function balneo_v2_enqueue_analytics_consent(): void {
    if ( is_admin() ) {
        return;
    }

    $script_path = get_theme_file_path( '/js/analytics.js' );
    $config      = array(
        'ga4Id'       => 'G-4F2ZKB7RRZ',
        'googleAdsId' => 'AW-358922226',
        'storageKey'  => 'balneo_cookie_consent',
        'privacyUrl'  => home_url( '/donnees-personnelles/' ),
    );

    wp_enqueue_script(
        'balneo-v2-analytics-consent',
        get_theme_file_uri( '/js/analytics.js' ),
        array(),
        file_exists( $script_path ) ? (string) filemtime( $script_path ) : BALNEO_V2_VERSION,
        array(
            'strategy'  => 'defer',
            'in_footer' => true,
        )
    );
    wp_add_inline_script(
        'balneo-v2-analytics-consent',
        'window.BALNEO_ANALYTICS = ' . wp_json_encode( $config, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT ) . ';',
        'before'
    );
}
add_action( 'wp_enqueue_scripts', 'balneo_v2_enqueue_analytics_consent', 20 );

/**
 * Corrige une seule fois l'ancien texte de la page de confidentialité quand il
 * est encore intact, sans écraser une page déjà personnalisée dans Gutenberg.
 */
function balneo_v2_migrate_analytics_privacy_copy(): void {
    if ( '1.0.0' === get_option( 'balneo_v2_analytics_privacy_copy_version' ) ) {
        return;
    }

    $page = get_page_by_path( 'donnees-personnelles', OBJECT, 'page' );
    if ( ! $page ) {
        return;
    }

    $old = '<p>Le thème n’ajoute aucun traceur publicitaire ni outil de mesure d’audience. WordPress et les extensions installées peuvent toutefois déposer des cookies fonctionnels ; toute extension de suivi doit être déclarée et soumise au consentement lorsqu’il est requis.</p>';
    $new = '<p>Avec votre accord, le site utilise Google Analytics pour mesurer sa fréquentation et Google Ads pour mesurer l’efficacité et personnaliser les campagnes publicitaires. Ces services Google ne sont chargés qu’après votre consentement.</p>' . "\n" . '<p>Vous pouvez accepter, refuser ou personnaliser ces traceurs depuis le panneau de consentement. Le bouton « Gérer mes cookies », disponible sur toutes les pages, permet de modifier ou retirer votre choix à tout moment.</p>';

    if ( false !== strpos( (string) $page->post_content, $old ) ) {
        wp_update_post(
            wp_slash(
                array(
                    'ID'           => $page->ID,
                    'post_content' => str_replace( $old, $new, (string) $page->post_content ),
                )
            )
        );
    }

    update_option( 'balneo_v2_analytics_privacy_copy_version', '1.0.0', false );
}
add_action( 'init', 'balneo_v2_migrate_analytics_privacy_copy', 30 );
