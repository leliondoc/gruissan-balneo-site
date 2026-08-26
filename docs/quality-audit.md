# Audit qualité — Balnéo V2 1.3.2

Audit réalisé le 26 août 2026 sur le thème privé `balneo-v2`.

## Résultats

- PHP 8.2 : aucune erreur de syntaxe sur le thème et le plugin médias.
- WordPress Coding Standards 3.4.1 / PHPCS 3.13.6 : aucune violation sur les fichiers PHP exécutables ; `inc/content-seeds.php` est exclu car il contient uniquement les données HTML initiales générées.
- Audit interne WordPress : 26 contenus Gutenberg, navigation principale dynamique, logo personnalisable, `theme.json`, styles d’éditeur, traduction et capture du thème présents.
- Liens de la maquette : 26 pages contrôlées sans substitution manquante.
- Pa11y WCAG 2 AA : aucune erreur sur la page d’accueil locale après correction des contrastes.

## Commandes reproductibles

```powershell
npm run build:wordpress
npm run check:links
npm run audit:wordpress
vendor/bin/phpcs
npx --yes pa11y@latest http://127.0.0.1:4173/ --standard WCAG2AA
```

Theme Check doit être exécuté dans l’administration WordPress après installation de la version 1.3.2. Le thème est privé et conserve volontairement ses fonctions SEO, redirections et formulaires dans des modules internes, conformément au choix de ne jamais changer de thème. Cette architecture n’est donc pas destinée à une publication dans l’annuaire public WordPress.org, qui impose de placer ces fonctions dans une extension.
