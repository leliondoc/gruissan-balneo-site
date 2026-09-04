# Audit qualité — Balnéo V2 1.5.0

Audit réalisé le 27 août 2026 sur le thème privé `balneo-v2`, après comparaison avec le site éditorial `mygruissan.fr` et vérification des recommandations officielles Google, OpenAI, WordPress et web.dev.

## Résultats

### Mise à jour du 4 septembre 2026

Les défauts du planning relevés lors du nouvel audit ont été corrigés : écriture
atomique avec test de concurrence, rendu serveur des séances du jour, contrastes,
calendrier sans chevauchement, statuts administratifs datés et liens statiques vides.
Les anciens blocs Accueil/Contact sont corrigés au rendu sans écraser les pages en base.

Les contrôles WordPress officiels sont désormais installés, exécutés localement et
bloquants dans la CI, pour le thème et le plugin médias. Le formatage fait partie de
la construction. Les tests du calendrier passent (21 cas), ainsi que les tests PHP
et JS d'administration, les liens des 26 pages, le consentement et les 70 assets.
Le calendrier a été mesuré à 320, 390, 768, 821 et 1024 px : aucun chevauchement ni
débordement horizontal. L'audit npm complet a finalement abouti : zéro vulnérabilité
signalée au moment du contrôle.

Les archives et temporaires locaux ont été déplacés hors du dépôt dans une archive
récupérable, sans suppression distante. Les assets éventuellement référencés dans
les contenus WordPress sont conservés ; le contrôle de livraison signale désormais
tout écart ou fichier orphelin par rapport aux sources.

Le serveur OVH ayant refusé FTPS, le workflow impose SFTP avec clé ED25519 épinglée,
vérifiée avant authentification. Le transfert est testé : chemins bornés, refus des
liens symboliques, intégrité SHA-256 et remplacement atomique de chaque fichier.
Les réglages serveur globaux, un audit RGAA exhaustif et Theme Check restent des
contrôles distincts, non remplacés par cette suite de tests.

### Résultats historiques du 27 août

- SEO : titres et descriptions contextuels, URL canonique, Open Graph, Twitter Cards et graphe JSON-LD `WebSite`, `WebPage`, `BreadcrumbList`, établissement local et `Article` lorsque le contenu s’y prête.
- SEO pour les moteurs IA : contenus HTML sémantiques et éditoriaux accessibles, `robots.txt` explicite pour `OAI-SearchBot`, `ChatGPT-User` et `GPTBot`, ainsi qu’un fichier `/llms.txt` synthétique. Aucun balisage propriétaire n’est présenté comme un signal de classement.
- Sécurité : échappement et assainissement WordPress, nonce, champ piège, validation, consentement et limitation de fréquence sur la newsletter ; en-têtes `nosniff`, `SAMEORIGIN`, `Referrer-Policy`, `Permissions-Policy` et protection des liens ouverts dans un nouvel onglet.
- Performance : JavaScript différé avec l’API native WordPress, préchargement limité aux fontes critiques, suppression des ressources historiques inutiles, WebP, dimensions explicites, chargement différé et `srcset` 768/1280 pixels. Les 18 photos principales occupent 5,3 Mo au lieu de 19 Mo, soit environ 72 % de moins que les sources.
- Accessibilité et sémantique : lien d’évitement, cible `<main>`, boutons explicitement typés, images descriptives et navigation au clavier conservée.
- Conventions du projet : classes CSS métier renommées en français et commentaires du CSS et du JavaScript rédigés en français. Les classes imposées par WordPress et Font Awesome restent inchangées afin de préserver leur API.
- Confidentialité : consentement explicite à la newsletter et panneau local Google Analytics/Ads avec refus par défaut, choix granulaire, retrait permanent et aucun appel à Google avant accord ; informations sur la finalité, la base légale, les destinataires, la conservation, les droits et la CNIL.
- Audit interne WordPress : SEO, IA, sécurité, performance et 26 contenus Gutenberg validés.
- Liens de la maquette : 26 pages contrôlées sans substitution manquante.
- JavaScript : syntaxe valide sur les 8 scripts de construction, d’audit et d’exécution modifiés.
- PHP 8.4.24 : syntaxe valide sur les 49 fichiers du thème et du module d’administration.
- Dépendances npm : aucune vulnérabilité connue au niveau `low` ou supérieur.

## Commandes reproductibles

```powershell
npm run build:static
npm run build:wordpress
npm run check:links
npm run audit:wordpress
npm audit --audit-level=low
Get-ChildItem wordpress-theme\balneo-v2,wordpress-admin -Filter *.php -Recurse | ForEach-Object { php -l $_.FullName }
```

## Contrôles de déploiement

- WordPress Coding Standards est maintenant installé et exécuté dans l’environnement d’intégration et localement (`npm run check:phpcs`).
- Exécuter Theme Check dans l’administration WordPress après installation de la version 1.5.0.
- Renseigner l’identité et les coordonnées exactes de l’hébergeur dans les mentions légales avant la mise en production.
- Configurer HTTPS, HSTS, la politique CSP définitive, le cache de page, la compression Brotli/Gzip et les sauvegardes au niveau de l’hébergement ou du CDN.
- Valider une dernière fois les données d’établissement, les profils sociaux, les horaires et les dates éditoriales dans WordPress.

Le thème est privé et conserve volontairement ses fonctions SEO, redirections et formulaires dans des modules internes, conformément au choix de ne jamais changer de thème. Cette architecture n’est pas destinée à une publication dans l’annuaire public WordPress.org, qui impose de placer ces fonctions dans une extension.
