<?php
/* Vamos a hacer una API que devuelva un listado con todos los datos de los videojuegos SELECT * FROM Videojuegos */
header('Content-Type: application/json; charset=utf-8');
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
$videojuego = new ejercicioVideojuego();
$arrayListar = $videojuego->listar();
echo json_encode($arrayListar);
?>