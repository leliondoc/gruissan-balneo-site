<?php
/** Tests isolés, stockage WordPress et mail simulés : aucun envoi réel. */
define( 'ABSPATH', __DIR__ );
define( 'MINUTE_IN_SECONDS', 60 );
define( 'HOUR_IN_SECONDS', 3600 );
define( 'DAY_IN_SECONDS', 86400 );
$options = $records = $mails = $trashed = array();
$write_fail = $meta_fail = false;
function add_action( ...$args ) {}
function __( $value, $domain ) { return $value; }
function wp_salt( $scheme ) { return 'isolated-test-salt'; }
function sanitize_text_field( $value ) { return trim( strip_tags( $value ) ); }
function is_email( $value ) { return filter_var( $value, FILTER_VALIDATE_EMAIL ); }
function wp_slash( $value ) { return $value; }
function add_option( $key, $value, ...$args ) { global $options; if ( isset( $options[ $key ] ) ) return false; $options[ $key ] = $value; return true; }
function get_option( $key ) { return 'admin@example.test'; }
function get_posts( $query ) {
    global $records;
    return array_keys( array_filter( $records, function ( $record ) use ( $query ) {
        if ( $record['post_status'] !== $query['post_status'] ) return false;
        if ( isset( $query['meta_value'] ) ) return ( $record['meta_input']['_balneo_email'] ?? '' ) === $query['meta_value'];
        return $record['post_date_gmt'] < $query['date_query'][0]['before'];
    } ) );
}
function wp_insert_post( $record, $error ) {
    global $records, $write_fail, $meta_fail;
    if ( $write_fail ) return 0;
    $id = count( $records ) + 1;
    $record['post_date_gmt'] = gmdate( 'Y-m-d H:i:s' );
    if ( $meta_fail ) $record['meta_input'] = array();
    $records[ $id ] = $record; return $id;
}
function get_post_meta( $id, $key, $single ) { global $records; return $records[ $id ]['meta_input'][ $key ] ?? ''; }
function update_post_meta( $id, $key, $value ) { global $records; $records[ $id ]['meta_input'][ $key ] = $value; }
function is_wp_error( $value ) { return false; }
function wp_mail( ...$args ) { global $mails; $mails[] = $args; return false; }
function admin_url( $path ) { return 'https://example.test/wp-admin/' . $path; }
function wp_trash_post( $id ) { global $records, $trashed; $records[ $id ]['post_status'] = 'trash'; $trashed[] = $id; }
function register_post_type( $name, $args ) { global $type; $type = $args; }
function wp_next_scheduled( $hook ) { return true; }
function check( $condition, $message ) { if ( ! $condition ) throw new RuntimeException( $message ); }
function reset_store() { global $options, $records, $mails, $trashed, $write_fail, $meta_fail; $options = $records = $mails = $trashed = array(); $write_fail = $meta_fail = false; }
require dirname( __DIR__ ) . '/wordpress-theme/balneo-v2/inc/newsletter.php';
$input = array( 'prenom' => 'Émilie', 'nom' => 'Test', 'email' => 'emilie@example.test', 'consentement' => '1' );
foreach ( array( array( 'email' => array( 'bad' ) ), array( 'consentement' => '0' ), array( 'website' => 'spam' ), array( 'prenom' => str_repeat( 'é', 81 ) ), array( 'email' => "a@example.test\nBcc: b@example.test" ) ) as $bad ) {
    check( ! balneo_v2_store_newsletter_request( array_merge( $input, $bad ), '192.0.2.1' ), 'Entrée invalide acceptée' );
}
check( ! $records && ! $mails, 'Une entrée invalide a créé un dossier ou un mail' );
check( balneo_v2_store_newsletter_request( $input, '192.0.2.1' ), 'Un échec de notification doit laisser la demande enregistrée' );
check( get_post_meta( 1, '_balneo_notified', true ) === '0', 'Échec de notification non conservé' );
check( get_post_meta( 1, '_balneo_consent_text', true ) !== '', 'Preuve du consentement absente' );
check( ! str_contains( json_encode( $mails ), $input['email'] ), 'La notification contient des données personnelles' );
$options = array();
check( balneo_v2_store_newsletter_request( $input, '192.0.2.2' ) && count( $records ) === 1 && count( $mails ) === 1, 'Un doublon ne doit pas créer un second dossier' );
reset_store();
for ( $i = 0; $i < 6; ++$i ) {
    $value = balneo_v2_store_newsletter_request( array_merge( $input, array( 'email' => 'person' . $i . '@example.test' ) ), '192.0.2.1' );
    check( $value === ( $i < 5 ), 'Changer de mail contourne la limite par IP' );
}
check( ! str_contains( json_encode( $options ), '192.0.2.1' ) && ! str_contains( json_encode( $options ), '@example.test' ), 'Identifiants en clair dans les compteurs' );
reset_store();
$write_fail = true;
check( ! balneo_v2_store_newsletter_request( $input, '192.0.2.1' ) && ! $mails, 'Échec de base annoncé comme un succès' );
reset_store();
$meta_fail = true;
check( ! balneo_v2_store_newsletter_request( $input, '192.0.2.1' ) && ! $mails && $trashed === array( 1 ), 'Dossier incomplet accepté' );
reset_store();
balneo_v2_store_newsletter_request( $input, '192.0.2.1' );
$records[1]['post_date_gmt'] = gmdate( 'Y-m-d H:i:s', time() - 91 * DAY_IN_SECONDS );
balneo_v2_expire_newsletter_requests();
check( $trashed === array( 1 ), 'Conservation de 90 jours non appliquée' );
balneo_v2_register_newsletter_requests();
check( ! $type['public'] && ! $type['show_in_rest'] && $type['capabilities']['read_private_posts'] === 'manage_options', 'Demandes exposées à un public non habilité' );
echo "Newsletter validée : validation, conservation, doublons, limites IP, échecs de base et de notification, accès privé.\n";
