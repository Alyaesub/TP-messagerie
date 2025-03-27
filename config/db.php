<?php
$host = 'localhost'; // ou l'adresse de ton serveur MySQL
$dbname = 'TP_messagerie';
$username = 'user_php_messagerie';
$password = '3f7zhhRn4NH69R';
$port = 8889;

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion à la base de données: " . $e->getMessage());
}
