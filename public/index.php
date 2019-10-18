<?php
require_once '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader('../src/View');
$twig = new Twig\Environment($loader , array('cache'=>false));
echo $twig->render('index.html.twig');


