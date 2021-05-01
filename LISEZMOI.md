# Gestion des questionnaires
Cette petite application permet de faire un CRUd d'une société et d'un participant


1. Installation:
	- Télécharge le projet sur le bouton "Code" du git, puis download ZIP  
	- Extraire juste le dossiers "GestionQuestionnaire" dans le www de votre wampserver ou bien dans htdocs de Xampp si vous utiliser xampp
	- Il faut faire un "composer update" dans la source du projet.
	- créer une base de données qui s'appele `GestionQuestionnaire` dans votre SGBD ou phpmyadmin de votre wamp/xampp(http://localhost/phpmyadmin) et importer gestion_participant.sql
	- editer le fichier ".env" et changer la valeur de constant "DB_USERNAME" et "DB_PASSWORD" si vous avez un autre utilisateur que "root" avec mot de passe non-vide.
	- va dans "http://localhost/GestionQuestionnaire/public/" pour lancer l'application et choisichez l'un des onglet pour commencer.

2. *gestion_questionnaires.sql* contient la structure de la base de données(tables: "participants" et 'societes')

Structures:

3. home.blade.php: c'est la page pour la gestions des participants. C'est la partie "front-offiche" de l'application. On utilise les plugins jQuery, bootstrap, jquery.twbsPagination, toast.js, validator.js pour la verification des champs du formulaire.

4. Les dossiers:
	 - app : Contient les dossiers:

	     * Http: qui contient les controllers : 
	        - Controller.php: qui est le controller pricipale du projet.

	      * Models: contient tous les models du projet, qui nous permetent de récupérer, d'insérer et de mettre à jour des informations dans notre table de données.

	      *Repositories: contient tous les repositories, qui nous permentent de faire le traitement des données.
	 - public: contenant les plugins css et js
	 -ressources: qui contient view, c'est dans view qu'on trouve touts les pages du projet.
	 -routes: qui contient la partie routing du projet.
5. Voilà c'est parti

Remarque: 	- J'ai utilisé la framework Laravel 7
      		- Mysql pour la base de données
      		- jquery pour la partie JS
      		- Bootstrap pour la partie CSS
      		- Et aussi la librairies Datatable de laravel.