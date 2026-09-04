# Module Planning / Horaires

La page statique Horaires présente un calendrier mensuel et les cartes du jour.
Le thème WordPress propose le même module via le shortcode `[balneo_daily_schedule]`.
Le module est intégré au thème sur mesure ; Agitéo désigne uniquement sa charte graphique.

## Utilisation par l’équipe

Après publication du thème, les administratrices et éditrices trouvent un menu
**Planning / Horaires** dans WordPress (droit `edit_pages`).

1. Cliquer sur **Modifier** ou **Ajouter une activité**.
2. Renseigner le nom, la thématique, le lien facultatif et l’ordre d’affichage.
   Les couleurs, le libellé d’univers et l’icône sont automatiques.
3. Saisir les informations habituelles : horaires ou texte comme « Sur rendez-vous »,
   précision courte et note. Pour un cours limité à certains jours, choisir
   **Ne pas afficher la carte** par défaut.
4. Ajouter des **périodes / récurrences** : dates de début et de fin incluses, jours
   et mois concernés. Une sélection vide signifie tous les jours / tous les mois.
   Les critères renseignés se combinent.
5. Ajouter des **exceptions à une date précise**, notamment pour un jour férié,
   une annulation ou des horaires ponctuels. Les exceptions sont prioritaires sur
   les périodes ; entre règles du même type, la dernière correspondante gagne.
6. Cocher **Afficher cette activité sur le site**, puis **Enregistrer l’activité**.

Une activité désactivée reste en base et peut être réactivée. Retirer une règle
dans le formulaire ne devient effectif qu’après enregistrement. Une nouvelle activité
est désactivée et masquée hors programmation par défaut, pour laisser le temps de la préparer.

Les dates impossibles, intervalles inversés, liens non HTTP(S), formulaires tronqués
et fiches périmées sont refusés sans remplacer le planning enregistré. Les champs
validés restent disponibles après une erreur. En cas de modification concurrente,
recharger la fiche enregistrée avant de réappliquer ses changements. La vérification
de version est optimiste ; elle n’est pas un verrou d’édition temps réel.

L’administration nécessite une session WordPress autorisée et un jeton anti-CSRF.
Les modifications sont lues au rendu public sans reconstruction du thème. Si un cache
de page externe est installé ultérieurement, il faudra le purger après modification.
L’aperçu HTML local reste une maquette : il ne contient pas l’administration WordPress.

## Installer sur une page WordPress existante

Dans Gutenberg, remplacer l’ancien groupe d’horaires par un bloc **Code court** contenant
`[balneo_daily_schedule]`, puis prévisualiser et enregistrer. Le titre et l’image de la
page restent inchangés. Une seule instance du module par page est prévue.

Les nouveaux contenus initiaux et le gabarit de secours utilisent déjà le module.
Le déploiement du thème ne remplace volontairement pas le contenu d’une page existante
en base : les modifications éditoriales sont préservées.

## Données et maintenance

Les données de production sont enregistrées dans l’option WordPress `balneo_v2_schedule`,
sans chargement automatique global. Elle contient la version du format, les activités,
la date de sauvegarde et l’identifiant de la dernière personne ayant enregistré.

`data/horaires.json` alimente uniquement la maquette statique et les valeurs initiales,
copiées dans `inc/schedule-defaults.json` à la génération. Au premier enregistrement,
les cartes initiales sont conservées avec l’activité modifiée. Les générations et
déploiements suivants ne remplacent jamais l’option enregistrée, même si toutes les
activités sont désactivées ou si le planning est vide. Aucun accès public au site
ne déclenche d’écriture d’initialisation.

Le code est séparé dans `inc/schedule-data.php` (lecture et validation),
`inc/schedule-admin.php` (formulaires et sauvegarde), et `inc/schedule.php` (rendu public).
Les fichiers JS/CSS de l’admin ne sont chargés que sur l’écran Planning.

Chaque entrée donne une carte : `id`, `theme`, `category`, `title`, `icon`, `url`,
un état `default` et des `rules`. Les thèmes disponibles sont `balneo` (bleu), `sport`
(vert), `aquatique` (corail), `soins` (rose), `parc` (jaune).

Un état contient `time`, `status`, `note`, éventuellement `closed` ou `hidden`.
Une règle peut cibler `startDate` et `endDate` (bornes inclusives, format `YYYY-MM-DD`),
`dates` (dates précises), `months` (1–12) et `weekdays` (0 = dimanche, 1 = lundi, etc.).
Ces critères se combinent. Les règles correspondantes s’appliquent dans l’ordre ;
placer les exceptions après les récurrences. `closed` change l’état visuel mais conserve
la carte ; renseigner aussi un texte explicite, par exemple `time: "Fermé"`.

Exemple fictif, à ne pas publier sans validation de l’accueil :

```json
{
  "id": "aquagym-matin",
  "theme": "aquatique",
  "category": "Pratiquer",
  "title": "Aquagym",
  "icon": "fa-person-swimming",
  "url": "aquagym.html",
  "default": { "hidden": true },
  "rules": [
    {
      "startDate": "2026-09-01",
      "endDate": "2026-09-30",
      "weekdays": [1, 3, 5],
      "hidden": false,
      "time": "09h30–10h15",
      "status": "Sur inscription",
      "note": "Exemple uniquement : créneau à valider."
    },
    { "dates": ["2026-09-16"], "hidden": true }
  ]
}
```

### Préréglages vérifiés le 4 septembre 2026

Les horaires ont été recoupés avec les pages officielles publiques, puis saisis
dans l’admin WordPress. Toutes les cartes restent masquées par défaut ; leurs règles
éditables déterminent les jours d’affichage, sans condition métier dans le JavaScript.

- For.Me : 6h–23h tous les jours, dernier accès 22h.
- Balnéo : lun./mer./ven. 10h–19h ; jeu. 10h30–13h30 et 16h–20h ;
  sam. 10h–20h ; dim. 10h–17h30. Aucune carte le mardi.
- Aquagym : lun. 15h ; mer./jeu. 9h45 ; ven. 11h15 ; sam. 10h (45 min).
- Aquabike : lun. 9h45 et 18h ; mer. 18h ; ven. 15h ; sam. 11h (45 min).
- Aquapalmes : lun./jeu. 9h45 et mer. 18h (45 min).
- Circuit aquatraining : ven. 12h30–13h15.
- Bébés nageurs : dim. 9h15–10h ; jardin aquatique : sam. 9h15–10h.
- Natation : reprise le **9 septembre** ; créneaux distincts lun./mer./jeu./ven.
  avec les niveaux indiqués dans les notes des règles.
- Parc été : période exacte **27 juin–30 août 2026**, 11h–18h, sans récurrence annuelle implicite.
- Massages : fiche conservée mais masquée ; réservation attestée, disponibilité
  quotidienne non publiée. L’accueil doit renseigner les périodes proposées.

Les nouvelles règles de rentrée sont volontairement bornées au **16 octobre 2026 inclus**,
avant les vacances de Toussaint. C’est une limite de programmation prudente, pas une
annonce de fermeture : **l’équipe doit préparer les périodes suivantes**. Aucun planning
de vacances ni reprise ultérieure n’est déduit automatiquement. La natation n’est pas
proposée pendant les vacances scolaires ; les cours aquatiques excluent les jours fériés.
La période initiale retenue ne comporte aucun jour férié national.

Sources consultées :

- [Balnéo : calendrier interactif et accès](https://gruissan-balneo.com/balneo/)
  et [Gruissan Tourisme : horaires saisonniers](https://www.gruissan-mediterranee.com/equipement-loisir-gruissan/espace-balneoludique/).
- [Activités de septembre à juin : tableau et niveaux](https://gruissan-balneo.com/activites-aquatiques/).
- [Annonce de rentrée natation](https://gruissan-balneo.com/actualites/inscriptions-aux-cours-de-natation-a-lannee/).
- [For.Me](https://gruissan-balneo.com/salle-de-sport/), [parc été](https://gruissan-balneo.com/parc-ete/),
  [massages](https://gruissan-balneo.com/massages/).
- [Calendrier scolaire 2026–2027](https://www.education.gouv.fr/calendrier-scolaire-toutes-les-dates-des-cours-et-des-vacances-100148).

Les horaires habituels ne constituent pas une confirmation d’ouverture exceptionnelle.
Les petits textes gardent un contraste d’au moins 4,5:1 ; titres, horaires et grandes
icônes sont blancs sur bleu/vert/corail (au moins 3:1), foncés sur rose/jaune.

## Regénérer et contrôler

```sh
npm run build:static
npm run build:wordpress
npm run check:horaires
npm run check:planning-admin
npm run check:links
npm run audit:wordpress
```

Le jour initial est calculé dans le fuseau Europe/Paris. Le calendrier démarre le lundi,
gère les années bissextiles et permet la navigation au clavier (flèches, Début/Fin,
Page précédente/suivante, Entrée/Espace pour sélectionner). Sans JavaScript, les
informations générales restent lisibles, sans prétendre présenter un jour précis.
