<html>
    <head>
        <link rel="shortcut icon" href="images/logo.jpg">
        <link rel="icon" type="image/png" href="images/logo.jpg" sizes="192x192">
        <link rel="apple-touch-icon" href="images/logo.jpg" sizes="180x180">
        <title>Galery subida</title>
        <link rel="stylesheet" href="//simgbb.com/0621/ibb.css">
        <style type="text/css">
body {
		background-image: url("images/overlay.png"), -moz-linear-gradient(top, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0.65)), url("../images/bg.jpg");
		background-image: url("images/overlay.png"), -webkit-linear-gradient(top, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0.65)), url("../images/bg.jpg");
		background-image: url("images/overlay.png"), -ms-linear-gradient(top, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0.65)), url("../images/bg.jpg");
		background-image: url("images/overlay.png"), linear-gradient(top, rgba(0, 0, 0, 0) 75%, rgba(0, 0, 0, 0.65)), url("../images/bg.jpg");
		background-position: top left, bottom left, auto;
		background-size: auto, 100% 100%, cover;
		background-attachment: fixed;
		background-repeat: repeat, no-repeat, auto;
		position: relative;
		background-color: #150C07;
		line-height: 1.75em;
		overflow-x: hidden;
		overflow-y: auto;
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
copy ($_FILES['foto']['tmp_name'],"imagenes/" . $_FILES['foto']['name']); 

$nombre=$_FILES['foto']['name'];
echo "<img src='imagenes/$nombre'>";
?>

 </center>
<div class="footer">
<table style="margin: 0 auto;">
<tr>
    <td>
    <form method="get" action="subida.php">
                        <input class="btn btn-big green" type="submit" value="Volver" />
                    </form>
    </td>
    <td>
    <form method="get" action="index.php">
                        <input class="btn btn-big green" type="submit" value="Home" /> 
                    </form>
    </td>
</tr>

<tr>

<form method="post" action="img1.php">
<input type="hidden" name="foto" value="<?php $nombre ?>">
<input type=submit value=" guardar ">
</form>

</tr>

</table>
</div>
</body>
 </html>