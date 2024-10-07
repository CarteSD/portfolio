<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Estéban DESESSARD | Expériences</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body class="container">
<header>
  <nav class="navbar navbar-expand-lg bg-dark py-10 pb-4 m-2">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="accueil.php">Accueil</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="formation.php">Formation</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link active text-white" aria-current="page" href="experiences.php">Expériences</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="projets.php">Projets</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="competences.php">Compétences</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="contact.php">Contact</a>
          </li>
        </ul>
        </ul>
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link nav-icon text-white" href="https://www.linkedin.com/in/e-desessard" target="_blank" title="LinkedIn">
              <i class="fab fa-linkedin"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-icon text-white" href="https://github.com/CarteSD" target="_blank" title="GitHub">
              <i class="fab fa-github"></i>
            </a>
          </li>
          <li class="nav-item">
            <span class="nav-link nav-icon text-white copy-icon" id="copyEmail" title="Copier l'adresse e-mail">
                <i class="fas fa-envelope"></i>
            </span>
          </li>
        </ul>
        </div>
      </div>
    </div>
  </nav>
</header>

<div class="notification" id="copyNotification">
  <p>Adresse e-mail copiée !</p>
  <div class="progress-bar" id="progressBar"></div>
</div>

<main class="container">
  <h2 class="pb-2">Mes expériences</h2>

  <div class="row">
    <div class="col-md-8">
        <div class="row">
          <div class="col-md-7">
            <h5><a href="https://www.bias-aventure.com/" class="redirect">Bias Aventure - Parc accrobranche</a></h5>
          </div>

          <div class="col-md-5 text-end">
            <span class="fst-italic">Bias, France<br>Juil. 2021 - Maintenant</span>
          </div>

          <div>
            <br>
            <p class="fw-bold text-justify">
              Depuis maintenant 4 saisons estivales consécutives, je travaille en tant qu'opérateur dans un parc accrobranche sur la côte landaise. Mes missions sont diverses et variées, il s'agit donc d'être polyvalent et surtout d'avoir une bonne interaction avec la clientèle.
            </p>

            <span class="text-decoration-underline"> Compétences développées :</span>
            <ul>
              <li>Accueil de la clientèle</li>
              <li>Gestion de la caisse</li>
              <li>Prévention au danger</li>
              <li>Travail d'équipe</li>
            </ul>
          </div>
        </div>
      </div>
    <div class="col-md-4">
      <img src="src/Team-amico.svg" alt="Image de formation" class="img-fluid">
    </div>
  </div>
</main>

<footer>
  <p>&copy; 2024 Estéban DESESSARD - Tous droits réservés</p>
  <a class ="redirect" href="https://storyset.com/people" target="_blank">People illustrations by Storyset</a>
</footer>

<script src="index.js"></script>
</body>
</html>