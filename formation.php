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
                        <a class="nav-link active text-white" aria-current="page" href="formation.php">Formation</a>
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
    <h2 class="pb-4">Mon parcours scolaire</h2>

    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-7">
                    <h5><a href="https://www.iutbayonne.univ-pau.fr/" class="redirect">IUT de Bayonne et du Pays Basque</a></h5>
                    <p><span class="text-decoration-underline">Diplôme :</span> BUT Informatique</p>
                </div>

                <div class="col-md-5 text-end">
                    <span class="fst-italic">Anglet, France<br>Sept. 2023 – Maintenant</span>
                </div>

                <div>
                    <p class="fw-bold text-justify">
                        Depuis 2 ans, j'ai pu<span class="fst-italic">(re)</span>découvrir les bases de l'informatique, mais surtout acquérir des connaissances profondes dans différentes domaines. Cette formation durera encore 1 an pour me permettre d'atteindre un BAC+3 et être muni de connaissances me permettant une insertion dans le monde professionnelle.
                    </p>

                    <span class="text-decoration-underline"> Compétences développées :</span>
                    <ul>
                        <li>Conception (Maquettes avec <a class="redirect" href="https://www.figma.com/">Figma</a>)</li>
                        <li>Développement (C++, Java, HTML, JavaScript sur les <a class="redirect" href="https://www.jetbrains.com/fr-fr/">IDE JetBrains</a>)</li>
                        <li>Gestion de bases de données (MySQL, Oracle)</li>
                        <li>Gestion de projet (Agilité)</li>
                        <li>Utilisation de la suite <a class="redirect" href="https://www.microsoft.com/fr-fr/microsoft-365/products-apps-services">Microsoft Office 365</a></li>
                    </ul>
                </div>

                <hr class="m-3 p-2">

                <div class="col-md-7">
                    <h5><a href="https://www.lpo-saint-exupery-parentis-en-born.com/" class="redirect">Lycée Général & Technologique Saint-Exupéry</a></h5>
                    <p><span class="text-decoration-underline">Diplôme :</span> Baccalauréat général</p>
                </div>

                <div class="col-md-5 text-end">
                    <span class="fst-italic">Parentis-en-Born, France<br>Sept. 2020 – Juin 2023</span>
                </div>

                <div>
                    <p class="fw-bold text-justify">
                        Avant de m'orienter vers une formation axée dans l'informatique, j'ai préféré passer par un baccalauréat général avec spécialité mathématiques et physique-chimie dans le but d'avoir un choix d'orientation plus large si l'informatique ne me correspondait finalement plus.
                    </p>

                    <span class="text-decoration-underline"> Compétences développées :</span>
                    <ul>
                        <li>Mathématiques</li>
                        <li>Physique-chimie</li>
                        <li>Science de l'ingénieur</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="src/Webinar-amico.svg" alt="Image de formation" class="img-fluid">
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