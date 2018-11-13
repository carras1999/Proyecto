<html>
    <head>
        <link rel="shortcut icon" href="logo.jpg">
        <link rel="icon" type="image/png" href="logo.jpg" sizes="192x192">
        <link rel="apple-touch-icon" href="logo.jpg" sizes="180x180">
    </head>





<?php
copy ($_FILES['foto']['tmp_name'],$_FILES['foto']['name']); 
 $nombre=$_FILES['foto']['name'];
 echo "<img src=\"$nombre\">"
 ?>

 </html>