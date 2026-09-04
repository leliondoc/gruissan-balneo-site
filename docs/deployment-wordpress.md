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
- `FTP_SERVER_DIR`
- `SFTP_HOST_KEY_SHA256` : empreinte `SHA256:…` de la clé publique ED25519 du serveur.

Les anciens noms `FTP_*` sont conservés pour réutiliser les identifiants existants,
mais le transport est exclusivement **SFTP sur le port 22**. Le compte OVH est limité
au dossier du site V2 ; aucun accès au shell SSH n'est nécessaire.

`FTP_SERVER_DIR` doit désigner la racine de l'installation WordPress telle que vue
par ce compte (par exemple `/` pour un compte restreint au site). La présence de
`wp-load.php` et `wp-content/` est vérifiée avant publication.

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

## Périmètre protégé

Le workflow synchronise uniquement :

- `wordpress-theme/balneo-v2/` vers `wp-content/themes/balneo-v2/` ;
- `wordpress-plugin/balneo-media/` vers `wp-content/plugins/balneo-media/`.

Il ne touche jamais au cœur WordPress, à la base MySQL, à `wp-content/uploads`, aux
autres thèmes ni aux autres extensions. Les liens symboliques sont refusés et les
fichiers identiques sont ignorés après comparaison SHA-256. Chaque fichier modifié
est transféré dans un temporaire à extension conservée, relu et vérifié, puis
remplacé par renommage atomique. L'atomicité est par fichier, pas pour l'ensemble du
site. Les temporaires de cette exécution sont nettoyés en cas d'erreur ; aucun
nettoyage récursif ni suppression d'anciens fichiers distants n'est effectué.
Une suppression devenue nécessaire doit être examinée et ciblée séparément.
