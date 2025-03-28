<?php
session_start();
include_once '../config/db.php';
header('Content-Type: application/json');


if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['email']) || !isset($_POST['password'])) {
  echo json_encode(['status' => 'error', 'message' => 'Requête invalide']);
  exit();
}

$response = [];

try {
  $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $emailForm = $_POST['email'];
  $passwordForm = $_POST['password'];

  if (!filter_var($emailForm, FILTER_VALIDATE_EMAIL)) {
    $response = ['status' => 'error', 'message' => "Adresse email invalide"];
    echo json_encode($response);
    exit();
  }

  $query = "SELECT * FROM users WHERE email = :email";
  $stmt = $pdo->prepare($query);
  $stmt->bindParam(':email', $emailForm);
  $stmt->execute();

  if ($stmt->rowCount() == 1) {
    $monUser = $stmt->fetch(PDO::FETCH_ASSOC);
    if (password_verify($passwordForm, $monUser['password'])) {
      $_SESSION['user'] = $monUser;
      $response = ['status' => 'success'];
    } else {
      $response = ['status' => 'error', 'message' => "Mot de passe incorrect"];
    }
  } else {
    $response = ['status' => 'error', 'message' => "Utilisateur introuvable"];
  }
} catch (PDOException $e) {
  $response = ['status' => 'error', 'message' => "Erreur : " . $e->getMessage()];
}

echo json_encode($response);
