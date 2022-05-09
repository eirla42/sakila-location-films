# sakila-location-films
Le projet consiste à créer, à partir d'une page blanche, un requêteur complet pour la base de données Sakila : location de films.

## Objectifs

Le requêteur fonctionnera dans un navigateur et permettra d'interroger le contenu de la base de données (liste non exhaustive) : recherche d'un film par nom ou par catégorie, d'un acteur, de la disponibilité à la location, consultation de la fiche du film. Faites l'analogie avec le site web Allociné.

Un espace "administrateur" (login/mdp,  session PHP, cookie, lien spécifique, autre méthode) permettra d'accéder aux fonctions d'ajout, modification et suppression des données pour chaque type de données.
L'administrateur pourra manipuler la liste des adhérents, des films, des catégories, voir l'historique des locations et des paiements réalisés.

L'esthétique du site web sera libre : les données doivent être présentées de manière claire. La navigation pour le visiteur ou l'administrateur doit rester simple et cohérente. Un framework CSS (par exemple Bootstrap, Materialize, autre ) permettra de réaliser les principaux réglages.

Le contenu de vos fichiers sources html/php/css/js/... sera aussi consulté. Les éventuelles images seront correctement dimensionnées et compressées.

Un compte rendu sera attendu (liste non exhaustive) : installation, utilisation, captures d'écran (en cas de soucis lors de la correction), défis relevés et difficultés rencontrées, conclusions techniques et impressions personnelles.

## Dev init
* Installer wamp
* Mettre le projet dans le répertoire www/
* Importer les schémas puis les données dans la base de données :
  * Schémas : src/assets/sakila-db/sakila-schema.sql
  * Données : src/assets/sakila-db/sakila-data.sql


* Lancer dans le navigateur : http://localhost/sakila-location-films/src

## Auteurs
* Claude Chambéry
* Mathieu Maisonnette
* Maxime Richaudeau

## Sources

https://dev.mysql.com/doc/index-other.html
