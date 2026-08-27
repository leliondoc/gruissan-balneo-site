<?php
/**
 * Contenu importé de la maquette validée : contact.html.
 *
 * @package BalneoV2
 */

?>
<main id="contenu-principal">
<section class="hero-page">
    <div class="hero-page__media media-plein">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/gruissan-050.webp' ) ); ?>" alt="" width="1900" height="766" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'gruissan-050.webp' ) ); ?>" sizes="100vw">
    </div>
    <div class="hero-page__voile"></div>
    <div class="hero-page__contenu">
      <p class="hero-page__libelle">Nous contacter</p>
      <h1 class="hero-page__titre">Contact</h1>
      <span class="filet-titre" aria-hidden="true"></span>
    </div>
  </section>
<section class="section-contenu section-contenu--claire">
  <div class="conteneur bloc-contenu apparition" style="text-align:center">
    <p>Vous pouvez nous contacter par téléphone, par e-mail ou nous rendre directement visite.</p>
    <div style="margin:var(--space-lg) 0">
      <p class="infos-contact__libelle">Téléphone</p>
      <p style="font-size:1.5rem;font-weight:300"><a href="tel:+33468756050">04 68 75 60 50</a></p>
      <p class="infos-contact__libelle" style="margin-top:var(--space-md)">E-mail</p>
      <p><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
      <p class="infos-contact__libelle" style="margin-top:var(--space-md)">Adresse</p>
      <p>Avenue des Bains — 11430 Gruissan</p>
    </div>
    <a href="https://gruissan-balneo.horanet.com/" class="bouton bouton--plein" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
  </div>
</section>
<section class="section-contenu section-contact" id="contact">
    <div class="conteneur">
      <div class="grille-contact apparition">
        <div class="infos-contact">
          <div class="section-contenu__entete" style="text-align:left;margin-bottom:var(--space-md)">
            <p class="section-contenu__libelle">Contact</p>
            <h2 class="section-contenu__titre">Nous contacter</h2>
          </div>
          <div class="infos-contact__element">
            <p class="infos-contact__libelle">Téléphone</p>
            <p class="infos-contact__valeur"><a href="tel:+33468756050">04 68 75 60 50</a></p>
          </div>
          <div class="infos-contact__element">
            <p class="infos-contact__libelle">E-mail</p>
            <p class="infos-contact__valeur"><a href="mailto:espace.balneoludique@gruissan-mediterranee.com">espace.balneoludique@gruissan-mediterranee.com</a></p>
          </div>
          <div class="infos-contact__element">
            <p class="infos-contact__libelle">Adresse</p>
            <p class="infos-contact__valeur">Avenue des Bains — 11430 Gruissan</p>
          </div>
        </div>
        <div>
          <div class="section-contenu__entete" style="text-align:left;margin-bottom:var(--space-md)">
            <p class="section-contenu__libelle">Newsletter</p>
            <h2 class="section-contenu__titre">Inscrivez-vous</h2>
            <p style="font-size:0.9rem;color:var(--charcoal-soft);font-weight:300">Recevez les dernières actualités de l'Espace Balnéo par mail.</p>
          </div>
          <?php echo do_shortcode( '[balneo_newsletter_form]' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Sortie échappée dans le shortcode. ?>
        </div>
      </div>
    </div>
  </section>
</main>
