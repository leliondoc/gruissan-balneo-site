# Déploiement WordPress

Le thème **Balnéo V2** et le plugin **Balnéo Médias** sont publiés par le workflow GitHub Actions `Deploy WordPress Balneo V2`.

## Déclenchement

- automatiquement après un push sur `master` qui modifie le thème, le plugin, le workflow ou son outillage de publication ;
- manuellement depuis l'onglet Actions, avec le commit ou la branche à publier.

## Secrets GitHub

Le dépôt utilise les secrets suivants, sans jamais exposer leur valeur dans le code ou les journaux :

- `FTP_SERVER`
- `FTP_USERNAME`
- `FTP_PASSWORD`
- `SFTP_HOST_KEY_SHA256` : empreinte `SHA256:…` de la clé publique ED25519 du serveur.

Les anciens noms `FTP_*` sont conservés pour réutiliser les identifiants existants,
mais le transport est exclusivement **SFTP sur le port 22**. Le compte OVH est limité
au dossier du site V2 ; aucun accès au shell SSH n'est nécessaire.

La variable GitHub facultative `SFTP_SERVER_DIR` désigne la racine WordPress telle
que vue par SFTP ; par défaut `.` utilise le dossier de connexion du compte
restreint. Le diagnostic a confirmé que ce dossier contient `wp-load.php` et
`wp-content/`. Le chemin principal affiché par OVH n'est pas directement accessible
depuis cet accès restreint. L'ancien secret `FTP_SERVER_DIR` n'est plus utilisé.
La présence des deux repères WordPress est vérifiée avant chaque publication.

Le serveur indiqué dans l'espace OVH authentifié est `ftp.cluster128.hosting.ovh.net`.
Le FTPS a été testé le 4 septembre 2026 et refusé par ce serveur (réponse 500 à AUTH
TLS). Aucun repli vers FTP non chiffré n'est autorisé.

La première connexion `node scripts/deploy-sftp.js --check-host` affiche une empreinte
publique, puis s'arrête **sans transmettre d'identifiant** si elle n'est pas encore
épinglée. Après validation initiale du serveur, enregistrer cette empreinte dans
`SFTP_HOST_KEY_SHA256`. Ce mécanisme est une confiance initiale SSH (TOFU), pas une
validation par certificat TLS. Les connexions suivantes, y compris celle qui
transfère les fichiers, refusent toute clé différente. Ne jamais remplacer ce
secret automatiquement après une alerte : vérifier un changement auprès d'OVH.

Les outils qualité PHP s'installent avec `composer install`. La CI exécute les
conventions WordPress, les tests du planning, les liens et la correspondance des
assets avant publication. `vendor/`, `node_modules/` et les archives locales ne sont
jamais livrés sur l'hébergement.

`npm run audit:dependencies` interroge la base publique OSV pour **toutes** les
versions npm du lockfile, dépendances de développement, transitives et optionnelles
comprises. Une vulnérabilité, une panne ou une réponse incomplète bloque la CI.
Ce contrôle remplace la requête globale `npm audit` en CI, devenue indisponible
(HTTP 503/délais dépassés constatés le 4 septembre 2026). Il ne fournit pas le graphe
de remédiation de npm ; `npm audit` reste utilisable en complément. Les dépendances
PHP sont contrôlées séparément par `composer audit`.

## Périmètre protégé

Le workflow synchronise uniquement :

- `wordpress-theme/balneo-v2/` vers `wp-content/themes/balneo-v2/` ;
- `wordpress-plugin/balneo-media/` vers `wp-content/plugins/balneo-media/`.

Il ne touche jamais au cœur WordPress, à la base MySQL, à `wp-content/uploads`, aux
autres thèmes ni aux autres extensions. Les liens symboliques sont refusés et les
fichiers identiques sont ignorés après comparaison SHA-256. Chaque fichier modifié
est transféré dans un temporaire à extension conservée, relu et vérifié, puis
remplacé par renommage atomique. L'atomicité est par fichier, pas pour l'ensemble du
site. Les temporaires de cette exécution sont nettoyés en cas d'erreur. Après une
interruption forcée, la prochaine publication terminée nettoie uniquement les
temporaires UUID de cet outil associés à un livrable connu, après vérification de
leur chemin et de leur type. Aucun nettoyage récursif ni suppression d'anciens
contenus distants n'est effectué. Le transfert est borné à dix minutes, avec une
progression tous les dix fichiers, pour tenir compte du débit SFTP de l'hébergement.
Une suppression devenue nécessaire doit être examinée et ciblée séparément.
