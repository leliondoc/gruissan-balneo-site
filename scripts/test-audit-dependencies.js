const { test } = require('node:test');
const assert = require('node:assert/strict');
const { audit, queriesFor, validateResponse } = require('./audit-dependencies');
const manifest = { packages: {
  '': { name: 'projet' },
  'node_modules/example': { version: '1.0.0', dev: true },
  'node_modules/other/node_modules/example': { version: '2.0.0', optional: true },
  'node_modules/@scope/alias': { name: '@scope/actual', version: '3.0.0' },
} };

test('versions transitives, optionnelles, dev et alias incluses', () => {
  assert.deepEqual(queriesFor(manifest).map((query) => `${query.package.name}@${query.version}`), ['example@1.0.0', 'example@2.0.0', '@scope/actual@3.0.0']);
  assert.throws(() => queriesFor({ packages: {} }));
  assert.throws(() => queriesFor({ packages: { 'node_modules/local': { link: true } } }));
});

test('avis de sécurité, pagination, erreur et réponse partielle sont bloquants', () => {
  const queries = queriesFor(manifest);
  validateResponse({ results: [{}, {}, {}] }, queries);
  for (const results of [[], [{}, {}], [{ error: 'unavailable' }, {}, {}], [{ next_page_token: 'suite' }, {}, {}], [null, {}, {}], [{ vulns: {} }, {}, {}], [{ vulns: [{ id: 'GHSA-test' }] }, {}, {}]]) {
    assert.throws(() => validateResponse({ results }, queries));
  }
});

test('une panne du service ne devient jamais un audit réussi', async () => {
  await assert.rejects(audit(manifest, async () => ({ ok: false, status: 503 })), /indisponible/);
  await assert.rejects(audit(manifest, async () => { throw new Error('Timeout'); }), /Timeout/);
  assert.equal(await audit(manifest, async (url, options) => {
    assert.equal(url, 'https://api.osv.dev/v1/querybatch');
    assert.equal(JSON.parse(options.body).queries.length, 3);
    return { ok: true, json: async () => ({ results: [{}, {}, {}] }) };
  }), 3);
});
