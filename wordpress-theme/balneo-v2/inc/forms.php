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
	$status = isset( $_GET['inscription'] ) && is_string( $_GET['inscription'] ) ? sanitize_key( wp_unslash( $_GET['inscription'] ) ) : ''; // phpcs:ignore WordPress.Security.NonceVerification.Recommended -- État d’affichage en lecture seule après redirection.

	ob_start();
	?>
	<div class="form-success<?php echo 'merci' === $status ? ' visible' : ''; ?>" role="status">
		<?php esc_html_e( 'Votre demande est enregistrée. Notre équipe la prendra en charge.', 'balneo-v2' ); ?>
	</div>
	<div class="form-error<?php echo 'erreur' === $status ? ' visible' : ''; ?>" role="alert">
		<?php esc_html_e( 'L’inscription n’a pas pu être envoyée. Vérifiez votre adresse e-mail ou réessayez.', 'balneo-v2' ); ?>
	</div>
	<form data-form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
		<p><?php esc_html_e( 'Demandez votre inscription à la newsletter. Votre demande est enregistrée et traitée par notre équipe.', 'balneo-v2' ); ?></p>
		<input type="hidden" name="action" value="balneo_v2_newsletter">
		<?php wp_nonce_field( 'balneo_v2_newsletter', 'balneo_v2_newsletter_nonce' ); ?>
		<div class="balneo-honeypot" aria-hidden="true">
			<label><?php esc_html_e( 'Site web', 'balneo-v2' ); ?><input type="text" name="website" tabindex="-1" autocomplete="off"></label>
		</div>
		<div class="form-group"><label for="prenom<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Prénom', 'balneo-v2' ); ?></label><input type="text" id="prenom<?php echo esc_attr( $suffix ); ?>" name="prenom" autocomplete="given-name" maxlength="80" required></div>
		<div class="form-group"><label for="nom<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Nom', 'balneo-v2' ); ?></label><input type="text" id="nom<?php echo esc_attr( $suffix ); ?>" name="nom" autocomplete="family-name" maxlength="80" required></div>
		<div class="form-group"><label for="email<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'E-mail', 'balneo-v2' ); ?></label><input type="email" id="email<?php echo esc_attr( $suffix ); ?>" name="email" autocomplete="email" maxlength="254" required></div>
		<div class="form-group"><label for="cp<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Code postal', 'balneo-v2' ); ?></label><input type="text" id="cp<?php echo esc_attr( $suffix ); ?>" name="cp" autocomplete="postal-code" inputmode="numeric" maxlength="12"></div>
		<div class="form-group"><label for="ville<?php echo esc_attr( $suffix ); ?>"><?php esc_html_e( 'Ville', 'balneo-v2' ); ?></label><input type="text" id="ville<?php echo esc_attr( $suffix ); ?>" name="ville" autocomplete="address-level2" maxlength="120"></div>
		<div class="form-group form-group--consent">
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
		<button type="submit" class="btn"><?php esc_html_e( 'Envoyer ma demande', 'balneo-v2' ); ?><i class="fa-solid fa-paper-plane" aria-hidden="true"></i></button>
	</form>
	<?php

	return (string) ob_get_clean();
}
add_shortcode( 'balneo_newsletter_form', 'balneo_v2_newsletter_form_shortcode' );

/** Traite un formulaire POST valide et redirige vers son état de résultat. */
function balneo_v2_newsletter_signup(): void {
	$referer = wp_validate_redirect( (string) wp_get_referer(), home_url( '/' ) );
	$referer = explode( '#', remove_query_arg( 'inscription', $referer ) )[0];
	$nonce   = isset( $_POST['balneo_v2_newsletter_nonce'] ) && is_string( $_POST['balneo_v2_newsletter_nonce'] ) ? sanitize_text_field( wp_unslash( $_POST['balneo_v2_newsletter_nonce'] ) ) : '';
	$method  = isset( $_SERVER['REQUEST_METHOD'] ) && is_string( $_SERVER['REQUEST_METHOD'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_METHOD'] ) ) : '';
	$valid   = 'POST' === $method && wp_verify_nonce( $nonce, 'balneo_v2_newsletter' );
	$address = isset( $_SERVER['REMOTE_ADDR'] ) && is_string( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	$stored  = $valid && function_exists( 'balneo_v2_store_newsletter_request' ) && balneo_v2_store_newsletter_request( wp_unslash( $_POST ), $address ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- Chaque champ est validé et nettoyé dans store_newsletter_request.
	wp_safe_redirect( add_query_arg( 'inscription', $stored ? 'merci' : 'erreur', $referer ) . '#contact' );
	exit;
}
add_action( 'admin_post_nopriv_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
add_action( 'admin_post_balneo_v2_newsletter', 'balneo_v2_newsletter_signup' );
