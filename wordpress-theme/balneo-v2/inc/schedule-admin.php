<?php
/** Administration du planning, réservée aux personnes autorisées à éditer les pages. @package BalneoV2 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function balneo_v2_schedule_admin_menu(): void {
	add_menu_page( 'Planning / Horaires', 'Planning / Horaires', 'edit_pages', 'balneo-planning', 'balneo_v2_schedule_admin_page', 'dashicons-calendar-alt', 22 );
}
add_action( 'admin_menu', 'balneo_v2_schedule_admin_menu' );

function balneo_v2_schedule_admin_assets( string $hook ): void {
	if ( 'toplevel_page_balneo-planning' !== $hook || ! current_user_can( 'edit_pages' ) ) { return; }
	wp_enqueue_style( 'balneo-planning-admin', get_theme_file_uri( '/css/schedule-admin.css' ), array(), (string) filemtime( get_theme_file_path( '/css/schedule-admin.css' ) ) );
	wp_enqueue_script( 'balneo-planning-admin', get_theme_file_uri( '/js/schedule-admin.js' ), array(), (string) filemtime( get_theme_file_path( '/js/schedule-admin.js' ) ), true );
}
add_action( 'admin_enqueue_scripts', 'balneo_v2_schedule_admin_assets' );

function balneo_v2_schedule_admin_url( array $args = array() ): string {
	return add_query_arg( array_merge( array( 'page' => 'balneo-planning' ), $args ), admin_url( 'admin.php' ) );
}

/** Aucune écriture possible via une requête GET, une personne non autorisée ou un formulaire tronqué. */
function balneo_v2_schedule_admin_save(): void {
	if ( ! current_user_can( 'edit_pages' ) ) { wp_die( 'Accès refusé.', '', array( 'response' => 403 ) ); }
	if ( 'POST' !== ( $_SERVER['REQUEST_METHOD'] ?? '' ) ) { wp_die( 'Méthode non autorisée.', '', array( 'response' => 405 ) ); }
	check_admin_referer( 'balneo_schedule_save', 'balneo_schedule_nonce' );
	$input = isset( $_POST['entry'] ) && is_array( $_POST['entry'] ) ? wp_unslash( $_POST['entry'] ) : array(); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Validation complète dans schedule-data.php.
	$revision = isset( $_POST['revision'] ) && is_string( $_POST['revision'] ) ? sanitize_text_field( wp_unslash( $_POST['revision'] ) ) : '';
	if ( ! isset( $_POST['form_complete'] ) || '1' !== $_POST['form_complete'] ) {
		$result = balneo_v2_schedule_validate( $input );
		$result['errors'][] = 'Le formulaire a été tronqué par le serveur. Rien n’a été enregistré. Réduisez le nombre de règles ou contactez la maintenance.';
	} else { $result = balneo_v2_schedule_save( $input, $revision ); }
	$id = $result['entry']['id'] ?: 'new';
	$args = array( 'edit' => $id );
	if ( $result['errors'] ) {
		$token = wp_generate_uuid4();
		set_transient( 'balneo_schedule_feedback_' . get_current_user_id() . '_' . $token, array( 'entry' => $result['entry'], 'errors' => $result['errors'], 'revision' => $revision ), 10 * MINUTE_IN_SECONDS );
		$args['feedback'] = $token;
	} else { $args['saved'] = '1'; }
	wp_safe_redirect( balneo_v2_schedule_admin_url( $args ) );
	exit;
}
add_action( 'admin_post_balneo_schedule_save', 'balneo_v2_schedule_admin_save' );

/** Champs nommés et associés à un label pour une utilisation clavier / lecteur d'écran. */
function balneo_v2_schedule_field( string $name, string $label, string $value = '', string $type = 'text', string $hint = '' ): void {
	$id = 'planning-' . preg_replace( '/[^a-zA-Z0-9_-]/', '-', $name );
	?>
	<div class="planning-field"><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label>
	<?php if ( 'textarea' === $type ) : ?>
		<textarea id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>" rows="3" maxlength="2000"><?php echo esc_textarea( $value ); ?></textarea>
	<?php else : ?>
		<input id="<?php echo esc_attr( $id ); ?>" name="<?php echo esc_attr( $name ); ?>" type="<?php echo esc_attr( $type ); ?>" value="<?php echo esc_attr( $value ); ?>" <?php echo 'number' === $type ? 'min="0" max="9999" step="1"' : ''; ?> <?php echo 'text' === $type ? 'maxlength="120"' : ''; ?>>
	<?php endif; ?>
	<?php if ( $hint ) : ?><p class="description"><?php echo esc_html( $hint ); ?></p><?php endif; ?></div>
	<?php
}

function balneo_v2_schedule_select( string $name, string $label, string $value, array $options ): void {
	$id = 'planning-' . preg_replace( '/[^a-zA-Z0-9_-]/', '-', $name );
	?><div class="planning-field"><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label><select name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $id ); ?>">
	<?php foreach ( $options as $key => $text ) : ?><option value="<?php echo esc_attr( $key ); ?>" <?php selected( $value, (string) $key ); ?>><?php echo esc_html( $text ); ?></option><?php endforeach; ?>
	</select></div><?php
}

function balneo_v2_schedule_state_fields( string $prefix, array $state ): void {
	$mode = ! empty( $state['hidden'] ) ? 'hidden' : ( ! empty( $state['closed'] ) ? 'closed' : 'info' );
	?><div class="planning-fields"><?php
	balneo_v2_schedule_select( $prefix . '[mode]', 'Affichage', $mode, array( 'info' => 'Afficher les informations', 'closed' => 'Afficher une fermeture / annulation', 'hidden' => 'Ne pas afficher la carte' ) );
	balneo_v2_schedule_field( $prefix . '[time]', 'Horaires ou libellé', $state['time'] ?? '', 'text', 'Exemples : 10h–12h / 14h–19h, Sur rendez-vous, Fermé.' );
	balneo_v2_schedule_field( $prefix . '[status]', 'Précision courte', $state['status'] ?? '', 'text', 'Exemples : Sur inscription, Dernier accès à 22h.' );
	balneo_v2_schedule_field( $prefix . '[note]', 'Information complémentaire', $state['note'] ?? '', 'textarea' );
	?></div><?php
}

function balneo_v2_schedule_checks( string $name, string $label, array $options, array $values ): void {
	?><fieldset class="planning-checks"><legend><?php echo esc_html( $label ); ?></legend><div><?php foreach ( $options as $key => $text ) : ?>
	<label><input type="checkbox" name="<?php echo esc_attr( $name ); ?>[]" value="<?php echo esc_attr( $key ); ?>" <?php checked( in_array( (int) $key, $values, true ) ); ?>> <?php echo esc_html( $text ); ?></label>
	<?php endforeach; ?></div><p class="description">Aucune case cochée = tous.</p></fieldset><?php
}

function balneo_v2_schedule_rule_fields( string $index, array $rule, array $default ): void {
	$prefix = 'entry[rules][' . $index . ']';
	$kind = $rule['kind'] ?? ( isset( $rule['dates'] ) ? 'exception' : 'period' );
	$state = array_merge( $default, $rule );
	?><fieldset class="planning-rule" data-rule><legend>Période ou exception</legend><div class="planning-rule__toolbar">
	<?php balneo_v2_schedule_select( $prefix . '[kind]', 'Type', $kind, array( 'period' => 'Période / récurrence', 'exception' => 'Exception à une date précise' ) ); ?>
	<button type="button" class="button" data-rule-up aria-label="Monter cette règle">↑ Monter</button><button type="button" class="button" data-rule-down aria-label="Descendre cette règle">↓ Descendre</button><button type="button" class="button-link-delete" data-rule-remove>Retirer la règle</button></div>
	<div data-rule-period><div class="planning-fields">
	<?php balneo_v2_schedule_field( $prefix . '[startDate]', 'Du (facultatif)', $rule['startDate'] ?? '', 'date' ); ?>
	<?php balneo_v2_schedule_field( $prefix . '[endDate]', 'Au, inclus (facultatif)', $rule['endDate'] ?? '', 'date' ); ?>
	</div>
	<?php balneo_v2_schedule_checks( $prefix . '[weekdays]', 'Jours de la semaine', array( 1 => 'Lun', 2 => 'Mar', 3 => 'Mer', 4 => 'Jeu', 5 => 'Ven', 6 => 'Sam', 0 => 'Dim' ), $rule['weekdays'] ?? array() ); ?>
	<?php balneo_v2_schedule_checks( $prefix . '[months]', 'Mois de l’année', array( 1 => 'Jan', 2 => 'Fév', 3 => 'Mar', 4 => 'Avr', 5 => 'Mai', 6 => 'Juin', 7 => 'Juil', 8 => 'Août', 9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Déc' ), $rule['months'] ?? array() ); ?>
	</div><div data-rule-exception>
	<?php balneo_v2_schedule_field( $prefix . '[date]', 'Date de l’exception', $rule['dates'][0] ?? '', 'date' ); ?>
	</div><?php balneo_v2_schedule_state_fields( $prefix, $state ); ?></fieldset><?php
}

function balneo_v2_schedule_admin_page(): void {
	if ( ! current_user_can( 'edit_pages' ) ) { wp_die( 'Accès refusé.', '', array( 'response' => 403 ) ); }
	$store = balneo_v2_schedule_store();
	$themes = balneo_v2_schedule_themes();
	$edit = isset( $_GET['edit'] ) && is_string( $_GET['edit'] ) ? sanitize_key( wp_unslash( $_GET['edit'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Navigation en lecture seule.
	$entry = null;
	$feedback = false;
	if ( isset( $_GET['feedback'] ) && is_string( $_GET['feedback'] ) ) { // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Message privé à l'utilisateur connecté.
		$key = 'balneo_schedule_feedback_' . get_current_user_id() . '_' . sanitize_key( wp_unslash( $_GET['feedback'] ) );
		$feedback = get_transient( $key );
		delete_transient( $key );
	}
	foreach ( $store['entries'] as $candidate ) { if ( $candidate['id'] === $edit ) { $entry = $candidate; break; } }
	if ( 'new' === $edit ) { $entry = array( 'id' => '', 'title' => '', 'theme' => 'balneo', 'url' => '', 'enabled' => false, 'position' => 100, 'default' => array( 'time' => 'À confirmer', 'status' => '', 'note' => '', 'hidden' => true, 'closed' => false ), 'rules' => array() ); }
	if ( is_array( $feedback ) ) { $entry = $feedback['entry']; }
	?>
	<div class="wrap planning-admin"><h1>Planning / Horaires</h1>
	<?php if ( is_array( $feedback ) ) : ?><div class="notice notice-error"><p><strong>La fiche n’a pas été enregistrée.</strong></p><ul><?php foreach ( $feedback['errors'] as $error ) : ?><li><?php echo esc_html( $error ); ?></li><?php endforeach; ?></ul></div>
	<?php elseif ( isset( $_GET['saved'] ) ) : // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- Message sans mutation. ?><div class="notice notice-success is-dismissible"><p>Activité enregistrée. Le calendrier utilise désormais ces informations.</p></div><?php endif; ?>
	<?php if ( '' !== $edit && null === $entry ) : ?><div class="notice notice-error"><p>Activité introuvable.</p></div><?php endif; ?>
	<?php if ( null === $entry ) : ?>
		<p>Gérez ici les cartes du calendrier. Désactivez une activité pour la retirer du site sans perdre ses horaires.</p>
		<div class="planning-actions"><a class="button button-primary" href="<?php echo esc_url( balneo_v2_schedule_admin_url( array( 'edit' => 'new' ) ) ); ?>">Ajouter une activité</a><a class="button" href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>" target="_blank" rel="noopener">Voir la page Horaires ↗</a></div>
		<table class="widefat striped"><thead><tr><th scope="col">Activité</th><th scope="col">Thématique</th><th scope="col">Affichage</th><th scope="col">Règles</th><th scope="col">Ordre</th><th scope="col">Action</th></tr></thead><tbody>
		<?php $sorted = $store['entries']; usort( $sorted, static function ( $a, $b ) { return ( $a['position'] ?? 0 ) <=> ( $b['position'] ?? 0 ); } ); ?>
		<?php foreach ( $sorted as $item ) : ?><tr><th scope="row"><?php echo esc_html( $item['title'] ); ?></th><td><?php echo esc_html( $themes[ $item['theme'] ]['label'] ?? $item['theme'] ); ?></td><td><?php echo ! empty( $item['enabled'] ) ? 'Visible sur le site' : 'Désactivée'; ?></td><td><?php echo esc_html( (string) count( $item['rules'] ) ); ?></td><td><?php echo esc_html( (string) $item['position'] ); ?></td><td><a class="button" aria-label="<?php echo esc_attr( 'Modifier ' . $item['title'] ); ?>" href="<?php echo esc_url( balneo_v2_schedule_admin_url( array( 'edit' => $item['id'] ) ) ); ?>">Modifier</a></td></tr><?php endforeach; ?>
		<?php if ( ! $sorted ) : ?><tr><td colspan="6">Aucune activité enregistrée. Ajoutez votre première carte.</td></tr><?php endif; ?>
		</tbody></table><div class="planning-panel"><h2>Afficher le calendrier sur une page</h2><p>Dans la page Horaires, utilisez un bloc « Code court » avec <code>[balneo_daily_schedule]</code>. Les horaires se modifient ensuite uniquement ici.</p><p>Les informations initiales sont des repères : vérifiez les horaires, périodes et fermetures avant de les confirmer au public.</p></div>
	<?php else : ?>
		<p><a href="<?php echo esc_url( balneo_v2_schedule_admin_url() ); ?>">← Toutes les activités</a></p>
		<h2><?php echo esc_html( $entry['title'] ? $entry['title'] : 'Nouvelle activité' ); ?></h2>
		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" data-planning-form>
		<input type="hidden" name="action" value="balneo_schedule_save"><input type="hidden" name="entry[id]" value="<?php echo esc_attr( $entry['id'] ); ?>"><input type="hidden" name="revision" value="<?php echo esc_attr( $feedback['revision'] ?? balneo_v2_schedule_revision( $store ) ); ?>">
		<?php wp_nonce_field( 'balneo_schedule_save', 'balneo_schedule_nonce' ); ?>
		<section class="planning-panel"><h2>L’activité</h2><div class="planning-fields">
		<?php balneo_v2_schedule_field( 'entry[title]', 'Nom de l’activité', $entry['title'] ); ?>
		<?php balneo_v2_schedule_select( 'entry[theme]', 'Thématique et couleur', $entry['theme'], array_map( static function ( $theme ) { return $theme['label']; }, $themes ) ); ?>
		<?php $url = $entry['url']; if ( preg_match( '/^([a-z0-9-]+)\.html$/', $url, $matches ) ) { $url = home_url( '/' . $matches[1] . '/' ); } ?>
		<?php balneo_v2_schedule_field( 'entry[url]', 'Lien « Découvrir » (facultatif)', $url, 'url', 'Adresse complète de la page de cette activité.' ); ?>
		<?php balneo_v2_schedule_field( 'entry[position]', 'Ordre d’affichage', (string) $entry['position'], 'number', 'Les plus petits nombres sont affichés en premier.' ); ?>
		</div><label class="planning-enabled"><input type="checkbox" name="entry[enabled]" value="1" <?php checked( ! empty( $entry['enabled'] ) ); ?>> Afficher cette activité sur le site</label></section>
		<section class="planning-panel"><h2>Informations habituelles</h2><p>Affichées lorsqu’aucune période ou exception ne s’applique. Pour un cours proposé seulement certains jours, choisissez « Ne pas afficher la carte », puis ajoutez ses séances ci-dessous.</p><?php balneo_v2_schedule_state_fields( 'entry[default]', $entry['default'] ); ?></section>
		<section class="planning-panel"><h2>Périodes, récurrences et exceptions</h2><p>Une période peut cibler une saison et certains jours. Les exceptions à une date précise passent toujours après les périodes. Si plusieurs règles du même type correspondent, la dernière de la liste est prioritaire.</p>
		<div data-planning-rules><?php foreach ( $entry['rules'] as $index => $rule ) { balneo_v2_schedule_rule_fields( (string) $index, $rule, $entry['default'] ); } ?></div>
		<button type="button" class="button" data-rule-add>Ajouter une période ou une exception</button><p class="description">20 règles maximum par activité. Les règles retirées ne disparaissent qu’après l’enregistrement.</p>
		<template data-rule-template><?php balneo_v2_schedule_rule_fields( '__INDEX__', array( 'kind' => 'period' ), array( 'time' => '', 'status' => '', 'note' => '', 'hidden' => false, 'closed' => false ) ); ?></template>
		<noscript><p>Activez JavaScript pour ajouter ou déplacer des règles. Les champs existants restent éditables.</p></noscript></section>
		<div class="planning-actions"><button type="submit" class="button button-primary button-hero">Enregistrer l’activité</button><a class="button" href="<?php echo esc_url( balneo_v2_schedule_admin_url( array( 'edit' => $edit ?: 'new' ) ) ); ?>">Recharger la fiche enregistrée</a></div>
		<input type="hidden" name="form_complete" value="1"></form>
	<?php endif; ?><p class="planning-live" role="status" aria-live="polite" data-planning-status></p></div>
	<?php
}
