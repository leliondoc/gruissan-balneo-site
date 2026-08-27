/**
 * Francise les classes CSS historiques dans les sources de la maquette.
 *
 * Ce script de migration est volontairement déterministe : il permet de
 * reproduire le renommage sans toucher aux classes fournies par WordPress ou
 * Font Awesome. Après migration, l'audit WordPress veille à leur non-régression.
 *
 * Usage : node scripts/franciser-classes-css.js
 */

const fs = require('fs');
const path = require('path');

const racine = path.resolve(__dirname, '..');

const correspondances = {
  active: 'actif',
  'back-to-top': 'retour-haut',
  'balneo-align-center': 'balneo-aligner-centre',
  'balneo-align-left': 'balneo-aligner-gauche',
  'balneo-editor-container': 'balneo-conteneur-editeur',
  'balneo-editor-container__content': 'balneo-conteneur-editeur__contenu',
  'balneo-editor-image': 'balneo-image-editeur',
  'balneo-editor-rich-text': 'balneo-texte-enrichi-editeur',
  'balneo-honeypot': 'balneo-champ-piege',
  'balneo-admin-branded': 'balneo-admin-personnalise',
  'balneo-space-bottom-md': 'balneo-espace-bas-moyen',
  'balneo-space-top-md': 'balneo-espace-haut-moyen',
  'balneo-space-y-lg': 'balneo-espace-vertical-grand',
  'brand-seal': 'sceau-marque',
  'brand-seal--experience': 'sceau-marque--experience',
  'brand-seal--open': 'sceau-marque--ouvert',
  btn: 'bouton',
  'btn--filled': 'bouton--plein',
  'btn--on-photo': 'bouton--sur-photo',
  'btn-group': 'groupe-boutons',
  'circle-arrow': 'fleche-ronde',
  'contact-grid': 'grille-contact',
  'contact-info': 'infos-contact',
  'contact-info__item': 'infos-contact__element',
  'contact-info__label': 'infos-contact__libelle',
  'contact-info__value': 'infos-contact__valeur',
  'contact-section': 'section-contact',
  'comments-area': 'zone-commentaires',
  'comment-list': 'liste-commentaires',
  container: 'conteneur',
  'content-block': 'bloc-contenu',
  'context-icon': 'icone-contexte',
  'cta-band': 'bande-appel',
  'cta-orb': 'orbe-appel',
  'cta-orb__label': 'orbe-appel__libelle',
  'display-title': 'titre-affichage',
  dropdown: 'sous-menu',
  'dropdown__intro': 'sous-menu__intro',
  'dropdown__label': 'sous-menu__libelle',
  'dropdown__links': 'sous-menu__liens',
  'dropdown--mega': 'sous-menu--mega',
  'dropdown--practical': 'sous-menu--pratique',
  'dropdown--right': 'sous-menu--droite',
  'dropdown--wide': 'sous-menu--large',
  'experience-card': 'carte-experience',
  'experience-card__content': 'carte-experience__contenu',
  'experience-card__veil': 'carte-experience__voile',
  'experience-card--large': 'carte-experience--grande',
  'experience-card--wide': 'carte-experience--large',
  'experience-grid': 'grille-experiences',
  'experience-section': 'section-experiences',
  'entry-content': 'contenu-entree',
  'fade-in': 'apparition',
  'faq-list': 'liste-faq',
  'floating-tooltip': 'infobulle-flottante',
  'footer-bottom': 'pied-page__bas',
  'footer-grid': 'pied-page__grille',
  'footer-legal': 'pied-page__legal',
  'footer-logo': 'pied-page__logo',
  'footer-nav': 'pied-page__navigation',
  'footer-wordmark': 'pied-page__marque',
  'form-error': 'formulaire-erreur',
  'form-group': 'groupe-formulaire',
  'form-success': 'formulaire-succes',
  'has-dropdown': 'avec-sous-menu',
  hero: 'hero-accueil',
  'hero__content': 'hero-accueil__contenu',
  'hero__kicker': 'hero-accueil__surtitre',
  'hero__media': 'hero-accueil__media',
  'hero__scroll': 'hero-accueil__defilement',
  'hero__tagline': 'hero-accueil__accroche',
  'hero__title': 'hero-accueil__titre',
  'hero__veil': 'hero-accueil__voile',
  'hero-seals': 'hero-accueil__sceaux',
  'info-banner': 'bandeau-info',
  'info-banner__close': 'bandeau-info__fermer',
  'info-banner__message': 'bandeau-info__message',
  'info-box': 'encadre-info',
  'info-box__title': 'encadre-info__titre',
  'is-active': 'est-actif',
  'is-animating': 'est-anime',
  'is-home': 'est-accueil',
  'is-in-view': 'est-dans-vue',
  'is-open': 'est-ouvert',
  'is-saved': 'est-enregistre',
  'is-scrolled': 'est-defile',
  'is-visible': 'est-visible',
  'link-card': 'carte-lien',
  'link-grid': 'grille-liens',
  'logo-img': 'image-logo',
  'main-nav': 'navigation-principale',
  'main-nav__booking': 'navigation-principale__achat',
  'main-nav__icon': 'navigation-principale__icone',
  'main-nav__icon--1': 'navigation-principale__icone--1',
  'main-nav__icon--2': 'navigation-principale__icone--2',
  'main-nav__icon--3': 'navigation-principale__icone--3',
  'main-nav__icon--4': 'navigation-principale__icone--4',
  'main-nav__icon--5': 'navigation-principale__icone--5',
  'main-nav__icon-water': 'navigation-principale__icone-eau',
  manifesto: 'manifeste',
  'manifesto__content': 'manifeste__contenu',
  'manifesto__numbers': 'manifeste__chiffres',
  'manifesto__photo': 'manifeste__photo',
  'media-fill': 'media-plein',
  'mega-menu__card': 'menu-mega__carte',
  'mega-menu__card--balneo': 'menu-mega__carte--balneo',
  'mega-menu__card--hydromassages': 'menu-mega__carte--hydromassages',
  'mega-menu__card--massages': 'menu-mega__carte--massages',
  'mega-menu__content': 'menu-mega__contenu',
  'mega-menu__meta': 'menu-mega__meta',
  'mega-menu__veil': 'menu-mega__voile',
  'menu-open': 'menu-ouvert',
  'nav-link': 'lien-navigation',
  'nav-toggle': 'bouton-navigation',
  'news-card': 'carte-actualite',
  'news-card__body': 'carte-actualite__corps',
  'news-card__date': 'carte-actualite__date',
  'news-card__excerpt': 'carte-actualite__extrait',
  'news-card__link': 'carte-actualite__lien',
  'news-card__media': 'carte-actualite__media',
  'news-card__title': 'carte-actualite__titre',
  'news-grid': 'grille-actualites',
  'news-section': 'section-actualites',
  open: 'ouvert',
  'page-hero': 'hero-page',
  'page-hero__content': 'hero-page__contenu',
  'page-hero__label': 'hero-page__libelle',
  'page-hero__media': 'hero-page__media',
  'page-hero__title': 'hero-page__titre',
  'page-hero__veil': 'hero-page__voile',
  'panel-open': 'panneau-ouvert',
  'practical-rail': 'barre-pratique',
  'practical-rail__label': 'barre-pratique__libelle',
  'practical-rail__link': 'barre-pratique__lien',
  'practical-rail__link--booking': 'barre-pratique__lien--achat',
  'pricing-card': 'carte-tarif',
  'pricing-card__desc': 'carte-tarif__description',
  'pricing-card__name': 'carte-tarif__nom',
  'pricing-card__price': 'carte-tarif__prix',
  'pricing-grid': 'grille-tarifs',
  'quick-access': 'acces-rapides',
  'quick-access__icon': 'acces-rapides__icone',
  'save-button': 'bouton-enregistrer',
  'save-button--page': 'bouton-enregistrer--page',
  'saved-empty': 'enregistres-vides',
  'saved-item': 'element-enregistre',
  'saved-list': 'liste-enregistres',
  'search-box': 'boite-recherche',
  'search-results': 'resultats-recherche',
  'seasonal-emblem': 'embleme-saison',
  'seasonal-emblem__icon': 'embleme-saison__icone',
  'seasonal-emblem__orbit': 'embleme-saison__orbite',
  'seasonal-heading': 'titre-saisons',
  'seasonal-section': 'section-saisons',
  'seasonal-slide': 'diapositive-saison',
  'seasonal-slide__content': 'diapositive-saison__contenu',
  'seasonal-slide__veil': 'diapositive-saison__voile',
  'seasonal-slide--fall': 'diapositive-saison--automne',
  'seasonal-slide--spring': 'diapositive-saison--printemps',
  'seasonal-slide--summer': 'diapositive-saison--ete',
  'seasonal-slide--winter': 'diapositive-saison--hiver',
  'seasonal-slider': 'carrousel-saisons',
  'seasonal-slider__track': 'carrousel-saisons__piste',
  'seasonal-tab': 'onglet-saison',
  'seasonal-tab--fall': 'onglet-saison--automne',
  'seasonal-tab--spring': 'onglet-saison--printemps',
  'seasonal-tab--summer': 'onglet-saison--ete',
  'seasonal-tab--winter': 'onglet-saison--hiver',
  'seasonal-tabs': 'onglets-saisons',
  section: 'section-contenu',
  'section__header': 'section-contenu__entete',
  'section__label': 'section-contenu__libelle',
  'section__title': 'section-contenu__titre',
  'section--cream': 'section-contenu--creme',
  'section--light': 'section-contenu--claire',
  'section-heading': 'entete-section',
  'service-item': 'element-service',
  'service-item__desc': 'element-service__description',
  'service-item__duration': 'element-service__duree',
  'service-item__name': 'element-service__nom',
  'service-item__price': 'element-service__prix',
  'service-list': 'liste-services',
  'site-footer': 'pied-page-site',
  'site-header': 'entete-site',
  'site-header__inner': 'entete-site__interieur',
  'site-logo': 'logo-site',
  'site-panel': 'panneau-site',
  'site-panel__close': 'panneau-site__fermer',
  'site-panel__content': 'panneau-site__contenu',
  'site-panel__dialog': 'panneau-site__dialogue',
  'site-tool': 'outil-site',
  'site-tool__count': 'outil-site__compteur',
  'site-tools': 'outils-site',
  'sr-only': 'lecteur-ecran',
  'table-wrap': 'tableau-adaptatif',
  'text-link': 'lien-texte',
  'text-link--light': 'lien-texte--clair',
  'title-rule': 'filet-titre',
  'two-col': 'deux-colonnes',
  'two-col__media': 'deux-colonnes__media',
  'utility-bar': 'barre-utilitaire',
  'utility-bar__inner': 'barre-utilitaire__interieur',
  welcome: 'bienvenue',
  'welcome__copy': 'bienvenue__texte',
  'welcome__grid': 'bienvenue__grille',
};

function echapperExpressionReguliere(texte) {
  return texte.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

function franciserListeClasses(liste) {
  return liste.replace(/[A-Za-z][A-Za-z0-9_-]*/g, (classe) => correspondances[classe] || classe);
}

function franciserAttributsClasses(contenu) {
  return contenu.replace(/class=(['"])([\s\S]*?)\1/g, (attribut, guillemet, classes) => {
    if (classes.includes('${') || classes.includes('<?')) return attribut;
    return `class=${guillemet}${franciserListeClasses(classes)}${guillemet}`;
  });
}

function franciserSelecteursCss(contenu) {
  let resultat = contenu;
  Object.entries(correspondances)
    .sort(([gauche], [droite]) => droite.length - gauche.length)
    .forEach(([anglais, francais]) => {
      const motif = new RegExp(`\\.${echapperExpressionReguliere(anglais)}(?![A-Za-z0-9_-])`, 'g');
      resultat = resultat.replace(motif, `.${francais}`);
    });
  return resultat;
}

function franciserChainesJavascript(contenu) {
  let resultat = contenu;
  Object.entries(correspondances)
    .sort(([gauche], [droite]) => droite.length - gauche.length)
    .forEach(([anglais, francais]) => {
      const motif = new RegExp(`(?<![A-Za-z0-9_-])${echapperExpressionReguliere(anglais)}(?![A-Za-z0-9_-])`, 'g');
      resultat = resultat.replace(motif, francais);
    });
  return resultat;
}

function mettreAJour(cheminRelatif, transformation) {
  const chemin = path.join(racine, cheminRelatif);
  const avant = fs.readFileSync(chemin, 'utf8');
  const apres = transformation(avant);
  if (avant === apres) return;
  fs.writeFileSync(chemin, apres, 'utf8');
  console.log(`Classes francisées : ${cheminRelatif}`);
}

function executerMigration() {
  mettreAJour('build-pages.js', (contenu) => franciserAttributsClasses(contenu).replace("'is-home'", "'est-accueil'"));
  mettreAJour('build-wordpress-theme.js', franciserAttributsClasses);
  mettreAJour('css/styles.css', franciserSelecteursCss);
  mettreAJour('js/main.js', franciserChainesJavascript);
  mettreAJour('wordpress-admin/css/admin.css', franciserSelecteursCss);
  mettreAJour('wordpress-theme/balneo-v2/css/admin.css', franciserSelecteursCss);
}

if (require.main === module) executerMigration();

module.exports = { correspondances, executerMigration };
