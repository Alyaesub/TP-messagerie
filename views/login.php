<?php
session_start();
// Si l'utilisateur est déjà connecté, rediriger vers le profil
if (isset($_SESSION['user'])) {
  header('Location: /views/profilUsers.php');
  exit();
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
  <title>login</title>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../css/styles.css" rel="stylesheet" />
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../js/scripts.js" defer></script>
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
                  <a class="dropdown-item" href="#!">Mon compte</a>
                  <a class="dropdown-item" href="login.php">Ce connecter</a>
                  <a class="dropdown-item" href="register.php">Créer un compte</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Ce déconnecter</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Page content-->
      <div class="container-fluid">
        <h1>Connexion</h1>
        <form class="formulaire" id="formulaire-login" action="../models/loginPostAjax.php" method="POST">

          <label for="email">Adresse email :</label>
          <input type="email" name="email" required /> <br><br>

          <label for="password">Mot de passe :</label>
          <input type="password" name="password" required /> <br><br>

          <input type="submit" value="Se connecter" />
        </form>
      </div>
    </div>
  </div>
  <footer>
    <p>@made with enjoy by P.R 2025</p>
  </footer>
</body>

</html>