<?php
// feuille de logique pour envoyer un message
session_start();
include_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['messageContent']) && isset($_POST['recipient_id'])) {
  // Récupérer l'ID de l'utilisateur connecté depuis la session
  $idUser = $_SESSION['user']['idUser'];
  // Ici, on insère le message dans la base de données
  $recipient_id = $_POST['recipient_id'];
  // Si tu utilises PDO, tu peux faire :
  $sql_insert = "INSERT INTO messages (sender_id, recipient_id, content) VALUES (:sender_id, :recipient_id, :content)";
  $stmt = $pdo->prepare($sql_insert);
  $stmt->execute([
    'sender_id' => $idUser, // ou la variable contenant l'id de l'utilisateur connecté
    'recipient_id' => $recipient_id,
    'content' => $_POST['messageContent']
  ]);
  // Redirection pour éviter une soumission multiple
  header("Location: ../views/profilUsers.php");
  exit();
}
