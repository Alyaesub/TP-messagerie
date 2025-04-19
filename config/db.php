<?php
//fichier qui sert a la connexion a la base de données
$host = '127.0.0.1'; // ou l'adresse de ton serveur MySQL
$dbname = 'TP_messagerie';
$username = 'root'; //name d'utilisateur que j'ai créé
$password = 'root'; //password de l'utilisateur que j'ai créé
$port = 8889;

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données: " . $e->getMessage());
}
