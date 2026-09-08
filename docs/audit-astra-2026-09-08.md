# Audit du site Balnéo, 8 septembre 2026

La base technique est sérieuse et le site principal fonctionne dans les parcours vérifiés. Il reste cependant des défauts concrets de contenu, d'accessibilité et de finition, ainsi qu'une newsletter à finaliser. Je ne considère pas cette V2 comme entièrement prête à lancer en l'état. Aucune faille critique exploitable à distance n'a été démontrée dans le périmètre examiné.

Audit du dépôt et de https://balneov2.gruissan-balneo.com/, sans modification du site, de ses réglages ou de ses contenus. Les vérifications publiques HTTP ont été faites sans authentification. Les parcours visuels et la lecture de l'administration ont utilisé la session WordPress déjà connectée du navigateur. Aucun formulaire envoyant un message, aucune inscription et aucun achat n'ont été soumis.

## Corrections prioritaires

P1 : à traiter avant un lancement public. P2 : défaut réel à corriger. Les observations de préparation au lancement et de durcissement sont distinguées des pannes.

### 1. P1 : les pages légales publiées contredisent le fonctionnement actuel

La [page Données personnelles](https://balneov2.gruissan-balneo.com/donnees-personnelles/) indique encore qu'il s'agit d'un prototype statique sans suivi et annonce un futur bandeau WordPress. Pourtant, le site est déjà WordPress et contient le gestionnaire de consentement Google Analytics et Ads. Les [mentions légales](https://balneov2.gruissan-balneo.com/mentions-legales/) affichent un texte de prototype à la place de l'identification de l'hébergeur.

Les fichiers locaux sont plus récents que ces contenus publics. Une nouvelle livraison des fichiers du thème ne suffira donc pas à corriger les pages existantes en base. La migration générale conserve les blocs Gutenberg existants et la migration de confidentialité ne remplace qu'une phrase précise, différente de celle encore publiée.

Action : préparer les textes définitifs avec les coordonnées exactes, les faire valider par le responsable de publication, puis corriger les deux pages en base en conservant leurs révisions. Vérifier ensuite leur HTML public. Les obligations d'information sur les traceurs sont documentées par la [CNIL](https://www.cnil.fr/fr/cookies-et-autres-traceurs/que-dit-la-loi).

Repères : [migration de contenu](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/inc/content.php:268), [migration de confidentialité](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/inc/analytics.php:65), [texte de l'hébergeur à compléter](C:/Users/absys/Desktop/projects/gruissan-balneo-site/pages/mentions-legales.html:120).

### 2. P1 : les informations d'accueil ne suivent pas le planning

Le 8 septembre, l'accueil affiche toujours le bandeau autorisant les mineurs toute la journée du 27 juin au 30 août, les stages d'été dans la rubrique « En ce moment » et une pastille générale « Ouvert 7j/7 ». Le calendrier du même jour n'affiche que For.Me. Les règles du lendemain présentent bien les horaires Balnéo et les conditions d'accès des mineurs propres à la rentrée.

Le calendrier fonctionne, mais les informations sont maintenues séparément dans l'accueil. Un visiteur peut se fier au bandeau le plus visible et préparer sa visite avec une information périmée.

Action : dater les annonces avec une expiration, remplacer le bandeau d'été et préciser à quel espace se rapporte le 7j/7. Raccorder si possible les informations d'ouverture de l'accueil au planning validé. Ne pas inventer de créneaux ni déduire une fermeture du seul fait qu'une activité est masquée.

Repères : [bandeau](C:/Users/absys/Desktop/projects/gruissan-balneo-site/index.html:104), [pastille](C:/Users/absys/Desktop/projects/gruissan-balneo-site/index.html:125), [actualités](C:/Users/absys/Desktop/projects/gruissan-balneo-site/index.html:253).

### 3. P1 : la newsletter confirme une inscription sans créer d'abonnement

Le traitement appelle uniquement `wp_mail()` vers l'adresse d'administration. Il ne crée ni abonné dans une liste ni enregistrement durable de la demande dans une base dédiée. Le message « Merci pour votre inscription ! » dépend du retour de `wp_mail()`, qui ne prouve pas la réception du message. Voir la [documentation WordPress](https://developer.wordpress.org/reference/functions/wp_mail/).

Cela peut correspondre à un traitement manuel voulu, mais ce processus n'est pas expliqué au visiteur et sa prise en charge n'a pas été vérifiée. L'inventaire WordPress ne montre qu'une extension active, Balnéo Médias, et aucune intégration newsletter.

Action : définir le processus cible. Pour une inscription automatique, connecter la liste utilisée par l'équipe, gérer les erreurs et doublons, et conserver la preuve de consentement nécessaire. Pour un traitement manuel, afficher « Demande transmise » et définir qui la traite. Tester ensuite une vraie inscription autorisée jusqu'à sa réception et sa présence dans la liste. Ce test d'envoi n'a pas été réalisé pendant l'audit.

Repère : [traitement de la newsletter](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/inc/forms.php:116).

### 4. P2 : la protection contre les envois répétés est contournable en changeant d'adresse

La clé de limitation associe l'e-mail et l'adresse IP. Depuis une même IP, chaque nouvelle adresse e-mail obtient donc un compteur indépendant. Le formulaire public fournit un nonce, mais celui-ci n'est pas une protection contre un robot capable de lire le formulaire et de laisser le champ piège vide.

Action : cumuler une limite par origine de requête, une limite par destinataire et éventuellement un plafond global, avec un mécanisme fiable sous concurrence. Tenir compte du proxy réellement configuré avant de déterminer l'IP. Aucun envoi massif ni test de charge n'a été effectué. L'effet d'un éventuel filtrage OVH en amont n'a pas été mesuré.

Repère : [clé et délai anti-abus](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/inc/forms.php:95).

### 5. P2 : le lien d'évitement ne fonctionne sur aucune des 26 pages

Le lien « Aller au contenu principal » vise `#contenu-principal`, mais cet identifiant manque dans le HTML des 26 pages publiques auditées. Le navigateur confirme aussi l'absence de cible après exécution de JavaScript. Le contrôle existant vérifie la présence du lien dans le thème et des ancres dans les contenus sources, pas leur présence dans le rendu WordPress réel.

Action : garantir une cible unique et utilisable au clavier dans le rendu effectif des pages existantes. Ajouter une vérification sur le HTML rendu et sur le déplacement du focus.

Repères : [lien du header](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/header.php:23), [contrôles actuels](C:/Users/absys/Desktop/projects/gruissan-balneo-site/scripts/audit-wordpress-theme.js).

### 6. P2 : les nouvelles pages WordPress ordinaires n'ont pas de structure garantie

Dans `page.php`, dès que le contenu est non vide, le thème affiche directement `the_content()`. Il suppose que le contenu contient lui-même le titre H1 et la zone principale. Une page créée normalement dans Gutenberg peut donc perdre ces repères.

Reproduction existante : la [Page d'exemple](https://balneov2.gruissan-balneo.com/page-d-exemple/) répond en 200 avec zéro H1 et zéro élément `main`. Aucun contenu de test n'a été créé pour le constater.

Action : réserver un gabarit explicite aux pages historiques qui embarquent toute leur structure et fournir un gabarit WordPress normal pour les nouvelles pages, avec titre et `main`. Retirer de la publication les contenus de démonstration après validation éditoriale. L'[article Bonjour tout le monde](https://balneov2.gruissan-balneo.com/2026/08/26/bonjour-tout-le-monde/) et son commentaire de démonstration sont également encore publics.

Repère : [branche de rendu des pages](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/page.php:20).

### 7. P2 : la recherche rate des demandes évidentes

La recherche interne utilise une liste fixe de 19 intitulés. Elle ne recherche ni dans les contenus WordPress ni dans une liste de synonymes. « piscine » retourne zéro résultat, alors que le champ propose explicitement ce terme dans son exemple. « balneo » ne bénéficie pas non plus d'une normalisation des accents.

Action : utiliser la recherche WordPress avec un périmètre éditorial adapté, ou alimenter un index qui inclut titres, mots utiles et synonymes. Vérifier notamment piscine, balneo, bébé, sauna et horaires.

Repère : [index et filtrage](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/js/main.js:246).

### 8. P2 : les fenêtres de recherche et favoris laissent sortir le focus

Elles portent `aria-modal="true"`, mais la navigation Tab continue vers l'arrière-plan. Reproduction : ouvrir la recherche, parcourir les résultats jusqu'à Contact, puis Tab. Le focus arrive sur le bouton Cookies extérieur à la fenêtre. Le dialogue n'a pas non plus de nom accessible relié à son titre.

Action : nommer le dialogue, gérer le focus à l'ouverture et à la fermeture, maintenir Tab dans la fenêtre et rendre l'arrière-plan inerte pendant son ouverture. Référence : [modèle de dialogue modal W3C](https://www.w3.org/WAI/ARIA/apg/patterns/dialog-modal/).

Repère : [création du dialogue](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/js/main.js:185).

### 9. P2 : la barre latérale recouvre le titre d'accueil

À une largeur de fenêtre de 1280 px, la barre fixe couvre les 54 premiers pixels, alors que le contenu du héros débute à environ 32 px. Le recouvrement du début du titre est visible et confirmé par les positions des éléments. Ce contrôle visuel utilisait la session connectée, avec la barre d'administration WordPress.

Action : réserver la place de la barre latérale dans les marges des contenus aux largeurs concernées, ou adapter son implantation. Contrôler les titres, les liens et les champs de formulaire dans ces largeurs.

Repères : [barre latérale](C:/Users/absys/Desktop/projects/gruissan-balneo-site/css/styles.css:344), [marge du héros](C:/Users/absys/Desktop/projects/gruissan-balneo-site/css/styles.css:387).

### 10. P2 : le carrousel saisonnier ne propose pas de pause

Le script fait tourner les saisons toutes les six secondes. Il respecte la préférence système de réduction des animations, mais ne prévoit ni bouton pause ni arrêt au focus ou au survol. Une personne qui lit ou parcourt une carte au clavier peut voir son contenu disparaître.

Action : proposer une pause accessible, arrêter la rotation pendant l'interaction et ne pas la relancer automatiquement après un choix manuel. Référence : [carrousels accessibles W3C](https://www.w3.org/WAI/ARIA/apg/patterns/carousel/).

Repère : [rotation du carrousel](C:/Users/absys/Desktop/projects/gruissan-balneo-site/wordpress-theme/balneo-v2/js/main.js:489).

## Sécurité et exploitation

Les protections observées sont utiles : contrôle des droits et des nonces dans le planning, validation des données, requête SQL préparée, prévention des écrasements concurrents, échappement HTML, vérification des URL et SFTP avec empreinte du serveur imposée. Le déploiement vérifie l'intégrité et remplace chaque fichier atomiquement. Son atomicité est par fichier, pas pour toute la version du site.

Le serveur renvoie HTTPS avec redirection depuis HTTP, `nosniff`, `SAMEORIGIN`, `Referrer-Policy` et `Permissions-Policy`. Aucune politique CSP ni HSTS n'a été observée sur la réponse publique d'accueil. Ce sont des possibilités de durcissement à préparer au niveau de l'hébergement avec les dépendances réelles du site, pas la preuve d'une compromission.

L'administration expose encore les éditeurs de fichiers PHP des thèmes et extensions. Avec un déploiement GitHub/SFTP, je recommande de désactiver cette voie d'édition en configurant `DISALLOW_FILE_EDIT`, comme décrit par [WordPress](https://developer.wordpress.org/advanced-administration/security/hardening/). Akismet et Hello Dolly sont installés mais inactifs. Leur retrait relève du nettoyage de l'installation.

Les sauvegardes hors site, un test de restauration, les protections de connexion et la configuration des comptes restent à vérifier au niveau de l'exploitation. L'absence d'une extension de sauvegarde ou de sécurité ne prouve pas l'absence de protection chez l'hébergeur. Aucun audit des secrets de production, du système de fichiers distant ou des journaux serveur n'a été effectué.

Le gestionnaire de cookies passe ses tests de refus initial, choix granulaire et réouverture. Le retrait du consentement après chargement effectif de Google doit encore être vérifié avec une capture réseau : le script met le consentement à jour, mais ne décharge pas le code Google déjà exécuté. La [documentation Google](https://developers.google.com/tag-platform/security/concepts/consent-mode?hl=en) distingue les comportements des balises bloquées de ceux des balises chargées avec consentement refusé. Aucun comportement réseau illicite n'est affirmé ici.

## Performance, référencement et finition

La santé WordPress indique « Bien », aucune anomalie critique et cinq recommandations : extensions inactives, thèmes inactifs, indexation découragée, OPcache absent et cache de pages non détecté. Les réponses HTML des 26 pages ont pris environ 0,23 à 0,70 seconde depuis l'environnement de contrôle, corps compris. Ce ne sont ni des Core Web Vitals ni des mesures sur connexion mobile.

Activer OPcache et préparer un cache de pages adapté serait utile. Attention : le planning change selon le jour à Paris et la newsletter inclut un nonce. Les durées de cache et invalidations devront respecter ces deux contraintes. La compression gzip est active. Le cache HTTP des CSS/JS observés est de quinze minutes ; une durée plus longue peut être envisagée avec une stratégie fiable de versionnement.

Les 26 pages contiennent des titres SEO, descriptions, URL canoniques et un seul H1. Leurs robots indiquent tous `noindex, nofollow`. Le sitemap WordPress répond actuellement en 404. L'administration confirme que les moteurs sont volontairement découragés. Cela convient à une V2 de préparation ; au lancement, il faudra valider le domaine définitif, le plan de redirections depuis l'ancien site, l'indexation et le sitemap. Les seules redirections présentes dans le thème concernent les anciennes URL de la maquette `/pages/*.html` et `/index.html`, ce qui ne constitue pas un audit des URL du site historique.

La charte est cohérente, les photographies sont pertinentes et le calendrier mobile est lisible dans les tailles vérifiées. L'interface accumule cependant plusieurs commandes fixes : achat, barre pratique, cookies et retour en haut. Leur recouvrement doit être contrôlé au-delà du seul calendrier. Les contenus publics comportent encore des tirets Unicode U+2014, contrairement à la convention demandée, ainsi que des traces éditoriales de prototype. La page Brochures fournit des guides web et renvoie à l'accueil pour une version imprimable ; elle ne livre pas de PDF directement.

## Résultats techniques reproductibles

| Vérification | Résultat du 8 septembre |
| --- | --- |
| Alignement GitHub | `master` local et distant à `2b3cb195d32123183a07b7d641a74c0b549105fc`, dépôt initialement propre |
| Dernier déploiement | Exécution GitHub `33871180423` réussie ; seule la documentation diffère entre son commit et HEAD |
| Reconstruction isolée | Génération statique, thème, formatage PHP et catalogue de traduction reproduisent les fichiers du thème, hors fins de lignes Windows |
| Liens statiques | 26 pages passent le contrôle existant ; celui-ci ne valide pas les cibles des fragments |
| Assets locaux | 70 fichiers livrés identiques aux sources |
| Calendrier | 21 tests réussis |
| Administration du planning | Tests PHP et JS réussis : autorisations, CSRF, validation, conflits, persistance simulée et interface |
| Déploiement SFTP | 12 tests réussis |
| Contrôle de l'audit de dépendances | 3 tests réussis, dont réponses incomplètes et service indisponible |
| Consentement | Test existant réussi |
| WordPress Coding Standards | 54 fichiers contrôlés, aucun écart |
| Syntaxe PHP | 55 fichiers du thème et du plugin valides ; contrôle local avec PHP 8.4 |
| Audit structurel interne | Réussi, avec les limites de couverture signalées ci-dessus |
| Dépendances npm | OSV : 364 versions vérifiées, aucune vulnérabilité connue signalée |
| Dépendances PHP | 5 versions du verrou vérifiées contre les avis Packagist ; aucun des avis retournés ne couvre les versions verrouillées |
| Pages publiques | 26 pages métier en HTTP 200, sans ID dupliqué ni image dépourvue d'attribut alt dans le HTML contrôlé |
| Ressources publiques | 22 URL uniques `src`/CSS/JS contrôlées, toutes en 200 ; pas un inventaire exhaustif des variantes `srcset` et ressources CSS |
| Fichiers publics comparés | Identiques aux fichiers locaux contrôlés ; CSS et JS principal identiques après normalisation CRLF/LF |
| Page absente | Vrai statut HTTP 404 |
| Billetterie | Accueil Horanet en HTTP 200 ; achat et paiement non testés |
| Parcours navigateur | Menu mobile vers Horaires, changement de date, ajout/retrait d'un favori fonctionnels ; recherche et focus avec défauts décrits |
| Tailles vérifiées | Calendrier à 320 et 390 px sans débordement horizontal ; accueil à 1280 px avec recouvrement de la barre latérale |
| Mises à jour WordPress | Administration : WordPress 7.1, extensions, thèmes et traductions à jour ; mises à jour majeures automatiques actives |

Les contrôles locaux reposant sur un lancement PHP ont été relancés avec succès après une restriction d'exécution du bac à sable. Leurs premières erreurs `EPERM` ne provenaient pas du site. La commande Composer n'étant pas disponible dans le PATH, les avis des cinq dépendances PHP ont été consultés directement auprès de Packagist ; ce résultat n'est pas présenté comme une exécution de `composer audit`.

Les copies HTTP et résultats JSON sont conservés dans le dossier local ignoré [preuves de l'audit](C:/Users/absys/Desktop/projects/gruissan-balneo-site/tmp/audit-2026-09-08/live.json). La reconstruction a été réalisée dans un autre dossier temporaire, sans modifier les sources auditées.

## Ordre de traitement proposé

1. Finaliser les pages légales publiées, les informations d'accueil et le fonctionnement réel de la newsletter.
2. Corriger la limitation d'envoi, les cibles d'évitement, les gabarits de nouvelles pages, la recherche, les dialogues et les recouvrements.
3. Compléter les vérifications de sauvegarde/restauration, de connexion, de consentement réseau et d'exploitation ; activer les optimisations serveur adaptées.
4. Préparer le lancement : contenus de démonstration, domaine et redirections, indexation/sitemap, vérification finale des tarifs et horaires par l'équipe métier, recette d'inscription et de billetterie autorisée.

Le socle mérite d'être conservé. La priorité est de réconcilier les contenus réellement publiés avec le code, puis de compléter la recette des parcours utilisateurs et les protections d'exploitation.
