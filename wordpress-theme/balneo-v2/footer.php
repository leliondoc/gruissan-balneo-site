<?php
/**
 * Pied de page du thème Balnéo V2.
 *
 * @package BalneoV2
 */

?>
<?php if ( is_front_page() ) : ?>
<!-- Appel à l’action persistant : billetterie en ligne -->
<a class="cta-orb" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span class="cta-orb__label"><span><?php esc_html_e( 'Acheter', 'balneo-v2' ); ?></span><small><?php esc_html_e( 'en ligne', 'balneo-v2' ); ?></small></span></a>
<?php endif; ?>
	<!-- Pied de page : navigation secondaire et informations légales -->
<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
		<div class="footer-logo">
			<?php balneo_v2_site_logo( 'footer' ); ?>
			<nav class="footer-legal" aria-label="<?php esc_attr_e( 'Informations légales', 'balneo-v2' ); ?>">
			<a href="<?php echo esc_url( home_url( '/mentions-legales/' ) ); ?>"><?php esc_html_e( 'Mentions légales', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/donnees-personnelles/' ) ); ?>"><?php esc_html_e( 'Données personnelles', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/reglement/' ) ); ?>"><?php esc_html_e( 'Règlement intérieur', 'balneo-v2' ); ?></a>
			</nav>
		</div>
		<nav class="footer-nav">
			<a href="<?php echo esc_url( home_url( '/salle-de-sport/' ) ); ?>"><i class="fa-solid fa-dumbbell" aria-hidden="true"></i><?php esc_html_e( 'Espace For.Me', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>"><i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i><?php esc_html_e( 'Espace Balnéo', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/massages/' ) ); ?>"><i class="fa-solid fa-spa" aria-hidden="true"></i><?php esc_html_e( 'Massages', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/aquagym/' ) ); ?>"><i class="fa-solid fa-person-swimming" aria-hidden="true"></i><?php esc_html_e( 'Aquagym', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/parc-ete/' ) ); ?>"><i class="fa-solid fa-sun" aria-hidden="true"></i><?php esc_html_e( 'Parc été', 'balneo-v2' ); ?></a>
		</nav>
		<nav class="footer-nav">
			<a href="<?php echo esc_url( home_url( '/infos-pratiques/' ) ); ?>"><i class="fa-solid fa-circle-info" aria-hidden="true"></i><?php esc_html_e( 'Infos pratiques', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/tarifs/' ) ); ?>"><i class="fa-solid fa-tag" aria-hidden="true"></i><?php esc_html_e( 'Tarifs', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>"><i class="fa-solid fa-clock" aria-hidden="true"></i><?php esc_html_e( 'Horaires', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/acces-parking/' ) ); ?>"><i class="fa-solid fa-route" aria-hidden="true"></i><?php esc_html_e( 'Accès & parking', 'balneo-v2' ); ?></a>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><i class="fa-solid fa-envelope" aria-hidden="true"></i>Contact</a>
		</nav>
		</div>
		<div class="footer-bottom">
		<span><?php esc_html_e( '® D.B.G — Espace Balnéo de Gruissan', 'balneo-v2' ); ?></span>
		<span><?php esc_html_e( 'Photos : J.B. Roubinet', 'balneo-v2' ); ?></span>
		</div>
	</div>
	</footer>
<!-- Scripts différés et fonctionnalités interactives -->
<?php wp_footer(); ?>
</body>
</html>
