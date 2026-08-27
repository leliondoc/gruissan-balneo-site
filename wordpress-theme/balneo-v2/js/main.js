(function () {
  'use strict';

  // Ouverture et fermeture de la navigation mobile.
  const navToggle = document.querySelector('.bouton-navigation');
  const mainNav = document.querySelector('.navigation-principale');

  if (mainNav) {
    var menuIcons = [
      '<i class="fa-solid fa-dumbbell" aria-hidden="true"></i>',
      '<i class="fa-solid fa-spa" aria-hidden="true"></i>',
      '<i class="fa-solid fa-person-swimming" aria-hidden="true"></i><i class="fa-solid fa-person-swimming navigation-principale__icone-eau" aria-hidden="true"></i>',
      '<i class="fa-solid fa-water-ladder" aria-hidden="true"></i>',
      '<i class="fa-solid fa-book-open" aria-hidden="true"></i>'
    ];
    Array.from(mainNav.children).slice(0, 5).forEach(function (item, index) {
      var control = item.querySelector(':scope > a, :scope > .lien-navigation');
      if (!control) return;
      var icon = document.createElement('span');
      icon.className = 'navigation-principale__icone navigation-principale__icone--' + (index + 1);
      icon.setAttribute('aria-hidden', 'true');
      icon.innerHTML = menuIcons[index];
      control.prepend(icon);
    });
  }

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      mainNav.classList.toggle('ouvert');
      navToggle.classList.toggle('actif');
      var isOpen = mainNav.classList.contains('ouvert');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      navToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
      document.body.classList.toggle('menu-ouvert', isOpen);
    });
  }

  // Ouverture et fermeture des sous-menus sur mobile.
  document.querySelectorAll('.avec-sous-menu > .lien-navigation').forEach(function (bouton) {
    bouton.addEventListener('click', function (e) {
      if (window.innerWidth <= 1080) {
        e.preventDefault();
        var parent = bouton.parentElement;
        document.querySelectorAll('.avec-sous-menu.ouvert').forEach(function (item) {
          if (item !== parent) {
            item.classList.remove('ouvert');
            var otherButton = item.querySelector(':scope > .lien-navigation');
            if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
          }
        });
        parent.classList.toggle('ouvert');
        bouton.setAttribute('aria-expanded', String(parent.classList.contains('ouvert')));
      }
    });
  });

  document.querySelectorAll('.navigation-principale a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 1080 && mainNav && navToggle) {
        mainNav.classList.remove('ouvert');
        navToggle.classList.remove('actif');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Ouvrir le menu');
        document.body.classList.remove('menu-ouvert');
      }
    });
  });

  // Raccourcis pratiques persistants.
  if (!document.querySelector('.barre-pratique')) {
    var mainScript = document.querySelector('script[src*="js/main.js"]');
    if (!mainScript) throw new Error('Le script principal doit avoir une URL explicite.');
    var siteRoot = new URL('../', mainScript.src);
    var practicalRail = document.createElement('nav');
    practicalRail.className = 'barre-pratique';
    practicalRail.setAttribute('aria-label', 'Accès pratiques');

    var practicalLinks = [
      { href: 'https://gruissan-balneo.horanet.com/', label: 'Acheter en ligne', icon: 'fa-solid fa-cart-shopping', tone: 'booking', external: true },
      { href: new URL('/horaires/', siteRoot).href, label: 'Horaires', icon: 'fa-solid fa-clock', tone: 'hours' },
      { href: 'tel:+33468756050', label: 'Appeler la Balnéo', icon: 'fa-solid fa-phone', tone: 'phone' },
      { href: 'https://maps.google.fr/?saddr=&daddr=43.1182048,3.11328202', label: 'Venir à la Balnéo', icon: 'fa-solid fa-route', tone: 'route', external: true },
      { href: new URL('/contact/', siteRoot).href, label: 'Nous contacter', icon: 'fa-solid fa-envelope', tone: 'contact' },
      { href: 'https://www.instagram.com/gruissan_espacebalneo/', label: 'Instagram Balnéo', icon: 'fa-brands fa-instagram', tone: 'instagram', external: true },
      { href: 'https://www.facebook.com/espacebalneoludiquegruissan.omt', label: 'Facebook Balnéo', icon: 'fa-brands fa-facebook-f', tone: 'facebook', external: true }
    ];

    practicalLinks.forEach(function (item) {
      var link = document.createElement('a');
      link.className = 'barre-pratique__lien practical-rail__link--' + item.tone;
      link.href = item.href;
      link.setAttribute('aria-label', item.label);
      link.innerHTML = '<i class="' + item.icon + ' fa-fw" aria-hidden="true"></i><span class="barre-pratique__libelle">' + item.label + '</span>';
      if (item.external) {
        link.target = '_blank';
        link.rel = 'noopener';
      }
      practicalRail.appendChild(link);
    });

    document.body.appendChild(practicalRail);
  }

  // Fermeture du bandeau d’information.
  var bannerClose = document.querySelector('.bandeau-info__fermer');
  var infoBanner = document.querySelector('.bandeau-info');
  if (bannerClose && infoBanner) {
    bannerClose.addEventListener('click', function () {
      infoBanner.classList.add('hidden');
      window.dispatchEvent(new Event('resize'));
      try { sessionStorage.setItem('banner-closed', '1'); } catch (e) {}
    });
    try {
      if (sessionStorage.getItem('banner-closed') === '1') {
        infoBanner.classList.add('hidden');
      }
    } catch (e) {}
  }

  var bookingOrb = document.querySelector('.orbe-appel');
  var mobileHeader = document.querySelector('.entete-site');
  var lastMobileBookingTop = '';
  var positionBookingOrb = function () {
    if (!bookingOrb) return;
    if (window.innerWidth > 760) {
      if (lastMobileBookingTop) {
        document.documentElement.style.removeProperty('--mobile-booking-top');
        lastMobileBookingTop = '';
      }
      return;
    }
    if (!mobileHeader) throw new Error('Le header mobile requis est absent.');
    var alertIsVisible = infoBanner && !infoBanner.classList.contains('hidden');
    var headerBottom = Math.max(0, mobileHeader.getBoundingClientRect().bottom);
    var bannerBottom = alertIsVisible ? Math.max(0, infoBanner.getBoundingClientRect().bottom) : 0;
    var lowerEdge = Math.max(headerBottom, bannerBottom);
    var nextMobileBookingTop = Math.ceil(lowerEdge + 12) + 'px';
    if (nextMobileBookingTop !== lastMobileBookingTop) {
      document.documentElement.style.setProperty('--mobile-booking-top', nextMobileBookingTop);
      lastMobileBookingTop = nextMobileBookingTop;
    }
  };
  positionBookingOrb();

  // Placement des suggestions saisonnières sous les accès rapides.
  var seasonalSection = document.querySelector('[data-seasonal]');
  var quickAccess = document.querySelector('.acces-rapides');
  if (seasonalSection && quickAccess) {
    quickAccess.insertAdjacentElement('afterend', seasonalSection);
  }

  // Recherche interne et éléments enregistrés.
  var storageKey = 'balneo-saved-items';
  var savedItems = [];
  try { savedItems = JSON.parse(localStorage.getItem(storageKey) || '[]'); } catch (e) { savedItems = []; }

  var iconSearch = '<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>';
  var iconHeart = '<i class="fa-regular fa-heart" aria-hidden="true"></i>';
  var iconClose = '<i class="fa-solid fa-xmark" aria-hidden="true"></i>';

  var createToolButton = function (kind, label, icon) {
    var button = document.createElement('button');
    button.className = 'outil-site site-tool--' + kind;
    button.type = 'button';
    button.setAttribute('aria-label', label);
    button.setAttribute('data-tooltip', label);
    button.innerHTML = icon + (kind === 'saved' ? '<span class="outil-site__compteur">0</span>' : '');
    return button;
  };

  var toolsBar = document.createElement('div');
  toolsBar.className = 'outils-site';
  var searchTool = createToolButton('search', 'Rechercher', iconSearch);
  var savedTool = createToolButton('saved', 'Mes favoris', iconHeart);
  toolsBar.appendChild(searchTool);
  toolsBar.appendChild(savedTool);
  var headerInner = document.querySelector('.entete-site__interieur');
  var navToggleButton = document.querySelector('.bouton-navigation');
  if (!headerInner || !navToggleButton) throw new Error('Structure du header incomplète.');
  headerInner.insertBefore(toolsBar, navToggleButton);

  var overlay = document.createElement('div');
  overlay.className = 'panneau-site';
  overlay.setAttribute('aria-hidden', 'true');
  overlay.innerHTML = '<div class="panneau-site__dialogue" role="dialog" aria-modal="true"><button class="panneau-site__fermer" type="button" aria-label="Fermer">' + iconClose + '</button><div class="panneau-site__contenu"></div></div>';
  document.body.appendChild(overlay);
  var panelContent = overlay.querySelector('.panneau-site__contenu');
  var panelClose = overlay.querySelector('.panneau-site__fermer');
  var lastPanelTrigger = null;

  var floatingTooltip = document.createElement('div');
  floatingTooltip.className = 'infobulle-flottante';
  floatingTooltip.setAttribute('role', 'tooltip');
  document.body.appendChild(floatingTooltip);

  var showFloatingTooltip = function (target) {
    var label = target.getAttribute('data-tooltip');
    if (!label || window.innerWidth <= 760) return;
    var rect = target.getBoundingClientRect();
    floatingTooltip.textContent = label;
    floatingTooltip.style.left = (rect.left + rect.width / 2) + 'px';
    floatingTooltip.style.top = (rect.bottom + 10) + 'px';
    floatingTooltip.classList.add('est-visible');
  };

  var hideFloatingTooltip = function () {
    floatingTooltip.classList.remove('est-visible');
  };

  document.addEventListener('mouseover', function (event) {
    var target = event.target.closest('.bouton-enregistrer[data-tooltip]');
    if (target) showFloatingTooltip(target);
  });
  document.addEventListener('mouseout', function (event) {
    if (event.target.closest('.bouton-enregistrer[data-tooltip]')) hideFloatingTooltip();
  });
  document.addEventListener('focusin', function (event) {
    var target = event.target.closest('.bouton-enregistrer[data-tooltip]');
    if (target) showFloatingTooltip(target);
  });
  document.addEventListener('focusout', function (event) {
    if (event.target.closest('.bouton-enregistrer[data-tooltip]')) hideFloatingTooltip();
  });

  var closePanel = function () {
    overlay.classList.remove('est-ouvert');
    overlay.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('panneau-ouvert');
    if (lastPanelTrigger) lastPanelTrigger.focus();
  };

  var openPanel = function (trigger, html) {
    lastPanelTrigger = trigger;
    panelContent.innerHTML = html;
    overlay.classList.add('est-ouvert');
    overlay.setAttribute('aria-hidden', 'false');
    document.body.classList.add('panneau-ouvert');
    var firstField = panelContent.querySelector('input, a, button');
    if (firstField) firstField.focus();
  };

  panelClose.addEventListener('click', closePanel);
  overlay.addEventListener('click', function (event) { if (event.target === overlay) closePanel(); });
  document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && overlay.classList.contains('est-ouvert')) closePanel(); });

  var searchEntries = [
    ['Espace For.Me, sport et fitness', '/salle-de-sport/'],
    ['Récupération', '/recuperation/'],
    ['Massages', '/massages/'],
    ['Hydromassages', '/hydromassages/'],
    ['Espace Balnéo', '/balneo/'],
    ['Aquagym', '/aquagym/'],
    ['Aquabike', '/aquabike/'],
    ['Bébés nageurs', '/bebes-nageurs/'],
    ['Natation et stages', '/natation/'],
    ['Parc aquatique été', '/parc-ete/'],
    ['Infos pratiques', '/infos-pratiques/'],
    ['Tarifs', '/tarifs/'],
    ['Brochures', '/brochures/'],
    ['Horaires', '/horaires/'],
    ['Privatisation', '/privatisation/'],
    ['Accès et parking', '/acces-parking/'],
    ['Questions fréquentes, FAQ', '/faq/'],
    ['Actualités', '/actualites/'],
    ['Contact', '/contact/']
  ];
  var pathPrefix = '';

  searchTool.addEventListener('click', function () {
    openPanel(searchTool, '<p class="section-contenu__libelle">Je recherche</p><h2>Que souhaitez-vous trouver ?</h2><label class="boite-recherche"><span class="lecteur-ecran">Votre recherche</span><input type="search" placeholder="Balnéo, massage, piscine…" autocomplete="off">' + iconSearch + '</label><div class="resultats-recherche" aria-live="polite"></div>');
    var input = panelContent.querySelector('input');
    var results = panelContent.querySelector('.resultats-recherche');
    var renderResults = function () {
      var query = input.value.trim().toLocaleLowerCase('fr');
      var matches = searchEntries.filter(function (entry) { return !query || entry[0].toLocaleLowerCase('fr').indexOf(query) !== -1; });
      results.innerHTML = matches.length ? matches.map(function (entry) { return '<a href="' + pathPrefix + entry[1] + '"><span>' + entry[0] + '</span><i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a>'; }).join('') : '<p>Aucun résultat. Essayez un autre terme.</p>';
    };
    input.addEventListener('input', renderResults);
    renderResults();
  });

  var saveItems = function () {
    try { localStorage.setItem(storageKey, JSON.stringify(savedItems)); } catch (e) {}
  };

  var updateSavedUi = function () {
    var count = toolsBar.querySelector('.outil-site__compteur');
    if (count) count.textContent = String(savedItems.length);
    var savedToolHeart = savedTool.querySelector('i');
    if (savedToolHeart) {
      savedToolHeart.classList.toggle('fa-solid', savedItems.length > 0);
      savedToolHeart.classList.toggle('fa-regular', savedItems.length === 0);
    }
    document.querySelectorAll('[data-save-url]').forEach(function (button) {
      var isSaved = savedItems.some(function (item) { return item.url === button.getAttribute('data-save-url'); });
      button.classList.toggle('est-enregistre', isSaved);
      var heart = button.querySelector('i');
      if (heart) {
        heart.classList.toggle('fa-solid', isSaved);
        heart.classList.toggle('fa-regular', !isSaved);
      }
      button.setAttribute('aria-pressed', String(isSaved));
      button.setAttribute('aria-label', isSaved ? 'Retirer des favoris' : 'Ajouter aux favoris');
      button.setAttribute('data-tooltip', isSaved ? 'Retirer des favoris' : 'Ajouter aux favoris');
    });
  };

  var renderSavedPanel = function () {
    var cards = savedItems.length ? '<div class="liste-enregistres">' + savedItems.map(function (item) {
      return '<article class="element-enregistre">' + (item.image ? '<img src="' + item.image + '" alt="">' : '') + '<div><a href="' + item.url + '">' + item.title + '</a><button type="button" data-remove-saved="' + item.url + '">Retirer</button></div></article>';
    }).join('') + '</div>' : '<p class="enregistres-vides">Vous n’avez encore rien enregistré. Utilisez les cœurs présents sur les pages et les vignettes.</p>';
    openPanel(savedTool, '<p class="section-contenu__libelle">À retrouver plus tard</p><h2>Mes favoris <span>(' + savedItems.length + ')</span></h2>' + cards);
    panelContent.querySelectorAll('[data-remove-saved]').forEach(function (button) {
      button.addEventListener('click', function () {
        savedItems = savedItems.filter(function (item) { return item.url !== button.getAttribute('data-remove-saved'); });
        saveItems();
        updateSavedUi();
        renderSavedPanel();
      });
    });
  };
  savedTool.addEventListener('click', renderSavedPanel);

  var addSaveButton = function (host, url, title, image, variant) {
    if (!host || !url || !title || !image) throw new Error('Données de favori incomplètes.');
    if (host.querySelector(':scope > .bouton-enregistrer')) return;
    var isInsideLink = host.tagName === 'A';
    var button = document.createElement(isInsideLink ? 'span' : 'button');
    if (isInsideLink) {
      button.setAttribute('role', 'button');
      button.tabIndex = 0;
    } else {
      button.type = 'button';
    }
    button.className = 'bouton-enregistrer' + (variant ? ' save-button--' + variant : '');
    button.setAttribute('data-save-url', url);
    button.innerHTML = iconHeart;
    button.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      var existingIndex = savedItems.findIndex(function (item) { return item.url === url; });
      if (existingIndex === -1) savedItems.push({ url: url, title: title, image: image });
      else savedItems.splice(existingIndex, 1);
      saveItems();
      updateSavedUi();
    });
    if (isInsideLink) {
      button.addEventListener('keydown', function (event) {
        if (event.key !== 'Enter' && event.key !== ' ') return;
        event.preventDefault();
        button.click();
      });
    }
    host.appendChild(button);
  };

  document.querySelectorAll('.carte-experience').forEach(function (card) {
    var image = card.querySelector('img');
    var title = card.querySelector('h3');
    addSaveButton(card, card.href, title && title.textContent.trim(), image && image.src, 'overlay');
  });
  document.querySelectorAll('.carte-actualite').forEach(function (card) {
    var link = card.querySelector('.carte-actualite__lien');
    var image = card.querySelector('img');
    var title = card.querySelector('h3');
    if (!link) throw new Error('Lien requis absent sur une actualité.');
    addSaveButton(card, link.href, title && title.textContent.trim(), image && image.src, 'overlay');
  });
  document.querySelectorAll('.diapositive-saison').forEach(function (card) {
    var link = card.querySelector('a');
    var image = card.querySelector('img');
    var title = card.querySelector('h3');
    if (!link) throw new Error('Lien requis absent sur une saison.');
    addSaveButton(card, link.href, title && title.textContent.replace(/\s+/g, ' ').trim(), image && image.src, 'overlay');
  });
  var pageHero = document.querySelector('.hero-page');
  if (pageHero) {
    var heroImage = pageHero.querySelector('img');
    var heroTitle = pageHero.querySelector('h1');
    addSaveButton(pageHero, window.location.href, heroTitle && heroTitle.textContent.trim(), heroImage && heroImage.src, 'page');
  }
  updateSavedUi();

  // Icônes Font Awesome ajoutées selon le contexte.
  var prependContextIcon = function (element, iconName) {
    if (!element || !iconName || element.querySelector(':scope > .icone-contexte')) return;
    var icon = document.createElement('i');
    icon.className = 'fa-solid ' + iconName + ' icone-contexte';
    icon.setAttribute('aria-hidden', 'true');
    element.prepend(icon);
  };

  var quickAccessIcons = ['fa-clock', 'fa-ticket', 'fa-route'];
  document.querySelectorAll('.acces-rapides > a').forEach(function (link, index) {
    if (!quickAccessIcons[index]) throw new Error('Icône explicite absente pour un accès rapide.');
    var icon = document.createElement('i');
    icon.className = 'fa-solid ' + quickAccessIcons[index] + ' acces-rapides__icone';
    icon.setAttribute('aria-hidden', 'true');
    link.appendChild(icon);
  });

  var contactIcons = { 'téléphone': 'fa-phone', 'e-mail': 'fa-envelope', 'adresse': 'fa-location-dot' };
  document.querySelectorAll('.infos-contact__libelle').forEach(function (label) {
    var name = label.textContent.trim().toLocaleLowerCase('fr');
    if (!contactIcons[name]) throw new Error('Icône explicite absente pour « ' + name + ' ».');
    if (label.querySelector('i')) return;
    var icon = document.createElement('i');
    icon.className = 'fa-solid ' + contactIcons[name] + ' icone-contexte';
    icon.setAttribute('aria-hidden', 'true');
    label.prepend(icon);
  });

  document.querySelectorAll('.bandeau-info .conteneur').forEach(function (banner) {
    prependContextIcon(banner, 'fa-circle-exclamation');
  });

  document.querySelectorAll('.encadre-info__titre').forEach(function (title) {
    prependContextIcon(title, 'fa-circle-info');
  });

  document.querySelectorAll('.element-service__duree').forEach(function (duration) {
    prependContextIcon(duration, 'fa-clock');
  });

  // Apparition progressive au défilement.
  var fadeEls = document.querySelectorAll('.apparition');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('est-anime');
          window.requestAnimationFrame(function () {
            entry.target.classList.add('visible');
          });
          entry.target.addEventListener('transitionend', function () {
            entry.target.classList.remove('est-anime');
          }, { once: true });
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

  // Suggestions saisonnières.
  document.querySelectorAll('[data-seasonal]').forEach(function (seasonal) {
    var track = seasonal.querySelector('.carrousel-saisons__piste');
    var slides = Array.from(seasonal.querySelectorAll('.diapositive-saison'));
    var tabs = Array.from(seasonal.querySelectorAll('.onglet-saison'));
    var seasonOrder = ['spring', 'summer', 'fall', 'winter'];
    var month = new Date().getMonth();
    var currentSeason = month >= 2 && month <= 4 ? 'spring' : month >= 5 && month <= 7 ? 'summer' : month >= 8 && month <= 10 ? 'fall' : 'winter';
    var seasonIndex = Math.max(0, seasonOrder.indexOf(currentSeason));
    var seasonTimer;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!track || !slides.length || !tabs.length) return;

    if ('IntersectionObserver' in window) {
      var seasonalVisibilityObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          entry.target.classList.toggle('est-dans-vue', entry.isIntersecting);
        });
      }, { rootMargin: '100px 0px' });
      seasonalVisibilityObserver.observe(seasonal);
    } else {
      seasonal.classList.add('est-dans-vue');
    }

    var showSeason = function (index) {
      seasonIndex = (index + slides.length) % slides.length;
      track.style.transform = 'translateX(-' + (seasonIndex * 100) + '%)';

      slides.forEach(function (slide, slideIndex) {
        var isActive = slideIndex === seasonIndex;
        slide.setAttribute('aria-hidden', String(!isActive));
        slide.querySelectorAll('a, button').forEach(function (control) {
          control.tabIndex = isActive ? 0 : -1;
        });
      });

      tabs.forEach(function (tab, tabIndex) {
        var isActive = tabIndex === seasonIndex;
        tab.classList.toggle('est-actif', isActive);
        tab.setAttribute('aria-selected', String(isActive));
        tab.tabIndex = isActive ? 0 : -1;
      });
    };

    var resetSeasonAutoplay = function () {
      window.clearInterval(seasonTimer);
      if (!reduceMotion) {
        seasonTimer = window.setInterval(function () {
          showSeason(seasonIndex + 1);
        }, 6000);
      }
    };

    tabs.forEach(function (tab, index) {
      tab.addEventListener('click', function () {
        showSeason(index);
        resetSeasonAutoplay();
      });
      tab.addEventListener('keydown', function (event) {
        if (event.key !== 'ArrowLeft' && event.key !== 'ArrowRight') return;
        event.preventDefault();
        var nextIndex = event.key === 'ArrowRight' ? seasonIndex + 1 : seasonIndex - 1;
        showSeason(nextIndex);
        tabs[seasonIndex].focus();
        resetSeasonAutoplay();
      });
    });

    showSeason(seasonIndex);
    resetSeasonAutoplay();
  });

  // Retour en haut de page.
  var backToTop = document.createElement('button');
  backToTop.className = 'retour-haut';
  backToTop.type = 'button';
  backToTop.setAttribute('aria-label', 'Retour en haut de la page');
  backToTop.setAttribute('aria-hidden', 'true');
  backToTop.tabIndex = -1;
  backToTop.innerHTML = '<i class="fa-solid fa-arrow-up" aria-hidden="true"></i><small aria-hidden="true">Haut</small>';
  document.body.appendChild(backToTop);

  var backToTopVisible = null;
  var toggleBackToTop = function () {
    var isVisible = window.scrollY > 600;
    if (isVisible === backToTopVisible) return;
    backToTopVisible = isVisible;
    backToTop.classList.toggle('est-visible', isVisible);
    backToTop.setAttribute('aria-hidden', String(!isVisible));
    backToTop.tabIndex = isVisible ? 0 : -1;
  };

  backToTop.addEventListener('click', function () {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
  });

  // État de l’en-tête. Sur l’accueil, la version lisible est permanente.
  var header = document.querySelector('.entete-site');
  if (header) {
    var forceReadableHeader = document.body.classList.contains('est-accueil');
    header.classList.toggle('est-defile', forceReadableHeader);
    document.body.classList.toggle('est-defile', forceReadableHeader);
  }

  // Une seule mise à jour par image pour les effets dépendant du défilement.
  var scrollEffectsQueued = false;
  var updateScrollEffects = function () {
    toggleBackToTop();
    hideFloatingTooltip();
    if (window.innerWidth <= 760 || lastMobileBookingTop) positionBookingOrb();
    scrollEffectsQueued = false;
  };
  var scheduleScrollEffects = function () {
    if (scrollEffectsQueued) return;
    scrollEffectsQueued = true;
    window.requestAnimationFrame(updateScrollEffects);
  };

  updateScrollEffects();
  window.addEventListener('scroll', scheduleScrollEffects, { passive: true });
  window.addEventListener('resize', scheduleScrollEffects, { passive: true });
  var currentPath = window.location.pathname.split('/').filter(Boolean).pop() || '';
  document.querySelectorAll('.navigation-principale a').forEach(function (link) {
    var href = link.getAttribute('href');
    if (!href) return;
    var linkPath = new URL(href, window.location.origin).pathname.split('/').filter(Boolean).pop() || '';
    if (linkPath === currentPath && currentPath !== '') {
      link.classList.add('actif');
    }
  });
})();
