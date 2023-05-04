<?php 
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
$id = $_REQUEST['id'];
$videojuego = new ejercicioVideojuego();
$videojuego->borrar($id);
header("Refresh:0; url=index.php");
?>
<?php
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>