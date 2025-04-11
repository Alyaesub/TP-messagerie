TP - Messagerie

Objectif du projet :

Le projet TP Messagerie a pour objectif de fournir une plateforme de communication simple, intuitive et efficace. Développé dans le cadre d'un TP, ce projet permet d'expérimenter des techniques modernes de développement web et la gestion des communications en temps réel.

Créer une application de messagerie simple et sécurisée avec :

-   Authentification des utilisateurs (requétes asynchrone)
-   Envoi et réception de messages entre utilisateurs
-   Stockage des données principales en base SQL
-   Stockage secondaire (avis utilisateurs) en NoSQL (JSON)
-   Découpage logique MVC (Modèle / Vue / Contrôleur)

---

profils test :
mail : alice@test.com mot de passe : password123
mail : bob@test.com mot de passe : password123
mail : satoshi@test.com mot de passe : password123

---

Technologies utilisées :

-   **PHP**
-   **SQL / MySQL**
-   **HTML / CSS / JS**
-   **NoSQL via JSON**
-   **PDO** pour la connexion sécurisée à la base
-   Hébergement prévu chez **O2Switch**

---

🔧 Installation de l’environnement

Sur O2Switch ou en local avec XAMPP/MAMP, on a besoin de :
• PHP 8.1+
• MySQL / MariaDB
• Apache2
• phpMyAdmin (facultatif mais pratique)

---

Arborescence :

```
TP-MESSAGERIE/
│
├── config/                          # ⚙️ Configuration
│   └── db.php                       # Connexion à la base de données
│
├── controllers/                    # 🧠 Contrôleurs (logique métier)
│   ├── ajouterAvis.php
│   ├── loginPostAjax.php
│   ├── logoutController.php
│   ├── registerPost.php
│   └── sendMessage.php
│
├── css/                             # 🎨 Feuilles de style
│   └── styles.css
│
├── data/                            # 📦 Données statiques
│   ├── avis.json                    # Données NoSQL
│   └── data.sql                     # Script SQL pour la BDD
│
├── js/                              # ⚡ Script JavaScript
│   └── scripts.js
│
├── Models/                          # 🗃️ Modèles (classes liées à la BDD)
│   └── MessagesController.php
│
├── test/                            # 🧪 Tests (dossier non détaillé ici)
│
├── views/                           # 👁️ Fichiers de vues (interfaces)
│   ├── login.php
│   ├── profilUsers.php
│   └── register.php
│
├── favicon.ico                      # 🌟 Icône du site
├── index.php                        # 🏁 Point d’entrée de l’application
├── README.md                        # 📘 Documentation du projet
└── deploiement.md                  # 🚀 Documentation de Déploiement – TP Messagerie
```

---

Fonctionnalités réalisées :

-   Création d'une base de données sécurisée avec utilisateurs et messages
-   Interface de messagerie avec :
    -   Envoi et réception
    -   Affichage dynamique
-   Formulaire pour laisser un **avis utilisateur** (stocké en JSON)
-   Affichage des avis de l'utilisateur connecté
-   Découpage clair : logique séparée dans les contrôleurs

---

Sauvegarde de la base :

> La base peut être exportée depuis phpMyAdmin au format `.sql`
> Recommandé : inclure un fichier `tp_messagerie.sql` dans une archive ZIP du projet

---

## 🧱 Structure technique du projet

-   **Langages utilisés** :  
    HTML / CSS / JavaScript / PHP / SQL / JSON

-   **Structure du projet** :

    -   `public/` (index.php, assets)
    -   `config/` (connexion à la BDD)
    -   `controllers/` (logique métier)
    -   `models/` (requêtes SQL)
    -   `views/` (interfaces utilisateurs)
    -   `data/` (fichier SQL + avis.json)
    -   `js/` (scripts dynamiques)
    -   `css/` (styles)
    -   `test/` (tests ou fichiers de dev)

-   **Base de données relationnelle** (MySQL) :

    -   Tables `users` et `messages` avec clés étrangères
    -   Script SQL d’initialisation dans `data/data.sql`

-   **Base de données NoSQL** :
    -   Fichier `avis.json` pour stocker les avis utilisateurs

---

## 💻 Fonctionnalités réalisées

-   ✅ Inscription et connexion des utilisateurs
-   ✅ Envoi et réception de messages
-   ✅ Interface profil avec affichage des messages
-   ✅ Ajout d’un avis personnel stocké en JSON
-   ✅ Lecture dynamique des avis avec JavaScript
-   ✅ Séparation du code en contrôleurs + vues + modèles
-   ✅ Sécurité basique (sessions, requêtes préparées)
-   ✅ Documentation complète (`README.md`, `deploiement.md`)
-   ✅ Déploiement en ligne via GitHub + O2Switch

---

## 🚀 Déploiement

-   Projet hébergé chez **O2Switch**
-   Déploiement automatisé via **GitHub**
-   Import de la base via **phpMyAdmin**
-   Configuration personnalisée dans `db.php`
-   Test complet du fonctionnement final : ✅

---

## 📦 Points sur projet

-   Projet 100% fonctionnel en local et en ligne
-   Code clair, structuré et commenté
-   Bonne séparation des responsabilités (MVC léger)
-   Gestion d'une base SQL + JSON dans le même projet
-   Déploiement (FTP, SSH, Git)
