<?php
//feuille de logique pour ajouter un avis
session_start();

// Vérifie que l'utilisateur est connecté et que les champs sont bien remplis
if (!isset($_SESSION['user']) || !isset($_POST['note']) || !isset($_POST['commentaire'])) {
  header("Location: ../views/profilUsers.php");
  exit();
}

$idUser = $_SESSION['user']['idUser'];
$note = intval($_POST['note']);
$commentaire = trim($_POST['commentaire']);
$date = date('Y-m-d H:i:s');

// Construction de l'avis
$nouvelAvis = [
  'idUser' => $idUser,
  'note' => $note,
  'commentaire' => $commentaire,
  'date' => $date
];

// Fichier JSON où sont stockés les avis
$fichier = '../data/avis.json';

// S'il n'existe pas encore, on crée un tableau vide
if (!file_exists($fichier)) {
  file_put_contents($fichier, json_encode([]));
}

// On lit le fichier
$avisExistants = json_decode(file_get_contents($fichier), true);

// On ajoute le nouvel avis
$avisExistants[] = $nouvelAvis;

// On réécrit le fichier avec le nouvel avis ajouté
file_put_contents($fichier, json_encode($avisExistants, JSON_PRETTY_PRINT));

// Redirection vers le profil
header("Location: ../views/profilUsers.php");
exit();
