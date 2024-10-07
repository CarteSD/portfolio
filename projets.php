<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Estéban DESESSARD | Projets</title>
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
                        <a class="nav-link active text-white" aria-current="page" href="projets.php">Projets</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="competences.php">Compétences</a>
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
    <h2 class="pb-2">Mes projets</h2>
    <p>Vous pouvez retrouver sur cette page un récapitulatif de mes projets réalisés, qu'ils soient personnels ou bien scolaires, individuel mais aussi collaboratif. La majorité de ceux-ci sont hébergés sur la plateforme <a class="redirect" href="https://github.com/CarteSD" target="_blank">GitHub</a> afin de pouvoir y consulter le code source.</p>
    <div class="container">
        <div class="row">
            <div class="card me-3" style="width: 18rem;">
                <img src="./src/portfolio.JPG" class="card-img-top mt-3" alt="portfolio">
                <div class="card-body">
                    <h5 class="card-title">Mon portfolio</h5>
                    <p class="card-text text-justify">Afin de pouvoir continuer à exploiter mes compétences en HTML, CSS & JavaScript, j'ai décidé de créer mon propre portfolio afin d'y faire ressortir ma créativité et ma simplicité.</p>
                    <a href="projets/portfolio.php" class="btn btn-primary">Voir les détails</a>
                </div>
            </div>

            <div class="card me-3" style="width: 18rem;">
<!--                <img src="" class="card-img-top mt-3" alt="lecteur de diaporama">-->
                <div class="card-body">
                    <h5 class="card-title">Lecteur de diaporama</h5>
                    <p class="card-text text-justify">Durant la SAÉ 2.01, j'ai pu réalisé avec deux autres étudiants un lecteur de diaporama en C++. Ce lecteur charge les images depuis une base de données et permet à l'utilisateur de pouvoir y naviguer.</p>
                    <a href="projets/s201-lecteur-de-diaporama.php" class="btn btn-primary">Voir les détails</a>
                </div>
            </div>
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