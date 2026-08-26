<?php
/**
 * Formulaires publics du thème permanent Balnéo V2.
 *
 * @package BalneoV2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Affiche le formulaire newsletter à l’emplacement du shortcode.
 */
function balneo_v2_newsletter_form_shortcode(): string {
	static $instance = 0;
	++$instance;
	$suffix = 1 === $instance ? '' : '-' . $instance;
	$status = isset( $_GET['inscription'] ) ? sanitize_key( wp_unslash( $_GET['inscription'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- État d’affichage en lecture seule après redirection.

	ob_start();
	?>
	<div class="form-success<?php echo 'merci' === $status ? ' visible' : ''; ?>" role="status">
		<?php esc_html_e( 'Merci pour votre inscription !', 'balneo-v2' ); ?>
	</div>
	<div class="form-error<?php echo 'erreur' === $status ? ' visible' : ''; ?>" role="alert">
		<?php esc_html_e( 'L’inscription n’a pas pu être envoyée. Vérifiez votre adresse e-mail ou réessayez.', 'balneo-v2' ); ?>
	</div>
	<form data-form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<input type="hidden" name="action" value="balneo_v2_newsletter">
		<?php wp_nonce_field( 'balneo_v2_newsletter', 'balneo_v2_newsletter_nonce' ); ?>
		<div class="balneo-honeypot" aria-hidden="true">
			<label><?php esc_html_e( 'Site web', 'balneo-v2' ); ?><input type="text" name="website" tabindex="-1" autocomplete="off"></label>
		</div>
		<div class="form-group"><label for="prenom<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Prénom', 'balneo-v2' ); ?></label><input type="text" id="prenom<?php echo esc_attr( $suffix ); ?>" name="prenom" autocomplete="given-name" required></div>
		<div class="form-group"><label for="nom<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Nom', 'balneo-v2' ); ?></label><input type="text" id="nom<?php echo esc_attr( $suffix ); ?>" name="nom" autocomplete="family-name" required></div>
		<div class="form-group"><label for="email<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'E-mail', 'balneo-v2' ); ?></label><input type="email" id="email<?php echo esc_attr( $suffix ); ?>" name="email" autocomplete="email" required></div>
		<div class="form-group"><label for="cp<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Code postal', 'balneo-v2' ); ?></label><input type="text" id="cp<?php echo esc_attr( $suffix ); ?>" name="cp" autocomplete="postal-code" inputmode="numeric"></div>
		<div class="form-group"><label for="ville<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Ville', 'balneo-v2' ); ?></label><input type="text" id="ville<?php echo esc_attr( $suffix ); ?>" name="ville" autocomplete="address-level2"></div>
		<button type="submit" class="btn"><?php esc_html_e( 'S’inscrire', 'balneo-v2' ); ?><i class="fa-solid fa-paper-plane" aria-hidden="true"></i></button>
	</form>
	<?php

	return (string) ob_get_clean();
}
add_shortcode( 'balneo_newsletter_form', 'balneo_v2_newsletter_form_shortcode' );

/**
 * Traite une demande newsletter et l’envoie à l’adresse d’administration.
 */
function balneo_v2_newsletter_signup(): void {
	$referer = wp_get_referer() ? wp_get_referer() : home_url( '/' );
	$referer = remove_query_arg( 'inscription', $referer );

	if (
		! isset( $_POST['balneo_v2_newsletter_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['balneo_v2_newsletter_nonce'] ) ), 'balneo_v2_newsletter' ) ||
		! empty( $_POST['website'] )
	) {
		wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
		exit;
	}

	$first_name = isset( $_POST['prenom'] ) ? sanitize_text_field( wp_unslash( $_POST['prenom'] ) ) : '';
	$last_name  = isset( $_POST['nom'] ) ? sanitize_text_field( wp_unslash( $_POST['nom'] ) ) : '';
	$email      = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$postcode   = isset( $_POST['cp'] ) ? sanitize_text_field( wp_unslash( $_POST['cp'] ) ) : '';
	$city       = isset( $_POST['ville'] ) ? sanitize_text_field( wp_unslash( $_POST['ville'] ) ) : '';

	if ( ! $first_name || ! $last_name || ! is_email( $email ) ) {
		wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
		exit;
	}

	$message = implode(
		"\n",
		array(
			__( 'Nouvelle demande d’inscription à la newsletter Balnéo V2', 'balneo-v2' ),
			'',
			sprintf( /* translators: %s: first name. */ __( 'Prénom : %s', 'balneo-v2' ), $first_name ),
			sprintf( /* translators: %s: last name. */ __( 'Nom : %s', 'balneo-v2' ), $last_name ),
			sprintf( /* translators: %s: email address. */ __( 'E-mail : %s', 'balneo-v2' ), $email ),
			sprintf( /* translators: %s: postcode. */ __( 'Code postal : %s', 'balneo-v2' ), $postcode ),
			sprintf( /* translators: %s: city. */ __( 'Ville : %s', 'balneo-v2' ), $city ),
		)
	);
	$headers = array( 'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>' );
	$sent    = wp_mail( get_option( 'admin_email' ), __( 'Inscription newsletter Balnéo', 'balneo-v2' ), $message, $headers );

	wp_safe_redirect( add_query_arg( 'inscription', $sent ? 'merci' : 'erreur', $referer ) . '#contact' );
	exit;
}
add_action( 'admin_post_nopriv_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
add_action( 'admin_post_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
