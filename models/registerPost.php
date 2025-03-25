<?php
session_start();

$host = 'localhost'; // Ou l'adresse de ton serveur MySQL
$dbname = 'tp_authentification';
$username = 'user_php';
$password = '3f7zhhRn4NH69R';
$port = 3306;

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //récupere les data du formulaire d'inscription
  $nameForm = $_POST['name'];
  $surnameForm = $_POST['surname'];
  $pseudoForm = $_POST['pseudo'];
  $emailForm = $_POST['email'];
  $passwordForm = $_POST['password'];


  //Récupérer les utilisateurs 
  $query = "SELECT * FROM users WHERE email = :email";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $emailForm);
  $stmt->execute();
  //Est-ce que l’utilisateur (mail) existe ?
  if ($stmt->rowCount() > 0) {
    die("adresse mail déja utilisé");
  }

  //hashage du mots de passe
  $hashedPassword = password_hash($passwordForm, PASSWORD_DEFAULT);
  //inserer les donné la bdd
  $inserQuery = "INSERT into users (name, surname, pseudo, email, password) VALUES (:name, :surname, :pseudo, :email, :password)";
  $stmt = $pdo->prepare($inserQuery);
  $stmt->bindParam(':name', $nameForm);
  $stmt->bindParam(':surname', $surnameForm);
  $stmt->bindParam(':pseudo', $pseudoForm);
  $stmt->bindParam(':email', $emailForm);
  $stmt->bindParam(':password', $hashedPassword);
  $stmt->execute();

  // Redirection vers le profil de l'utilisateur
  header("Location: /views/profilUsers.php");
  exit();
  echo "inscription réussi";
} catch (PDOException $e) {
  echo "Erreur lors de l'inscription  : " . $e->getMessage();
}
