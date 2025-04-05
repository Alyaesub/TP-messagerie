# TP - Messagerie

Objectif du projet :

Créer une application de messagerie simple et sécurisée avec :

-   Authentification des utilisateurs (requétes asynchrone)
-   Envoi et réception de messages entre utilisateurs
-   Stockage des données principales en base SQL
-   Stockage secondaire (avis utilisateurs) en NoSQL (JSON)
-   Découpage logique MVC (Modèle / Vue / Contrôleur)

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
-   Affichage des avis de l’utilisateur connecté
-   Découpage clair : logique séparée dans les contrôleurs

---

Sauvegarde de la base :

> La base peut être exportée depuis phpMyAdmin au format `.sql`
> Recommandé : inclure un fichier `tp_messagerie.sql` dans une archive ZIP du projet

---

Documentation du déploimant :

-   voir le doc DEPLOY.md

---

À faire plus tard (si évolution) :

-   Ajout de WebSocket pour messagerie en temps réel
-   Système de notifications
-   Back-office pour gérer les avis/messages
-   Sécurité avancée (hashing, tokens...)

---

🧑‍💻 Développé par Pascal – Code & Co Solutions
