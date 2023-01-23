<?php
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/pedido.php');
$pedido = new pedido();
$pedido->borrar($_REQUEST['numpedido']);
header("Refresh:0; url=index.php");
?>