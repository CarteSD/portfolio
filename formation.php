<?php
require_once 'include.php';
$template = $twig->load('formation.html.twig');
echo $template->render(array(
    'menu' => 'formation'
));