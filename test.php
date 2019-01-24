<?php
// carga todas las dependencias (twig, ...)
require_once 'vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('Login');
$twig = new Twig_Environment($loader);
$error = 0; // 0


$twig->render('login.html', ['error' => $error] );
