# eMotion

Objectifs des développeurs :

Le pôle R&D sera en charge de développer une plate-forme de location de véhicules électrique et
devra respecter un certain nombre de prérequis listés dans ce document.
Technologie

Il est nécessaire pour réaliser un projet digital de faire appel à des technologies existantes.
Néanmoins, aucune solution prête à l’emploi ne pourra être utilisée dans le cadre de cette mission.
Le choix des outils de développement sera laissé à l’appréciation des développeurs mais restera
limité aux types de technologies suivantes :

- Serveur (Nginx, Apache, Node…)
- Langage de programmation
- Framework (Backend/Frontend)
- Base de données (MySQL)

Gestion des utilisateurs

La société eMotion attache une importance à pouvoir identifier ses utilisateurs. Les informations
fournis par ses derniers permettront de :

● Réserver des véhicules disponibles ;
● Mémoriser les informations pour faciliter les prochaines locations ;
● Fidéliser le client avec des promotions relatives à ses préférences ;
● Générer des points fidélités ;
● Obtenir l'historique des commandes passées.
● ...
Définition et propriétés d'un utilisateur
● Un utilisateur est une personne physique possédant un ou plusieurs rôles. Ses rôles sont
associés à des permissions permettant d’effectuer des actions sur tout ou partie du site ;
● Une permission permet à un utilisateur d’effectuer les actions Voir, Ajouter, Modifier,
Supprimer… ;
● Un rôle est une qualité octroyée à un utilisateur.



ROLE DESCRIPTION

Anonyme : Qualité d'un utilisateur qui visite le site mais qui n'est pas connecté.

Utilisateur : Qualité d'un utilisateur connecté au site.

Propriétaire : Qualité d'un utilisateur qui possède un élément du site. Lorsqu'un utilisateur
crée un élément, il en devient automatiquement propriétaire.

Administrateur : Qualité d'un utilisateur qui peut configurer le site et accéder à toutes ses
rubriques et fonctionnalités.



Plate-forme de location

Pour bénéficier des services proposés par eMotion, un utilisateur devra être connecté par le
biais d'un identifiant et un mot de passe qu'il aura préalablement choisi lors de son inscription.
eMotion proposera à la location deux types de véhicules :

● Scooter électrique ;
● Voiture électrique.

Les offres de location seront basées sur une durée et un nombre de kilomètres. Il faudra prévoir
une pénalité financière si les limites sont dépassées par un client.

Besoins fonctionnels pour le back office

● Enregistrement des véhicules de location
○ Marque
○ Modèle
○ Numéro de série
○ Couleur
○ Plaque d'immatriculation
○ Nombre de kilomètres
○ Date d'achat
○ Prix d'achat

● Création des d'offres de location
○ Ajouter, supprimer et modifier, cacher

● Gestion Client
○ Nom
○ Prénom
○ Date de naissance
○ Adresse
○ Téléphone
○ Numéro de permis de conduire

● Gérer les locations clients (Création, Modification, Annulations)

● Prévenir par email si un véhicule n'est pas revenu dans les temps

● Vérifier la disponibilité des véhicules

● Lister les véhicules en cours de location
Besoins fonctionnels pour le client

● Afficher les offres de location disponibles

● Souscrire un contrat de location

● Alerte par email si le véhicule n'est pas rendu dans les temps

● Obtenir une facture une fois le véhicule rendu

● Afficher l'historique de toutes ses commandes

SOUTENANCE SOLO FIN AOUT
SOUTENANCE EN GROUPE DEBUT SEPTEMBRE
