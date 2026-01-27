# TifawinSouk E-com

## 📌 Présentation du projet
**TifawinSouk E-com** est une application web e-commerce simple développée avec **Laravel**, destinée à accompagner la digitalisation d’une PME marocaine spécialisée dans le commerce local.

L’application se compose :
- d’un **back-office sécurisé** permettant à l’administrateur de gérer le catalogue (catégories et produits),
- d’une **interface publique minimale** permettant aux clients de consulter les catégories et les produits.

Le projet adopte l’architecture **MVC** du framework Laravel et respecte les bonnes pratiques de développement web.

---

## 🎯 Objectifs
- Permettre au **personnel administratif** de gérer facilement les catégories et les produits (CRUD).
- Offrir aux **clients** une interface simple pour :
  - parcourir les catégories,
  - consulter les listes de produits,
  - afficher les détails d’un produit.

---

## ⚙️ Fonctionnalités principales

### 🔐 Authentification
- Authentification sécurisée pour l’accès au back-office (administrateur).
- Accès protégé via middleware.

### 🗂️ Gestion des catégories (Back-office)
- Création, modification, suppression et affichage des catégories.
- Champs principaux :
  - `id`
  - `nom`
  - `slug`
  - `description`

### 📦 Gestion des produits (Back-office)
- Création, modification, suppression et affichage des produits.
- Champs principaux :
  - `id`
  - `nom`
  - `référence`
  - `description courte`
  - `prix`
  - `stock`
  - `categorie_id`
  - `image`

### 🌐 Interface publique
- Liste des catégories.
- Liste des produits par catégorie (pagination simple).
- Page détail d’un produit.

### ✅ Validation & UX
- Validation côté serveur (Laravel Validator).
- Gestion des erreurs et messages de succès.
- Upload basique d’images produits via `storage`.

---

## 🛠️ Technologies utilisées
- **Framework** : Laravel (version stable)
- **Template Engine** : Blade
- **Base de données** : MySQL / MariaDB
- **Authentification** : Laravel Breeze / UI
- **Frontend** : HTML, CSS, JavaScript
- **Architecture** : MVC

---

## 👤 User Stories

- En tant qu’administrateur, je peux me connecter pour accéder au back-office.
- En tant qu’administrateur, je peux créer, modifier et supprimer une catégorie.
- En tant qu’administrateur, je peux créer, modifier et supprimer un produit.
- En tant qu’utilisateur public, je peux consulter les catégories.
- En tant qu’utilisateur public, je peux voir les produits d’une catégorie.
- En tant qu’utilisateur public, je peux consulter le détail d’un produit.

---

## ⭐ Bonus (optionnel)
- Utilisation de **Soft Deletes** pour les produits.
- **Seeders & Factories** pour le remplissage de la base de données.
- Recherche simple par nom de produit.
- Filtrage par catégorie.

---

## 📅 Organisation du projet
- **Travail** : Individuel
- **Durée** : 5 jours  
- **Date de lancement** : 26/01/2026 à 09:15  
- **Date limite de soumission** : 30/01/2026 à 17:30  

---

## 📦 Livrables
- Diagrammes UML (conception du projet)
- Planification des tâches (Trello / Jira)
- Présentation du projet
- Lien du repository GitHub (code source)

---

## 🧪 Critères de performance
1. Bonnes pratiques CRUD avec Laravel
2. Validation des formulaires
3. Utilisation des Middlewares
4. Seeders et Factories
5. Optimisation des requêtes Eloquent
6. Gestion correcte des relations Eloquent
7. Soft Deletes
8. Cache des requêtes fréquentes
9. Tests de performance
10. Optimisation des vues

---

## 👨‍💻 Auteur
**Soufiane Isam**  
Formation : Développeur Web et Web Mobile (2023)

---

## 📚 Référence
Projet réalisé dans le cadre d’un brief pédagogique – Simplon Online
