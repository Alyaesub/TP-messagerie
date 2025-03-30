TP - Messagerie

TP Messagerie est une application de messagerie développée dans le cadre d'un projet pratique. Elle illustre la mise en œuvre de concepts essentiels de communication en temps réel, la gestion des utilisateurs et l'échange de messages. Ce document présente une vue d'ensemble du projet ainsi que les étapes pour son installation et sa contribution.

Table des matières
• Introduction
• Fonctionnalités
• Technologies utilisées
• Installation
• Utilisation
• Contribution
• Licence
• Contact

Objectif du projet :

Le projet TP Messagerie a pour objectif de fournir une plateforme de communication simple, intuitive et efficace. Développé dans le cadre d'un TP, ce projet permet d'expérimenter des techniques modernes de développement web et la gestion des communications en temps réel.

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
-   Affichage des avis de l'utilisateur connecté
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

Installation

1. Cloner le dépôt

```bash
git clone https://github.com/votre-username/TP-messagerie.git
cd TP-messagerie
```

2. Configuration de la base de données

-   Créer une base de données MySQL
-   Importer le fichier `tp_messagerie.sql` fourni
-   Configurer les paramètres de connexion dans `/config/database.php`

3. Configuration du serveur web

-   Configurer votre serveur web (Apache/Nginx) pour pointer vers le dossier du projet
-   S'assurer que PHP est installé et configuré
-   Vérifier que les extensions PHP nécessaires sont activées (PDO, JSON)

4. Permissions des dossiers

```bash
chmod 755 /data
chmod 644 /data/avis.json
```

Utilisation

1. Accès à l'application

-   Ouvrir votre navigateur et accéder à l'URL de l'application
-   Créer un compte utilisateur via le formulaire d'inscription
-   Se connecter avec vos identifiants

2. Fonctionnalités principales

-   Envoi de messages : Cliquer sur "Nouveau message" et sélectionner un destinataire
-   Consultation des messages : Accéder à votre boîte de réception
-   Gestion du profil : Modifier vos informations personnelles
-   Avis utilisateur : Laisser un commentaire via le formulaire dédié

3. Bonnes pratiques

-   Se déconnecter après chaque session
-   Ne pas partager vos identifiants
-   Signaler tout comportement suspect

Débogage et maintenance

1. Logs

-   Les logs d'erreur sont stockés dans `/logs/error.log`
-   Activer le mode debug dans `/config/config.php` pour plus de détails

2. Problèmes courants

-   Erreur de connexion à la base de données : Vérifier les paramètres dans config/database.php
-   Problèmes de permissions : Vérifier les droits d'accès des dossiers
-   Messages non envoyés : Vérifier la configuration du serveur mail

3. Maintenance

-   Sauvegarder régulièrement la base de données
-   Vérifier les logs d'erreur périodiquement
-   Mettre à jour les dépendances si nécessaire

Licence

Ce projet est sous licence MIT. Voir le fichier `LICENSE` pour plus de détails.

Contact

Pour toute question ou suggestion concernant ce projet, n'hésitez pas à me contacter :

-   Email : votre.email@example.com
-   GitHub : [votre-username](https://github.com/votre-username)

Réalisé par

Pascal Reynier  
Mars 2025  
Dans le cadre du TP - Gestion Base de Données
