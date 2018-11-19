<?php
//read from the formulary (login.html)
//user / password
$newuser = $_POST["new_user"];
$newpasswd = $_POST["new_passwd"];
// connect to mySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "web";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
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
//echo query;
$result = mysqli_query($conn, $query);
//var_dump($result);
$row = mysqli_fetch_array($result);
//if ok go to loginok.html
if ($row){
    header("Location: ../login.html");
} else {
    echo "<br>"."ERROOOOOOOOOOOOOOR!!!";
}
//if not ok return to login.html
