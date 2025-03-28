<?php

session_start();
include_once '../config/db.php';

echo "Tentative de connexion avec l'utilisateur : $username";

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $emailForm = $_POST['email'];
  $passwordForm = $_POST['password'];

  // Vérifier que l'email est valide
  if (!filter_var($emailForm, FILTER_VALIDATE_EMAIL)) {
    echo "Adresse email invalide";
    exit();
  }

  //Récupérer les utilisateurs 
  $query = "SELECT * FROM users WHERE email = :email";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $emailForm);
  $stmt->execute();
  //Est-ce que l’utilisateur (mail) existe ?
  if ($stmt->rowCount() == 1) {
    $monUser = $stmt->fetch(PDO::FETCH_ASSOC);
    if (password_verify($passwordForm, $monUser['password'])) {
      // Stocker les informations de l'utilisateur en session
      $_SESSION['user'] = $monUser;
      // Redirection vers la page du compte
      header("Location: /views/profilUsers.php");
      exit();
    } else {
      echo "Mot de passe incorrect";
    }
  } else {
    echo "Utilisateur introuvable, êtes-vous sûr de votre mail ?";
  }
} catch (PDOException $e) {
  echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
