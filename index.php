<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Ma messagerie</title>
    <link rel="icon" href="data:,">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js" defer></script>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Ma messagerie</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="views\profilUsers.php">Mon compte</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="views\login.php">Ce connecter</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="views\register.php">Créer un compte</a>
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
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="views\profilUsers.php">Mon compte</a>
                                    <a class="dropdown-item" href="views\login.php">Ce connecter</a>
                                    <a class="dropdown-item" href="views\register.php">Créer un compte</a>
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
                <h1 class="mt-4">Bienvenue sur votre messagerie</h1>
                <section class="index-presentation">
                    <p>connectez-vous a votre compte ou créer en un pour commencer</p><br>
                    <p> Découvrez notre nouvelle messagerie </p>
                </section>

            </div>
        </div>
    </div>
    <footer>
        <p>@made with enjoy by P.R 2025</p>
    </footer>
</body>

</html>