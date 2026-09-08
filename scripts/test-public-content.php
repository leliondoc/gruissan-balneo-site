<?php
/** Régressions des anciens blocs publics, sans base ni réseau. */
define( 'ABSPATH', __DIR__ );
$front = true;
$entries = array();
function add_filter( ...$args ) {}
function add_action( ...$args ) {}
function is_front_page() { global $front; return $front; }
function __( $text, $domain ) { return $text; }
function esc_html( $text ) { return htmlspecialchars( $text, ENT_QUOTES, 'UTF-8' ); }
function esc_attr__( $text, $domain ) { return esc_html( $text ); }
function esc_url( $url ) { return $url; }
function home_url( $path ) { return 'https://example.test' . $path; }
function current_datetime() { return new DateTimeImmutable( '2026-09-08T12:00:00+02:00' ); }
function wp_date( $format, $timestamp, $timezone ) { return ( new DateTimeImmutable( '@' . $timestamp ) )->setTimezone( $timezone )->format( $format ); }
function balneo_v2_schedule_entries() { global $entries; return $entries; }
function wp_strip_all_tags( $html ) { return strip_tags( $html ); }
function strip_shortcodes( $text ) { return str_replace( '[balneo_newsletter_form]', '', $text ); }
function check( $value, $message ) { if ( ! $value ) throw new RuntimeException( $message ); }
require dirname( __DIR__ ) . '/wordpress-theme/balneo-v2/inc/schedule-state.php';
require dirname( __DIR__ ) . '/wordpress-theme/balneo-v2/inc/public-content.php';
$seal = '<div class="wp-block-group hero-seals"><div class="brand-seal brand-seal--open"><strong>Ouvert</strong><span>7j/7</span></div></div>';
check( str_contains( balneo_v2_home_practical_content( $seal, array( 'attrs' => array( 'className' => 'hero-seals' ) ) ), '<strong>For.Me</strong>' ), 'La pastille HTML historique doit être corrigée depuis son groupe parent' );
$banner = '<div>Du 27 juin au 30 août, les mineurs sont accueillis toute la journée.</div>';
$block = array( 'attrs' => array( 'className' => 'info-banner' ) );
check( str_contains( balneo_v2_home_practical_content( $banner, $block ), 'consultez le programme' ), 'Aucun horaire ne doit être inventé en l’absence de programmation' );
$entries = array( array( 'id' => 'balneo', 'default' => array( 'hidden' => true, 'time' => 'Ancien horaire', 'note' => '' ), 'rules' => array() ) );
check( ! str_contains( balneo_v2_home_practical_content( $banner, $block ), 'Ancien horaire' ), 'Une programmation masquée ne doit pas être annoncée' );
$entries[0]['rules'][] = array( 'dates' => array( '2026-09-08' ), 'hidden' => false, 'time' => 'Fermé', 'note' => 'Exception datée' );
check( str_contains( balneo_v2_home_practical_content( $banner, $block ), 'Fermé. Exception datée' ), 'La règle du planning du jour doit être appliquée' );
check( balneo_v2_home_practical_content( 'Une annonce personnalisée', $block ) === 'Une annonce personnalisée', 'Une nouvelle annonce éditoriale ne doit pas être écrasée' );
$front = false;
check( balneo_v2_home_practical_content( $banner, $block ) === $banner, 'Les autres pages ne doivent pas être transformées' );
$text = balneo_v2_search_block_text( array( array( 'innerHTML' => '<p>Un bassin</p>', 'innerBlocks' => array( array( 'blockName' => 'balneo/rich-text', 'attrs' => array( 'content' => '<strong>Sauna finlandais</strong>' ) ), array( 'innerHTML' => '[balneo_newsletter_form]' ) ) ) ) );
check( str_contains( $text, 'Un bassin' ) && str_contains( $text, 'Sauna finlandais' ) && ! str_contains( $text, '[' ), 'La recherche doit indexer le texte des blocs, sans exécuter les formulaires' );
function get_transient( $key ) { return array( array( 'Accès &#038; parking', '/acces-parking/', 'L&#8217;accès &amp; les horaires' ), array( '&lt;script&gt;alert(1)&lt;/script&gt;', '/texte/', '' ) ); }
function wp_json_encode( $value, $flags ) { return json_encode( $value, $flags ); }
function wp_add_inline_script( $handle, $script, $position ) { global $search_script; $search_script = $script; }
balneo_v2_search_index();
$search_data = json_decode( substr( $search_script, strlen( 'window.BALNEO_SEARCH = ' ), -1 ), true );
check( $search_data[0][0] === 'Accès & parking' && $search_data[0][2] === 'L’accès & les horaires', 'Les entités des titres et textes en cache doivent devenir du texte brut' );
check( ! str_contains( $search_script, '<script>' ) && $search_data[1][0] === '<script>alert(1)</script>', 'Le transport JSON doit rester sûr après décodage des entités' );
echo "Contenus publics validés : blocs historiques, planning du jour, annonces personnalisées et texte de recherche.\n";
