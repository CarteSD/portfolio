<?php
require_once 'include.php';
$template = $twig->load('accueil.html.twig');
echo $template->render(array(
    'menu' => 'accueil'
));