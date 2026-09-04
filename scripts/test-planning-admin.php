<?php
/** Tests unitaires du module PHP ; les API WordPress sont simulées, sans base distante. */
define( 'ABSPATH', __DIR__ );
define( 'BALNEO_V2_VERSION', 'test' );
define( 'MINUTE_IN_SECONDS', 60 );
$options = array();
$transients = array();
$allowed = true;
$nonce_valid = true;
$write_fail = false;
$redirect = '';
$hooks = array();
function add_action( $name, $callback, ...$args ) { global $hooks; $hooks[ $name ] = $callback; }
function add_shortcode( $name, $callback ) {}
function add_menu_page( ...$args ) { global $menu; $menu = $args; }
function get_option( $key, $default = false ) { global $options; return $options[ $key ] ?? $default; }
function update_option( $key, $value, $autoload = null ) { global $options, $write_fail; if ( $write_fail || ( $options[ $key ] ?? null ) === $value ) { return false; } $options[ $key ] = $value; return true; }
function set_transient( $key, $value, $ttl ) { global $transients; $transients[ $key ] = $value; }
function get_transient( $key ) { global $transients; return $transients[ $key ] ?? false; }
function delete_transient( $key ) { global $transients; unset( $transients[ $key ] ); }
function get_current_user_id() { return 7; }
function current_user_can( $capability ) { global $allowed; return $allowed && 'edit_pages' === $capability; }
function wp_generate_uuid4() { static $number = 0; return '00000000-0000-4000-8000-' . str_pad( (string) ++$number, 12, '0', STR_PAD_LEFT ); }
function sanitize_text_field( $text ) { return trim( strip_tags( $text ) ); }
function sanitize_textarea_field( $text ) { return trim( strip_tags( $text ) ); }
function sanitize_key( $text ) { return preg_replace( '/[^a-z0-9_-]/', '', strtolower( $text ) ); }
function esc_html( $text ) { return htmlspecialchars( (string) $text, ENT_QUOTES, 'UTF-8' ); }
function esc_attr( $text ) { return esc_html( $text ); }
function esc_textarea( $text ) { return esc_html( $text ); }
function esc_url_raw( $url, $protocols = array() ) { return preg_match( '#^https?://#i', $url ) ? $url : ''; }
function esc_url( $url ) { return esc_attr( esc_url_raw( $url ) ); }
function wp_json_encode( $value ) { return json_encode( $value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); }
function wp_unslash( $value ) { return $value; }
function get_theme_file_path( $file ) { return dirname( __DIR__ ) . '/wordpress-theme/balneo-v2' . $file; }
function get_theme_file_uri( $file ) { return 'https://example.test/wp-content/themes/balneo-v2' . $file; }
function home_url( $path ) { return 'https://example.test' . $path; }
function admin_url( $path ) { return 'https://example.test/wp-admin/' . $path; }
function add_query_arg( $args, $url ) { return $url . '?' . http_build_query( $args ); }
function selected( $left, $right ) { if ( (string) $left === (string) $right ) { echo 'selected'; } }
function checked( $value ) { if ( $value ) { echo 'checked'; } }
function wp_nonce_field( $action, $name ) { echo '<input type="hidden" name="' . esc_attr( $name ) . '" value="test-nonce">'; }
function check_admin_referer( $action, $name ) { global $nonce_valid; if ( ! $nonce_valid ) { throw new RuntimeException( 'nonce' ); } }
function wp_die( $message, ...$args ) { throw new RuntimeException( $message ); }
function wp_safe_redirect( $url ) { global $redirect; $redirect = $url; throw new RuntimeException( 'redirect' ); }
function wp_enqueue_style( ...$args ) {}
function wp_enqueue_script( ...$args ) {}
function get_template_part( $path ) { include get_theme_file_path( '/' . $path . '.php' ); }
require get_theme_file_path( '/inc/schedule.php' );

function verify( $condition, $message ) { if ( ! $condition ) { throw new RuntimeException( $message ); } }
function input_fixture(): array {
	return array( 'id' => '', 'title' => 'Aquagym du matin', 'theme' => 'aquatique', 'enabled' => '1', 'position' => '60', 'url' => 'https://example.test/aquagym/',
		'default' => array( 'mode' => 'hidden', 'time' => '', 'status' => '', 'note' => '' ),
		'rules' => array(
			array( 'kind' => 'exception', 'date' => '2026-09-11', 'mode' => 'closed', 'time' => 'Annulé', 'status' => 'Fermeture exceptionnelle', 'note' => '' ),
			array( 'kind' => 'period', 'startDate' => '2026-09-01', 'endDate' => '2026-09-30', 'weekdays' => array( '1', '3', '5' ), 'months' => array(), 'mode' => 'info', 'time' => '09h30–10h15', 'status' => 'Sur inscription', 'note' => 'Séance test' ),
		),
	);
}

// Les fixtures sont produites par les véritables fonctions de rendu PHP, pas un écran recopié.
if ( in_array( '--fixtures', $argv, true ) ) {
	$_GET = array(); ob_start(); balneo_v2_schedule_admin_page(); $list = ob_get_clean();
	$_GET = array( 'edit' => 'parc' ); ob_start(); balneo_v2_schedule_admin_page(); $form = ob_get_clean();
	$result = balneo_v2_schedule_save( input_fixture(), balneo_v2_schedule_revision( balneo_v2_schedule_store() ) );
	verify( ! $result['errors'], 'Fixture non enregistrée' );
	$public = balneo_v2_daily_schedule_shortcode();
	echo json_encode( array( 'list' => $list, 'form' => $form, 'public' => $public ) );
	exit;
}

$initial = balneo_v2_schedule_store();
verify( count( $initial['entries'] ) === 5, 'Initialisation des cinq cartes' );
verify( ! $options, 'Une lecture ne doit pas modifier la base' );
$revision = balneo_v2_schedule_revision( $initial );
$result = balneo_v2_schedule_save( input_fixture(), $revision );
verify( ! $result['errors'], 'Création valide refusée' );
verify( count( $options['balneo_v2_schedule']['entries'] ) === 6, 'Conservation des cartes initiales' );
verify( 'period' === $result['entry']['rules'][0]['kind'] && 'exception' === $result['entry']['rules'][1]['kind'], 'Priorité des exceptions' );
verify( array( 1, 3, 5 ) === $result['entry']['rules'][0]['weekdays'], 'Conversion des jours en nombres' );
verify( false === $result['entry']['rules'][0]['hidden'] && true === $result['entry']['default']['hidden'], 'Réapparition de la carte lors des séances' );
$saved_id = $result['entry']['id'];
$snapshot = $options;
$stale = balneo_v2_schedule_save( input_fixture(), $revision );
verify( $stale['errors'] && $snapshot === $options, 'Protection contre les fiches périmées' );

$invalids = array();
$invalid = input_fixture(); $invalid['url'] = 'javascript:alert(1)'; $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['theme'] = '"><script>'; $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['title'] = array( 'bad' ); $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['position'] = '-1'; $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['rules'][0]['date'] = '2026-02-30'; $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['rules'][1]['endDate'] = '2026-08-01'; $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['rules'][1]['weekdays'] = array( '7' ); $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['rules'][1]['months'] = array( '13' ); $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['rules'] = array_fill( 0, 21, $invalid['rules'][0] ); $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['rules'][1]['mode'] = 'invalid'; $invalids[] = $invalid;
$invalid = input_fixture(); $invalid['id'] = 'introuvable'; $invalids[] = $invalid;
foreach ( $invalids as $index => $invalid ) {
	$result = balneo_v2_schedule_save( $invalid, balneo_v2_schedule_revision( balneo_v2_schedule_store() ) );
	verify( $result['errors'] && $options === $snapshot, 'Validation invalide ' . $index );
}
verify( balneo_v2_schedule_valid_date( '2028-02-29' ) && ! balneo_v2_schedule_valid_date( '2026-02-29' ), 'Années bissextiles' );
$allowed = false;
$result = balneo_v2_schedule_save( input_fixture(), balneo_v2_schedule_revision( balneo_v2_schedule_store() ) );
verify( $result['errors'] && $options === $snapshot, 'Permissions d’écriture' );
try { balneo_v2_schedule_admin_page(); verify( false, 'Administration accessible sans droits' ); } catch ( RuntimeException $error ) { verify( 'Accès refusé.' === $error->getMessage(), 'Erreur de permission inattendue' ); }
$allowed = true;
$write_fail = true;
$result = balneo_v2_schedule_save( input_fixture(), balneo_v2_schedule_revision( balneo_v2_schedule_store() ) );
verify( $result['errors'] && $options === $snapshot, 'Détection d’un échec de base de données' );
verify( '' === $result['entry']['id'], 'Une création échouée doit pouvoir être retentée' );
$write_fail = false;

$_SERVER['REQUEST_METHOD'] = 'POST';
$_POST = array( 'entry' => input_fixture(), 'revision' => balneo_v2_schedule_revision( balneo_v2_schedule_store() ), 'form_complete' => '1' );
$nonce_valid = false;
try { balneo_v2_schedule_admin_save(); } catch ( RuntimeException $error ) { verify( 'nonce' === $error->getMessage(), 'Contrôle CSRF absent' ); }
verify( $options === $snapshot, 'La requête sans nonce a modifié des données' );
$nonce_valid = true;
unset( $_POST['form_complete'] );
try { balneo_v2_schedule_admin_save(); } catch ( RuntimeException $error ) { verify( 'redirect' === $error->getMessage(), 'Retour formulaire invalide' ); }
verify( $options === $snapshot && count( $transients ) === 1, 'Formulaire tronqué non protégé' );
verify( str_contains( $redirect, 'feedback=' ), 'Les erreurs doivent revenir à la fiche' );

$edit = input_fixture(); $edit['id'] = $saved_id; unset( $edit['enabled'] );
$result = balneo_v2_schedule_save( $edit, balneo_v2_schedule_revision( balneo_v2_schedule_store() ) );
verify( ! $result['errors'] && count( balneo_v2_schedule_entries() ) === 5, 'Désactivation sans suppression' );
verify( count( balneo_v2_schedule_store()['entries'] ) === 6, 'Données désactivées conservées' );
$options['balneo_v2_schedule']['entries'] = array();
verify( array() === balneo_v2_schedule_entries(), 'Un planning vide ne doit pas réimporter les exemples' );

$options = $snapshot;
$options['balneo_v2_schedule']['entries'][0]['title'] = '"><script>alert(1)</script>';
$html = balneo_v2_daily_schedule_shortcode();
verify( ! str_contains( $html, '<script>alert(1)' ) && str_contains( $html, '&lt;script&gt;' ), 'Échappement du rendu public' );
balneo_v2_schedule_admin_menu();
verify( 'edit_pages' === $menu[2], 'Accès des éditrices au menu' );
verify( isset( $hooks['admin_post_balneo_schedule_save'] ) && ! isset( $hooks['admin_post_nopriv_balneo_schedule_save'] ), 'Pas de sauvegarde publique' );
echo "Planning PHP validé : persistance, autorisations, CSRF, dates, exceptions, conflits, erreurs et échappement.\n";
