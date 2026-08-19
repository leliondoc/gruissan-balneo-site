const fs = require('fs');
const path = require('path');

const base = path.join(__dirname);

function logoNav(p) {
  return `<img class="logo-img" src="${p}/assets/logo-balneo-officiel.png" alt="Espace Balnéo Gruissan">`;
}

function header(root, isHome) {
  const p = root ? '..' : '.';
  return `<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{TITLE}} | Espace Balnéo Gruissan</title>
  <meta name="description" content="{{DESC}}">
  <link rel="stylesheet" href="${p}/assets/vendor/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="${p}/css/styles.css?v=20260819-27">
</head>
<body class="${isHome ? 'is-home' : ''}">
  <header class="site-header">
    <div class="utility-bar">
      <div class="utility-bar__inner">
        <p>Au cœur de Gruissan, entre mer et lagune</p>
        <nav aria-label="Liens pratiques">
          <a href="tel:+33468756050"><i class="fa-solid fa-phone context-icon" aria-hidden="true"></i>04 68 75 60 50</a>
          <a href="${p}/pages/contact.html"><i class="fa-solid fa-envelope context-icon" aria-hidden="true"></i>Contact</a>
          <a href="https://www.gruissan-mediterranee.com" target="_blank" rel="noopener"><i class="fa-solid fa-arrow-up-right-from-square context-icon" aria-hidden="true"></i>Gruissan Tourisme</a>
        </nav>
      </div>
    </div>
    <div class="site-header__inner">
      <a href="${p}/index.html" class="site-logo" aria-label="Accueil — Espace Balnéo Gruissan">
        ${logoNav(p)}
      </a>
      <button class="nav-toggle" aria-label="Ouvrir le menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <ul class="main-nav">
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">Se dépasser</button>
          <div class="dropdown">
            <a href="${p}/pages/salle-de-sport.html">Espace For.Me</a>
            <a href="${p}/pages/recuperation.html">Récupération</a>
          </div>
        </li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">Lâcher-prise</button>
          <div class="dropdown dropdown--mega">
            <a class="mega-menu__card mega-menu__card--massages" href="${p}/pages/massages.html">
              <img src="${p}/assets/photos/dsc-0930.jpg" alt="">
              <span class="mega-menu__veil" aria-hidden="true"></span>
              <span class="mega-menu__content">
                <small>Soin du corps</small>
                <strong>Massages</strong>
                <span class="mega-menu__meta"><i class="fa-regular fa-calendar-check" aria-hidden="true"></i>Sur rendez-vous</span>
              </span>
            </a>
            <a class="mega-menu__card mega-menu__card--hydromassages" href="${p}/pages/hydromassages.html">
              <img src="${p}/assets/photos/balneo-73.jpg" alt="">
              <span class="mega-menu__veil" aria-hidden="true"></span>
              <span class="mega-menu__content">
                <small>Rituels &amp; hydrojets</small>
                <strong>Hydromassages</strong>
                <span class="mega-menu__meta"><i class="fa-regular fa-calendar-check" aria-hidden="true"></i>Sur rendez-vous</span>
              </span>
            </a>
            <a class="mega-menu__card mega-menu__card--balneo" href="${p}/pages/balneo.html">
              <img src="${p}/assets/photos/balneo-188.jpg" alt="">
              <span class="mega-menu__veil" aria-hidden="true"></span>
              <span class="mega-menu__content">
                <small>Bains &amp; chaleur</small>
                <strong>Espace Balnéo</strong>
                <span class="mega-menu__meta"><i class="fa-regular fa-clock" aria-hidden="true"></i>Accès libre</span>
              </span>
            </a>
          </div>
        </li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">Pratiquer</button>
          <div class="dropdown">
            <a href="${p}/pages/aquagym.html">Aquagym</a>
            <a href="${p}/pages/aquabike.html">Aquabike</a>
            <a href="${p}/pages/bebes-nageurs.html">Bébés nageurs</a>
            <a href="${p}/pages/natation.html">Natation</a>
          </div>
        </li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">S'amuser</button>
          <div class="dropdown">
            <a href="${p}/pages/parc-ete.html">Parc été</a>
          </div>
        </li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">Préparer</button>
          <div class="dropdown dropdown--right dropdown--practical">
            <a href="${p}/pages/infos-pratiques.html">Infos pratiques</a>
            <a href="${p}/pages/tarifs.html">Tarifs</a>
            <a href="${p}/pages/brochures.html">Brochures</a>
            <a href="${p}/pages/horaires.html">Horaires</a>
            <a href="${p}/pages/privatisation.html">Privatisation</a>
            <a href="${p}/pages/acces-parking.html">Accès &amp; parking</a>
            <a href="${p}/pages/faq.html">FAQ</a>
            <a href="${p}/pages/contact.html">Contact</a>
          </div>
        </li>
        <li class="main-nav__booking"><a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Acheter</a></li>
      </ul>
    </div>
  </header>`;
}

function footer(root) {
  const p = root ? '..' : '.';
  return `
  <a class="cta-orb" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span class="cta-orb__label"><span>Acheter</span><small>en ligne</small></span></a>
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-logo">
          <a href="${p}/index.html" class="footer-wordmark">${logoNav(p)}</a>
          <nav class="footer-legal" aria-label="Informations légales">
            <a href="${p}/pages/mentions-legales.html">Mentions légales</a>
            <a href="${p}/pages/donnees-personnelles.html">Données personnelles</a>
            <a href="${p}/pages/reglement.html">Règlement intérieur</a>
          </nav>
        </div>
        <nav class="footer-nav">
          <a href="${p}/pages/salle-de-sport.html"><i class="fa-solid fa-dumbbell" aria-hidden="true"></i>Espace For.Me</a>
          <a href="${p}/pages/balneo.html"><i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i>Espace Balnéo</a>
          <a href="${p}/pages/massages.html"><i class="fa-solid fa-spa" aria-hidden="true"></i>Massages</a>
          <a href="${p}/pages/aquagym.html"><i class="fa-solid fa-person-swimming" aria-hidden="true"></i>Aquagym</a>
          <a href="${p}/pages/parc-ete.html"><i class="fa-solid fa-sun" aria-hidden="true"></i>Parc été</a>
        </nav>
        <nav class="footer-nav">
          <a href="${p}/pages/infos-pratiques.html"><i class="fa-solid fa-circle-info" aria-hidden="true"></i>Infos pratiques</a>
          <a href="${p}/pages/tarifs.html"><i class="fa-solid fa-tag" aria-hidden="true"></i>Tarifs</a>
          <a href="${p}/pages/horaires.html"><i class="fa-solid fa-clock" aria-hidden="true"></i>Horaires</a>
          <a href="${p}/pages/acces-parking.html"><i class="fa-solid fa-route" aria-hidden="true"></i>Accès &amp; parking</a>
          <a href="${p}/pages/contact.html"><i class="fa-solid fa-envelope" aria-hidden="true"></i>Contact</a>
        </nav>
      </div>
      <div class="footer-bottom">
        <span>&reg; D.B.G — Espace Balnéo de Gruissan</span>
        <span>Photos : J.B. Roubinet</span>
      </div>
    </div>
  </footer>
  <script src="${p}/js/main.js?v=20260819-3"></script>
</body>
</html>`;
}

function page(title, desc, body, inPages = true, isHome = false) {
  return header(inPages, isHome)
    .replace('{{TITLE}}', title)
    .replace('{{DESC}}', desc)
    + body + footer(inPages);
}

function infoBanner(text) {
  return `<div class="info-banner">
    <div class="container"><span class="info-banner__message">${text}</span>
      <button class="info-banner__close" aria-label="Fermer">&times;</button>
    </div>
  </div>`;
}

function pageHero(label, title, img) {
  if (!img) throw new Error(`Photo obligatoire pour la page « ${title} »`);
  return `<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="${img}" alt="">
    </div>
    <div class="page-hero__veil"></div>
    <div class="page-hero__content">
      <p class="page-hero__label">${label}</p>
      <h1 class="page-hero__title">${title}</h1>
      <span class="title-rule" aria-hidden="true"></span>
    </div>
  </section>`;
}

function ctaBand(text) {
  return `<div class="cta-band">
    <p>${text}</p>
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux<i class="fa-solid fa-ticket" aria-hidden="true"></i></a>
    <p style="margin-top:0.75rem;font-size:0.75rem;opacity:0.7">Les e-billets ne sont pas nominatifs</p>
  </div>`;
}

function contactSection(root) {
  const p = root ? '..' : '.';
  return `<section class="section contact-section" id="contact">
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
          <div class="form-success">Merci pour votre inscription !</div>
          <form data-form>
            <div class="form-group"><label for="prenom">Prénom</label><input type="text" id="prenom" name="prenom" required></div>
            <div class="form-group"><label for="nom">Nom</label><input type="text" id="nom" name="nom" required></div>
            <div class="form-group"><label for="email">E-mail</label><input type="email" id="email" name="email" required></div>
            <div class="form-group"><label for="cp">Code postal</label><input type="text" id="cp" name="cp"></div>
            <div class="form-group"><label for="ville">Ville</label><input type="text" id="ville" name="ville"></div>
            <button type="submit" class="btn">S'inscrire<i class="fa-solid fa-paper-plane" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>
    </div>
  </section>`;
}

const pages = {};

// INDEX
pages['index.html'] = page('Accueil', 'Espace Balnéo de Gruissan — bien-être, piscine, activités aquatiques et salle de sport à Gruissan.', `
${infoBanner('<strong>Accès des mineurs à la Balnéo :</strong> du samedi 27 juin au dimanche 30 août inclus, les mineurs sont admis toute la journée en Balnéo.')}

<main>
  <section class="hero">
    <div class="hero__media media-fill">
      <img src="assets/photos/balneo-188.jpg" alt="Bassin intérieur de l’Espace Balnéo de Gruissan">
    </div>
    <div class="hero__veil"></div>
    <div class="hero__content fade-in">
      <p class="hero__kicker">Balnéo · Piscine · Soins · Sport</p>
      <h1 class="hero__title">Entrez dans<br>votre <em>parenthèse.</em></h1>
      <p class="hero__tagline">L'eau, la lumière et la douceur méditerranéenne réunies dans un même lieu.</p>
      <div class="btn-group">
        <a href="#experiences" class="btn btn--on-photo btn--filled">Explorer les espaces<i class="fa-solid fa-compass" aria-hidden="true"></i></a>
        <a href="pages/horaires.html" class="text-link text-link--light">Voir les horaires <span>→</span></a>
      </div>
    </div>
    <div class="hero-seals" aria-label="Informations saison 2026">
      <div class="brand-seal brand-seal--open"><strong>Ouvert</strong><span>7j/7</span></div>
    </div>
    <a class="hero__scroll" href="#bienvenue"><span></span>Découvrir</a>
  </section>

  <nav class="quick-access" aria-label="Accès rapides">
    <a href="pages/horaires.html"><span>01</span><strong>Horaires</strong><small>Préparer ma visite</small></a>
    <a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span>02</span><strong>Billetterie &amp; cadeaux</strong><small>Acheter en ligne</small></a>
    <a href="pages/acces-parking.html"><span>03</span><strong>Venir à la Balnéo</strong><small>Accès &amp; parking</small></a>
  </nav>

  <section class="welcome section" id="bienvenue">
    <div class="container welcome__grid fade-in">
      <div>
        <p class="section__label">Bienvenue à Gruissan</p>
        <h2 class="display-title">Un rêve où se mêlent l'eau, le bois, la lumière et le sel.</h2>
      </div>
      <div class="welcome__copy">
        <p>À quelques pas de la Méditerranée, l'Espace Balnéo invite à ralentir. Des bassins chauffés à 32°C, des soins enveloppants et des activités pensées pour retrouver son rythme.</p>
        <p>Seul, à deux ou en famille, venez respirer, bouger et vous laisser porter.</p>
        <a href="pages/balneo.html" class="text-link">Découvrir la Balnéo <span>→</span></a>
      </div>
    </div>
  </section>

  <section class="experience-section" id="experiences">
    <div class="container section-heading fade-in">
      <div>
        <p class="section__label">Nos expériences</p>
        <h2 class="display-title">À chacun son horizon</h2>
      </div>
      <p>Des univers complémentaires, réunis autour d'une même envie : prendre soin de soi.</p>
    </div>
    <div class="experience-grid">
      <a href="pages/balneo.html" class="experience-card experience-card--large fade-in">
        <img src="assets/photos/riviere.jpg" alt="Rivière extérieure et bassins de l’Espace Balnéo">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se délasser</small><h3>Les bains &amp; la Balnéo</h3><p>Bassins à 32°C, spas, hammam, saunas et rivière à courant.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="pages/massages.html" class="experience-card fade-in">
        <img src="assets/photos/balneo-73.jpg" alt="Massage bien-être">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se retrouver</small><h3>Soins &amp; massages</h3><p>Des gestes enveloppants pour une profonde détente.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="pages/salle-de-sport.html" class="experience-card fade-in">
        <img src="assets/photos/balneo-tgn.jpg" alt="Salle de sport For.Me">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Se dépasser</small><h3>Sport &amp; aquasports</h3><p>Cardio, renforcement et activités aquatiques à votre rythme.</p><span class="circle-arrow">→</span></div>
      </a>
      <a href="pages/parc-ete.html" class="experience-card experience-card--wide fade-in">
        <img src="assets/photos/parc-aquatique.jpg" alt="Parc aquatique paysager de Gruissan">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Partager</small><h3>Le parc été en famille</h3><p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p><span class="circle-arrow">→</span></div>
      </a>
    </div>
  </section>

  <section class="seasonal-section" aria-labelledby="seasonal-title" data-seasonal>
    <div class="container seasonal-heading fade-in">
      <p class="section__label">Au fil des saisons</p>
      <h2 class="display-title" id="seasonal-title">Une envie pour chaque saison</h2>
    </div>
    <div class="seasonal-slider">
      <div class="seasonal-slider__track">
        <article class="seasonal-slide seasonal-slide--spring" data-season="spring">
          <img src="assets/photos/aquagym.jpg" alt="Cours d'aquagym dans le bassin extérieur">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-seedling"></i></span></div>
            <h3>Au printemps,<br>je retrouve mon rythme</h3>
            <a href="pages/aquagym.html" class="btn btn--on-photo">Bouger dans l'eau<i class="fa-solid fa-person-swimming" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--summer" data-season="summer">
          <img src="assets/photos/parc-ete-upright.png" alt="Familles profitant du parc aquatique en été">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-sun"></i></span></div>
            <h3>En été,<br>toute la famille se jette à l'eau</h3>
            <a href="pages/parc-ete.html" class="btn btn--on-photo">Profiter du parc aquatique<i class="fa-solid fa-sun" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--fall" data-season="fall">
          <img src="assets/photos/dsc-0930.jpg" alt="Massage relaxant à l'Espace Balnéo">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-leaf"></i></span></div>
            <h3>En automne,<br>je relâche les tensions</h3>
            <a href="pages/massages.html" class="btn btn--on-photo">Découvrir les massages<i class="fa-solid fa-spa" aria-hidden="true"></i></a>
          </div>
        </article>
        <article class="seasonal-slide seasonal-slide--winter" data-season="winter">
          <img src="assets/photos/gruissan-050.jpg" alt="Espace Balnéo illuminé au crépuscule en hiver">
          <span class="seasonal-slide__veil"></span>
          <div class="seasonal-slide__content">
            <div class="seasonal-emblem" aria-hidden="true"><span class="seasonal-emblem__orbit"></span><span class="seasonal-emblem__icon"><i class="fa-solid fa-snowflake"></i></span></div>
            <h3>En hiver,<br>je plonge dans la chaleur</h3>
            <a href="pages/balneo.html" class="btn btn--on-photo">Explorer l'espace Balnéo<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
          </div>
        </article>
      </div>
    </div>
    <div class="seasonal-tabs" role="tablist" aria-label="Choisir une saison">
      <button class="seasonal-tab seasonal-tab--spring" type="button" role="tab" data-season-target="spring" aria-label="Afficher le printemps"><span aria-hidden="true"><i class="fa-solid fa-seedling"></i></span><strong>Printemps</strong></button>
      <button class="seasonal-tab seasonal-tab--summer" type="button" role="tab" data-season-target="summer" aria-label="Afficher l'été"><span aria-hidden="true"><i class="fa-solid fa-sun"></i></span><strong>Été</strong></button>
      <button class="seasonal-tab seasonal-tab--fall" type="button" role="tab" data-season-target="fall" aria-label="Afficher l'automne"><span aria-hidden="true"><i class="fa-solid fa-leaf"></i></span><strong>Automne</strong></button>
      <button class="seasonal-tab seasonal-tab--winter" type="button" role="tab" data-season-target="winter" aria-label="Afficher l'hiver"><span aria-hidden="true"><i class="fa-solid fa-snowflake"></i></span><strong>Hiver</strong></button>
    </div>
  </section>

  <section class="manifesto section" id="experience-balneo">
    <div class="manifesto__photo media-fill"><img src="assets/photos/bassins-exterieurs.jpg" alt="Bassins extérieurs et jets massants de l'Espace Balnéo"></div>
    <div class="manifesto__content fade-in">
      <p class="section__label">L'expérience Balnéo</p>
      <h2 class="display-title">Le corps s'apaise.<br>L'esprit s'évade.</h2>
      <p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
      <div class="manifesto__numbers">
        <div><strong>32°</strong><span>L'eau des bassins</span></div>
        <div><strong>5</strong><span>Univers à explorer</span></div>
        <div><strong>7j/7</strong><span>La salle For.Me</span></div>
      </div>
      <a href="pages/balneo.html" class="btn">Entrer dans l'univers<i class="fa-solid fa-hot-tub-person" aria-hidden="true"></i></a>
    </div>
  </section>

  <section class="section news-section">
    <div class="container">
      <div class="section-heading fade-in">
        <div><p class="section__label">En ce moment</p><h2 class="display-title">Les nouvelles de la Balnéo</h2></div>
        <a href="pages/actualites.html" class="text-link">Toutes les actualités <span>→</span></a>
      </div>
      <div class="news-grid">
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="assets/photos/dsc-0451.jpg" alt="Ouverture du parc été">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">3 juin</p>
            <h3 class="news-card__title">Ouverture du parc été</h3>
            <p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
            <a href="pages/article-parc-ete.html" class="news-card__link">Lire plus</a>
          </div>
        </article>
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="assets/photos/stage-enfant.jpg" alt="Stages de natation enfants">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">1 juin</p>
            <h3 class="news-card__title">Stages de natation enfants été</h3>
            <p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
            <a href="pages/article-stages-natation.html" class="news-card__link">Lire plus</a>
          </div>
        </article>
        <article class="news-card fade-in">
          <div class="news-card__media media-fill">
            <img src="assets/photos/sport.jpg" alt="Rivière extérieure de l’Espace Balnéo">
          </div>
          <div class="news-card__body">
            <p class="news-card__date">1 avril</p>
            <h3 class="news-card__title">Réouverture de la rivière extérieure</h3>
            <p class="news-card__excerpt">Nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
            <a href="pages/article-riviere.html" class="news-card__link">Lire plus</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  ${contactSection(false)}
</main>`, false, true);

// BALNEO
pages['pages/balneo.html'] = page('Balnéo', 'Accès à la balnéo sans réservation — tarifs, espaces et abonnements.', `
${infoBanner('<strong>Période estivale :</strong> toute entrée Balnéo (10h–19h) donne accès au parc aqualudique (11h–18h) selon la durée choisie.')}
<main>
${pageHero('Espace bien-être', 'Accès à la Balnéo sans réservation', '../assets/photos/balneo-188.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <div class="info-box">
      <p class="info-box__title">Côté pratique</p>
      <ul>
        <li>Shorts et jupes de bain interdits</li>
        <li>Les enfants de moins de 18 ans doivent être accompagnés par un adulte en balnéo. Les enfants de moins de 3 ans ont accès uniquement aux trois alvéoles thématiques</li>
        <li>Les saunas et le hammam sont accessibles à partir de 16 ans</li>
        <li>Cheveux longs attachés — serviettes non fournies</li>
        <li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
        <li>En cas d'orage, les bassins extérieurs peuvent être fermés</li>
        <li>Moyens de paiement : espèces, CB, chèques ANCV (format papier)</li>
      </ul>
    </div>

    <h2>Tarifs</h2>
    <h3>Tarif forfait 2h30</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>Entrée 6 ans et + pour 2h30</td><td>23 €</td></tr>
      <tr><td>Entrée 3 à moins de 6 ans (sans toboggans)</td><td>11 €</td></tr>
      <tr><td>Entrée moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr>
      <tr><td>Dépassement de temps</td><td>9 €</td></tr>
    </table></div>

    <h3>Dernière heure (17h45 – 18h45)</h3>
    <p>11 €</p>

    <h3>Pass sans limite de temps</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>6 ans et +</td><td>29 €</td></tr>
      <tr><td>3 à moins de 6 ans (sans toboggans)</td><td>16 €</td></tr>
      <tr><td>Moins de 3 ans (3 bassins thématiques)</td><td>Gratuit</td></tr>
    </table></div>

    <p>Avec l'entrée Balnéo, accès au bassin de nage de 25m aux horaires d'ouverture de celui-ci.</p>
    <p>Carte 10 entrées 2h30 : 180 € — Carte 20 entrées 2h30 : 350 € — Carte de 10 heures (nominative) : 105 €</p>
    <p>Pour l'achat d'1 entrée Balnéo : accès à l'espace Forme (même jour) : 6 €</p>

    <h2>Abonnements</h2>
    <h3>Balnéo + Piscine</h3>
    <div class="table-wrap"><table>
      <tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr>
      <tr><td>6 mois</td><td>350 €</td><td>580 €</td></tr>
      <tr><td>12 mois (-1 mois de vidange)</td><td>650 €</td><td>1 045 €</td></tr>
    </table></div>

    <h3>Balnéo + Piscine + For.Me</h3>
    <div class="table-wrap"><table>
      <tr><th>Durée</th><th>1 personne</th><th>Couple</th></tr>
      <tr><td>6 mois</td><td>500 €</td><td>755 €</td></tr>
      <tr><td>12 mois (-1 mois de vidange)</td><td>930 €</td><td>1 395 €</td></tr>
    </table></div>
    <p>Avec un abonnement : remise de 50 % sur les activités et tarifs préférentiels sur les massages bien-être (sur réservation).</p>

    <h2>Envie de se détendre</h2>
    <div class="two-col" style="margin-top:var(--space-md)">
      <div>
        <h3>Bains et espace aquatique</h3>
        <p>Des bains et un espace aquatique pour une expérience sensorielle exclusive dans une eau à 32°C : jets massants, spas, rivière à courant, cascades.</p>
        <h3>Bassin nordique</h3>
        <p>Canons à eau, jets massants mollets/jambes/cuisses, zone d'apesanteur, canapé d'air, massages plantaires, 27 jets massants entre bains chauds et air frais, 2 spas.</p>
      </div>
      <div class="two-col__media media-fill">
        <img src="../assets/photos/balneo-37.jpg" alt="Espace aquatique">
      </div>
    </div>
    <h3>Les saunas</h3>
    <p>Véritables institutions en Scandinavie, ils revigorent et détendent. Ils permettent d'éliminer les toxines et de nettoyer la peau.</p>
    <h3>Le hammam</h3>
    <p>Un bain de vapeur aux senteurs balsamiques, aux huiles essentielles d'eucalyptus, pour vous détendre et purifier votre peau.</p>
    <h3>Le frigidarium</h3>
    <p>Plongez-vous dans une eau froide, après le sauna ou le hammam, et bénéficiez d'un bain tonique et énergisant.</p>
    <h3>L'escale Gruissanaise</h3>
    <p>Bain lavande, bain vino, en clin d'œil aux Vignerons de Gruissan.</p>
  </div>
</section>
${ctaBand('Achetez votre entrée Balnéo en ligne')}
</main>`);

// MASSAGES
pages['pages/massages.html'] = page('Massages', 'Carte des massages bien-être — réservation sur rendez-vous.', `
<main>
${pageHero('Soins bien-être', 'Massages', '../assets/photos/balneo-73.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Accordez-vous une parenthèse hors du temps, où chaque geste est pensé pour vous offrir une profonde relaxation, une harmonie intérieure et un véritable moment de lâcher-prise.</p>
    <div class="info-box">
      <p class="info-box__title">Bon à savoir</p>
      <ul>
        <li>Les massages se font <strong>sur rendez-vous</strong>, par téléphone au <a href="tel:+33468756050">04 68 75 60 50</a></li>
        <li>La durée indiquée comprend l'installation, l'entretien personnel et le massage</li>
        <li>Merci d'arriver 20 min avant votre massage afin de prendre une douche</li>
      </ul>
    </div>
    <h2>La carte des massages bien-être</h2>
    <div class="service-list">
      <div class="service-item"><div><p class="service-item__name">Détente anti-stress</p><p class="service-item__duration">30, 60 ou 90 min</p></div></div>
      <p class="service-item__desc">Massage profondément relaxant associant gestes lents, fluides et enveloppants à des manœuvres plus profondes.</p>
      <div class="service-item"><div><p class="service-item__name">Tonique et décontractant</p><p class="service-item__duration">30 ou 60 min</p></div></div>
      <p class="service-item__desc">Dynamisant et revitalisant, idéal pour les sportifs et la récupération musculaire.</p>
      <div class="service-item"><div><p class="service-item__name">Tête — Mains — Pieds</p><p class="service-item__duration">30 ou 60 min</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Harmonisation des énergies</p><p class="service-item__duration">60 ou 90 min</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Massage femme enceinte</p><p class="service-item__duration">30 ou 60 min — 4e au 8e mois</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Massage douceur enfant</p><p class="service-item__duration">5 à 14 ans — accompagné en cabine</p></div></div>
      <div class="service-item"><div><p class="service-item__name">Rituel Océan Relax</p><p class="service-item__duration">60 ou 90 min — à partir de 15 ans</p></div></div>
      <p class="service-item__desc">30 min d'hydromassage + massage manuel personnalisé de 30 ou 60 min.</p>
    </div>
    <h2>Tarifs</h2>
    <h3>Massages bien-être avec 2h30 de balnéo</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>30 min + 2h30 balnéo</td><td>66 €</td></tr>
      <tr><td>60 min + 2h30 balnéo</td><td>83 €</td></tr>
      <tr><td>90 min + 2h30 balnéo</td><td>136 €</td></tr>
      <tr><td>Carte 6 massages 1h + 2h30 balnéo</td><td>450 €</td></tr>
    </table></div>
    <h3>Massages bien-être avec balnéo illimitée</h3>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>30 min + balnéo illimitée</td><td>73 €</td></tr>
      <tr><td>60 min + balnéo illimitée</td><td>90 €</td></tr>
      <tr><td>90 min + balnéo illimitée</td><td>143 €</td></tr>
    </table></div>
    <p>Les massages peuvent être réalisés en duo dans notre cabine double (2 prestations à acheter). Le Rituel Océan Relax s'effectue en cabine simple uniquement.</p>
    <p><a href="hydromassages.html">Voir aussi : Hydromassages</a> · <a href="recuperation.html">Composer sa récupération</a></p>
  </div>
</section>
${ctaBand('Réservez par téléphone au 04 68 75 60 50')}
</main>`);

// HYDROMASSAGES
pages['pages/hydromassages.html'] = page('Hydromassages', 'Séances d\'hydromassage et Rituel Océan Relax sur rendez-vous.', `
<main>
${pageHero('Soins bien-être', 'Hydromassages', '../assets/photos/balneo-188.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Accordez-vous un Rituel Océan Relax ou une séance d'hydromassage, installé confortablement sur une table à jets d'eau chaude.</p>
    <div class="info-box">
      <p class="info-box__title">Bon à savoir</p>
      <ul>
        <li>À partir de 15 ans — sur rendez-vous au <a href="tel:+33468756050">04 68 75 60 50</a></li>
        <li>Arriver 20 min avant pour prendre une douche</li>
      </ul>
    </div>
    <h2>La carte d'hydromassages</h2>
    <h3>Séance d'hydromassage (30 min)</h3>
    <p>Confortablement installé, habillé, profitez de l'action des jets d'eau pour relâcher les tensions musculaires et favoriser une profonde relaxation.</p>
    <h3>Rituel Océan Relax (60 ou 90 min)</h3>
    <p>30 min d'hydromassage suivi d'un massage manuel personnalisé de 30 ou 60 min.</p>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>30 min hydromassage sans balnéo</td><td>27 €</td></tr>
      <tr><td>60 min rituel océan sans balnéo</td><td>65 €</td></tr>
      <tr><td>90 min rituel océan sans balnéo</td><td>95 €</td></tr>
      <tr><td>60 min rituel + 2h30 balnéo</td><td>78 €</td></tr>
      <tr><td>90 min rituel + 2h30 balnéo</td><td>108 €</td></tr>
      <tr><td>60 min rituel + balnéo illimitée</td><td>85 €</td></tr>
      <tr><td>90 min rituel + balnéo illimitée</td><td>115 €</td></tr>
    </table></div>
    <p><a href="massages.html">Voir aussi : Massages</a></p>
  </div>
</section>
${ctaBand('Réservez par téléphone au 04 68 75 60 50')}
</main>`);

// SOINS VISAGE
pages['pages/soins-visage.html'] = page('Soins du visage', 'Soin visage Phytocéane 60 min sur rendez-vous.', `
<main>
${pageHero('Soins bien-être', 'Soins du visage', '../assets/photos/dsc-0930.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Offrez-vous un moment de détente dédié à votre peau pour nettoyer, hydrater et révéler l'éclat naturel du teint.</p>
    <div class="info-box">
      <p class="info-box__title">Bon à savoir</p>
      <ul>
        <li>À partir de 15 ans — sur rendez-vous au <a href="tel:+33468756050">04 68 75 60 50</a></li>
        <li>Soin femme enceinte : entre le 4e et le 8e mois, 60 min uniquement</li>
      </ul>
    </div>
    <h2>Soin Phytocéane (60 min)</h2>
    <p>Ce soin du visage nettoie, hydrate et revitalise la peau en profondeur. Produits Phytocéane élaborés dans une démarche éco-responsable à partir d'ingrédients naturels, biologiques et sauvages.</p>
    <h2>Tarif</h2>
    <p>Soin du visage Phytocéane 60 min sans balnéo : <strong>82 €</strong></p>
    <p><a href="massages.html">Voir aussi : Massages</a></p>
  </div>
</section>
${ctaBand('Réservez par téléphone au 04 68 75 60 50')}
</main>`);

// FAUTEUILS MASSANTS
pages['pages/fauteuils-massants.html'] = page('Fauteuils massants', 'Fauteuils relaxants 30 min sur rendez-vous.', `
<main>
${pageHero('Soins bien-être', 'Fauteuils massants', '../assets/photos/balneo-73.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Accordez-vous une pause sur un fauteuil massant, confortablement installé et habillé.</p>
    <div class="info-box">
      <p class="info-box__title">Bon à savoir</p>
      <ul>
        <li>À partir de 15 ans — sur rendez-vous au <a href="tel:+33468756050">04 68 75 60 50</a></li>
        <li>Contre-indication : grossesse</li>
      </ul>
    </div>
    <h2>Fauteuils relaxants (30 min)</h2>
    <p>Une pause détente pour relâcher les tensions musculaires. 2 fauteuils à disposition.</p>
    <h2>Tarif</h2>
    <p>Fauteuil relaxant 30 min sans balnéo : <strong>21 €</strong></p>
  </div>
</section>
${ctaBand('Réservez par téléphone au 04 68 75 60 50')}
</main>`);

// PISCINE
pages['pages/piscine.html'] = page('Piscine', 'Bassin de 25m, pataugeoire, tarifs et abonnements piscine.', `
<main>
${pageHero('Aquatique', 'Piscine', '../assets/photos/balneo-60.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <div class="info-box">
      <p class="info-box__title">Côté pratique</p>
      <ul>
        <li>Shorts et jupes de bain interdits</li>
        <li>Enfants de moins de 12 ans accompagnés par un adulte</li>
        <li>Enfants de moins de 3 ans : pataugeoire uniquement</li>
        <li>Cheveux longs attachés — serviettes non fournies</li>
        <li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
        <li>Paiement : espèces, CB, chèques ANCV</li>
      </ul>
    </div>
    <h2>Tarifs &amp; abonnements</h2>
    <div class="table-wrap"><table>
      <tr><th></th><th>Adultes (14 ans +)</th><th>Enfants (3 à - de 14 ans)</th></tr>
      <tr><td>Tarif</td><td>6 €</td><td>4 €</td></tr>
      <tr><td>Carte 10 entrées</td><td>55 €</td><td>—</td></tr>
      <tr><td>Abonnement 6 mois</td><td colspan="2">121 €</td></tr>
      <tr><td>Abonnement 12 mois (-1 mois vidange)</td><td colspan="2">220 €</td></tr>
    </table></div>
    <h3>Abonnements Piscine + Salle For.Me</h3>
    <div class="table-wrap"><table>
      <tr><th>Durée</th><th>Tarif</th></tr>
      <tr><td>6 mois</td><td>254 €</td></tr>
      <tr><td>12 mois (-1 mois vidange)</td><td>485 €</td></tr>
    </table></div>
    <p><strong>Attention :</strong> les enfants de moins de 3 ans sont admis uniquement dans la pataugeoire.</p>
  </div>
</section>
${ctaBand('Achetez vos entrées en ligne')}
</main>`);

// SALLE DE SPORT
pages['pages/salle-de-sport.html'] = page('Salle For.Me', 'Salle de cardio-musculation Technogym — tarifs et abonnements.', `
<main>
${pageHero('For.Me', 'S\'entraîner / Se dépasser', '../assets/photos/balneo-37.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Cet espace est doté de machines dernière génération Wellness® développées par Technogym®. Que vous ayez un objectif précis ou que vous souhaitiez pratiquer une activité physique régulière, vous trouverez votre programme et votre rythme grâce au système Wellness®.</p>
    <div class="info-box">
      <p class="info-box__title">Infos pratiques</p>
      <ul>
        <li>Ouvert 6h00 – 23h00 (dernier accès 22h00), 7j/7</li>
        <li>Réservé aux majeurs (+18 ans) ou mineurs à partir de 16 ans accompagnés d'un adulte</li>
        <li>Billetterie à l'accueil de la Balnéo, tous les jours à partir de 9h00 (sauf mardi hors vacances scolaires)</li>
        <li>Paiement : espèces, CB, chèques ANCV</li>
      </ul>
    </div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>1 séance (jour même)</td><td>11 €</td></tr>
      <tr><td>Carte 10 séances (2 mois)</td><td>100 €</td></tr>
      <tr><td>Abonnement 3 mois</td><td>105 €</td></tr>
      <tr><td>Abonnement 6 mois</td><td>199 €</td></tr>
      <tr><td>Abonnement annuel</td><td>387 €</td></tr>
    </table></div>
    <h2>Abonnements composés</h2>
    <h3>Piscine + Salle (1 personne)</h3>
    <p>6 mois : 254 € — 12 mois (-1 mois vidange) : 485 €</p>
    <h3>Balnéo + Piscine + Salle</h3>
    <p>Remise 50 % sur activités aquatiques et tarifs préférentiels sur massages.</p>
    <div class="table-wrap"><table>
      <tr><th></th><th>6 mois</th><th>12 mois</th></tr>
      <tr><td>1 personne</td><td>500 €</td><td>930 €</td></tr>
      <tr><td>Couple</td><td>755 €</td><td>1 395 €</td></tr>
    </table></div>
  </div>
</section>
${ctaBand('Achetez vos abonnements en ligne')}
</main>`);

// PARC ETE
pages['pages/parc-ete.html'] = page('Parc été', 'Parc aqualudique — toboggans, rivière, pataugeoires. Ouvert juillet-août.', `
<main>
${pageHero('Parc aqualudique', 'Parc été', '../assets/photos/parc-aquatique.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Ouvert uniquement juillet et août, 7j/7 de 11h00 à 18h00.</strong><br>
    Ouverture le 27 juin 2026 à 11h00 — Fermeture le 30 août 2026 à 18h00.</p>
    <div class="info-box">
      <p class="info-box__title">Côté pratique</p>
      <ul>
        <li>Shorts et jupes de bain interdits</li>
        <li>Cheveux longs attachés</li>
        <li>Lunettes de soleil, masques et lunettes interdits sur les toboggans</li>
        <li>1 pièce de 1 € ou 1 jeton pour les casiers</li>
        <li>Grignoterie ouverte de 11h à 17h</li>
        <li>Billetterie et entrée au bas du parking</li>
        <li>En cas d'orage, bassins extérieurs susceptibles d'être fermés</li>
        <li>L'entrée au parc (16 €) ne permet pas l'accès à la balnéo</li>
        <li>Interdiction de fumer au sein du parc</li>
      </ul>
    </div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Tarif</th></tr>
      <tr><td>Pass journée (6 ans et +)</td><td>16 €</td></tr>
      <tr><td>Enfants - de 6 ans (sans toboggans)</td><td>6,50 €</td></tr>
      <tr><td>Enfants - de 3 ans (pataugeoires uniquement)</td><td>Gratuit</td></tr>
    </table></div>
    <h2>Vous trouverez</h2>
    <p>Rivière à courant, toboggans, pentagliss, pataugeoires avec jeux d'eau, bassin sportif intérieur, village de jeux gonflables (village Barberousse). Tous les bassins chauffés à 28°. Aire de pique-nique ombragée, espaces verts et transats. Restauration à la Grignoterie (11h–17h) ou pique-nique autorisé.</p>
  </div>
</section>
${ctaBand('Achetez vos billets parc été en ligne')}
</main>`);

// ACTIVITES ANNEE ADULTES
pages['pages/activites-annee-adultes.html'] = page('Activités adultes', 'Aquagym, aquabike, aquapalmes et circuit aquatraining — réservation obligatoire.', `
<main>
${pageHero('Activités à l\'année', 'Activités adultes', '../assets/photos/aquagym.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></strong></p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Shorts et jupes de bain interdits</li><li>Pas de cours les jours fériés (sauf en été)</li><li>Pendant vacances zone C : aquagym les mardis à 9h45</li></ul></div>
    <h2>Les activités</h2>
    <h3>Aquabike (45 min)</h3>
    <p>Sport aquatique à mi-chemin entre l'aquagym et le vélo en salle, en petit groupe sur vélo immergé.</p>
    <h3>Circuit training aquatique (45 min)</h3>
    <p>Renforcement musculaire généralisé et cardio-respiratoire, très ludique.</p>
    <h3>Aquagym (45 min)</h3>
    <p>Travail cardio, abdos, jambes, cuisses, fessiers, buste — cours dynamiques adaptables.</p>
    <h3>Aquapalmes (45 min)</h3>
    <p>Inspiré de la natation synchronisée, renforcement abdominal et galbe de la silhouette.</p>
    <h2>Tarifs</h2>
    <h3>Aquabike et Aquatraining</h3>
    <p>1 séance : 11 € — 12 séances : 121 € (1 an) — 24 séances : 231 € (1 an)</p>
    <h3>Aquagym et Aquapalmes</h3>
    <p>1 séance : 9 € — 5 séances : 41 € (1 mois) — 10 séances : 81 € (1 an) — Trimestre : 105 € (non commercialisé en été)</p>
    <p><a href="activites-annee-bebe-jardin.html">Bébés nageurs &amp; Jardin aquatique</a> · <a href="activites-annee-natation.html">Cours de natation</a></p>
  </div>
</section>
</main>`);

// ACTIVITES ANNEE BEBE JARDIN
pages['pages/activites-annee-bebe-jardin.html'] = page('Bébés nageurs & Jardin aquatique', 'Cours pour les 5 mois à 5 ans — réservation obligatoire.', `
<main>
${pageHero('Activités à l\'année', 'Bébés nageurs &amp; Jardin aquatique', '../assets/photos/bebe-nageur.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></strong></p>
    <h2>Bébés nageurs (5 à 36 mois)</h2>
    <p>Tous les dimanches de 9h15 à 10h00. Premiers contacts en famille dans l'eau à 32°C, encadrés par nos maîtres-nageurs.</p>
    <ul><li>Vaccinations à jour, certificat médical de non contre-indication</li><li>1 parent accompagnateur minimum (2 maximum)</li></ul>
    <h2>Jardin aquatique (37 mois à 5 ans)</h2>
    <p>Tous les samedis de 9h15 à 10h00. L'enfant se familiarise avec l'élément aquatique en compagnie d'un parent.</p>
    <ul><li>1 parent accompagnateur par enfant</li></ul>
    <h2>Tarifs</h2>
    <p>1 séance : 9 € / par parent accompagnateur (gratuit pour l'enfant)<br>10 séances : 81 € (valable 1 an)</p>
    <p>Pas de cours les jours fériés (sauf vacances d'été).</p>
  </div>
</section>
</main>`);

// ACTIVITES ANNEE NATATION
pages['pages/activites-annee-natation.html'] = page('Cours de natation', 'Cours enfants, ados et adultes — apprentissage au perfectionnement.', `
<main>
${pageHero('Activités à l\'année', 'Cours de natation', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></strong></p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Shorts et jupes de bain interdits</li><li>Bonnet de bain conseillé</li><li>Pas de cours pendant vacances scolaires et jours fériés</li></ul></div>
    <p>Leçons accessibles dès 5 ans. Niveaux enfants : Cranquettes, Hippocampes, Dorades, Dauphins, Requins, Orques/Ados. 2 niveaux adultes (perfectionnement et coaching).</p>
    <p>Le forfait cours de natation enfant à l'année donne un accès illimité à la piscine et au parc été (juillet-août).</p>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table>
      <tr><th>Formule</th><th>Adultes</th><th>Enfants / ados</th></tr>
      <tr><td>Carte 10 séances (1 an)</td><td>126 €</td><td>—</td></tr>
      <tr><td>Carte 20 séances (1 an)</td><td>238 €</td><td>—</td></tr>
      <tr><td>Abonnement annuel (sept.–juin) + piscine + parc été</td><td>295 €</td><td>185 €</td></tr>
    </table></div>
    <p>Stages d'une semaine (lundi–vendredi) pendant Pâques (zone C) et vacances d'été.</p>
  </div>
</section>
</main>`);

// ACTIVITES ETE ADULTES
pages['pages/activites-ete-adultes.html'] = page('Activités adultes été', 'Aquapalmes et aquabike en période estivale.', `
<main>
${pageHero('Activités été', 'Activités adultes', '../assets/photos/aquagym.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Sur réservation au <a href="tel:+33468756050">04 68 75 60 50</a></strong></p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Shorts et jupes de bain interdits</li></ul></div>
    <h2>Aquapalmes et Aquabike</h2>
    <p>Cours proposés en période estivale. Consultez l'accueil pour les horaires en vigueur.</p>
    <p><a href="activites-ete-stages.html">Stages de natation enfants</a> · <a href="activites-ete-bebe-jardin.html">Bébés nageurs &amp; Jardin aquatique</a></p>
  </div>
</section>
</main>`);

// ACTIVITES ETE STAGES
pages['pages/activites-ete-stages.html'] = page('Stages de natation été', 'Stages enfants 5 jours consécutifs — inscriptions ouvertes.', `
<main>
${pageHero('Activités été', 'Stages de natation enfants', '../assets/photos/stage-enfant.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Inscriptions au <a href="tel:+33468756050">04 68 75 60 50</a></strong></p>
    <p>Du 06/07 au 28/08/2026 — stages de 5 séances consécutives du lundi au vendredi, enfants à partir de 5 ans révolus. 8 enfants maximum par groupe.</p>
    <div class="table-wrap"><table>
      <tr><th>Niveau</th><th>Horaires</th></tr>
      <tr><td>Niveau 1</td><td>9h–9h45 ou 11h–11h45</td></tr>
      <tr><td>Niveau 2</td><td>10h–10h45</td></tr>
    </table></div>
    <p><strong>Tarif :</strong> 70 € (5 jours consécutifs)</p>
  </div>
</section>
${ctaBand('Réservez en ligne')}
</main>`);

// ACTIVITES ETE BEBE JARDIN
pages['pages/activites-ete-bebe-jardin.html'] = page('Bébés nageurs & Jardin aquatique été', 'Cours estivaux pour les tout-petits.', `
<main>
${pageHero('Activités été', 'Bébés nageurs &amp; Jardin aquatique', '../assets/photos/bebe-nageur.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p><strong>Sur réservation au <a href="tel:+33468756050">04 68 75 60 50</a></strong></p>
    <h2>Jardin aquatique (3 à 5 ans)</h2>
    <p>45 min les samedis de 9h à 9h45. Familiarisation avec l'eau à 32°C, 1 parent accompagnateur par enfant.</p>
    <h2>Bébés nageurs (5 à 35 mois)</h2>
    <p>30 min les dimanches de 9h à 9h45. Premiers contacts en famille. Vaccins à jour, 1 à 2 parents accompagnateurs.</p>
    <p><a href="activites-ete-stages.html">Stages de natation</a></p>
  </div>
</section>
</main>`);

// RECUPERATION
pages['pages/recuperation.html'] = page('Récupération', 'Récupération active, chaleur, eau et soins pour prolonger les bienfaits de votre séance.', `
<main>
${pageHero('Se dépasser', 'Récupération', '../assets/photos/sport.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Après l'effort, accordez au corps un vrai temps de retour au calme. L'Espace Balnéo réunit plusieurs approches complémentaires pour relâcher les tensions et retrouver de bonnes sensations.</p>
    <div class="link-grid">
      <a class="link-card" href="balneo.html"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Eau &amp; chaleur</h2><p>Bassins à 32°C, jets massants, saunas, hammam et frigidarium.</p><span>Découvrir l'Espace Balnéo →</span></a>
      <a class="link-card" href="hydromassages.html"><i class="fa-solid fa-droplet" aria-hidden="true"></i><h2>Hydromassages</h2><p>Une séance habillée sur table à jets d'eau chaude, sur rendez-vous.</p><span>Voir les hydromassages →</span></a>
      <a class="link-card" href="massages.html"><i class="fa-solid fa-hands" aria-hidden="true"></i><h2>Massage décontractant</h2><p>Une approche tonique et personnalisée pour délier les zones sollicitées.</p><span>Voir les massages →</span></a>
    </div>
    <div class="info-box"><p class="info-box__title">Composer sa récupération</p><ul><li>Choisissez une intensité adaptée à votre état de forme</li><li>Hydratez-vous avant et après les espaces de chaleur</li><li>Les soins et hydromassages sont proposés sur rendez-vous</li></ul></div>
    <p><a class="btn" href="contact.html">Nous demander conseil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
  </div>
</section>
</main>`);

// AQUAGYM
pages['pages/aquagym.html'] = page('Aquagym', 'Cours d’aquagym de 45 minutes à l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Pratiquer', 'Aquagym', '../assets/photos/aquagym.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Un cours aquatique dynamique de 45 minutes pour travailler le cardio, les abdominaux, les jambes, les cuisses, les fessiers et le buste, avec des exercices adaptables au niveau de chacun.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></li><li>Shorts et jupes de bain interdits</li><li>Pas de cours les jours fériés, sauf programme estival</li><li>Pendant les vacances de la zone C : aquagym le mardi à 9h45</li></ul></div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>9 €</td></tr><tr><td>5 séances — validité 1 mois</td><td>41 €</td></tr><tr><td>10 séances — validité 1 an</td><td>81 €</td></tr><tr><td>Trimestre — hors été</td><td>105 €</td></tr></table></div>
    <p><a href="aquabike.html">Découvrir aussi l'Aquabike →</a></p>
  </div>
</section>
<div class="cta-band"><p>Réservez votre séance d'Aquagym par téléphone.</p><a class="btn" href="tel:+33468756050">Appeler le 04 68 75 60 50<i class="fa-solid fa-phone" aria-hidden="true"></i></a></div>
</main>`);

// AQUABIKE
pages['pages/aquabike.html'] = page('Aquabike', 'Cours d’aquabike de 45 minutes en petit groupe à Gruissan.', `
<main>
${pageHero('Pratiquer', 'Aquabike', '../assets/photos/balneo-37.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>À mi-chemin entre l'aquagym et le vélo en salle, l'Aquabike associe travail cardio et renforcement musculaire sur un vélo immergé, en petit groupe.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Séance de 45 minutes</li><li>Réservation obligatoire au <a href="tel:+33468756050">04 68 75 60 50</a></li><li>Shorts et jupes de bain interdits</li><li>Pas de cours les jours fériés, sauf programme estival</li></ul></div>
    <h2>Tarifs</h2>
    <div class="table-wrap"><table><tr><th>Formule</th><th>Tarif</th></tr><tr><td>1 séance</td><td>11 €</td></tr><tr><td>12 séances — validité 1 an</td><td>121 €</td></tr><tr><td>24 séances — validité 1 an</td><td>231 €</td></tr></table></div>
    <p><a href="aquagym.html">Découvrir aussi l'Aquagym →</a></p>
  </div>
</section>
<div class="cta-band"><p>Réservez votre séance d'Aquabike par téléphone.</p><a class="btn" href="tel:+33468756050">Appeler le 04 68 75 60 50<i class="fa-solid fa-phone" aria-hidden="true"></i></a></div>
</main>`);

// BEBES NAGEURS
pages['pages/bebes-nageurs.html'] = page('Bébés nageurs', 'Séances Bébés nageurs de 5 à 36 mois dans une eau à 32°C.', `
<main>
${pageHero('Pratiquer en famille', 'Bébés nageurs', '../assets/photos/bebe-nageur.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Un premier contact avec l'eau à 32°C, en famille et sous le regard de nos maîtres-nageurs. La séance permet au tout-petit d'explorer le milieu aquatique à son rythme.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Pour les enfants de 5 à 36 mois</li><li>Le dimanche de 9h15 à 10h00</li><li>Vaccinations à jour et certificat médical de non contre-indication</li><li>1 parent accompagnateur minimum, 2 maximum</li><li>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></li></ul></div>
    <h2>Tarifs</h2><p>1 séance : <strong>9 € par parent accompagnateur</strong> — gratuit pour l'enfant.<br>Carte 10 séances : <strong>81 €</strong>, valable 1 an.</p>
  </div>
</section>
</main>`);

// NATATION
pages['pages/natation.html'] = page('Natation', 'Cours et stages de natation pour enfants, adolescents et adultes à Gruissan.', `
<main>
${pageHero('Pratiquer', 'Natation', '../assets/photos/stage-enfant.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>De l'apprentissage au perfectionnement, les cours sont accessibles dès 5 ans avec des groupes adaptés au niveau des enfants, des adolescents et des adultes.</p>
    <div class="info-box"><p class="info-box__title">Côté pratique</p><ul><li>Réservation au <a href="tel:+33468756050">04 68 75 60 50</a></li><li>Shorts et jupes de bain interdits</li><li>Bonnet de bain conseillé</li><li>Pas de cours pendant les vacances scolaires et les jours fériés, hors stages annoncés</li></ul></div>
    <h2>Cours à l'année</h2><p>Niveaux enfants : Cranquettes, Hippocampes, Dorades, Dauphins, Requins et Orques/Ados. Deux niveaux adultes sont proposés : perfectionnement et coaching.</p>
    <div class="table-wrap"><table><tr><th>Formule</th><th>Adultes</th><th>Enfants / ados</th></tr><tr><td>Carte 10 séances — 1 an</td><td>126 €</td><td>—</td></tr><tr><td>Carte 20 séances — 1 an</td><td>238 €</td><td>—</td></tr><tr><td>Abonnement annuel septembre–juin</td><td>295 €</td><td>185 €</td></tr></table></div>
    <h2>Stages</h2><p>Des stages de cinq séances consécutives sont proposés pendant les vacances de Pâques et d'été, pour les enfants à partir de 5 ans révolus. Consultez les actualités ou contactez l'accueil pour les prochaines dates.</p>
  </div>
</section>
</main>`);

// INFOS PRATIQUES
pages['pages/infos-pratiques.html'] = page('Infos pratiques', 'Préparez votre venue à l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Préparer', 'Infos pratiques', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <p>Retrouvez en un coup d'œil toutes les informations nécessaires pour préparer votre venue.</p>
  <div class="link-grid">
    <a class="link-card" href="horaires.html"><i class="fa-solid fa-clock" aria-hidden="true"></i><h2>Horaires</h2><p>Consultez les horaires des différents espaces.</p><span>Voir les horaires →</span></a>
    <a class="link-card" href="tarifs.html"><i class="fa-solid fa-tag" aria-hidden="true"></i><h2>Tarifs</h2><p>Entrées, cartes, activités et abonnements.</p><span>Voir les tarifs →</span></a>
    <a class="link-card" href="acces-parking.html"><i class="fa-solid fa-route" aria-hidden="true"></i><h2>Accès &amp; parking</h2><p>Adresse, itinéraire et stationnement.</p><span>Préparer le trajet →</span></a>
    <a class="link-card" href="brochures.html"><i class="fa-solid fa-file-lines" aria-hidden="true"></i><h2>Brochures</h2><p>Les informations essentielles par univers.</p><span>Consulter les brochures →</span></a>
    <a class="link-card" href="faq.html"><i class="fa-solid fa-circle-question" aria-hidden="true"></i><h2>FAQ</h2><p>Les réponses aux questions les plus fréquentes.</p><span>Consulter la FAQ →</span></a>
    <a class="link-card" href="contact.html"><i class="fa-solid fa-envelope" aria-hidden="true"></i><h2>Contact</h2><p>Une question particulière ? Écrivez-nous ou appelez-nous.</p><span>Nous contacter →</span></a>
  </div>
  <div class="info-box"><p class="info-box__title">Avant d'entrer dans l'eau</p><ul><li>Shorts et jupes de bain interdits</li><li>Cheveux longs attachés</li><li>Serviettes non fournies</li><li>Évacuation des bassins 15 minutes avant la fermeture</li></ul></div>
</div></section>
</main>`);

// TARIFS
pages['pages/tarifs.html'] = page('Tarifs', 'Tarifs des espaces et activités de l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Préparer', 'Tarifs', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <p>Cette page rassemble les principaux tarifs. Les cartes détaillées et les conditions propres à chaque activité restent disponibles dans les pages correspondantes.</p>
  <h2>Espace Balnéo</h2><div class="table-wrap"><table><tr><th>Formule</th><th>Tarif</th></tr><tr><td>Entrée 2h30 — 6 ans et plus</td><td>23 €</td></tr><tr><td>Entrée 2h30 — 3 à moins de 6 ans</td><td>11 €</td></tr><tr><td>Pass sans limite de temps — 6 ans et plus</td><td>29 €</td></tr><tr><td>Dernière heure</td><td>11 €</td></tr></table></div><p><a href="balneo.html">Voir tous les tarifs Balnéo et abonnements →</a></p>
  <h2>Activités</h2><div class="table-wrap"><table><tr><th>Activité</th><th>À partir de</th></tr><tr><td>Aquagym</td><td>9 € la séance</td></tr><tr><td>Aquabike</td><td>11 € la séance</td></tr><tr><td>Bébés nageurs</td><td>9 € par parent accompagnateur</td></tr><tr><td>Natation adultes</td><td>126 € les 10 séances</td></tr></table></div>
  <h2>Autres univers</h2><div class="link-grid"><a class="link-card" href="salle-de-sport.html"><i class="fa-solid fa-dumbbell" aria-hidden="true"></i><h2>Espace For.Me</h2><p>Séances et abonnements.</p><span>Voir les tarifs →</span></a><a class="link-card" href="massages.html"><i class="fa-solid fa-spa" aria-hidden="true"></i><h2>Massages</h2><p>Prestations avec ou sans Balnéo.</p><span>Voir la carte →</span></a><a class="link-card" href="parc-ete.html"><i class="fa-solid fa-water-ladder" aria-hidden="true"></i><h2>Parc été</h2><p>Pass journée et tarifs enfants.</p><span>Voir les tarifs →</span></a></div>
  <p><a class="btn btn--filled" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Billetterie en ligne<i class="fa-solid fa-ticket" aria-hidden="true"></i></a></p>
</div></section>
</main>`);

// BROCHURES
pages['pages/brochures.html'] = page('Brochures', 'Guides et informations de l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Préparer', 'Brochures', '../assets/photos/bassins-exterieurs.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <p>Explorez nos univers comme dans une brochure, avec des informations maintenues à jour directement sur le site.</p>
  <div class="link-grid">
    <a class="link-card" href="balneo.html"><i class="fa-solid fa-water" aria-hidden="true"></i><h2>Guide Balnéo</h2><p>Bassins, chaleur, détente et conditions d'accès.</p><span>Consulter le guide →</span></a>
    <a class="link-card" href="aquagym.html"><i class="fa-solid fa-person-swimming" aria-hidden="true"></i><h2>Guide des activités</h2><p>Aquagym, Aquabike, Bébés nageurs et Natation.</p><span>Découvrir les activités →</span></a>
    <a class="link-card" href="parc-ete.html"><i class="fa-solid fa-sun" aria-hidden="true"></i><h2>Guide Parc été</h2><p>Espaces, services, règles et tarifs de la saison estivale.</p><span>Préparer sa journée →</span></a>
  </div>
  <div class="info-box"><p class="info-box__title">Besoin d'un document imprimable ?</p><p>Contactez l'accueil : l'équipe vous transmettra la documentation disponible pour votre demande.</p></div>
  <p><a class="btn" href="contact.html">Demander une brochure<i class="fa-solid fa-file-lines" aria-hidden="true"></i></a></p>
</div></section>
</main>`);

// HORAIRES
pages['pages/horaires.html'] = page('Horaires', 'Horaires d’ouverture de l’Espace Balnéo, de l’Espace For.Me et du Parc été.', `
<main>
${pageHero('Préparer', 'Horaires', '../assets/photos/balneo-188.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <p>Les horaires évoluent selon les espaces et les périodes de l'année. Retrouvez ici les repères essentiels avant votre venue.</p>
  <div class="pricing-grid"><div class="pricing-card"><p class="pricing-card__name">Espace For.Me</p><p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>6h–23h</p><p class="pricing-card__desc">7j/7 — dernier accès à 22h.</p></div><div class="pricing-card"><p class="pricing-card__name">Espace Balnéo — été</p><p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>10h–19h</p><p class="pricing-card__desc">Évacuation des bassins 15 minutes avant la fermeture.</p></div><div class="pricing-card"><p class="pricing-card__name">Parc été</p><p class="pricing-card__price"><i class="fa-solid fa-clock context-icon" aria-hidden="true"></i>11h–18h</p><p class="pricing-card__desc">Ouverture saisonnière en juillet et août.</p></div></div>
  <div class="info-box"><p class="info-box__title">Horaires du jour</p><p>Pour les horaires hors saison, les jours fériés, les activités encadrées ou une fermeture technique, vérifiez auprès de l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p></div>
  <p><a class="btn" href="contact.html">Contacter l'accueil<i class="fa-solid fa-envelope" aria-hidden="true"></i></a></p>
</div></section>
</main>`);

// PRIVATISATION
pages['pages/privatisation.html'] = page('Privatisation', 'Organisez une expérience de groupe à l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Préparer', 'Privatisation', '../assets/photos/bassins-exterieurs.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <p>Vous préparez un moment pour un groupe, une association, un club ou une entreprise ? L'équipe étudie avec vous les possibilités d'accueil selon votre projet, la période et les espaces disponibles.</p>
  <div class="link-grid"><div class="link-card"><i class="fa-solid fa-users" aria-hidden="true"></i><h2>Groupes</h2><p>Une demande adaptée au nombre de participants et au rythme souhaité.</p></div><div class="link-card"><i class="fa-solid fa-briefcase" aria-hidden="true"></i><h2>Entreprises</h2><p>Un cadre différent pour un temps d'équipe ou une parenthèse bien-être.</p></div><div class="link-card"><i class="fa-solid fa-medal" aria-hidden="true"></i><h2>Clubs</h2><p>Des pistes autour de l'activité, de la récupération et de la détente.</p></div></div>
  <h2>Construisons votre demande</h2><p>Indiquez la date envisagée, le nombre de participants, les espaces souhaités et vos contraintes horaires. L'équipe vous répondra sur la faisabilité et les conditions.</p>
  <p><a class="btn btn--filled" href="contact.html">Demander une privatisation<i class="fa-solid fa-users" aria-hidden="true"></i></a></p>
</div></section>
</main>`);

// ACCES ET PARKING
pages['pages/acces-parking.html'] = page('Accès & parking', 'Adresse, itinéraire et stationnement de l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Préparer', 'Accès &amp; parking', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <p>L'Espace Balnéo se situe avenue des Bains à Gruissan, à proximité immédiate des espaces sportifs et de loisirs.</p>
  <div class="info-box"><p class="info-box__title">Adresse</p><p><strong>Espace Balnéo de Gruissan</strong><br>Avenue des Bains<br>11430 Gruissan</p></div>
  <h2>Venir sur place</h2><div class="link-grid"><div class="link-card"><i class="fa-solid fa-car" aria-hidden="true"></i><h2>En voiture</h2><p>Suivez la direction de l'Espace Balnéo. Le stationnement se fait sur les zones prévues autour du site.</p></div><div class="link-card"><i class="fa-solid fa-person-walking" aria-hidden="true"></i><h2>À pied ou à vélo</h2><p>Rejoignez l'équipement par les cheminements locaux depuis les secteurs proches.</p></div></div>
  <p><a class="btn btn--filled" href="https://maps.google.fr/?saddr=&amp;daddr=43.1182048,3.11328202" target="_blank" rel="noopener">Ouvrir l'itinéraire<i class="fa-solid fa-route" aria-hidden="true"></i></a></p>
  <p>Pour une question d'accessibilité ou de dépose, contactez l'accueil avant votre venue.</p>
</div></section>
</main>`);

// FAQ
pages['pages/faq.html'] = page('FAQ', 'Questions fréquentes sur l’Espace Balnéo de Gruissan.', `
<main>
${pageHero('Préparer', 'Questions fréquentes', '../assets/photos/riviere.jpg')}
<section class="section section--light"><div class="container content-block fade-in">
  <div class="faq-list">
    <details><summary>Faut-il réserver pour accéder à l'Espace Balnéo ?</summary><p>L'accès libre à la Balnéo ne nécessite pas de réservation. Les massages, hydromassages et activités encadrées sont proposés sur réservation.</p></details>
    <details><summary>Quelle tenue de bain est autorisée ?</summary><p>Les shorts et jupes de bain sont interdits. Les cheveux longs doivent être attachés.</p></details>
    <details><summary>Les serviettes sont-elles fournies ?</summary><p>Non, pensez à apporter votre serviette.</p></details>
    <details><summary>Les enfants peuvent-ils accéder à la Balnéo ?</summary><p>Les moins de 18 ans doivent être accompagnés d'un adulte. Les moins de 3 ans accèdent uniquement aux trois alvéoles thématiques. Les saunas et le hammam sont accessibles à partir de 16 ans.</p></details>
    <details><summary>Quels moyens de paiement sont acceptés ?</summary><p>Espèces, carte bancaire et chèques ANCV au format papier.</p></details>
    <details><summary>Où consulter les horaires et les tarifs ?</summary><p>Consultez les pages <a href="horaires.html">Horaires</a> et <a href="tarifs.html">Tarifs</a>. Pour une information du jour, appelez l'accueil au <a href="tel:+33468756050">04 68 75 60 50</a>.</p></details>
    <details><summary>Comment venir et où stationner ?</summary><p>Retrouvez l'adresse, l'itinéraire et les informations de stationnement sur la page <a href="acces-parking.html">Accès &amp; parking</a>.</p></details>
  </div>
  <p><a class="btn" href="contact.html">Une autre question ?<i class="fa-solid fa-circle-question" aria-hidden="true"></i></a></p>
</div></section>
</main>`);

// ACTUALITES
pages['pages/actualites.html'] = page('Actualités', 'Dernières nouvelles de l\'Espace Balnéo de Gruissan.', `
<main>
${pageHero('Informations', 'Actualités', '../assets/photos/dsc-0451.jpg')}
<section class="section section--light">
  <div class="container">
    <div class="news-grid">
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="../assets/photos/dsc-0451.jpg" alt="Ouverture du parc été">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">3 juin</p>
          <h3 class="news-card__title">Ouverture du parc été</h3>
          <p class="news-card__excerpt">À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
          <a href="article-parc-ete.html" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="../assets/photos/stage-enfant.jpg" alt="Stages de natation">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">1 juin</p>
          <h3 class="news-card__title">Stages de natation enfants été</h3>
          <p class="news-card__excerpt">Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi.</p>
          <a href="article-stages-natation.html" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="../assets/photos/riviere.jpg" alt="Rivière extérieure">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">1 avril</p>
          <h3 class="news-card__title">Réouverture de la rivière extérieure</h3>
          <p class="news-card__excerpt">Réouverture de notre rivière extérieure au sein de votre Espace Balnéo.</p>
          <a href="article-riviere.html" class="news-card__link">Lire plus</a>
        </div>
      </article>
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="../assets/photos/maillots.jpg" alt="Tenue de bain">
        </div>
        <div class="news-card__body">
          <p class="news-card__date">2026</p>
          <h3 class="news-card__title">Tenue de bain</h3>
          <p class="news-card__excerpt">Rappel : shorts et jupes de bain interdits dans l'ensemble de l'établissement.</p>
        </div>
      </article>
    </div>
  </div>
</section>
</main>`);

// ARTICLES
function articlePage(title, date, img, content) {
  return page(title, content.replace(/<[^>]+>/g,'').slice(0,150), `
<main>
${pageHero('Actualité — ' + date, title, img)}
<section class="section section--light"><div class="container content-block fade-in">${content}
<p style="margin-top:var(--space-lg)"><a href="actualites.html" class="btn"><i class="fa-solid fa-arrow-left" aria-hidden="true"></i>Toutes les actualités</a></p>
</div></section></main>`);
}

pages['pages/article-parc-ete.html'] = articlePage('Ouverture du parc été', '3 juin', '../assets/photos/dsc-0451.jpg', `
<p>L'été arrive ! À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<p>Venez profiter de nos bassins, toboggans et espaces de détente tout l'été, en famille ou entre amis ! Toute l'équipe se réjouit de vous accueillir.</p>
<p><a href="parc-ete.html">Découvrir le parc été →</a></p>`);

pages['pages/article-stages-natation.html'] = articlePage('Stages de natation enfants été', '1 juin', '../assets/photos/stage-enfant.jpg', `
<p>Inscriptions ouvertes ! Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<p>Niveau 1 : 9h à 9h45 ou 11h à 11h45 — Niveau 2 : 10h à 10h45. 8 enfants maximum par groupe.</p>
<p>Avant de réserver, contactez-nous au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<p><a href="natation.html">Voir les cours et stages de natation →</a></p>`);

pages['pages/article-riviere.html'] = articlePage('Réouverture de la rivière extérieure', '1 avril', '../assets/photos/riviere.jpg', `
<p>Chers clients, nous avons le plaisir de vous informer de la réouverture de notre rivière extérieure au sein de votre Espace Balnéo. Profitez-en dès maintenant pour vous détendre.</p>
<p>À très bientôt dans votre Espace Balnéo !</p>`);

// CONTACT
pages['pages/contact.html'] = page('Contact', 'Contactez l\'Espace Balnéo de Gruissan.', `
<main>
${pageHero('Nous contacter', 'Contact', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in" style="text-align:center">
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
${contactSection(true)}
</main>`);

// REGLEMENT
pages['pages/reglement.html'] = page('Règlement intérieur', 'Règlement intérieur de l\'Espace Balnéoludique de Gruissan.', `
<main>
${pageHero('Informations légales', 'Règlement intérieur', '../assets/photos/dsc-0451.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>L'établissement est ouvert au public suivant l'horaire affiché dans le hall d'accueil. L'Office de Tourisme de Gruissan se réserve le droit de modifier les heures d'ouverture et conditions d'utilisation des bassins et des locaux lorsqu'il le juge nécessaire.</p>
    <h2>Conditions d'accès</h2>
    <ul>
      <li>Se conformer scrupuleusement aux consignes du personnel</li>
      <li>Shorts et jupes de bain interdits dans l'ensemble de l'établissement</li>
      <li>Cheveux longs attachés — serviettes non fournies</li>
      <li>Évacuation des bassins 1/4 d'heure avant la fermeture</li>
    </ul>
    <h2>Massages et soins bien-être</h2>
    <p>Nos prestations sont axées uniquement sur le bien-être et ne comportent aucun caractère médical et/ou thérapeutique. Un passage en douche est demandé à tous avant d'accéder à l'Espace Massage.</p>
    <ul>
      <li>Prestations sur rendez-vous uniquement</li>
      <li>Enfants de moins de 12 ans : massages de 30 minutes uniquement</li>
      <li>Enfants de moins de 15 ans : accompagnement d'un adulte en cabine obligatoire</li>
      <li>Femmes enceintes : massages entre le 4e et le 8e mois, 30 ou 60 minutes</li>
    </ul>
    <h2>Espace For.Me</h2>
    <p>L'espace For.Me est placé sous vidéosurveillance 24h/24 et 7j/7. Les données sont archivées durant 30 jours puis automatiquement effacées (loi informatique et libertés).</p>
    <h2>Modification des horaires et tarifs</h2>
    <p>La Direction se réserve le droit de modifier tout ou partie des horaires d'ouverture ou des tarifs, par affichage interne, avec un préavis.</p>
    <p><a href="donnees-personnelles.html">Données personnelles →</a></p>
  </div>
</section>
</main>`);

// MENTIONS LEGALES
pages['pages/mentions-legales.html'] = page('Mentions légales', 'Mentions légales — Espace Balnéo de Gruissan.', `
<main>
${pageHero('Informations légales', 'Mentions légales', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <h2>Éditeur du site</h2>
    <p>Espace Balnéoludique de Gruissan<br>Avenue des Bains — 11430 Gruissan<br>Téléphone : 04 68 75 60 50<br>E-mail : espace.balneoludique@gruissan-mediterranee.com</p>
    <h2>Hébergement</h2>
    <p>Site prototype en cours de refonte. Version WordPress à venir.</p>
    <h2>Propriété intellectuelle</h2>
    <p>L'ensemble du contenu de ce site (textes, images, graphismes) est la propriété de l'Espace Balnéoludique de Gruissan ou de ses partenaires. Toute reproduction est interdite sans autorisation préalable.</p>
    <p>Photos : J.B. Roubinet — utilisées avec autorisation.</p>
    <h2>Crédits</h2>
    <p>&reg; D.B.G — Espace Balnéo de Gruissan</p>
  </div>
</section>
</main>`);

// DONNEES PERSONNELLES
pages['pages/donnees-personnelles.html'] = page('Données personnelles', 'Politique de protection des données personnelles.', `
<main>
${pageHero('Informations légales', 'Données personnelles', '../assets/photos/gruissan-050.jpg')}
<section class="section section--light">
  <div class="container content-block fade-in">
    <p>Conformément à la loi Informatique et Libertés du 6 janvier 1978 modifiée, et au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et d'opposition aux données vous concernant.</p>
    <h2>Responsable du traitement</h2>
    <p>Le directeur de l'Espace Balnéoludique de Gruissan.<br>Pour exercer vos droits : espace.balneoludique@gruissan-mediterranee.com</p>
    <h2>Données collectées</h2>
    <p>Les données collectées via le formulaire d'inscription à la newsletter (prénom, nom, e-mail, code postal, ville) sont utilisées uniquement pour l'envoi d'actualités de l'Espace Balnéo.</p>
    <h2>Vidéosurveillance</h2>
    <p>L'espace For.Me est placé sous vidéosurveillance. Les enregistrements sont conservés 30 jours maximum, puis automatiquement effacés.</p>
    <h2>Cookies</h2>
    <p>Ce prototype statique n'utilise pas de cookies de tracking. La version WordPress pourra intégrer un bandeau de consentement conforme.</p>
    <p><a href="reglement.html">Règlement intérieur →</a></p>
  </div>
</section>
</main>`);

// Retired routes whose useful content has moved into the new navigation.
const retiredPages = [
  'pages/activites-annee-adultes.html',
  'pages/activites-annee-bebe-jardin.html',
  'pages/activites-annee-natation.html',
  'pages/activites-ete-adultes.html',
  'pages/activites-ete-bebe-jardin.html',
  'pages/activites-ete-stages.html',
  'pages/piscine.html',
  'pages/soins-visage.html',
  'pages/fauteuils-massants.html'
];

retiredPages.forEach((file) => {
  delete pages[file];
  const retiredPath = path.join(base, file);
  if (fs.existsSync(retiredPath)) fs.unlinkSync(retiredPath);
});

// Write all files
Object.entries(pages).forEach(([file, html]) => {
  const dest = path.join(base, file);
  fs.mkdirSync(path.dirname(dest), { recursive: true });
  fs.writeFileSync(dest, html, 'utf8');
  console.log('Written:', file);
});
console.log('Done —', Object.keys(pages).length, 'pages');
