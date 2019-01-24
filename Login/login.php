<?php
require_once '../vendor/autoload.php';
$loader = new Twig_Loader_Filesystem('/');
$twig = new Twig_Environment($loader);
//read from the formulary (login.html)
//user / password
$user = $_POST["user"];
$passwd = $_POST["pass"];
// connect to mySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
else{
//echo "Connected succesfully"."<br>";}

//select from user where
$query = "SELECT pass FROM usuarios WHERE user = '$user'";
$result = mysqli_query($conn, $query);
//var_dump($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$hash = $row[0];

/*$hash = password_hash($passwd, PASSWORD_DEFAULT);*/

if (password_verify($passwd, $hash)){
    //sesion
    session_start();
    $_SESSION['usuario'] = $user;

    header("Location: ../index.html");

} else {
    
    $error=1;
    echo $twig->render('login.html', ['error' => $error] );}