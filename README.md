# Documentation : Mini-projet CRUD avec Laravel
**Auteur** : Kaoutar Sabry  
**Date** : 6 juillet 2025  

## Introduction
Ce document présente un mini-projet CRUD (Create, Read, Update, Delete) développé avec le framework Laravel pour gérer une liste d'étudiants. L'objectif est de démontrer les fonctionnalités de base de Laravel, notamment la gestion des modèles, des migrations, des contrôleurs, des routes, et des vues Blade. Ce projet illustre comment Laravel simplifie le développement d'applications web grâce à son architecture MVC (Modèle-Vue-Contrôleur).

## Technologies utilisées
- **Framework** : Laravel 12.19.3
- **Langage** : PHP 8.2.12
- **Serveur local** : XAMPP (Apache et MySQL sur le port 3307)
- **Base de données** : MySQL
- **Frontend** : HTML, CSS (Bootstrap 5.3.0 via CDN)
- **Outils** : PowerShell, Visual Studio Code

## Étapes de développement
1. **Installation de Laravel**  
   - J'ai installé Laravel avec `laravel new etudiants` dans `C:\xampp\htdocs\etudiants`.

2. **Configuration de la base de données**  
   - J'ai configuré la connexion MySQL dans `.env` avec le port 3307 (car 3306 était occupé) :  
DB_HOST=127.0.0.1 DB_PORT=3307 DB_DATABASE=etudiants

3. **Création du modèle et de la migration**  
- J'ai généré le modèle `Etudiant` et une migration avec `php artisan make:model Etudiant -m`.
- J'ai défini les champs `nom`, `email`, et `age` dans la migration, puis exécuté `php artisan migrate`.

4. **Développement du contrôleur**  
- J'ai créé un contrôleur ressource avec `php artisan make:controller EtudiantController --resource`.
- J'ai implémenté les méthodes CRUD (`index`, `create`, `store`, `show`, `edit`, `update`, `destroy`).

5. **Configuration des routes**  
- J'ai ajouté `Route::resource('etudiants', EtudiantController::class);` dans `routes/web.php`.

6. **Création des vues Blade**  
- J'ai créé les fichiers `index.blade.php`, `create.blade.php`, `edit.blade.php`, et `show.blade.php` dans `resources/views/etudiants` avec Bootstrap pour le style.

7. **Test et débogage**  
- J'ai lancé le serveur avec `php artisan serve` et testé à `http://127.0.0.1:8000/etudiants`.
- J'ai résolu l'erreur "Class 'App\Models\Etudiant' not found" en ajoutant `use App\Models\Etudiant;` dans `EtudiantController.php`.

## Problèmes rencontrés et solutions
- **Problème 1 : Erreur "Class 'App\Models\Etudiant' not found"**  
- **Cause** : Le modèle n'était pas importé dans le contrôleur.  
- **Solution** : J'ai ajouté `use App\Models\Etudiant;` en haut du fichier `EtudiantController.php`.
- **Problème 2 : Conflit de port MySQL (3306)**  
- **Cause** : Un autre service utilisait le port 3306.  
- **Solution** : J'ai configuré XAMPP pour le port 3307 et mis à jour `.env`.

## Captures d’écran 
## Captures d’écran 
- **Figure 1 : Liste avec un étudiant**  
  ![Liste avec étudiant](captures/liste_avec_etudiant.png)  
- **Figure 2 : Ajout d’un étudiant**  
  ![Formulaire ajout](captures/formulaire_ajout.png)  
- **Figure 3 : Base de données**  
  ![Table étudiants](captures/table_etudiants.png) 

## Conclusion
Ce mini-projet m'a permis de découvrir les bases de Laravel, notamment son architecture MVC, la gestion des migrations, et l'utilisation des vues Blade. Le framework facilite le développement grâce à ses commandes artisan et sa structure organisée.

## Instructions d’installation
- `composer install`
- Configurez le fichier `.env` avec vos propres identifiants MySQL (par exemple, utilisateur et mot de passe) et utilisez le port 3307 si le port 3306 est occupé.
- `php artisan key:generate`
- `php artisan migrate`
- `php artisan serve` pour lancer l'application à `http://127.0.0.1:8000/etudiants`.