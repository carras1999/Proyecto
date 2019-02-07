<?php
header("Content-disposition: attachment; filename=Hipercubo.pdf");
header("Content-type: application/pdf");
readfile("Hipercubo.pdf");
?>