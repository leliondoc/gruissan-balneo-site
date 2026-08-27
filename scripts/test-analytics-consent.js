const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { JSDOM } = require('jsdom');

const source = fs.readFileSync(path.join(__dirname, '..', 'js', 'analytics.js'), 'utf8');
const themeSource = fs.readFileSync(path.join(__dirname, '..', 'wordpress-theme', 'balneo-v2', 'js', 'analytics.js'), 'utf8');
const themeFunctions = fs.readFileSync(path.join(__dirname, '..', 'wordpress-theme', 'balneo-v2', 'functions.php'), 'utf8');
const analyticsPhp = fs.readFileSync(path.join(__dirname, '..', 'wordpress-theme', 'balneo-v2', 'inc', 'analytics.php'), 'utf8');

assert.equal(themeSource, source, 'le script source et sa copie WordPress doivent rester synchronisés');
assert.match(themeFunctions, /inc\/analytics\.php/, 'le module Analytics doit être chargé par le thème');
assert.match(analyticsPhp, /G-4F2ZKB7RRZ/);
assert.match(analyticsPhp, /AW-358922226/);

function createPage(savedConsent) {
  const dom = new JSDOM(
    '<!doctype html><html><head></head><body><footer><nav class="footer-legal"></nav></footer></body></html>',
    {
      url: 'https://balneov2.gruissan-balneo.com/',
      runScripts: 'outside-only',
      pretendToBeVisual: true,
    },
  );

  dom.window.BALNEO_ANALYTICS = {
    ga4Id: 'G-4F2ZKB7RRZ',
    googleAdsId: 'AW-358922226',
    storageKey: 'balneo_cookie_consent',
    privacyUrl: '/donnees-personnelles/',
  };
  if (savedConsent) {
    dom.window.localStorage.setItem('balneo_cookie_consent', JSON.stringify(savedConsent));
  }
  dom.window.eval(source);
  dom.window.document.dispatchEvent(new dom.window.Event('DOMContentLoaded'));
  return dom;
}

function gtagCalls(dom) {
  return (dom.window.dataLayer || []).map((entry) => Array.from(entry));
}

{
  const dom = createPage();
  const { document } = dom.window;
  assert.equal(document.querySelector('.cookie-consent').hidden, false, 'le panneau doit apparaître sans choix');
  assert.equal(document.querySelector('.cookie-consent__overlay'), null, 'aucun voile ne doit masquer le site');
  assert.equal(document.querySelector('.cookie-consent__card').getAttribute('aria-modal'), null, 'la carte ne doit pas être modale');
  assert.equal(document.body.classList.contains('consent-open'), false, 'la page doit rester consultable derrière la carte');
  assert.equal(document.querySelector('script[src*="googletagmanager.com"]'), null, 'Google ne doit pas être chargé avant le consentement');

  document.querySelector('[data-consent-accept]').click();
  const saved = JSON.parse(dom.window.localStorage.getItem('balneo_cookie_consent'));
  assert.equal(saved.analytics, true);
  assert.equal(saved.ads, true);
  assert.ok(document.querySelector('script[src*="googletagmanager.com/gtag/js"]'));
  assert.ok(gtagCalls(dom).some((call) => call[0] === 'config' && call[1] === 'G-4F2ZKB7RRZ'));
  assert.ok(gtagCalls(dom).some((call) => call[0] === 'config' && call[1] === 'AW-358922226'));
  dom.window.close();
}

{
  const dom = createPage();
  const { document } = dom.window;
  document.querySelector('[data-consent-reject]').click();
  const saved = JSON.parse(dom.window.localStorage.getItem('balneo_cookie_consent'));
  assert.equal(saved.analytics, false);
  assert.equal(saved.ads, false);
  assert.equal(document.querySelector('script[src*="googletagmanager.com"]'), null, 'un refus ne doit charger aucun script Google');
  dom.window.close();
}

{
  const dom = createPage();
  const { document } = dom.window;
  document.querySelector('[data-consent-customize]').click();
  document.querySelector('[data-consent-analytics]').checked = true;
  document.querySelector('[data-consent-save]').click();
  const calls = gtagCalls(dom);
  assert.ok(calls.some((call) => call[0] === 'config' && call[1] === 'G-4F2ZKB7RRZ'));
  assert.equal(calls.some((call) => call[0] === 'config' && call[1] === 'AW-358922226'), false);
  dom.window.close();
}

{
  const dom = createPage();
  const { document } = dom.window;
  document.querySelector('[data-consent-customize]').click();
  document.querySelector('[data-consent-ads]').checked = true;
  document.querySelector('[data-consent-save]').click();
  const calls = gtagCalls(dom);
  assert.ok(document.querySelector('script[src*="id=AW-358922226"]'));
  assert.ok(calls.some((call) => call[0] === 'config' && call[1] === 'AW-358922226'));
  assert.equal(calls.some((call) => call[0] === 'config' && call[1] === 'G-4F2ZKB7RRZ'), false);
  dom.window.close();
}

{
  const dom = createPage({ version: 1, analytics: true, ads: false, savedAt: Date.now() });
  const { document } = dom.window;
  assert.ok(document.documentElement.classList.contains('consent-saved'));
  assert.ok(document.querySelector('script[src*="googletagmanager.com/gtag/js"]'));
  assert.ok(document.querySelector('.footer-cookie-manager'));
  dom.window.close();
}

console.log('Consentement Analytics/Ads validé : refus préalable, choix granulaire et réouverture.');
