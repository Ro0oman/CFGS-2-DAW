<?php
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/cliente/alquileres.php');
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
session_start();
$alquileres = new alquileres();
$fecha_fin = date('Y-m-d', strtotime('+7 days') );
$alquileres->insertar($_REQUEST['id'], date('Y-m-d'), $fecha_fin, $_SESSION['login']);

$ejercicioVideojuego = new ejercicioVideojuego();
$ejercicioVideojuego->restar_copias($_REQUEST['id']);
$arrayValores = $ejercicioVideojuego->listarID($_REQUEST['id']);
header("Refresh:0; url=producto.php?id=".$arrayValores[0]['id'].""); //Redirigir al index

?>