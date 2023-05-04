<?php

include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/cliente/alquileres.php');
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');


$alquileres = new alquileres();
$arrayListar = $alquileres->devolver($_REQUEST['id']);
if($arrayListar){
    $ejercicioVideojuego = new ejercicioVideojuego();
    $ejercicioVideojuego->sumar_copias($_REQUEST['id_juego']);
}
header("Refresh:0; url=gestion.php"); //Redirigir al index



?>