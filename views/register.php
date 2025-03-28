<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="icon" href="data:,">
  <title>Simple Sidebar - Messagerie</title>
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="../css/styles.css" rel="stylesheet" />
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../js/scripts.js" defer></script>
  <title>Inscription</title>
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
                  <a class="dropdown-item" href="../controllers/logoutController.php">Ce déconnecter</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Page content-->
      <div class="container-fluid">
        <h1>Inscription</h1>
        <form class="formulaire" action="../models/registerPost.php" method="POST">
          <label for="name">Nom :</label>
          <input type="text" name="name"><br><br>

          <label for="surname">Prenom :</label>
          <input type="text" name="surname"><br><br>

          <label for="pseudo">Pseudo :</label>
          <input type="text" name="pseudo"><br><br>

          <label for="email">Adresse email :</label>
          <input type="email" name="email" required><br><br>

          <label for="password">Mot de passe :</label>
          <input type="password" name="password" required><br><br>

          <input type="submit" value="S’inscrire">
        </form>
      </div>
    </div>
  </div>
  <footer>
    <p>@made with enjoy by P.R 2025</p>
  </footer>
</body>

</html>