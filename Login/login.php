<?php
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
echo "Connected succesfully"."<br>";}

//select from user where
$query = "SELECT pass FROM usuarios WHERE user = '$user'";
$result = mysqli_query($conn, $query);
//var_dump($result);
$row = mysqli_fetch_array($result, MYSQLI_NUM);
$hash = $row[0];
echo $hash;
echo "<br>".$passwd;
//if ok go to loginok.html
//$hash = password_hash($passwd, PASSWORD_DEFAULT);
//echo "<br>".$hash;
if (password_verify($passwd, $hash)){
    //sesion
    session_start();
    $_SESSION['usuario'] = $user;

    header("Location: ../index.html");

} else {
    echo "<br>"."login KO";
}
//if not ok return to login.html


/*
user - qwerty
pass - qwerty
hash - $2y$10$eF0eWvm6oRakhSb7i5UhdO9pSJMIe0FecdnNwgdHkp4

user - eustakio
pass - eustakio
hash - $2y$10$tI0T6w6XBoYbqHmg61okUO2DqxfDHTGeFeLrKyrFVVr
*/
