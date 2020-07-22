# forum

Bonjour à tous

Développement des modules.

Module 1: Authentification et connexion
1*Config de la base de données
--aller dans le dossier du projet et copier le fichier .env.example
--renommer la copie en .env et modifier les parametres suivants :
	DB_DATABASE=database_name
	DB_USERNAME=root
	DB_PASSWORD=password
--aller dans le terminal pour taper la commande
	*php artisan //pour voir la liste des commandes de laravel
	*php artisan key:generate
	*composer require --dev laravel/dusk //pour mettre à jour la liste de commandes
--aller dans xampp et créer votre database_name
--ensuite aller dans votre terminal, taperla commande
	*php artisan make:auth //pour créer la table user
