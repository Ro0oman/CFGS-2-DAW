<?php
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/linped.php');
$linped = new linped();
$linped->borrar($_REQUEST['numlinea'], $_REQUEST['numpedido']);
header("Refresh:0; url=modificarpedido.php?id=".$_REQUEST['numpedido']);

?>