<?php
session_start();
include_once '../config/db.php';
// Si l'utilisateur n'est pas connecté, on le redirige vers la page de connexion
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  exit();
  // Sinon, affichez le profil
}
$idUser = $_SESSION['user']['idUser'];

require_once '../controllers/messagesController.php';
// Récupération des messages reçus
$messagesReceived = getReceivedMessages($idUser);

// Récupération des messages envoyés 
$messagesSent = getSentMessages($idUser);

//recupére uniquement les utilisateur avec qui il y a u echange de message
$contacts_conversations = getContactsConversations($idUser);

// Récupération de tous les utilisateurs, sauf l'utilisateur connecté pour les afficher dans la section "envoyer-message" (dans le meunu deroulant) 
$contacts_form = getContacts($idUser);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="data:,">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../css/styles.css" rel="stylesheet" />
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../js/scripts.js" defer></script>

  <title>Mon profile</title>
</head>

<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
      <div class="sidebar-heading border-bottom bg-light">Ma messagerie</div>
      <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="../index.php">Dashboard</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="profilUsers.php">Mon compte</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="login.php">Ce connecter</a>
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="register.php">Créer un compte</a>
      </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container-fluid">
          <button class="btn btn-primary" id="sidebarToggle">Reduire la barre latterale</button>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
              <li class="nav-item active"><a class="nav-link" href="../index.php">Home</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="profilUsers.php">Mon compte</a>
                  <a class="dropdown-item" href="login.php">Ce connecter</a>
                  <a class="dropdown-item" href="register.php">Créer un compte</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="../controllers/logoutController.php">Ce déconnecter</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Page content-->
      <div class="container-fluid">
        <h1>Bienvenue sur votre profile</h1>
        <?php echo "Bienvenue " . $_SESSION['user']['name'] . " " . $_SESSION['user']['surname']; ?>
        <section class="messages-recus">
          <h2>Messages Reçus</h2>
          <ul>
            <?php foreach ($messagesReceived as $msg): ?>
              <li>
                De <?php echo htmlspecialchars($msg['senderName'] . " " . $msg['senderSurname']); ?> :
                <?php echo htmlspecialchars($msg['content']); ?>
                <small>(<?php echo $msg['sent_at']; ?>)</small>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
        <section class="messages-envoyes">
          <h2>Messages Envoyés</h2>
          <ul>
            <?php foreach ($messagesSent as $msg): ?>
              <li>
                À <?php echo htmlspecialchars($msg['recipientName'] . " " . $msg['recipientSurname']); ?> :
                <?php echo htmlspecialchars($msg['content']); ?>
                <small>(<?php echo $msg['sent_at']; ?>)</small>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
        <section class="contacts">
          <h2>Contacts</h2>
          <ul>
            <?php foreach ($contacts_conversations as $contact): ?> <!-- $messagesSent  -->
              <li>
                <?php echo htmlspecialchars($contact['name'] . " " . $contact['surname']); ?>
              </li>
            <?php endforeach; ?>
          </ul>
        </section>
        <section class="envoyer-message">
          <h2>Envoyer un message</h2>
          <form method="POST" action="../models/sendMessage.php">
            <div class="form-group">
              <label for="recipient_id">Envoyer à :</label>
              <select name="recipient_id" id="recipient" class="form-control">
                <option value="">Sélectionnez un contact</option>
                <?php foreach ($contacts_form as $row): ?>
                  <option value="<?php echo htmlspecialchars($row['idUser']); ?>">
                    <?php echo htmlspecialchars($row['name'] . ' ' . $row['surname']); ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="form-group">
              <label for="messageContent">Message :</label>
              <textarea name="messageContent" id="messageContent" class="form-control">Rentrez votre message</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </section>
      </div>
    </div>
  </div>
  <footer>
    <p>@made with enjoy by P.R 2025</p>
  </footer>
</body>

</html>