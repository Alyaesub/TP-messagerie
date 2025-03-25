<?php
$host = 'localhost'; // Ou l'adresse de ton serveur MySQL
$dbname = 'tp_authentification';
$username = 'user_php';
$password = '3f7zhhRn4NH69R';
$port = "";
try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //Récupérer les utilisateurs 
  $query = "SELECT * FROM users";
  $stmt = $pdo->query($query);
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
  //Afficher les utilisateurs
  foreach ($users as $user) {
    echo "ID : " . $user['idUser'] . "<br>";
    echo "Nom : " . $user['name'] . "<br>";
    echo "Prenom : " . $user['surname'] . "<br>";
    echo "email : " . $user['email'] . "<br>";
    echo "<br>";
  }
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
