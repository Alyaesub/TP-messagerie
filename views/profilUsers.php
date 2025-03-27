<?php
session_start();
include_once '../config/db.php';
// Si l'utilisateur n'est pas connecté, on le redirige vers la page de connexion
if (!isset($_SESSION['user'])) {
  header('Location: login.php');
  exit();
}
// Sinon, affichez le profil
//Ce code sert à récupérer et vérifier les informations de l’utilisateur actuellement connecté. 
$idUser = $_SESSION['user']['idUser'];
$sql = "SELECT * FROM users WHERE idUser = :idUser";
$stmt = $pdo->prepare($sql);
$stmt->execute(['idUser' => $idUser]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
  die("Utilisateur non trouvé.");
}
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
                  <a class="dropdown-item" href="../controllers/logout.php">Ce déconnecter</a>
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
            <li>Message reçu 1</li>
            <li>Message reçu 2</li>
            <li>Message reçu 3</li>
          </ul>
        </section>
        <section class="messages-envoyes">
          <h2>Messages Envoyés</h2>
          <ul>
            <li>Message envoyé 1</li>
            <li>Message envoyé 2</li>
            <li>Message envoyé 3</li>
          </ul>
        </section>
        <section class="contacts">
          <h2>Contacts</h2>
          <ul>
            <li>Contact 1</li>
            <li>Contact 2</li>
            <li>Contact 3</li>
          </ul>
        </section>
        <section class="envoyer-message">
          <h2>Envoyer un message</h2>
          <form method="POST" action="sendMessage.php">
            <div class="form-group">
              <label for="recipient">Envoyer à</label>
              <select name="recipient_id" id="recipient" class="form-control">
                <option value="">Sélectionnez un contact</option>
                <?php
                // Re-run query to get contacts for the form
                $sql_contacts_form = "SELECT DISTINCT u.* FROM users u JOIN messages m ON (u.idUser = m.sender_id OR u.idUser = m.recipient_id) WHERE u.idUser != $user_id";
                $result_contacts_form = mysqli_query($conn, $sql_contacts_form);
                while ($row = mysqli_fetch_assoc($result_contacts_form)) {
                ?>
                  <option value="<?php echo $row['idUser']; ?>"><?php echo $row['name'] . ' ' . $row['surname']; ?></option>
                <?php } ?>
              </select>
            </div>
            <div class="form-group">
              <label for="messageContent">Message</label>
              <textarea name="messageContent" id="messageContent" class="form-control"></textarea>
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