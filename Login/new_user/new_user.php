<?php
//read from the formulary (login.html)
//user / password
$newuser = $_POST["new_user"];
$newpasswd = $_POST["new_passwd"];
// connect to mySQL
$servername = "localhost";
$username = "root";
$password = "";
$db = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);
// Check connection
/*
if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}
else{
echo "Connected succesfully"."<br>";}
*/
//select from user where
 $query = "INSERT INTO usuarios (user, pass) VALUES ('$newuser', '$newpasswd');";
//if ok go to loginok.html
$result = mysqli_query($conn, $query);
header("Location: ../login.html");

