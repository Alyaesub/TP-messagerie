TP - Messagerie

Objectif du projet :

Créer une application de messagerie simple et sécurisée avec :

-   Authentification des utilisateurs
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

Arborescence simplifiée :

```
/config/          → Connexion à la base de données
/controllers/     → Fichiers métiers (messagesController.php, etc.)
/models/          → Traitement des formulaires (login, envoi, avis)
/views/           → Pages visibles (profil, login, register...)
/data/            → Fichier JSON pour les avis (avis.json)
/css/ et /js/     → Styles et scripts
index.php         → Page d'accueil ou redirection
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

À faire plus tard (si évolution) :

-   Ajout de WebSocket pour messagerie en temps réel
-   Système de notifications
-   Back-office pour gérer les avis/messages
-   Sécurité avancée (hashing, tokens...)

---

Réalisé par

Pascal Reynier  
Mars 2025  
Dans le cadre du TP - Gestion Base de Données
