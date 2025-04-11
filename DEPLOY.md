# 🚀 Documentation de Déploiement – TP Messagerie

Cette documentation explique comment installer et déployer le projet TP-Messagerie sur un hébergement comme **O2Switch**.

---

## ✅ Pré-requis

Avant de commencer, assurez-vous que l’environnement d’hébergement possède :

-   PHP 8.1 ou supérieur
-   MySQL / MariaDB
-   Apache2
-   phpMyAdmin (facultatif mais pratique)
-   Accès FTP ou gestionnaire de fichiers via cPanel

---

## 📁 Structure du projet

Le projet est organisé comme suit :

```
TP-MESSAGERIE/
│
├── config/              → Connexion BDD
├── controllers/         → Logique métier (formulaires, traitement)
├── css/                 → Feuilles de style
├── data/                → Scripts SQL + fichier JSON
├── js/                  → Scripts JS
├── Models/              → Classe(s) liées à la base de données
├── test/                → (Optionnel)
├── views/               → Fichiers de vues HTML + PHP
├── favicon.ico
├── index.php            → Page d’accueil (point d’entrée)
└── README.md / deploiement.md
```

---

## 🔄 Étapes de déploiement

### 1. Transfert des fichiers

-   Connectez-vous à O2Switch (via FTP ou le gestionnaire de fichiers).
-   Placez **tout le contenu du dossier `TP-MESSAGERIE/`** dans le dossier `public_html/` ou un sous-dossier (`/messagerie`, par exemple).

### 2. Création de la base de données

-   Rendez-vous dans **phpMyAdmin** (via cPanel).
-   Créez une base de données (ex : `tp_messagerie`).
-   Importez le fichier `data/data.sql` pour créer les tables.

### 3. Configuration de la connexion MySQL

Dans le fichier `config/db.php`, modifiez les valeurs suivantes :

```php
$host = 'localhost';
$dbname = 'NOM_DE_TA_BASE';
$username = 'UTILISATEUR_BDD';
$password = 'MOT_DE_PASSE_BDD';
```

### 4. Vérification des droits d’accès

-   Vérifiez que les fichiers PHP sont accessibles.
-   Assurez-vous que les droits en écriture sont corrects (si avis.json est modifié).

---

## ✅ Test de bon fonctionnement

Checklist :

-   [x] Accès à la page `index.php`
-   [x] Connexion / Inscription fonctionnelle
-   [x] Envoi / réception de messages OK
-   [x] Ajout d’avis en JSON OK
-   [x] Lecture des avis OK

---

## 📦 Bonus : sécurisation

-   Penser à supprimer les fichiers inutiles (`test/`, fichiers de dev…)
-   Renforcer la validation des entrées (si évolution)
-   Mettre en place un fichier `.htaccess` si besoin (URL rewriting, protections)

---

Hébergement prévu chez **O2Switch**.
Mettre à jour ce fichier avec les **identifiants exacts** fournis par l’hébergeur (base, utilisateur, etc.) une fois le projet en ligne.

---
