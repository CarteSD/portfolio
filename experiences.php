<?php
require_once 'include.php';
$template = $twig->load('experiences.html.twig');
echo $template->render(array(
    'menu' => 'experiences'
));