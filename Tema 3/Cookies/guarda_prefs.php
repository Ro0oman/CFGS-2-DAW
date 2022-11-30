<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");

if (!empty($_REQUEST['nombre'])) {
    $nombreusu = $_REQUEST['nombre'];
    $colorusu = $_REQUEST['color'];
    
    setcookie("nombre", $nombreusu, time()+300);
    setcookie("color", $colorusu, time()+300);

    header("Refresh:0;url=./index.php");
}else{
    header("Refresh:0;url=./preferencias.php?aviso=Campo nombre vacio!!");
    exit;
}

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>