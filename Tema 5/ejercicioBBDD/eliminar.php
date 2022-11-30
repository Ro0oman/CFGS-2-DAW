<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/conexion.php');
$pdo = conectaBBDD();

$borracion = $pdo->prepare("DELETE FROM ejercicioVideojuego WHERE id=:id");
$borracion->bindParam(':id', $_REQUEST['id']);
$borracion->execute();

$pdo = null;
$borracion = null;
header("Refresh:0; url=index.php");

?>


<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>