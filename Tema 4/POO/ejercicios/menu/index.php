<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include("clase.php");
?>


<?php 
    $menu1 = new Enlace();
    $menu1->aniadirEnlace("youtube.com", "yutube");
    $menu1->aniadirEnlace("google.com", "googles");
    $menu1->aniadirEnlace("marca.com", "marca");
    $menu1->aniadirEnlace("aules.edu.gva.es", "aules");
    $menu1->mostrarVertical();
    echo "<br><br><br>";
    $menu1->mostrarHorizontal();
   
?>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>