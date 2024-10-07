<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Estéban DESESSARD | Projets</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</head>
<body class="container">
<header>
    <nav class="navbar navbar-expand-lg bg-dark py-10 pb-4 m-2">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="../accueil.php">Accueil</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="../formation.php">Formation</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="../experiences.php">Expériences</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link active text-white" aria-current="page"  href="../projets.php">Projets</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="../competences.php">Compétences</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="../contact.php">Contact</a>
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
    <h2 class="pb-2">Création de mon portfolio en ligne</h2>
    <div>
        <span class="fst-italic"><span class="text-decoration-underline">Type de projet :</span> Site web personnel</span><br>
        <span class="fst-italic"><span class="text-decoration-underline">Début du projet :</span> 01 octobre 2024</span><br>
        <span class="fst-italic"><span class="text-decoration-underline">Durée du projet :</span> en cours...</span><br>
        <span class="fst-italic text-decoration-underline"><a href="https://github.com/CarteSD/portfolio" class="redirect">Lien de redirection GitHub</a></span><br>
        <br>
    </div>
    <div class="row align-items-center">
        <div class="col-md-4">
            <p class="text-justify">
                L'idée de ce projet m'est venue suite à une réflexion à propos de ma recherche de stage pour valider ma deuxième année de formation à l'IUT. Effectivement, nous étions dans la nécéssité de créer un porfolio, nous présentant sous différentes aspects afin d'appuyer et jusitifer nos compétences via les projets que nous avons pu réaliser.<br>
                <br>
                Plusieurs solutions avec plusieurs technologies s'offraient à moi : utiliser un "générateur" de site tel que <a class="redirect" href="https://fr.wix.com/">Wix</a> ou bien <a class="redirect" href="https://wordpress.com/fr/">Wordpress</a>.<br>
                Cependant, dans le but de continuer à m'expérimenter dans la création de site web en <span class="highlight">HTML & CSS</span> avec quelques animations en <span class="highlight">JavaScript</span>, j'ai préféré écrire mon site à la main en utilisant seulement le framework <span class="highlight"><a class="redirect" href="https://getbootstrap.com/">Bootstrap</a></span>.<br>
                <br>
                L'entièreté de ce projet a été réalisé sur l'IDE <span class="highlight"><a class="redirect" href="https://www.jetbrains.com/fr-fr/webstorm/">WebStorm</a></span> de la suite JetBrains et l'outil de versionning <span class="highlight"><a class="redirect" href="https://git-scm.com/">Git</a></span>.
            </p>
        </div>
        <div class="col-md-8">
            <img src="../src/code-portfolio.png" alt="code du portfolio" class="img-fluid">
            <p class="pb-3 fst-italic text-gray text-end">Le code ci-dessus peut présenté de légères différences dûes à des modifications régulières de la section.</p>
        </div>
    </div>
    <div class="row align-items-center">
        <div>
            <p class="text-justify">
                Cette création m'a permis d'approfondir ma connaissance de <span class="highlight">Bootstrap</span>, qui est un outil que nous utilisons aussi à l'IUT afin de réaliser notre projet d'application web de mini-jeux en ligne. De plus, <span class="highlight">l'utilisation de Git</span> m'a permis de pouvoir travailler depuis différentes machines sans avoir l'obligation de le transporter sur clé USB ou bien effectuer un dépôt manuel sur un Cloud.
            </p>
        </div>
    </div>
    <a href="../projets.php" class="btn btn-primary">Retourner aux projets</a>
</main>
<footer>
    <p>&copy; 2024 Estéban DESESSARD - Tous droits réservés</p>
    <a class ="redirect" href="https://storyset.com/people" target="_blank">People illustrations by Storyset</a>
</footer>

<script src="../index.js"></script>
</body>
</html>