<?php
/**
 * Contenu importé de la maquette validée : contact.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="page-hero">
	<div class="page-hero__media media-fill">
		<img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/gruissan-050.webp' ) ); ?>" alt="" width="1900" height="766" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'gruissan-050.webp' ) ); ?>" sizes="100vw">
	</div>
	<div class="page-hero__veil"></div>
	<div class="page-hero__content">
		<p class="page-hero__label">Nous contacter</p>
		<h1 class="page-hero__title">Contact</h1>
		<span class="title-rule" aria-hidden="true"></span>
	</div>
	</section>
<section class="section section--light">
	<div class="container content-block fade-in" style="text-align:center">
	<h2>Nos coordonnées</h2>
	<p>Vous pouvez nous contacter par téléphone, par e-mail ou nous rendre directement visite.</p>
	<div style="margin:var(--space-lg) 0">
		<p class="contact-info__label">Téléphone</p>
		<p style="font-size:1.5rem;font-weight:300"><a href="tel:+33468756050">04 68 75 60 50</a></p>
		<p class="contact-info__label" style="margin-top:var(--space-md)">E-mail</p>
		<p><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
		<p class="contact-info__label" style="margin-top:var(--space-md)">Adresse</p>
		<p>Avenue des Bains — 11430 Gruissan</p>
	</div>
	<a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
	</div>
</section>
<section class="section contact-section" id="contact">
	<div class="container">
		<div class="contact-grid fade-in">
		<div class="contact-info">
			<div class="section__header" style="text-align:left;margin-bottom:var(--space-md)">
			<p class="section__label">Contact</p>
			<h2 class="section__title">Nous contacter</h2>
			</div>
			<div class="contact-info__item">
			<p class="contact-info__label">Téléphone</p>
			<p class="contact-info__value"><a href="tel:+33468756050">04 68 75 60 50</a></p>
			</div>
			<div class="contact-info__item">
			<p class="contact-info__label">E-mail</p>
			<p class="contact-info__value"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
			</div>
			<div class="contact-info__item">
			<p class="contact-info__label">Adresse</p>
			<p class="contact-info__value">Avenue des Bains — 11430 Gruissan</p>
			</div>
		</div>
		<div>
			<div class="section__header" style="text-align:left;margin-bottom:var(--space-md)">
			<p class="section__label">Newsletter</p>
			<h2 class="section__title">Inscrivez-vous</h2>
			<p style="font-size:0.9rem;color:var(--charcoal-soft);font-weight:300">Recevez les dernières actualités de l'Espace Balnéo par mail.</p>
			</div>
			<?php echo do_shortcode( '[balneo_newsletter_form]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Sortie échappée dans le shortcode. ?>
		</div>
		</div>
	</div>
	</section>
</main>
