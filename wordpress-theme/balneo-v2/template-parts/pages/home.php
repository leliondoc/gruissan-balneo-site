<?php
/**
 * Contenu importé de la maquette validée : index.html.
 *
 * @package BalneoV2
 */

?>
<div class="bandeau-info">
    <div class="conteneur"><span class="bandeau-info__message"><strong>Accès des mineurs à la Balnéo :</strong> du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.</span>
      <button class="bandeau-info__fermer" type="button" aria-label="Fermer">&times;</button>
    </div>
  </div>

<main id="contenu-principal">
  <section class="hero-accueil">
    <div class="hero-accueil__media media-plein">
      <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-188.webp' ) ); ?>" alt="Bassin intérieur de l’Espace Balnéo de Gruissan" width="2560" height="1707" loading="eager" fetchpriority="high" decoding="async" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'balneo-188.webp' ) ); ?>" sizes="100vw">
    </div>
    <div class="hero-accueil__voile"></div>
    <div class="hero-accueil__contenu apparition">
      <p class="hero-accueil__surtitre">Balnéo · Piscine · Soins · Sport</p>
      <h1 class="hero-accueil__titre">Entrez dans<br>votre <em>parenthèse.</em></h1>
      <p class="hero-accueil__accroche">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
      <div class="groupe-boutons">
        <a href="#experiences" class="bouton bouton--sur-photo bouton--plein">Explorer les espaces<i class="fa-solid fa-compass" aria-hidden="true"></i></a>
        <a href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>" class="lien-texte lien-texte--clair">Voir les horaires <span>→</span></a>
      </div>
    </div>
    <div class="hero-accueil__sceaux" aria-label="Informations saison 2026">
      <div class="sceau-marque sceau-marque--ouvert"><strong>Ouvert</strong><span>7j/7</span></div>
    </div>
    <a class="hero-accueil__defilement" href="#bienvenue"><span></span>Découvrir</a>
  </section>

  <nav class="acces-rapides" aria-label="Accès rapides">
    <a href="<?php echo esc_url( home_url( '/horaires/' ) ); ?>"><span>01</span><strong>Horaires</strong><small>Préparer ma visite</small></a>
    <a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span>02</span><strong>Billetterie &amp; cadeaux</strong><small>Acheter en ligne</small></a>
    <a href="<?php echo esc_url( home_url( '/acces-parking/' ) ); ?>"><span>03</span><strong>Venir à la Balnéo</strong><small>Accès &amp; parking</small></a>
  </nav>

  <section class="bienvenue section-contenu" id="bienvenue">
    <div class="conteneur bienvenue__grille apparition">
      <div>
        <p class="section-contenu__libelle">Bienvenue à Gruissan</p>
        <h2 class="titre-affichage">Un rêve où se mêlent l'eau, le bois, la lumière et le sel.</h2>
      </div>
      <div class="bienvenue__texte">
        <p>À quelques pas de la Méditerranée, l'Espace Balnéo invite à ralentir. Des bassins chauffés à 32°C, des soins enveloppants et des activités pensées pour retrouver son rythme.</p>
        <p>Seul, à deux ou en famille, venez respirer, bouger et vous laisser porter.</p>
        <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="lien-texte">Découvrir la Balnéo <span>→</span></a>
      </div>
    </div>
  </section>

  <section class="section-experiences" id="experiences">
    <div class="conteneur entete-section apparition">
      <div>
        <p class="section-contenu__libelle">Nos expériences</p>
        <h2 class="titre-affichage">À chacun son horizon</h2>
      </div>
      <p>Des univers complémentaires, réunis autour d'une même envie : prendre soin de soi.</p>
    </div>
    <div class="grille-experiences">
      <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="carte-experience carte-experience--grande apparition">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/riviere.webp' ) ); ?>" alt="Rivière extérieure et bassins de l’Espace Balnéo" width="2560" height="1440" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'riviere.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        <span class="carte-experience__voile"></span>
        <div class="carte-experience__contenu"><small>Se délasser</small><h3>Les bains &amp; la Balnéo</h3><p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p><span class="fleche-ronde">→</span></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/massages/' ) ); ?>" class="carte-experience apparition">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-73.webp' ) ); ?>" alt="Massage bien-être" width="2560" height="1707" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'balneo-73.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        <span class="carte-experience__voile"></span>
        <div class="carte-experience__contenu"><small>Se retrouver</small><h3>Soins &amp; massages</h3><p>Des gestes enveloppants pour une profonde détente.</p><span class="fleche-ronde">→</span></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/salle-de-sport/' ) ); ?>" class="carte-experience apparition">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/balneo-tgn.webp' ) ); ?>" alt="Salle de sport For.Me" width="1900" height="1262" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'balneo-tgn.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        <span class="carte-experience__voile"></span>
        <div class="carte-experience__contenu"><small>Se dépasser</small><h3>Sport &amp; aquasports</h3><p>Cardio, renforcement et activités aquatiques à votre rythme.</p><span class="fleche-ronde">→</span></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/parc-ete/' ) ); ?>" class="carte-experience carte-experience--large apparition">
        <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/parc-aquatique.webp' ) ); ?>" alt="Parc aquatique paysager de Gruissan" width="1900" height="1259" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'parc-aquatique.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
        <span class="carte-experience__voile"></span>
        <div class="carte-experience__contenu"><small>Partager</small><h3>Le parc été en famille</h3><p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p><span class="fleche-ronde">→</span></div>
      </a>
    </div>
  </section>

  <section class="section-saisons" aria-labelledby="seasonal-title" data-seasonal>
    <div class="conteneur titre-saisons apparition">
      <p class="section-contenu__libelle">Au fil des saisons</p>
      <h2 class="titre-affichage" id="seasonal-title">Une envie pour chaque saison</h2>
    </div>
    <div class="carrousel-saisons">
      <div class="carrousel-saisons__piste">
        <article class="diapositive-saison diapositive-saison--printemps" data-season="spring">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/aquagym.webp' ) ); ?>" alt="Cours d'aquagym dans le bassin extérieur" width="1900" height="1262" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'aquagym.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          <span class="diapositive-saison__voile"></span>
          <div class="diapositive-saison__contenu">
            <div class="embleme-saison" aria-hidden="true"><span class="embleme-saison__orbite"></span><span class="embleme-saison__icone"><i class="fa-solid fa-seedling"></i></span></div>
            <h3>Au printemps,<br>je retrouve mon rythme</h3>
            <a href="<?php echo esc_url( home_url( '/aquagym/' ) ); ?>" class="bouton bouton--sur-photo">Bouger dans l'eau<i class="fa-solid fa-person-swimming" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="diapositive-saison diapositive-saison--ete" data-season="summer">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/parc-ete-upright.webp' ) ); ?>" alt="Familles profitant du parc aquatique en été" width="1672" height="940" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'parc-ete-upright.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          <span class="diapositive-saison__voile"></span>
          <div class="diapositive-saison__contenu">
            <div class="embleme-saison" aria-hidden="true"><span class="embleme-saison__orbite"></span><span class="embleme-saison__icone"><i class="fa-solid fa-sun"></i></span></div>
            <h3>En été,<br>toute la famille se jette à l'eau</h3>
            <a href="<?php echo esc_url( home_url( '/parc-ete/' ) ); ?>" class="bouton bouton--sur-photo">Profiter du parc aquatique<i class="fa-solid fa-sun" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="diapositive-saison diapositive-saison--automne" data-season="fall">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0930.webp' ) ); ?>" alt="Massage relaxant à l'Espace Balnéo" width="1900" height="1267" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'dsc-0930.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          <span class="diapositive-saison__voile"></span>
          <div class="diapositive-saison__contenu">
            <div class="embleme-saison" aria-hidden="true"><span class="embleme-saison__orbite"></span><span class="embleme-saison__icone"><i class="fa-solid fa-leaf"></i></span></div>
            <h3>En automne,<br>je relâche les tensions</h3>
            <a href="<?php echo esc_url( home_url( '/massages/' ) ); ?>" class="bouton bouton--sur-photo">Découvrir les massages<i class="fa-solid fa-spa" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="diapositive-saison diapositive-saison--hiver" data-season="winter">
          <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/gruissan-050.webp' ) ); ?>" alt="Espace Balnéo illuminé au crépuscule en hiver" width="1900" height="766" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'gruissan-050.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          <span class="diapositive-saison__voile"></span>
          <div class="diapositive-saison__contenu">
            <div class="embleme-saison" aria-hidden="true"><span class="embleme-saison__orbite"></span><span class="embleme-saison__icone"><i class="fa-solid fa-snowflake"></i></span></div>
            <h3>En hiver,<br>je plonge dans la chaleur</h3>
            <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="bouton bouton--sur-photo">Explorer l'espace Balnéo<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
          </div>
        </article>
      </div>
    </div>
    <div class="onglets-saisons" role="tablist" aria-label="Choisir une saison">
      <button class="onglet-saison onglet-saison--printemps" type="button" role="tab" data-season-target="spring" aria-label="Afficher le printemps"><span aria-hidden="true"><i class="fa-solid fa-seedling"></i></span><strong>Printemps</strong></button>
      <button class="onglet-saison onglet-saison--ete" type="button" role="tab" data-season-target="summer" aria-label="Afficher l'été"><span aria-hidden="true"><i class="fa-solid fa-sun"></i></span><strong>Été</strong></button>
      <button class="onglet-saison onglet-saison--automne" type="button" role="tab" data-season-target="fall" aria-label="Afficher l'automne"><span aria-hidden="true"><i class="fa-solid fa-leaf"></i></span><strong>Automne</strong></button>
      <button class="onglet-saison onglet-saison--hiver" type="button" role="tab" data-season-target="winter" aria-label="Afficher l'hiver"><span aria-hidden="true"><i class="fa-solid fa-snowflake"></i></span><strong>Hiver</strong></button>
    </div>
  </section>

  <section class="manifeste section-contenu" id="experience-balneo">
    <div class="manifeste__photo media-plein"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/bassins-exterieurs.webp' ) ); ?>" alt="Bassins extérieurs et jets massants de l'Espace Balnéo" width="1600" height="900" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'bassins-exterieurs.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw"></div>
    <div class="manifeste__contenu apparition">
      <p class="section-contenu__libelle">L'expérience Balnéo</p>
      <h2 class="titre-affichage">Le corps s'apaise.<br>L'esprit s'évade.</h2>
      <p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
      <div class="manifeste__chiffres">
        <div><strong>32°</strong><span>L'eau des bassins</span></div>
        <div><strong>5</strong><span>Univers à explorer</span></div>
        <div><strong>7j/7</strong><span>La salle For.Me</span></div>
      </div>
      <a href="<?php echo esc_url( home_url( '/balneo/' ) ); ?>" class="bouton">Entrer dans l'univers<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="section-contenu section-actualites">
    <div class="conteneur">
      <div class="entete-section apparition">
        <div><p class="section-contenu__libelle">En ce moment</p><h2 class="titre-affichage">Les nouvelles de la Balnéo</h2></div>
        <a href="<?php echo esc_url( home_url( '/actualites/' ) ); ?>" class="lien-texte">Toutes les actualités <span>→</span></a>
      </div>
      <div class="grille-actualites">
        <article class="carte-actualite apparition">
          <div class="carte-actualite__media media-plein">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/dsc-0451.webp' ) ); ?>" alt="Ouverture du parc été" width="1900" height="1068" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'dsc-0451.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          </div>
          <div class="carte-actualite__corps">
            <p class="carte-actualite__date">3 juin</p>
            <h3 class="carte-actualite__titre">Ouverture du parc été</h3>
            <p class="carte-actualite__extrait">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
            <a href="<?php echo esc_url( home_url( '/article-parc-ete/' ) ); ?>" class="carte-actualite__lien">Lire plus</a>
          </div>
        </article>
        <article class="carte-actualite apparition">
          <div class="carte-actualite__media media-plein">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/stage-enfant.webp' ) ); ?>" alt="Stages de natation enfants" width="850" height="414" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'stage-enfant.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          </div>
          <div class="carte-actualite__corps">
            <p class="carte-actualite__date">1 juin</p>
            <h3 class="carte-actualite__titre">Stages de natation enfants été</h3>
            <p class="carte-actualite__extrait">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
            <a href="<?php echo esc_url( home_url( '/article-stages-natation/' ) ); ?>" class="carte-actualite__lien">Lire plus</a>
          </div>
        </article>
        <article class="carte-actualite apparition">
          <div class="carte-actualite__media media-plein">
            <img src="<?php echo esc_url( get_theme_file_uri( '/assets/photos/sport.webp' ) ); ?>" alt="Rivière extérieure de l’Espace Balnéo" width="2560" height="1708" decoding="async" loading="lazy" srcset="<?php echo esc_attr( balneo_v2_theme_image_srcset( 'sport.webp' ) ); ?>" sizes="(max-width: 760px) 100vw, 50vw">
          </div>
          <div class="carte-actualite__corps">
            <p class="carte-actualite__date">1 avril</p>
            <h3 class="carte-actualite__titre">Réouverture de la rivière extérieure</h3>
            <p class="carte-actualite__extrait">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
            <a href="<?php echo esc_url( home_url( '/article-riviere/' ) ); ?>" class="carte-actualite__lien">Lire plus</a>
          </div>
        </article>
      </div>
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
