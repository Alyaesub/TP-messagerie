<?php
//fichier qui sert a la connexion a la base de données
$host = 'localhost'; // ou l'adresse de ton serveur MySQL
$dbname = 'TP_messagerie';
$username = 'user_php_messagerie'; //name d'utilisateur que j'ai créé
$password = '3f7zhhRn4NH69R'; //password de l'utilisateur que j'ai créé
$port = 8889;

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données: " . $e->getMessage());
}
