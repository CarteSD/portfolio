<?php
require_once 'include.php';
$template = $twig->load('contact.html.twig');
echo $template->render(array(
    'menu' => 'contact'
));