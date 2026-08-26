(function () {
  'use strict';

  // Mobile nav toggle
  const navToggle = document.querySelector('.nav-toggle');
  const mainNav = document.querySelector('.main-nav');

  if (mainNav) {
    var menuIcons = [
      '<i class="fa-solid fa-dumbbell" aria-hidden="true"></i>',
      '<i class="fa-solid fa-spa" aria-hidden="true"></i>',
      '<i class="fa-solid fa-person-swimming" aria-hidden="true"></i><i class="fa-solid fa-person-swimming main-nav__icon-water" aria-hidden="true"></i>',
      '<i class="fa-solid fa-water-ladder" aria-hidden="true"></i>',
      '<i class="fa-solid fa-book-open" aria-hidden="true"></i>'
    ];
    Array.from(mainNav.children).slice(0, 5).forEach(function (item, index) {
      var control = item.querySelector(':scope > a, :scope > .nav-link');
      if (!control) return;
      var icon = document.createElement('span');
      icon.className = 'main-nav__icon main-nav__icon--' + (index + 1);
      icon.setAttribute('aria-hidden', 'true');
      icon.innerHTML = menuIcons[index];
      control.prepend(icon);
    });
  }

  if (navToggle && mainNav) {
    navToggle.addEventListener('click', function () {
      mainNav.classList.toggle('open');
      navToggle.classList.toggle('active');
      var isOpen = mainNav.classList.contains('open');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      navToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
      document.body.classList.toggle('menu-open', isOpen);
    });
  }

  // Mobile dropdown toggles
  document.querySelectorAll('.has-dropdown > .nav-link').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      if (window.innerWidth <= 1080) {
        e.preventDefault();
        var parent = btn.parentElement;
        document.querySelectorAll('.has-dropdown.open').forEach(function (item) {
          if (item !== parent) {
            item.classList.remove('open');
            var otherButton = item.querySelector(':scope > .nav-link');
            if (otherButton) otherButton.setAttribute('aria-expanded', 'false');
          }
        });
        parent.classList.toggle('open');
        btn.setAttribute('aria-expanded', String(parent.classList.contains('open')));
      }
    });
  });

  document.querySelectorAll('.main-nav a').forEach(function (link) {
    link.addEventListener('click', function () {
      if (window.innerWidth <= 1080 && mainNav && navToggle) {
        mainNav.classList.remove('open');
        navToggle.classList.remove('active');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Ouvrir le menu');
        document.body.classList.remove('menu-open');
      }
    });
  });

  // Persistent practical shortcuts
  if (!document.querySelector('.practical-rail')) {
    var mainScript = document.querySelector('script[src*="js/main.js"]');
    if (!mainScript) throw new Error('Le script principal doit avoir une URL explicite.');
    var siteRoot = new URL('../', mainScript.src);
    var practicalRail = document.createElement('nav');
    practicalRail.className = 'practical-rail';
    practicalRail.setAttribute('aria-label', 'Accès pratiques');

    var practicalLinks = [
      { href: 'https://gruissan-balneo.horanet.com/', label: 'Acheter en ligne', icon: 'fa-solid fa-cart-shopping', tone: 'booking', external: true },
      { href: new URL('pages/horaires.html', siteRoot).href, label: 'Horaires', icon: 'fa-solid fa-clock', tone: 'hours' },
      { href: 'tel:+33468756050', label: 'Appeler la Balnéo', icon: 'fa-solid fa-phone', tone: 'phone' },
      { href: 'https://maps.google.fr/?saddr=&daddr=43.1182048,3.11328202', label: 'Venir à la Balnéo', icon: 'fa-solid fa-route', tone: 'route', external: true },
      { href: new URL('pages/contact.html', siteRoot).href, label: 'Nous contacter', icon: 'fa-solid fa-envelope', tone: 'contact' },
      { href: 'https://www.instagram.com/gruissan_espacebalneo/', label: 'Instagram Balnéo', icon: 'fa-brands fa-instagram', tone: 'instagram', external: true },
      { href: 'https://www.facebook.com/espacebalneoludiquegruissan.omt', label: 'Facebook Balnéo', icon: 'fa-brands fa-facebook-f', tone: 'facebook', external: true }
    ];

    practicalLinks.forEach(function (item) {
      var link = document.createElement('a');
      link.className = 'practical-rail__link practical-rail__link--' + item.tone;
      link.href = item.href;
      link.setAttribute('aria-label', item.label);
      link.innerHTML = '<i class="' + item.icon + ' fa-fw" aria-hidden="true"></i><span class="practical-rail__label">' + item.label + '</span>';
      if (item.external) {
        link.target = '_blank';
        link.rel = 'noopener';
      }
      practicalRail.appendChild(link);
    });

    document.body.appendChild(practicalRail);
  }

  // Close info banner
  var bannerClose = document.querySelector('.info-banner__close');
  var infoBanner = document.querySelector('.info-banner');
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

  var bookingOrb = document.querySelector('.cta-orb');
  var mobileHeader = document.querySelector('.site-header');
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

  // Place seasonal highlights directly below quick access
  var seasonalSection = document.querySelector('[data-seasonal]');
  var quickAccess = document.querySelector('.quick-access');
  if (seasonalSection && quickAccess) {
    quickAccess.insertAdjacentElement('afterend', seasonalSection);
  }

  // Search and saved items
  var storageKey = 'balneo-saved-items';
  var savedItems = [];
  try { savedItems = JSON.parse(localStorage.getItem(storageKey) || '[]'); } catch (e) { savedItems = []; }

  var iconSearch = '<i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>';
  var iconHeart = '<i class="fa-regular fa-heart" aria-hidden="true"></i>';
  var iconClose = '<i class="fa-solid fa-xmark" aria-hidden="true"></i>';

  var createToolButton = function (kind, label, icon) {
    var button = document.createElement('button');
    button.className = 'site-tool site-tool--' + kind;
    button.type = 'button';
    button.setAttribute('aria-label', label);
    button.setAttribute('data-tooltip', label);
    button.innerHTML = icon + (kind === 'saved' ? '<span class="site-tool__count">0</span>' : '');
    return button;
  };

  var toolsBar = document.createElement('div');
  toolsBar.className = 'site-tools';
  var searchTool = createToolButton('search', 'Rechercher', iconSearch);
  var savedTool = createToolButton('saved', 'Mes favoris', iconHeart);
  toolsBar.appendChild(searchTool);
  toolsBar.appendChild(savedTool);
  var headerInner = document.querySelector('.site-header__inner');
  var navToggleButton = document.querySelector('.nav-toggle');
  if (!headerInner || !navToggleButton) throw new Error('Structure du header incomplète.');
  headerInner.insertBefore(toolsBar, navToggleButton);

  var overlay = document.createElement('div');
  overlay.className = 'site-panel';
  overlay.setAttribute('aria-hidden', 'true');
  overlay.innerHTML = '<div class="site-panel__dialog" role="dialog" aria-modal="true"><button class="site-panel__close" type="button" aria-label="Fermer">' + iconClose + '</button><div class="site-panel__content"></div></div>';
  document.body.appendChild(overlay);
  var panelContent = overlay.querySelector('.site-panel__content');
  var panelClose = overlay.querySelector('.site-panel__close');
  var lastPanelTrigger = null;

  var floatingTooltip = document.createElement('div');
  floatingTooltip.className = 'floating-tooltip';
  floatingTooltip.setAttribute('role', 'tooltip');
  document.body.appendChild(floatingTooltip);

  var showFloatingTooltip = function (target) {
    var label = target.getAttribute('data-tooltip');
    if (!label || window.innerWidth <= 760) return;
    var rect = target.getBoundingClientRect();
    floatingTooltip.textContent = label;
    floatingTooltip.style.left = (rect.left + rect.width / 2) + 'px';
    floatingTooltip.style.top = (rect.bottom + 10) + 'px';
    floatingTooltip.classList.add('is-visible');
  };

  var hideFloatingTooltip = function () {
    floatingTooltip.classList.remove('is-visible');
  };

  document.addEventListener('mouseover', function (event) {
    var target = event.target.closest('.save-button[data-tooltip]');
    if (target) showFloatingTooltip(target);
  });
  document.addEventListener('mouseout', function (event) {
    if (event.target.closest('.save-button[data-tooltip]')) hideFloatingTooltip();
  });
  document.addEventListener('focusin', function (event) {
    var target = event.target.closest('.save-button[data-tooltip]');
    if (target) showFloatingTooltip(target);
  });
  document.addEventListener('focusout', function (event) {
    if (event.target.closest('.save-button[data-tooltip]')) hideFloatingTooltip();
  });

  var closePanel = function () {
    overlay.classList.remove('is-open');
    overlay.setAttribute('aria-hidden', 'true');
    document.body.classList.remove('panel-open');
    if (lastPanelTrigger) lastPanelTrigger.focus();
  };

  var openPanel = function (trigger, html) {
    lastPanelTrigger = trigger;
    panelContent.innerHTML = html;
    overlay.classList.add('is-open');
    overlay.setAttribute('aria-hidden', 'false');
    document.body.classList.add('panel-open');
    var firstField = panelContent.querySelector('input, a, button');
    if (firstField) firstField.focus();
  };

  panelClose.addEventListener('click', closePanel);
  overlay.addEventListener('click', function (event) { if (event.target === overlay) closePanel(); });
  document.addEventListener('keydown', function (event) { if (event.key === 'Escape' && overlay.classList.contains('is-open')) closePanel(); });

  var searchEntries = [
    ['Espace For.Me, sport et fitness', 'pages/salle-de-sport.html'],
    ['Récupération', 'pages/recuperation.html'],
    ['Massages', 'pages/massages.html'],
    ['Hydromassages', 'pages/hydromassages.html'],
    ['Espace Balnéo', 'pages/balneo.html'],
    ['Aquagym', 'pages/aquagym.html'],
    ['Aquabike', 'pages/aquabike.html'],
    ['Bébés nageurs', 'pages/bebes-nageurs.html'],
    ['Natation et stages', 'pages/natation.html'],
    ['Parc aquatique été', 'pages/parc-ete.html'],
    ['Infos pratiques', 'pages/infos-pratiques.html'],
    ['Tarifs', 'pages/tarifs.html'],
    ['Brochures', 'pages/brochures.html'],
    ['Horaires', 'pages/horaires.html'],
    ['Privatisation', 'pages/privatisation.html'],
    ['Accès et parking', 'pages/acces-parking.html'],
    ['Questions fréquentes, FAQ', 'pages/faq.html'],
    ['Actualités', 'pages/actualites.html'],
    ['Contact', 'pages/contact.html']
  ];
  var pathPrefix = window.location.pathname.indexOf('/pages/') !== -1 ? '../' : '';

  searchTool.addEventListener('click', function () {
    openPanel(searchTool, '<p class="section__label">Je recherche</p><h2>Que souhaitez-vous trouver ?</h2><label class="search-box"><span class="sr-only">Votre recherche</span><input type="search" placeholder="Balnéo, massage, piscine…" autocomplete="off">' + iconSearch + '</label><div class="search-results" aria-live="polite"></div>');
    var input = panelContent.querySelector('input');
    var results = panelContent.querySelector('.search-results');
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
    var count = toolsBar.querySelector('.site-tool__count');
    if (count) count.textContent = String(savedItems.length);
    var savedToolHeart = savedTool.querySelector('i');
    if (savedToolHeart) {
      savedToolHeart.classList.toggle('fa-solid', savedItems.length > 0);
      savedToolHeart.classList.toggle('fa-regular', savedItems.length === 0);
    }
    document.querySelectorAll('[data-save-url]').forEach(function (button) {
      var isSaved = savedItems.some(function (item) { return item.url === button.getAttribute('data-save-url'); });
      button.classList.toggle('is-saved', isSaved);
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
    var cards = savedItems.length ? '<div class="saved-list">' + savedItems.map(function (item) {
      return '<article class="saved-item">' + (item.image ? '<img src="' + item.image + '" alt="">' : '') + '<div><a href="' + item.url + '">' + item.title + '</a><button type="button" data-remove-saved="' + item.url + '">Retirer</button></div></article>';
    }).join('') + '</div>' : '<p class="saved-empty">Vous n’avez encore rien enregistré. Utilisez les cœurs présents sur les pages et les vignettes.</p>';
    openPanel(savedTool, '<p class="section__label">À retrouver plus tard</p><h2>Mes favoris <span>(' + savedItems.length + ')</span></h2>' + cards);
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
    if (host.querySelector(':scope > .save-button')) return;
    var isInsideLink = host.tagName === 'A';
    var button = document.createElement(isInsideLink ? 'span' : 'button');
    if (isInsideLink) {
      button.setAttribute('role', 'button');
      button.tabIndex = 0;
    } else {
      button.type = 'button';
    }
    button.className = 'save-button' + (variant ? ' save-button--' + variant : '');
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

  document.querySelectorAll('.experience-card').forEach(function (card) {
    var image = card.querySelector('img');
    var title = card.querySelector('h3');
    addSaveButton(card, card.href, title && title.textContent.trim(), image && image.src, 'overlay');
  });
  document.querySelectorAll('.news-card').forEach(function (card) {
    var link = card.querySelector('.news-card__link');
    var image = card.querySelector('img');
    var title = card.querySelector('h3');
    if (!link) throw new Error('Lien requis absent sur une actualité.');
    addSaveButton(card, link.href, title && title.textContent.trim(), image && image.src, 'overlay');
  });
  document.querySelectorAll('.seasonal-slide').forEach(function (card) {
    var link = card.querySelector('a');
    var image = card.querySelector('img');
    var title = card.querySelector('h3');
    if (!link) throw new Error('Lien requis absent sur une saison.');
    addSaveButton(card, link.href, title && title.textContent.replace(/\s+/g, ' ').trim(), image && image.src, 'overlay');
  });
  var pageHero = document.querySelector('.page-hero');
  if (pageHero) {
    var heroImage = pageHero.querySelector('img');
    var heroTitle = pageHero.querySelector('h1');
    addSaveButton(pageHero, window.location.href, heroTitle && heroTitle.textContent.trim(), heroImage && heroImage.src, 'page');
  }
  updateSavedUi();

  // Contextual Font Awesome icons
  var prependContextIcon = function (element, iconName) {
    if (!element || !iconName || element.querySelector(':scope > .context-icon')) return;
    var icon = document.createElement('i');
    icon.className = 'fa-solid ' + iconName + ' context-icon';
    icon.setAttribute('aria-hidden', 'true');
    element.prepend(icon);
  };

  var quickAccessIcons = ['fa-clock', 'fa-ticket', 'fa-route'];
  document.querySelectorAll('.quick-access > a').forEach(function (link, index) {
    if (!quickAccessIcons[index]) throw new Error('Icône explicite absente pour un accès rapide.');
    var icon = document.createElement('i');
    icon.className = 'fa-solid ' + quickAccessIcons[index] + ' quick-access__icon';
    icon.setAttribute('aria-hidden', 'true');
    link.appendChild(icon);
  });

  var contactIcons = { 'téléphone': 'fa-phone', 'e-mail': 'fa-envelope', 'adresse': 'fa-location-dot' };
  document.querySelectorAll('.contact-info__label').forEach(function (label) {
    var name = label.textContent.trim().toLocaleLowerCase('fr');
    if (!contactIcons[name]) throw new Error('Icône explicite absente pour « ' + name + ' ».');
    if (label.querySelector('i')) return;
    var icon = document.createElement('i');
    icon.className = 'fa-solid ' + contactIcons[name] + ' context-icon';
    icon.setAttribute('aria-hidden', 'true');
    label.prepend(icon);
  });

  document.querySelectorAll('.info-banner .container').forEach(function (banner) {
    prependContextIcon(banner, 'fa-circle-exclamation');
  });

  document.querySelectorAll('.info-box__title').forEach(function (title) {
    prependContextIcon(title, 'fa-circle-info');
  });

  document.querySelectorAll('.service-item__duration').forEach(function (duration) {
    prependContextIcon(duration, 'fa-clock');
  });

  // Fade-in on scroll
  var fadeEls = document.querySelectorAll('.fade-in');
  if (fadeEls.length && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-animating');
          window.requestAnimationFrame(function () {
            entry.target.classList.add('visible');
          });
          entry.target.addEventListener('transitionend', function () {
            entry.target.classList.remove('is-animating');
          }, { once: true });
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    fadeEls.forEach(function (el) { observer.observe(el); });
  } else {
    fadeEls.forEach(function (el) { el.classList.add('visible'); });
  }

  // Seasonal highlights
  document.querySelectorAll('[data-seasonal]').forEach(function (seasonal) {
    var track = seasonal.querySelector('.seasonal-slider__track');
    var slides = Array.from(seasonal.querySelectorAll('.seasonal-slide'));
    var tabs = Array.from(seasonal.querySelectorAll('.seasonal-tab'));
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
          entry.target.classList.toggle('is-in-view', entry.isIntersecting);
        });
      }, { rootMargin: '100px 0px' });
      seasonalVisibilityObserver.observe(seasonal);
    } else {
      seasonal.classList.add('is-in-view');
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
        tab.classList.toggle('is-active', isActive);
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

  // Form handling (front-only)
  document.querySelectorAll('[data-form]').forEach(function (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var success = form.parentElement.querySelector('.form-success');
      if (success) {
        success.classList.add('visible');
        form.reset();
        setTimeout(function () { success.classList.remove('visible'); }, 5000);
      }
    });
  });

  // Back to top
  var backToTop = document.createElement('button');
  backToTop.className = 'back-to-top';
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
    backToTop.classList.toggle('is-visible', isVisible);
    backToTop.setAttribute('aria-hidden', String(!isVisible));
    backToTop.tabIndex = isVisible ? 0 : -1;
  };

  backToTop.addEventListener('click', function () {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
  });

  // Header state. Sur la page d'accueil, la version lisible est permanente.
  var header = document.querySelector('.site-header');
  if (header) {
    var forceReadableHeader = document.body.classList.contains('is-home');
    header.classList.toggle('is-scrolled', forceReadableHeader);
    document.body.classList.toggle('is-scrolled', forceReadableHeader);
  }

  // Une seule mise à jour par frame pour tous les effets dépendant du scroll.
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
  var currentPath = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.main-nav a').forEach(function (link) {
    var href = link.getAttribute('href');
    if (!href) return;
    var linkPath = href.split('/').pop();
    if (linkPath === currentPath || (currentPath === '' && linkPath === 'index.html')) {
      link.classList.add('active');
    }
  });
})();
