<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="UTF-8">
  <title>Estéban DESESSARD | Formation</title>
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
            <a class="nav-link text-white" href="experiences.php">Expériences</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="projets.php">Projets</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link text-white" href="competences.php">Compétences</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link active text-white" aria-current="page" href="contact.php">Contact</a>
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
  </nav>
</header>

<div class="notification" id="copyNotification">
  <p>Adresse e-mail copiée !</p>
  <div class="progress-bar" id="progressBar"></div>
</div>

<main class="container">
  <h2 class="pb-4">Me contacter</h2>
    <div class="row align-items-center">
        <div class="col-md-6">
            <p class="text-justify">Si mon profil vous <span class="highlight">intéresse</span> ou si vous désirez des <span class="highlight">informations supplémentaires</span>, n'hésitez pas à me contacter par e-mail ou bien directement via ce formulaire. Je serai ravis de pouvoir vous répondre dans les plus brefs délais !</p>
            <hr>

            <form method="post" action="submit.php">
                <div class="mb-3">
                    <label for="inputIdentite" class="form-label">Votre Nom & Prénom</label>
                    <input class="form-control" id="inputIdentite" maxlength="64" required>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Votre adresse e-mail</label>
                    <input class="form-control" id="inputEmail" maxlength="128" required>
                </div>
                <div class="mb-3">
                    <label for="inputObjet" class="form-label">Objet de votre message</label>
                    <input class="form-control" id="inputObjet" maxlength="64" required>
                </div>
                <div class="mb-3">
                    <label for="inputMessage" class="form-label">Description de votre message</label>
                    <textarea class="form-control" id="inputMessage" maxlength="2048" rows="5" required></textarea>

                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">En cochant cette case, vous acceptez d'être recontacté par Estéban DESESSARD à l'adresse e-mail que vous avez renseignée ci-dessus.</label>
                </div>
                <button id="submitButton" type="submit" class="btn btn-primary w-100">Envoyer</button>
            </form>
        </div>
        <div class="col-md-6">
            <img src="src/Voice-chat-amico.svg" alt="contact">
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