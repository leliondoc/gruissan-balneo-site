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

À compléter avec le résultat du déploiement et le contrôle des pages publiques.
