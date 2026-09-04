const assert = require('node:assert/strict');
const fs = require('node:fs');
const path = require('node:path');
const { test } = require('node:test');
const { JSDOM } = require('jsdom');
const { renderDailySchedule } = require('./schedule-markup');

const root = path.resolve(__dirname, '..');
const script = fs.readFileSync(path.join(root, 'js/horaires.js'), 'utf8');

function setup(t, { now = '2026-09-04T10:00:00Z', prepare, html = renderDailySchedule() } = {}) {
  const dom = new JSDOM(html, { url: 'https://example.test/pages/horaires.html', runScripts: 'outside-only' });
  t.after(() => dom.window.close());
  const { window } = dom;
  const NativeDate = window.Date;
  window.Date = class extends NativeDate {
    constructor(...args) { super(...(args.length ? args : [now])); }
    static now() { return new NativeDate(now).getTime(); }
  };
  if (prepare) prepare(window.document);
  window.eval(script);
  const query = (selector) => window.document.querySelector(selector);
  const click = (selector) => {
    const element = query(selector);
    assert.ok(element, `Contrôle absent : ${selector}`);
    element.click();
  };
  const key = (selector, value) => query(selector).dispatchEvent(new window.KeyboardEvent('keydown', { key: value, bubbles: true, cancelable: true }));
  return { window, query, click, key };
}

function changeEntry(document, id, transform) {
  const card = [...document.querySelectorAll('[data-schedule-entry]')].find((node) => JSON.parse(node.dataset.scheduleEntry).id === id);
  const entry = JSON.parse(card.dataset.scheduleEntry);
  transform(entry);
  card.dataset.scheduleEntry = JSON.stringify(entry);
}

test('initialisation : date de Paris, cinq cartes, mois commençant le lundi', (t) => {
  const { query } = setup(t);
  assert.equal(query('.daily-schedule__date').textContent, 'vendredi 4 septembre 2026');
  assert.equal(query('[aria-pressed="true"]').dataset.date, '2026-09-04');
  assert.equal(query('[aria-current="date"]').dataset.date, '2026-09-04');
  assert.equal(query('.schedule-calendar__day').dataset.date, '2026-08-31');
  assert.equal(query('.schedule-card--sport .schedule-card__time').textContent, '06h–23h');
  assert.equal(query('.schedule-card--balneo .schedule-card__time').textContent, 'À confirmer');
  assert.equal(query('.daily-schedule__count').textContent, '5 espaces & activités');
  assert.equal(query('.daily-schedule__empty').hidden, true);
});

test('le fuseau Europe/Paris prend le lendemain même si UTC est encore la veille', (t) => {
  const { query } = setup(t, { now: '2026-09-04T22:30:00Z' });
  assert.equal(query('[aria-current="date"]').dataset.date, '2026-09-05');
  assert.equal(query('.daily-schedule__date').textContent, 'samedi 5 septembre 2026');
});

test('navigation mensuelle, changement de jour, sélection unique et retour à aujourd’hui', (t) => {
  const { query, click } = setup(t);
  click('[data-month-step="1"]');
  assert.equal(query('.schedule-calendar__month').textContent, 'octobre 2026');
  assert.equal(query('.daily-schedule__date').textContent, 'vendredi 4 septembre 2026');
  click('[data-date="2026-10-12"]');
  assert.equal(query('.daily-schedule__date').textContent, 'lundi 12 octobre 2026');
  assert.equal(query('.daily-schedule__day-label').textContent, 'Votre programme');
  assert.match(query('[data-schedule-announcement]').textContent, /12 octobre 2026/);
  click('[data-schedule-today]');
  assert.equal(query('.schedule-calendar__month').textContent, 'septembre 2026');
  assert.equal(query('[aria-pressed="true"]').dataset.date, '2026-09-04');
});

test('Parc été : horaires en août, hors saison au 1er septembre', (t) => {
  const { query, click } = setup(t);
  assert.ok(query('.schedule-card--parc').classList.contains('is-closed'));
  click('[data-month-step="-1"]');
  click('[data-date="2026-08-31"]');
  assert.equal(query('.schedule-card--parc .schedule-card__time').textContent, '11h–18h');
  assert.equal(query('.schedule-card--parc').classList.contains('is-closed'), false);
  click('[data-date="2026-09-01"]');
  assert.equal(query('.schedule-card--parc .schedule-card__time').textContent, 'Hors saison');
});

test('règles : récurrences hebdomadaires bornées, exception datée et fermeture', (t) => {
  const { query, click } = setup(t, { prepare(document) {
    changeEntry(document, 'aquatique', (entry) => {
      entry.default = { hidden: true };
      entry.rules = [
        { startDate: '2026-09-01', endDate: '2026-09-30', weekdays: [1, 3, 5], hidden: false, time: '09h30–10h15', status: 'Sur inscription', note: 'Séance test' },
        { dates: ['2026-09-07'], closed: true, time: 'Séance annulée' },
      ];
    });
  } });
  assert.equal(query('.schedule-card--aquatique .schedule-card__time').textContent, '09h30–10h15');
  click('[data-date="2026-09-05"]');
  assert.equal(query('.schedule-card--aquatique').hidden, true);
  assert.equal(query('.daily-schedule__count').textContent, '4 espaces & activités');
  click('[data-date="2026-09-07"]');
  assert.equal(query('.schedule-card--aquatique').hidden, false);
  assert.equal(query('.schedule-card--aquatique .schedule-card__time').textContent, 'Séance annulée');
  assert.ok(query('.schedule-card--aquatique').classList.contains('is-closed'));
  click('[data-month-step="1"]');
  click('[data-date="2026-10-02"]');
  assert.equal(query('.schedule-card--aquatique').hidden, true);
});

test('calendrier bissextile et changement d’année', (t) => {
  const { query, click } = setup(t, { now: '2028-02-28T12:00:00Z' });
  click('[data-date="2028-02-29"]');
  assert.equal(query('.daily-schedule__date').textContent, 'mardi 29 février 2028');
  click('[data-month-step="-1"]');
  click('[data-month-step="-1"]');
  assert.equal(query('.schedule-calendar__month').textContent, 'décembre 2027');
  click('[data-month-step="1"]');
  assert.equal(query('.schedule-calendar__month').textContent, 'janvier 2028');
});

test('clavier : flèches, Début/Fin et PageUp sans perte du focus', (t) => {
  const { query, key, window } = setup(t);
  key('[data-date="2026-09-04"]', 'ArrowDown');
  assert.equal(window.document.activeElement.dataset.date, '2026-09-11');
  key('[data-date="2026-09-11"]', 'Home');
  assert.equal(window.document.activeElement.dataset.date, '2026-09-07');
  key('[data-date="2026-09-07"]', 'End');
  assert.equal(window.document.activeElement.dataset.date, '2026-09-13');
  key('[data-date="2026-09-13"]', 'PageUp');
  assert.equal(window.document.activeElement.dataset.date, '2026-08-13');
  // Le 4 septembre reste visible dans la dernière ligne du mois d’août.
  assert.equal(query('[aria-pressed="true"]').dataset.date, '2026-09-04');
  assert.equal(query('.daily-schedule__date').textContent, 'vendredi 4 septembre 2026');
  assert.equal(window.document.querySelectorAll('.schedule-calendar__day[tabindex="0"]').length, 1);
});

test('PageDown borne le 31 janvier au dernier jour de février', (t) => {
  const { key, window } = setup(t, { now: '2027-01-31T12:00:00Z' });
  key('[data-date="2027-01-31"]', 'PageDown');
  assert.equal(window.document.activeElement.dataset.date, '2027-02-28');
});

test('état vide et données invalides : aucun plantage', (t) => {
  const { query } = setup(t, { prepare(document) {
    document.querySelectorAll('[data-schedule-entry]').forEach((card) => {
      card.dataset.scheduleEntry = JSON.stringify({ default: { hidden: true } });
    });
  } });
  assert.equal(query('.daily-schedule__empty').hidden, false);
  assert.equal(query('.daily-schedule__count').textContent, '0 espaces & activités');
  assert.doesNotThrow(() => setup(t, { prepare(document) {
    document.querySelector('[data-schedule-entry]').dataset.scheduleEntry = 'JSON invalide';
  } }));
});

test('le contenu des règles reste du texte, jamais du HTML exécutable', (t) => {
  const { query } = setup(t, { prepare(document) {
    changeEntry(document, 'forme', (entry) => { entry.default.note = '<img src=x onerror=alert(1)>'; });
  } });
  assert.equal(query('.schedule-card--sport .schedule-card__note img'), null);
  assert.equal(query('.schedule-card--sport .schedule-card__note').textContent, '<img src=x onerror=alert(1)>');
});

test('une page sans module n’est pas modifiée', (t) => {
  const { window } = setup(t, { html: '<main>Autre page</main>' });
  assert.equal(window.document.body.innerHTML, '<main>Autre page</main>');
});

test('sans JavaScript, les cartes et les liens utiles existent sans fausse date du jour', () => {
  const html = renderDailySchedule();
  assert.match(html, /Vos espaces & activités/);
  assert.match(html, /06h–23h/);
  assert.match(html, /tel:\+33468756050/);
  assert.doesNotMatch(html, /Aujourd’hui chez nous/);
});

test('les copies WordPress, le shortcode et la page statique sont intégrés', () => {
  assert.equal(fs.readFileSync(path.join(root, 'wordpress-theme/balneo-v2/js/horaires.js'), 'utf8'), script);
  const seeds = fs.readFileSync(path.join(root, 'wordpress-theme/balneo-v2/inc/content-seeds.php'), 'utf8');
  assert.match(seeds, /\[balneo_daily_schedule\]/);
  const template = fs.readFileSync(path.join(root, 'wordpress-theme/balneo-v2/template-parts/daily-schedule.php'), 'utf8');
  assert.match(template, /balneo_v2_schedule_render_cards\(\)/);
  assert.match(fs.readFileSync(path.join(root, 'wordpress-theme/balneo-v2/inc/schedule.php'), 'utf8'), /data-schedule-entry/);
  assert.doesNotMatch(template, /href="[a-z-]+\.html"/);
  const page = fs.readFileSync(path.join(root, 'pages/horaires.html'), 'utf8');
  assert.match(page, /js\/horaires\.js/);
  assert.match(page, /class="section daily-schedule"/);
});

test('les titres du planning utilisent la variante Barlow Condensed Bold de la charte', () => {
  const css = fs.readFileSync(path.join(root, 'css/styles.css'), 'utf8');
  assert.match(css, /font-family: 'Barlow Condensed Heading';\s+src: url\('\.\.\/assets\/fonts\/BarlowCondensed-Bold\.woff2'\)/);
  assert.match(css, /\.daily-schedule h2, \.daily-schedule h3 \{ font-family: 'Barlow Condensed Heading'/);
  assert.ok(fs.existsSync(path.join(root, 'assets/fonts/BarlowCondensed-Bold.woff2')));
  assert.equal(fs.readFileSync(path.join(root, 'wordpress-theme/balneo-v2/css/styles.css'), 'utf8'), css);
});

test('la pastille Acheter apparaît uniquement sur l’accueil et le lien du menu reste partout', () => {
  const home = fs.readFileSync(path.join(root, 'index.html'), 'utf8');
  assert.equal((home.match(/class="cta-orb"/g) || []).length, 1);
  for (const file of fs.readdirSync(path.join(root, 'pages')).filter((name) => name.endsWith('.html'))) {
    const html = fs.readFileSync(path.join(root, 'pages', file), 'utf8');
    assert.doesNotMatch(html, /class="cta-orb"/, file);
    assert.match(html, /class="main-nav__booking"/, file);
  }
  const footer = fs.readFileSync(path.join(root, 'wordpress-theme/balneo-v2/footer.php'), 'utf8');
  assert.match(footer, /<\?php if \( is_front_page\(\) \) : \?>\s*<!--[\s\S]*?<a class="cta-orb"[\s\S]*?<\/a>\s*<\?php endif; \?>/);
});

test('les textes des cinq thèmes dépassent le contraste 4,5:1', () => {
  function luminance(hex) {
    const channels = hex.match(/../g).map((v) => parseInt(v, 16) / 255)
      .map((v) => v <= 0.04045 ? v / 12.92 : ((v + 0.055) / 1.055) ** 2.4);
    return channels[0] * 0.2126 + channels[1] * 0.7152 + channels[2] * 0.0722;
  }
  for (const [background, foreground] of [['006392', 'ffffff'], ['009885', '001c29'], ['e94740', '001c29'], ['df8fa3', '01344b'], ['ffed42', '01344b']]) {
    const values = [luminance(background), luminance(foreground)].sort((a, b) => b - a);
    assert.ok((values[0] + 0.05) / (values[1] + 0.05) >= 4.5, `${background} / ${foreground}`);
  }
});
