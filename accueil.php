<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Estéban DESESSARD | Accueil</title>
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
                            <a class="nav-link active text-white" aria-current="page" href="accueil.php">Accueil</a>
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
        </nav>
    </header>

    <div class="notification" id="copyNotification">
        <p>Adresse e-mail copiée !</p>
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <main class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h2 class="pb-2">Présentation</h2>
                <p class="text-justify">
                    Bonjour !<br>
                    Je m'appelle Estéban DESESSARD, un jeune homme passionné d'informatique et plus particulièrement dans le développement. Actuellement étudiant à <a class= "redirect" href="https://www.iutbayonne.univ-pau.fr/">l'IUT de Bayonne et du Pays Basque</a>, j'acquiers des compétences solides dans différents domaines tels qu'en <span class="highlight">programmation</span>, conception de <span class="highlight">bases de données</span> et <span class="highlight">gestion de projets</span>.<br>
                    <br>
                    Cet intérêt a débuté au collège pendant le confinement lié au COVID-19, moment durant lequel j'ai voulu <span class="highlight">m'initier au développement web</span>. Cette période m'a permis de découvrir les bases de la création de sites internet et d'explorer mes capacités créatives. Au fil du temps, ma curiosité m'a également conduit à <span class="highlight">développer des bots</span> Discord en <span class="highlight">JavaScript</span> utilisant des bases de données <span class="highlight">MySQL</span>, ce qui a approfondi ma compréhension des langages de programmation et des systèmes de gestion de données.<br>
                    <br>
                    Actuellement en deuxième année de formation en <span class="highlight">BUT Informatique</span>, et suivant le parcours <span class="fst-italic">Réalisation d'Applications : Conception, Développement, Validation (RACDV)</span>, je pense réellement avoir trouvé ma vocation dans ce domaine toujours aussi <span class="highlight">intéressant et captivant</span>.<br>
                    Grâce aux différents enseignements et projets, je développe mes compétences en programmation avec la maîtrise des langages <span class="highlight"></span> ou <span class="highlight">Java</span>, tout comme en base de données avec <span class="highlight">Oracle</span> et <span class="highlight">MySQL</span>. J'ai aussi pu être initié à la <span class="highlight">gestion de projet</span> avec la <span class="highlight">méthode agile (SCRUM)</span> que nous avons du appliquée durant notre <span class="highlight">projet de réalisation d'application web</span>.<br>
                    <br>
                    🚨・Dans le but de valider ma deuxième année et de m'initier au monde professionnel de l'informatique, je suis à la <span class="highlight">recherche d'un stage de 10 semaines en entreprise</span> débutant le 7 avril 2025, et se terminant le 13 juin 2025. L'objectif est de <span class="highlight">mettre en application</span> totale les différentes compétences acquéries durant ces deux années de formation.<br>
                    <br>
                    Si mon profil vous intéresse, vous pouvez me contacter par <span class="highlight">e-mail</span> ou bien sur mon profil <a class="redirect" href="https://www.linkedin.com/in/e-desessard">LinkedIn</a>.
                </p>
            </div>
            <div class="col-md-4">
                <img src="src/Welcome-aboard-amico.svg" alt="Image de bienvenue" class="img-fluid">
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