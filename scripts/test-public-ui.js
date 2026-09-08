const assert = require('node:assert/strict');
const fs = require('node:fs');
const { JSDOM } = require('jsdom');
const main = fs.readFileSync('wordpress-theme/balneo-v2/js/main.js', 'utf8');
const html = fs.readFileSync('index.html', 'utf8');

function page({ saved = [], reduced = false, entries } = {}) {
  const dom = new JSDOM(html, { url: 'https://example.test/', runScripts: 'outside-only', pretendToBeVisual: true });
  const w = dom.window;
  w.matchMedia = () => ({ matches: reduced });
  w.localStorage.setItem('balneo-saved-items', JSON.stringify(saved));
  if (entries) w.BALNEO_SEARCH = entries;
  const timers = new Map();
  let next = 0;
  w.setInterval = (callback) => { timers.set(++next, callback); return next; };
  w.clearInterval = (id) => timers.delete(id);
  w.eval(main);
  return { dom, w, d: w.document, timers };
}

{
  const { dom, w, d } = page();
  const trigger = d.querySelector('.site-tool--search');
  trigger.focus();
  trigger.click();
  const dialog = d.querySelector('[role=dialog]');
  assert.ok(d.getElementById(dialog.getAttribute('aria-labelledby')).textContent);
  assert.equal(d.querySelector('main').inert, true);
  const input = dialog.querySelector('input');
  assert.equal(d.activeElement, input);
  for (const term of ['piscine', 'balneo', 'bébé', 'sauna', 'horaires']) {
    input.value = term;
    input.dispatchEvent(new w.Event('input'));
    assert.ok(dialog.querySelector('.search-results a'), `La recherche ${term} doit donner un résultat`);
  }
  const last = Array.from(dialog.querySelectorAll('button,input,a')).at(-1);
  last.focus();
  last.dispatchEvent(new w.KeyboardEvent('keydown', { key: 'Tab', bubbles: true, cancelable: true }));
  assert.equal(d.activeElement, dialog.querySelector('button'));
  d.activeElement.dispatchEvent(new w.KeyboardEvent('keydown', { key: 'Tab', shiftKey: true, bubbles: true, cancelable: true }));
  assert.equal(d.activeElement, last);
  d.dispatchEvent(new w.KeyboardEvent('keydown', { key: 'Escape', bubbles: true }));
  assert.equal(d.querySelector('main').inert, false);
  assert.equal(d.activeElement, trigger);
  d.querySelector('.skip-link').click();
  assert.equal(d.activeElement, d.getElementById('contenu-principal'));
  dom.window.close();
}

{
  const { dom, w, d } = page({ entries: [
    ['Une nouvelle activité', '/nouvelle/', 'Découvrir le yoga aquatique'],
    ['<img src=x onerror=alert(1)>', '/texte/', 'yoga'],
    ['Lien dangereux', 'javascript:alert(1)', 'yoga'],
    ['Hors du site', 'https://outside.test/', 'yoga'],
  ] });
  d.querySelector('.site-tool--search').click();
  const input = d.querySelector('.search-box input');
  input.value = 'yoga'; input.dispatchEvent(new w.Event('input'));
  assert.equal(d.querySelectorAll('.search-results a').length, 2);
  assert.equal(d.querySelector('.search-results img'), null);
  assert.match(d.querySelector('.search-results').textContent, /<img/);
  dom.window.close();
}

for (const saved of [{ unexpected: true }, [
  { title: 'XSS', url: 'javascript:alert(1)' },
  { title: '<svg onload=alert(1)>', url: '/balneo/', image: 'x" onerror="alert(1)' },
]]) {
  const { dom, d } = page({ saved });
  d.querySelector('.site-tool--saved').click();
  assert.equal(d.querySelector('.site-panel svg[onload], .site-panel [onerror], .site-panel a[href^="javascript:"]'), null);
  dom.window.close();
}

{
  const { dom, w, d, timers } = page();
  const section = d.querySelector('[data-seasonal]');
  const pause = section.querySelector('.seasonal-pause');
  assert.equal(timers.size, 1);
  section.dispatchEvent(new w.Event('mouseenter'));
  assert.equal(timers.size, 0);
  section.dispatchEvent(new w.Event('mouseleave'));
  assert.equal(timers.size, 1);
  pause.dispatchEvent(new w.Event('pointerdown'));
  pause.focus();
  pause.click();
  assert.equal(timers.size, 0, 'Le premier clic doit arrêter le défilement même quand il déplace le focus');
  assert.match(pause.textContent, /Reprendre/);
  pause.click();
  assert.equal(timers.size, 1);
  d.querySelector('.site-tool--search').focus();
  section.querySelector('.seasonal-tab.is-active').focus();
  assert.equal(timers.size, 0, 'Entrer au clavier dans le carrousel arrête la rotation');
  section.dispatchEvent(new w.Event('mouseleave'));
  assert.equal(timers.size, 0, 'La reprise nécessite une action explicite après un focus');
  dom.window.close();
}
{
  const { dom, timers } = page({ reduced: true });
  assert.equal(timers.size, 0, 'Respect de la réduction des animations');
  dom.window.close();
}
console.log('Interface validée : recherche, sécurité des favoris, focus des dialogues, ancre et pause du carrousel.');
