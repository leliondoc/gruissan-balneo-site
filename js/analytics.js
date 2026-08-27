(function () {
  'use strict';

  var config = window.BALNEO_ANALYTICS || {};
  var ga4Id = String(config.ga4Id || '');
  var googleAdsId = String(config.googleAdsId || '');
  var storageKey = String(config.storageKey || 'balneo_cookie_consent');
  var privacyUrl = String(config.privacyUrl || '/donnees-personnelles/');
  var consentLifetime = 180 * 24 * 60 * 60 * 1000;
  var consentInitialized = false;
  var googleTagRequested = false;
  var previousFocus = null;

  if (!/^G-[A-Z0-9]+$/.test(ga4Id) || !/^AW-[0-9]+$/.test(googleAdsId)) return;

  function ensureGtag() {
    window.dataLayer = window.dataLayer || [];
    window.gtag = window.gtag || function () {
      window.dataLayer.push(arguments);
    };

    if (!consentInitialized) {
      window.gtag('consent', 'default', {
        ad_storage: 'denied',
        analytics_storage: 'denied',
        ad_user_data: 'denied',
        ad_personalization: 'denied',
        wait_for_update: 500
      });
      consentInitialized = true;
    }
  }

  function readConsent() {
    try {
      var stored = window.localStorage.getItem(storageKey);
      if (!stored) return null;
      var consent = JSON.parse(stored);
      if (!consent || consent.version !== 1 || !consent.savedAt) return null;
      if (Date.now() - Number(consent.savedAt) > consentLifetime) {
        window.localStorage.removeItem(storageKey);
        return null;
      }
      return {
        analytics: consent.analytics === true,
        ads: consent.ads === true,
        savedAt: Number(consent.savedAt)
      };
    } catch (error) {
      return null;
    }
  }

  function writeConsent(selection) {
    var consent = {
      version: 1,
      analytics: selection.analytics === true,
      ads: selection.ads === true,
      savedAt: Date.now()
    };
    try {
      window.localStorage.setItem(storageKey, JSON.stringify(consent));
    } catch (error) {
      // Le choix reste appliqué pour la page courante si le stockage est indisponible.
    }
    return consent;
  }

  function loadGoogleTag(tagId) {
    if (googleTagRequested || document.querySelector('script[src*="googletagmanager.com/gtag/js"]')) {
      googleTagRequested = true;
      return;
    }

    var script = document.createElement('script');
    script.async = true;
    script.dataset.balneoGoogleTag = 'true';
    script.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(tagId);
    document.head.appendChild(script);
    googleTagRequested = true;
  }

  function clearGoogleCookies() {
    var hostParts = window.location.hostname.split('.');
    var domains = ['', window.location.hostname];
    if (hostParts.length > 2) domains.push('.' + hostParts.slice(-2).join('.'));

    document.cookie.split(';').forEach(function (cookie) {
      var name = cookie.split('=')[0].trim();
      if (!/^(_ga|_gid|_gat|_gcl_|_gac_|_gcl_au)/.test(name)) return;
      domains.forEach(function (domain) {
        var domainPart = domain ? '; domain=' + domain : '';
        document.cookie = name + '=; Max-Age=0; path=/' + domainPart + '; SameSite=Lax';
      });
    });
  }

  function applyConsent(selection) {
    ensureGtag();
    window.gtag('consent', 'update', {
      analytics_storage: selection.analytics ? 'granted' : 'denied',
      ad_storage: selection.ads ? 'granted' : 'denied',
      ad_user_data: selection.ads ? 'granted' : 'denied',
      ad_personalization: selection.ads ? 'granted' : 'denied'
    });

    if (!selection.analytics && !selection.ads) {
      clearGoogleCookies();
      return;
    }

    window.gtag('js', new Date());
    if (selection.analytics) window.gtag('config', ga4Id);
    if (selection.ads) window.gtag('config', googleAdsId);
    loadGoogleTag(selection.analytics ? ga4Id : googleAdsId);
  }

  function bannerMarkup() {
    return [
      '<section class="cookie-consent__card" role="region" aria-labelledby="consentement-cookies-titre">',
      '  <span class="cookie-consent__label">Vos choix</span>',
      '  <span class="cookie-consent__emblem" aria-hidden="true"><i></i><i></i><i></i></span>',
      '  <div class="cookie-consent__view" data-consent-view="intro">',
      '    <p class="cookie-consent__eyebrow">Une visite à votre rythme</p>',
      '    <h2 id="consentement-cookies-titre" tabindex="-1">On se jette à l’eau&nbsp;?</h2>',
      '    <p>Avec votre accord, Google Analytics nous aide à comprendre la fréquentation du site et Google Ads à mesurer nos campagnes. Rien ne part chez Google avant votre choix.</p>',
      '    <div class="cookie-consent__actions">',
      '      <button class="cookie-consent__button cookie-consent__button--primary" type="button" data-consent-accept>Tout accepter</button>',
      '      <button class="cookie-consent__button cookie-consent__button--secondary" type="button" data-consent-reject>Tout refuser</button>',
      '      <div class="cookie-consent__links">',
      '        <button class="cookie-consent__customize" type="button" data-consent-customize>Personnaliser mes choix</button>',
      '        <a class="cookie-consent__privacy" href="' + privacyUrl.replace(/"/g, '&quot;') + '">Données personnelles et cookies</a>',
      '      </div>',
      '    </div>',
      '  </div>',
      '  <div class="cookie-consent__view" data-consent-view="settings" hidden>',
      '    <button class="cookie-consent__back" type="button" data-consent-back aria-label="Revenir à la présentation">← Retour</button>',
      '    <p class="cookie-consent__eyebrow">À vous de choisir</p>',
      '    <h2>Mes préférences</h2>',
      '    <div class="cookie-consent__settings">',
      '      <div class="cookie-consent__setting">',
      '        <div><strong>Nécessaires</strong><small>Affichage du site et mémorisation de votre choix.</small></div>',
      '        <span class="cookie-consent__status">Toujours actifs</span>',
      '      </div>',
      '      <label class="cookie-consent__setting" for="consentement-analytics">',
      '        <span><strong>Mesure d’audience</strong><small>Google Analytics — statistiques de fréquentation.</small></span>',
      '        <span class="cookie-consent__toggle"><input id="consentement-analytics" type="checkbox" data-consent-analytics><i aria-hidden="true"></i></span>',
      '      </label>',
      '      <label class="cookie-consent__setting" for="consentement-publicite">',
      '        <span><strong>Publicité</strong><small>Google Ads — mesure et personnalisation des campagnes.</small></span>',
      '        <span class="cookie-consent__toggle"><input id="consentement-publicite" type="checkbox" data-consent-ads><i aria-hidden="true"></i></span>',
      '      </label>',
      '    </div>',
      '    <button class="cookie-consent__button cookie-consent__button--primary cookie-consent__save" type="button" data-consent-save>Enregistrer mes choix</button>',
      '    <a class="cookie-consent__privacy cookie-consent__privacy--settings" href="' + privacyUrl.replace(/"/g, '&quot;') + '">Données personnelles et cookies</a>',
      '  </div>',
      '</section>'
    ].join('');
  }

  function createManagerButton() {
    var button = document.createElement('button');
    button.type = 'button';
    button.className = 'cookie-manager';
    button.setAttribute('data-consent-manage', '');
    button.setAttribute('aria-label', 'Gérer mes cookies');
    button.innerHTML = '<span aria-hidden="true"><i></i><i></i><i></i></span><strong>Cookies</strong>';
    document.body.appendChild(button);

    var legal = document.querySelector('.footer-legal');
    if (legal) {
      var footerButton = document.createElement('button');
      footerButton.type = 'button';
      footerButton.className = 'footer-cookie-manager';
      footerButton.setAttribute('data-consent-manage', '');
      footerButton.textContent = 'Gérer mes cookies';
      legal.appendChild(footerButton);
    }
  }

  function initConsentPanel() {
    ensureGtag();

    var banner = document.createElement('div');
    banner.className = 'cookie-consent';
    banner.hidden = true;
    banner.innerHTML = bannerMarkup();
    document.body.appendChild(banner);
    createManagerButton();

    var intro = banner.querySelector('[data-consent-view="intro"]');
    var settings = banner.querySelector('[data-consent-view="settings"]');
    var title = banner.querySelector('#consentement-cookies-titre');
    var analyticsToggle = banner.querySelector('[data-consent-analytics]');
    var adsToggle = banner.querySelector('[data-consent-ads]');
    var storedConsent = readConsent();

    function showView(view) {
      var showSettings = view === 'settings';
      intro.hidden = showSettings;
      settings.hidden = !showSettings;
      if (showSettings) {
        var current = readConsent() || { analytics: false, ads: false };
        analyticsToggle.checked = current.analytics;
        adsToggle.checked = current.ads;
      }
    }

    function openBanner(view, moveFocus) {
      previousFocus = moveFocus ? document.activeElement : null;
      showView(view || 'intro');
      banner.hidden = false;
      window.requestAnimationFrame(function () {
        banner.classList.add('is-visible');
        if (moveFocus && view === 'settings') {
          banner.querySelector('[data-consent-back]').focus();
        } else if (moveFocus) {
          title.focus();
        }
      });
    }

    function closeBanner() {
      banner.classList.remove('is-visible');
      window.setTimeout(function () {
        banner.hidden = true;
      }, 360);
      if (previousFocus && typeof previousFocus.focus === 'function') previousFocus.focus();
      previousFocus = null;
    }

    function save(selection) {
      storedConsent = writeConsent(selection);
      applyConsent(storedConsent);
      document.documentElement.classList.add('consent-saved');
      closeBanner();
    }

    banner.querySelector('[data-consent-accept]').addEventListener('click', function () {
      save({ analytics: true, ads: true });
    });
    banner.querySelector('[data-consent-reject]').addEventListener('click', function () {
      save({ analytics: false, ads: false });
    });
    banner.querySelector('[data-consent-customize]').addEventListener('click', function () {
      showView('settings');
      banner.querySelector('[data-consent-back]').focus();
    });
    banner.querySelector('[data-consent-back]').addEventListener('click', function () {
      showView('intro');
      banner.querySelector('[data-consent-customize]').focus();
    });
    banner.querySelector('[data-consent-save]').addEventListener('click', function () {
      save({ analytics: analyticsToggle.checked, ads: adsToggle.checked });
    });

    document.querySelectorAll('[data-consent-manage]').forEach(function (button) {
      button.addEventListener('click', function () {
        openBanner('settings', true);
      });
    });

    banner.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && storedConsent) {
        closeBanner();
      }
    });

    if (storedConsent) {
      applyConsent(storedConsent);
      document.documentElement.classList.add('consent-saved');
    } else {
      openBanner('intro', false);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initConsentPanel);
  } else {
    initConsentPanel();
  }
}());
