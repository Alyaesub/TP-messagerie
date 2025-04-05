<?php

//feille de gestions des classes


// Récupération des messages reçus
function getReceivedMessages($userId)
{
  global $pdo;
  $sql = "SELECT m.*, u.name AS senderName, u.surname AS senderSurname 
                FROM messages m 
                JOIN users u ON m.sender_id = u.idUser 
                WHERE m.recipient_id = :user_id 
                ORDER BY m.sent_at DESC";
  $stmt_received = $pdo->prepare($sql);
  $stmt_received->execute(['user_id' => $userId]);
  return $stmt_received->fetchAll(PDO::FETCH_ASSOC);
}

// Récupération des messages envoyés 
function getSentMessages($userId)
{
  global $pdo;
  $sql = "SELECT m.*, u.name AS recipientName, u.surname AS recipientSurname 
            FROM messages m 
            JOIN users u ON m.recipient_id = u.idUser 
            WHERE m.sender_id = :user_id 
            ORDER BY m.sent_at DESC";
  $stmt_sent = $pdo->prepare($sql);
  $stmt_sent->execute(['user_id' => $userId]);
  return $stmt_sent->fetchAll(PDO::FETCH_ASSOC);
}

//recupére uniquement les utilisateur avec qui il y a u echange de message
function getContactsConversations($userId)
{
  global $pdo;
  $sql = " SELECT DISTINCT u.* FROM users u JOIN messages m 
                                ON (u.idUser = m.sender_id AND m.recipient_id = :user_id)
                                OR (u.idUser = m.recipient_id AND m.sender_id = :user_id)
                                WHERE u.idUser != :user_id";
  $stmt_contacts_conversations = $pdo->prepare($sql);
  $stmt_contacts_conversations->execute(['user_id' => $userId]);
  return $stmt_contacts_conversations->fetchAll(PDO::FETCH_ASSOC);
}

// Récupération de tous les utilisateurs, sauf l'utilisateur connecté pour les afficher dans la section "envoyer-message" (dans le meunu deroulant) 
function getContacts($userId)
{
  global $pdo;
  $sql = "SELECT * FROM users WHERE idUser != :user_id";
  $stmt_contacts_form = $pdo->prepare($sql);
  $stmt_contacts_form->execute(['user_id' => $userId]);
  return $stmt_contacts_form->fetchAll(PDO::FETCH_ASSOC);
}
