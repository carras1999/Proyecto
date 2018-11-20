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
 $query = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$passwd'";
//echo query;
$result = mysqli_query($conn, $query);
//var_dump($result);
$row = mysqli_fetch_array($result);
echo $row[0];
//if ok go to loginok.html
if ($row){
    header("Location: ../index.html");
} else {
    echo "<br>"."login KO";
}
//if not ok return to login.html
