Informations concernant le portfolio et la base de données
 
Plusieurs d'entre vous m'ont demandé ce qu'il fallait mettre en base de données pour le portfolio. Voici globalement ce qui serait suffisant pour ce projet :
 
Il n'est pas nécessaire de stocker dans la DB :

	le contenu du menu de navigation, le code PHP sera intégré toutes les pages
	le contenu de la page d'accueil, une page en PHP suffit
	le contenu des 2 tutoriels, 2 pages distinctes en PHP suffisent
	le CV (pas vu maintenant)

Par contre, il faudrait :

	une table pour les infos concernant les travaux
	une table pour les infos concernant les liens
	une table pour stocker les contacts entrés via le formulaire
	une table pour les utilisateurs, pour accéder à l'admin du site (pour plus tard)

Pour la table "travaux", il faudrait idéalement :

	un ID
	un titre
	une description plus détaillée
	une image d'illustration (NB: dans la DB, on stocke l'URL de l'image, pas l'image elle-même)
	une URL, pointant vers le travail

Pour la table "liens", il faudrait idéalement :

	un ID
	un titre
	une description plus détaillée
	une ou plusieurs images d'illustration (par exemple: capture d'écran, logo du site,...)
	une URL, pointant vers le site

Pour la table "contacts", il faudrait idéalement :

	un ID
	un nom (ou pseudo, ou nom&prénom,... selon votre formulaire de contact)
	un e-mail de contact
	un message
	une date

(Pour plus tard) Pour la table "utilisateurs", il faudrait idéalement :

	un ID
	un nom (ou pseudo, ou nom&prénom,... selon votre formulaire de connexion)
	un login (nom d'utilisateur)
	un mot de passe

Ceci est le minimum, je pense.
Pour ces 4 tables, vous pourrez plus tard ajouter/modifier/supprimer les données avec des CRUD sur chacune des tables.
Comme vous pouvez le constater, la structure est assez simple puisque les 4 tables ne sont pas liées entre elles, donc les requêtes ne devraient pas être très compliquées.
 
BONUS : Si vous voulez rendre le projet plus intéressant, rien ne vous empêche d'ajouter d'autres infos dans les tables. Par exemple, pour les travaux et les liens, des catégories avec une nouvelle table qui serait liée aux 2 autres, des dates, des booléens pour montrer/cacher l'élément,...
Et pour la confidentialité, les données sensibles dans les contacts et les utilisateurs pourraient être cryptées. Toute initiative est la bienvenue, mais... attention, ne voyez pas trop grand si vous voulez respecter les délais !
(faites peut-être une v1 minimaliste, pour le 20/3 et une v2 plus ambitieuse, pour après)
 
Bravo, si vous avez lu jusque ici  et bon travail !