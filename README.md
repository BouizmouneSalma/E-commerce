# E-commerce Platform

## Description
Ce projet est une version minimisée d'un site e-commerce. Il a pour objectif de concevoir et développer une plateforme e-commerce intuitive et responsive avec une gestion complète des produits, utilisateurs, commandes et paiements.

## Objectifs du Projet
- Concevoir et développer une plateforme e-commerce intuitive et responsive.
- Implémenter un système de gestion de produits (ajout, modification, suppression).
- Permettre aux utilisateurs de créer un compte et de passer des commandes en toute sécurité.
- Assurer un système de paiement en ligne sécurisé.
- Intégrer un système de gestion des stocks et des commandes.

## Fonctionnalités Principales

### Gestion des Utilisateurs
- Inscription et connexion (avec validation par email).
- Profil utilisateur avec historique des commandes.
- Système d'authentification sécurisé basé sur les sessions (Auth Session de Laravel).
- Gestion des rôles et permissions pour l'administration.

### Catalogue de Produits
- Liste des produits avec catégories et filtres.
- Détails des produits avec images, description et prix.
- Système d’évaluation et d’avis sur les produits.

### Panier et Commandes
- Ajout/suppression de produits dans le panier.
- Gestion des quantités et estimation des frais de livraison.
- Processus de commande et suivi en temps réel.

### Système de Paiement
- Intégration de passerelles de paiement (Stripe, PayPal, etc.).
- Facturation et génération de reçus.

### Administration
- Tableau de bord pour la gestion des commandes et des utilisateurs.
- Ajout, modification et suppression de produits et catégories.
- Suivi des stocks et des ventes.

## Contraintes Techniques
- **Backend :** Laravel (PHP)
- **Base de données :** PostgreSQL
- **ORM :** Eloquent
- **Moteur de template :** Blade
- **Authentification :** Auth Session de Laravel

## Installation

### Prérequis
- PHP 7.4 ou supérieur
- Composer
- PostgreSQL

### Étapes d'installation
1. Clonez le dépôt
   ```bash
   git clone https://github.com/BouizmouneSalma/E-commerce.git
   cd E-commerce
   ```

2. Installez les dépendances
   ```bash
   composer install
   ```

3. Configurez l'environnement
   - Copiez le fichier `.env.example` en `.env`
   - Mettez à jour les variables d'environnement dans le fichier `.env` pour correspondre à votre configuration de base de données PostgreSQL

4. Générez la clé de l'application
   ```bash
   php artisan key:generate
   ```

5. Exécutez les migrations pour créer les tables de la base de données
   ```bash
   php artisan migrate
   ```

6. Démarrez le serveur de développement
   ```bash
   php artisan serve
   ```

## Contribution
Les contributions sont les bienvenues ! Veuillez soumettre une pull request ou ouvrir une issue pour discuter des modifications que vous souhaitez apporter.

## Licence
Ce projet est sous licence MIT. Voir le fichier [LICENSE](LICENSE) pour plus de détails.