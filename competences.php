<?php
require_once 'include.php';
$template = $twig->load('competences.html.twig');
echo $template->render(array(
    'menu' => 'competences'
));