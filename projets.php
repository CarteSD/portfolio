<?php
require_once 'include.php';
$template = $twig->load('projets.html.twig');
echo $template->render(array(
    'menu' => 'projets'
));