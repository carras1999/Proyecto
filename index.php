<?php
session_start();

require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


if (isset($_SESSION['user'])) {
    
    echo $twig->render('index.html', ['user' => $_SESSION['user']] );
} else{    
    echo $twig->render('index.html');
}