<html>
    <head>
        <link rel="shortcut icon" href="logo.jpg">
        <link rel="icon" type="image/png" href="logo.jpg" sizes="192x192">
        <link rel="apple-touch-icon" href="logo.jpg" sizes="180x180">
        <style>
body  {
    background-image: url("bg.jpg");
    
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   text-align: center;
}
</style>
    </head>

<body>
<center>
<?php
copy ($_FILES['foto']['tmp_name'],$_FILES['foto']['name']); 
 $nombre=$_FILES['foto']['name'];
 echo "<img src=\"$nombre\">"
 ?>
<div class="footer">
<form method="get" action="subida.php">
                        <input class="btn btn-big green" type="submit" value="Volver" />
                    </form>
<form method="get" action="index.html">
                        <input class="btn btn-big green" type="submit" value="Home" /> 
                    </form>
</div>
</center>
</body>
 </html>