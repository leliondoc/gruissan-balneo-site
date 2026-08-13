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
  <link rel="stylesheet" href="${p}/css/styles.css">
</head>
<body class="${isHome ? 'is-home' : ''}">
  <header class="site-header">
    <div class="utility-bar">
      <div class="utility-bar__inner">
        <p>Au cœur de Gruissan, entre mer et lagune</p>
        <nav aria-label="Liens pratiques">
          <a href="tel:+33468756050">04 68 75 60 50</a>
          <a href="${p}/pages/contact.html">Contact</a>
          <a href="https://www.gruissan-mediterranee.com" target="_blank" rel="noopener">Gruissan Tourisme</a>
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
          <button class="nav-link" type="button" aria-expanded="false">Découvrir</button>
          <div class="dropdown dropdown--wide">
            <div class="dropdown__intro">
              <span>Découvrir</span>
              <strong>Choisissez votre parenthèse</strong>
              <p>De l'eau chaude aux soins, composez votre moment à Gruissan.</p>
            </div>
            <div class="dropdown__links">
              <a href="${p}/pages/balneo.html"><small>01</small> L'espace Balnéo</a>
              <a href="${p}/pages/massages.html"><small>02</small> Massages &amp; soins</a>
              <a href="${p}/pages/piscine.html"><small>03</small> La piscine</a>
            </div>
          </div>
        </li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">Bouger</button>
          <div class="dropdown">
            <span class="dropdown__label">Activités aquatiques</span>
            <a href="${p}/pages/activites-annee-adultes.html">Activités adultes</a>
            <a href="${p}/pages/activites-annee-natation.html">Cours de natation</a>
            <a href="${p}/pages/salle-de-sport.html">Salle de sport For.Me</a>
            <span class="dropdown__label">Saison estivale</span>
            <a href="${p}/pages/activites-ete-adultes.html">Programme été</a>
            <a href="${p}/pages/activites-ete-stages.html">Stages de natation</a>
          </div>
        </li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">En famille</button>
          <div class="dropdown">
            <a href="${p}/pages/parc-ete.html">Le parc été</a>
            <a href="${p}/pages/activites-annee-bebe-jardin.html">Bébés nageurs</a>
            <a href="${p}/pages/activites-annee-bebe-jardin.html">Jardin aquatique</a>
            <a href="${p}/pages/activites-ete-bebe-jardin.html">Activités famille été</a>
          </div>
        </li>
        <li><a href="${p}/pages/actualites.html">Actualités</a></li>
        <li class="has-dropdown">
          <button class="nav-link" type="button" aria-expanded="false">Pratique</button>
          <div class="dropdown dropdown--right">
            <a href="${p}/pages/balneo.html">Horaires &amp; tarifs</a>
            <a href="${p}/pages/contact.html">Accès &amp; contact</a>
            <a href="${p}/pages/reglement.html">Préparer ma venue</a>
          </div>
        </li>
        <li class="main-nav__booking"><a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Réserver</a></li>
      </ul>
    </div>
  </header>`;
}

function footer(root) {
  const p = root ? '..' : '.';
  return `
  <a class="cta-orb" href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Réserver<br><span>en ligne</span></a>
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-logo">
          <a href="${p}/index.html" class="footer-wordmark">${logoNav(p)}</a>
          <p class="footer-brand">Un équipement de</p>
          <a href="https://www.gruissan-mediterranee.com" target="_blank" rel="noopener">
            <img class="gt-logo" src="${p}/assets/gruissan-tourisme.svg" alt="Gruissan Tourisme">
          </a>
        </div>
        <nav class="footer-nav">
          <a href="${p}/index.html">Accueil</a>
          <a href="${p}/pages/contact.html">Contact</a>
          <a href="${p}/pages/reglement.html">Règlement intérieur</a>
        </nav>
        <nav class="footer-nav">
          <a href="${p}/pages/mentions-legales.html">Mentions légales</a>
          <a href="${p}/pages/donnees-personnelles.html">Données personnelles</a>
          <a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener">Billetterie en ligne</a>
        </nav>
      </div>
      <div class="footer-bottom">
        <span>&reg; D.B.G — Espace Balnéo de Gruissan</span>
        <span>Photos : J.B. Roubinet</span>
      </div>
    </div>
  </footer>
  <script src="${p}/js/main.js"></script>
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
    <div class="container">${text}
      <button class="info-banner__close" aria-label="Fermer">&times;</button>
    </div>
  </div>`;
}

function pageHero(label, title, img) {
  const photo = img || '../assets/photos/gruissan-050.jpg';
  return `<section class="page-hero">
    <div class="page-hero__media media-fill">
      <img src="${photo}" alt="">
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
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie &amp; cadeaux</a>
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
            <button type="submit" class="btn">S'inscrire</button>
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
        <a href="#experiences" class="btn btn--on-photo btn--filled">Explorer les espaces</a>
        <a href="pages/balneo.html" class="text-link text-link--light">Horaires &amp; tarifs <span>→</span></a>
      </div>
    </div>
    <a class="hero__scroll" href="#bienvenue"><span></span>Découvrir</a>
  </section>

  <nav class="quick-access" aria-label="Accès rapides">
    <a href="pages/balneo.html"><span>01</span><strong>Horaires &amp; tarifs</strong><small>Préparer ma visite</small></a>
    <a href="https://gruissan-balneo.horanet.com/" target="_blank" rel="noopener"><span>02</span><strong>Billetterie &amp; cadeaux</strong><small>Réserver en ligne</small></a>
    <a href="pages/contact.html"><span>03</span><strong>Venir à la Balnéo</strong><small>Accès &amp; contact</small></a>
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
        <img src="assets/photos/balneo-37.jpg" alt="Massage à l’Espace Balnéo">
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
        <img src="assets/photos/riviere.jpg" alt="Parc aquatique extérieur">
        <span class="experience-card__veil"></span>
        <div class="experience-card__content"><small>Partager</small><h3>Le parc été en famille</h3><p>Toboggans, rivière et jeux d'eau sous le soleil de Gruissan.</p><span class="circle-arrow">→</span></div>
      </a>
    </div>
  </section>

  <section class="manifesto section">
    <div class="manifesto__photo media-fill"><img src="assets/photos/balneo-188.jpg" alt="Jets et bassin de la Balnéo"></div>
    <div class="manifesto__content fade-in">
      <p class="section__label">L'expérience Balnéo</p>
      <h2 class="display-title">Le corps s'apaise.<br>L'esprit s'évade.</h2>
      <p>Jets massants, chaleur sèche ou vapeur parfumée : laissez chaque sensation vous ramener à l'essentiel.</p>
      <div class="manifesto__numbers">
        <div><strong>32°</strong><span>L'eau des bassins</span></div>
        <div><strong>5</strong><span>Univers à explorer</span></div>
        <div><strong>7j/7</strong><span>La salle For.Me</span></div>
      </div>
      <a href="pages/balneo.html" class="btn">Entrer dans l'univers</a>
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
            <img src="assets/photos/parc-ete.jpg" alt="Ouverture du parc été">
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
            <img src="assets/photos/balneo-188.jpg" alt="Espace balnéo">
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
${ctaBand('Réservez votre entrée Balnéo en ligne')}
</main>`);

// MASSAGES
pages['pages/massages.html'] = page('Massages', 'Carte des massages bien-être — réservation sur rendez-vous.', `
<main>
${pageHero('Soins bien-être', 'Massages', '../assets/photos/balneo-60.jpg')}
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
    <p><a href="hydromassages.html">Voir aussi : Hydromassages</a> · <a href="soins-visage.html">Soins du visage</a> · <a href="fauteuils-massants.html">Fauteuils massants</a></p>
  </div>
</section>
${ctaBand('Réservez par téléphone au 04 68 75 60 50')}
</main>`);

// HYDROMASSAGES
pages['pages/hydromassages.html'] = page('Hydromassages', 'Séances d\'hydromassage et Rituel Océan Relax sur rendez-vous.', `
<main>
${pageHero('Soins bien-être', 'Hydromassages', '../assets/photos/balneo-73.jpg')}
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
${pageHero('Soins bien-être', 'Soins du visage', '../assets/photos/balneo-37.jpg')}
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
${pageHero('Soins bien-être', 'Fauteuils massants', '../assets/photos/balneo-60.jpg')}
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
${pageHero('Aquatique', 'Piscine', '../assets/photos/dsc-0930.jpg')}
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
${pageHero('For.Me', 'S\'entraîner / Se dépasser', '../assets/photos/sport.jpg')}
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

// ACTUALITES
pages['pages/actualites.html'] = page('Actualités', 'Dernières nouvelles de l\'Espace Balnéo de Gruissan.', `
<main>
${pageHero('Informations', 'Actualités', '../assets/photos/parc-ete.jpg')}
<section class="section section--light">
  <div class="container">
    <div class="news-grid">
      <article class="news-card fade-in">
        <div class="news-card__media media-fill">
          <img src="../assets/photos/parc-ete.jpg" alt="Ouverture du parc été">
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
<p style="margin-top:var(--space-lg)"><a href="actualites.html" class="btn">← Toutes les actualités</a></p>
</div></section></main>`);
}

pages['pages/article-parc-ete.html'] = articlePage('Ouverture du parc été', '3 juin', '../assets/photos/parc-ete.jpg', `
<p>L'été arrive ! À partir du samedi 27 juin et jusqu'au dimanche 30 août inclus, le parc aqualudique vous accueille tous les jours de 11h à 18h.</p>
<p>Venez profiter de nos bassins, toboggans et espaces de détente tout l'été, en famille ou entre amis ! Toute l'équipe se réjouit de vous accueillir.</p>
<p><a href="parc-ete.html">Découvrir le parc été →</a></p>`);

pages['pages/article-stages-natation.html'] = articlePage('Stages de natation enfants été', '1 juin', '../assets/photos/stage-enfant.jpg', `
<p>Inscriptions ouvertes ! Du 06/07 au 28/08/2026, stages de 5 séances consécutives du lundi au vendredi, pour les enfants à partir de 5 ans révolus.</p>
<p>Niveau 1 : 9h à 9h45 ou 11h à 11h45 — Niveau 2 : 10h à 10h45. 8 enfants maximum par groupe.</p>
<p>Avant de réserver, contactez-nous au <a href="tel:+33468756050">04 68 75 60 50</a>.</p>
<p><a href="activites-ete-stages.html">Voir les détails →</a></p>`);

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
    <a href="https://gruissan-balneo.horanet.com/" class="btn btn--filled" target="_blank" rel="noopener">Billetterie en ligne</a>
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

// Write all files
Object.entries(pages).forEach(([file, html]) => {
  const dest = path.join(base, file);
  fs.mkdirSync(path.dirname(dest), { recursive: true });
  fs.writeFileSync(dest, html, 'utf8');
  console.log('Written:', file);
});
console.log('Done —', Object.keys(pages).length, 'pages');
