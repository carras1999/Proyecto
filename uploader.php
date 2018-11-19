<html>
    <head>
        <link rel="shortcut icon" href="logo.jpg">
        <link rel="icon" type="image/png" href="logo.jpg" sizes="192x192">
        <link rel="apple-touch-icon" href="logo.jpg" sizes="180x180">
        <title>Galery subida</title>
        <link rel="stylesheet" href="//simgbb.com/0621/ibb.css">
        <style type="text/css">
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    text-align: center;
    padding: 8px;
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
 </center>
<div class="footer">
<div class="table">
<tr>
    <th>
    <form method="get" action="subida.php">
                        <input class="btn btn-big green" type="submit" value="Volver" />
                    </form>
    </th>
    <th>
    <form method="get" action="index.html">
                        <input class="btn btn-big green" type="submit" value="Home" /> 
                    </form>
    </th>
</tr>
</div>
</div>
</body>
 </html>