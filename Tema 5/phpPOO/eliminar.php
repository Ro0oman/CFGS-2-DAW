<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/phpPOO/ejercicioVideojuego.php');
$id = $_REQUEST['id'];
$videojuego = new ejercicioVideojuego();
$videojuego->borrar($id);
header("Refresh:0; url=index.php");
?>
<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>