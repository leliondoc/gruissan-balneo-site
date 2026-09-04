// Toutes les versions verrouillées, y compris dev, transitives et optionnelles.
// API documentée : https://google.github.io/osv.dev/post-v1-querybatch/
const lock = require('../package-lock.json');

function queriesFor(manifest) {
  if (!manifest.packages || typeof manifest.packages !== 'object') throw new Error('Lockfile npm invalide.');
  const unique = new Map();
  for (const [location, entry] of Object.entries(manifest.packages)) {
    if (!location) continue;
    const name = entry.name || location.split('node_modules/').at(-1);
    if (!entry.version || entry.link || !location.includes('node_modules/')) throw new Error('Dépendance non vérifiable dans le registre npm.');
    unique.set(`${name}@${entry.version}`, { package: { name, ecosystem: 'npm' }, version: entry.version });
  }
  if (!unique.size) throw new Error('Aucune dépendance à vérifier.');
  return [...unique.values()];
}

function validateResponse(data, queries) {
  if (!data || data.error || !Array.isArray(data.results) || data.results.length !== queries.length) throw new Error('Réponse OSV incomplète.');
  const findings = [];
  data.results.forEach((result, index) => {
    if (!result || typeof result !== 'object' || Array.isArray(result) || Object.keys(result).some((key) => !['vulns', 'next_page_token'].includes(key)) || result.next_page_token || (result.vulns !== undefined && !Array.isArray(result.vulns))) {
      throw new Error('Résultat OSV invalide ou incomplet : publication bloquée.');
    }
    for (const vulnerability of result.vulns || []) {
      if (!vulnerability || typeof vulnerability.id !== 'string' || !vulnerability.id) throw new Error('Avis de sécurité OSV invalide.');
      findings.push(`${queries[index].package.name}@${queries[index].version} : ${vulnerability.id}`);
    }
  });
  if (findings.length) throw new Error(`Vulnérabilités connues :\n${findings.join('\n')}`);
}

async function audit(manifest = lock, fetcher = fetch) {
  const queries = queriesFor(manifest);
  // Lots bornés ; toute réponse manquante bloque la publication.
  for (let offset = 0; offset < queries.length; offset += 500) {
    const batch = queries.slice(offset, offset + 500);
    const response = await fetcher('https://api.osv.dev/v1/querybatch', {
      method: 'POST', headers: { 'content-type': 'application/json' },
      body: JSON.stringify({ queries: batch }), signal: AbortSignal.timeout(30000),
    });
    if (!response.ok) throw new Error(`Service OSV indisponible (HTTP ${response.status}) : publication bloquée.`);
    validateResponse(await response.json(), batch);
  }
  return queries.length;
}

if (require.main === module) audit().then((count) => {
  console.log(`OSV : ${count} versions npm vérifiées, aucune vulnérabilité connue signalée.`);
}).catch((error) => { console.error(error.message); process.exitCode = 1; });

module.exports = { audit, queriesFor, validateResponse };
