<?php
//Ce code sert à récupérer et vérifier les informations de l’utilisateur actuellement connecté. 
$sql = "SELECT * FROM users WHERE idUser = :idUser";
$stmt = $pdo->prepare($sql);
$stmt->execute(['idUser' => $idUser]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$user) {
  die("Utilisateur non trouvé.");
}
