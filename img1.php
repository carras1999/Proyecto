<?php
    $foto = $_POST["foto"];

    $path = "editadas/";
    $path_img= $path.$foto;

    move_uploaded_file($foto,$path_img);

    echo $foto."<br>".$path."<br>".$path_img;

    echo "<br><br>Foto Guardada";
