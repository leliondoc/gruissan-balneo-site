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
	<div class="formulaire-succes<?php echo 'merci' === $status ? ' visible' : ''; ?>" role="status">
		<?php esc_html_e( 'Merci pour votre inscription !', 'balneo-v2' ); ?>
	</div>
	<div class="formulaire-erreur<?php echo 'erreur' === $status ? ' visible' : ''; ?>" role="alert">
		<?php esc_html_e( 'L’inscription n’a pas pu être envoyée. Vérifiez votre adresse e-mail ou réessayez.', 'balneo-v2' ); ?>
	</div>
	<form data-form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<input type="hidden" name="action" value="balneo_v2_newsletter">
		<?php wp_nonce_field( 'balneo_v2_newsletter', 'balneo_v2_newsletter_nonce' ); ?>
		<div class="balneo-champ-piege" aria-hidden="true">
			<label><?php esc_html_e( 'Site web', 'balneo-v2' ); ?><input type="text" name="website" tabindex="-1" autocomplete="off"></label>
		</div>
		<div class="groupe-formulaire"><label for="prenom<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Prénom', 'balneo-v2' ); ?></label><input type="text" id="prenom<?php echo esc_attr( $suffix ); ?>" name="prenom" autocomplete="given-name" maxlength="80" required></div>
		<div class="groupe-formulaire"><label for="nom<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Nom', 'balneo-v2' ); ?></label><input type="text" id="nom<?php echo esc_attr( $suffix ); ?>" name="nom" autocomplete="family-name" maxlength="80" required></div>
		<div class="groupe-formulaire"><label for="email<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'E-mail', 'balneo-v2' ); ?></label><input type="email" id="email<?php echo esc_attr( $suffix ); ?>" name="email" autocomplete="email" maxlength="254" required></div>
		<div class="groupe-formulaire"><label for="cp<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Code postal', 'balneo-v2' ); ?></label><input type="text" id="cp<?php echo esc_attr( $suffix ); ?>" name="cp" autocomplete="postal-code" inputmode="numeric" maxlength="12"></div>
		<div class="groupe-formulaire"><label for="ville<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Ville', 'balneo-v2' ); ?></label><input type="text" id="ville<?php echo esc_attr( $suffix ); ?>" name="ville" autocomplete="address-level2" maxlength="120"></div>
		<div class="groupe-formulaire groupe-formulaire--consentement">
			<label for="consentement<?php echo esc_attr( $suffix ); ?>">
				<input type="checkbox" id="consentement<?php echo esc_attr( $suffix ); ?>" name="consentement" value="1" required>
				<?php
				echo wp_kses_post(
					sprintf(
						/* translators: %s: lien vers la politique de confidentialité. */
						__( 'J’accepte de recevoir les actualités et j’ai lu la %s.', 'balneo-v2' ),
						'<a href="' . esc_url( home_url( '/donnees-personnelles/' ) ) . '">' . esc_html__( 'politique de confidentialité', 'balneo-v2' ) . '</a>'
					)
				);
				?>
			</label>
		</div>
		<button type="submit" class="bouton"><?php esc_html_e( 'S’inscrire', 'balneo-v2' ); ?><i class="fa-solid fa-paper-plane" aria-hidden="true"></i></button>
	</form>
	<?php

	return (string) ob_get_clean();
}
add_shortcode( 'balneo_newsletter_form', 'balneo_v2_newsletter_form_shortcode' );

/**
 * Traite une demande newsletter et l’envoie à l’adresse d’administration.
 */
function balneo_v2_newsletter_signup(): void {
	$referer = wp_validate_redirect( (string) wp_get_referer(), home_url( '/' ) );
	$referer = remove_query_arg( 'inscription', $referer );

	if (
		! isset( $_POST['balneo_v2_newsletter_nonce'] ) ||
		! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['balneo_v2_newsletter_nonce'] ) ), 'balneo_v2_newsletter' ) ||
		( isset( $_POST['website'] ) && '' !== trim( (string) wp_unslash( $_POST['website'] ) ) )
	) {
		wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
		exit;
	}

	$first_name = isset( $_POST['prenom'] ) ? sanitize_text_field( wp_unslash( $_POST['prenom'] ) ) : '';
	$last_name  = isset( $_POST['nom'] ) ? sanitize_text_field( wp_unslash( $_POST['nom'] ) ) : '';
	$email      = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$postcode   = isset( $_POST['cp'] ) ? sanitize_text_field( wp_unslash( $_POST['cp'] ) ) : '';
	$city       = isset( $_POST['ville'] ) ? sanitize_text_field( wp_unslash( $_POST['ville'] ) ) : '';
	$consent    = isset( $_POST['consentement'] ) && '1' === sanitize_key( wp_unslash( $_POST['consentement'] ) );

	$invalid_lengths = strlen( $first_name ) > 80 || strlen( $last_name ) > 80 || strlen( $email ) > 254 || strlen( $postcode ) > 12 || strlen( $city ) > 120;
	$invalid_postcode = $postcode && ! preg_match( '/^[0-9A-Za-z -]+$/', $postcode );

	if ( ! $first_name || ! $last_name || ! is_email( $email ) || ! $consent || $invalid_lengths || $invalid_postcode ) {
		wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
		exit;
	}

	// Limite les envois automatisés répétés sans conserver l’adresse IP en clair.
	$remote_address = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	$rate_key       = 'balneo_nl_' . hash_hmac( 'sha256', strtolower( $email ) . '|' . $remote_address, wp_salt( 'nonce' ) );
	if ( false !== get_transient( $rate_key ) ) {
		wp_safe_redirect( add_query_arg( 'inscription', 'erreur', $referer ) . '#contact' );
		exit;
	}
	set_transient( $rate_key, 1, MINUTE_IN_SECONDS );

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
			__( 'Consentement newsletter : oui', 'balneo-v2' ),
		)
	);
	$headers = array( 'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>' );
	$sent    = wp_mail( get_option( 'admin_email' ), __( 'Inscription newsletter Balnéo', 'balneo-v2' ), $message, $headers );

	wp_safe_redirect( add_query_arg( 'inscription', $sent ? 'merci' : 'erreur', $referer ) . '#contact' );
	exit;
}
add_action( 'admin_post_nopriv_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
add_action( 'admin_post_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
