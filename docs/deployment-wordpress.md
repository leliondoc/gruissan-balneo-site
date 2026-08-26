# Déploiement WordPress

Le thème **Balnéo V2** et le plugin **Balnéo Médias** sont publiés par le workflow GitHub Actions `Deploy WordPress Balneo V2`.

## Déclenchement

- automatiquement après un push sur `master` qui modifie le thème, le plugin ou le workflow ;
- manuellement depuis l'onglet Actions, avec le commit ou la branche à publier.

## Secrets GitHub

Le dépôt utilise les secrets suivants, sans jamais exposer leur valeur dans le code ou les journaux :

- `FTP_SERVER`
- `FTP_USERNAME`
- `FTP_PASSWORD`
- `FTP_SERVER_DIR`

`FTP_SERVER_DIR` doit désigner la racine de l'installation WordPress et se terminer par `/`, par exemple `/www.balneov2/`.

## Périmètre protégé

Le workflow synchronise uniquement :

- `wordpress-theme/balneo-v2/` vers `wp-content/themes/balneo-v2/` ;
- `wordpress-plugin/balneo-media/` vers `wp-content/plugins/balneo-media/`.

Il ne touche jamais au cœur WordPress, à la base MySQL, à `wp-content/uploads`, aux autres thèmes ni aux autres extensions. Le nettoyage intégral du répertoire distant reste désactivé.
