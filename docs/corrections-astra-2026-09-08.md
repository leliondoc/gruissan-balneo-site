# Corrections de l’audit du 8 septembre 2026

Périmètre : thème Balnéo V2 1.6.0 et contenus de `balneov2.gruissan-balneo.com`. Le site principal, le DNS et le choix de ne pas indexer la V2 ne font pas partie de cette livraison.

## Changements

- Mentions légales : Mathias Szanto, confirmé par le responsable de publication, identification de l’Office de tourisme et de l’hébergeur OVH. Confidentialité : fonctionnement réel du formulaire, consentement Google et stockage local des favoris. Les deux contenus historiques identifiés comme prototypes sont sauvegardés en métadonnées, avec révision WordPress, avant migration. Les autres contenus éditoriaux ne sont pas remplacés.
- Accueil : annonce de l’été retirée, bandeau relié au planning du jour lorsqu’une information explicite existe, lien vers les horaires dans les autres cas. La pastille 7j/7 précise For.Me. Les anciennes actualités apparaissent dans « Le journal ».
- Newsletter : demandes privées dans WordPress, validation stricte, preuve datée du consentement, détection des doublons, confirmation fondée sur l’enregistrement. La notification ne contient pas les données du visiteur et son échec ne perd pas la demande. Limites atomiques par IP, e-mail et plafond global, sans conserver leurs valeurs en clair dans les compteurs.
- Accessibilité : cible d’évitement dans le HTML WordPress, titre et zone principale pour les pages ordinaires, dialogues nommés avec confinement du focus et fond inerte, arrêt et reprise explicites du carrousel. Navigation mobile fermée retirée du parcours clavier.
- Recherche : index des pages et articles publiés non protégés, titres et textes Gutenberg, normalisation des accents et synonymes. URLs et textes des résultats et favoris validés et échappés.
- Affichage : espace réservé à la barre latérale sur ordinateur, suppression de son chevauchement avec le contenu.
- Cookies : après retrait d’une catégorie précédemment autorisée, rechargement pour repartir sans ses tags. Dates de consentement invalides ou expirées refusées.
- Sécurité : éditeurs PHP WordPress désactivés via les capacités du thème, en-têtes défensifs complétés. La CSP limite les objets, les cadres, la base des liens et les destinations de formulaires. Elle ne constitue pas une CSP stricte avec nonces de scripts. HSTS limité à cet hôte, durée d’un jour, sans préchargement ni propagation aux sous-domaines.
- Maintenance : sources et fichiers générés synchronisés, version 1.6.0, tests supplémentaires exécutés avant le déploiement SFTP. Les nouveaux appels restent compatibles pendant une livraison de fichiers progressive.

## Traitement des demandes newsletter

Ouvrir « Demandes newsletter » dans WordPress avec un compte administrateur. Ouvrir le dossier pour retrouver les coordonnées et le texte de consentement. L’équipe procède ensuite à l’inscription dans son outil, puis place le dossier traité dans la corbeille.

Le site ne promet pas d’abonnement automatique. Aucun outil de diffusion n’a été précisé. Les dossiers non traités de plus de 90 jours sont placés dans la corbeille par la tâche WordPress quotidienne, par lots bornés. Le fonctionnement de WP-Cron reste nécessaire. La corbeille suit ensuite la politique de suppression de WordPress. Une demande d’exercice des droits doit aussi être traitée dans l’outil de diffusion, si une inscription y a été faite.

## Contrôles

Les tests couvrent la saisie invalide, l’absence de consentement, les doublons, les changements d’e-mail depuis une même IP, les échecs de stockage et de notification, le caractère privé des dossiers et leur expiration. Aucun e-mail réel n’est envoyé par ces tests.

Les tests JavaScript vérifient les recherches piscine, balneo, bébé, sauna et horaires, les contenus publiés supplémentaires, l’échappement de données malveillantes, le parcours clavier des dialogues, le lien d’évitement, les commandes du carrousel et le retrait des cookies. Les contrôles existants du planning, des assets, de l’audit WordPress et du déploiement sont conservés.

## Points qui nécessitent encore une validation d’exploitation

La réception effective des notifications, une inscription dans la liste finale et un paiement Horanet n’ont pas été testés avec de vraies données. Les sauvegardes, leur restauration, la double authentification, OPcache et un cache de pages demandent une vérification de l’hébergement et des comptes concernés. L’audit WordPress ne remplace pas cette vérification.

## Sources des informations ajoutées

L’identification de l’Office de tourisme suit les [mentions de la billetterie officielle](https://gruissan-balneo.horanet.com/mentions-legales). Les coordonnées OVH proviennent de ses [informations légales](https://www.ovhcloud.com/fr/terms-and-conditions/) et de sa [FAQ d’assistance](https://docs.ovhcloud.com/fr/guides/account-and-service-management/account-information/faq-support). Les références techniques figurent aussi dans le rapport d’audit initial.

## Vérification après livraison

Les corrections ont été publiées avec les commits `2622c56`, `228596e` et `8e23f86`. La [dernière livraison GitHub Actions](https://github.com/leliondoc/gruissan-balneo-site/actions/runs/34215055331) a réussi. Dernière vérification HTTP : 8 septembre 2026 à 12h28, heure de Paris.

- 26 pages sur 26 en HTTP 200, chacune avec un H1 et une zone principale. Aucune ancre locale cassée, aucun identifiant dupliqué, aucune image sans attribut alternatif. Les 22 ressources directement référencées sont accessibles. Le choix `noindex` de la V2 est conservé.
- Les deux pages juridiques affichent les nouveaux textes et Mathias Szanto est identifié comme responsable de publication. Les mentions de prototype ont disparu.
- La pastille affiche « For.Me 7j/7 ». Le bandeau d’été est remplacé et l’index de recherche contient les 26 pages publiées, sans les exemples.
- La page d’exemple a d’abord confirmé le bon rendu d’une page WordPress ordinaire, avec H1 et zone principale. Elle a ensuite été placée dans la corbeille, ainsi que l’article « Bonjour tout le monde ! ». Leurs anciennes adresses répondent en 404. Le retour arrière reste possible dans WordPress.
- Le registre « Demandes newsletter » est accessible en administration. Aucune demande d’essai n’a été créée. L’API publique de ce type de contenu répond en 404. Une requête de formulaire sans nonce est refusée et renvoyée vers l’accueil avec l’état d’erreur, même sans en-tête Referer.
- La recherche « piscine » donne des résultats dans le navigateur réel. La navigation Tab reste dans le dialogue et Échap rend le focus au déclencheur. Aucun message d’erreur JavaScript relevé sur l’accueil pendant ces contrôles.
- Affichage contrôlé à 1280 et 390 pixels sur la V2, et à 320 pixels dans l’aperçu local. Sur ordinateur, le titre commence à 102 pixels et la barre latérale se termine à 54 pixels. Aucun débordement horizontal relevé aux largeurs mobiles vérifiées.
- Les en-têtes CSP et HSTS prévus sont présents dans les réponses publiques. Les pages 404 conservent des directives cohérentes `noindex, nofollow`.
- GitHub a exécuté avec succès les tests du formulaire, des contenus publics, de l’interface, du consentement, du planning, des assets et du déploiement, ainsi que PHPCS, l’audit WordPress, la syntaxe PHP et les audits de dépendances npm et Composer. Le contrôle local de syntaxe couvre 57 fichiers PHP du thème et du plugin. Une reconstruction isolée a également confirmé la cohérence des sources et des fichiers générés.

La réception effective des mails, l’intégration dans l’outil de diffusion, un paiement réel et les vérifications d’hébergement énumérées plus haut restent à valider. Les contrôles effectués ne permettent pas d’affirmer une sécurité absolue ni une conformité juridique certifiée.
