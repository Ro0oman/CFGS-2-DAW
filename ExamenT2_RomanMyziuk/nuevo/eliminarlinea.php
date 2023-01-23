<?php
include_once('BBDD/linped.php');
$linped = new linped();
$linped->borrar($_REQUEST['numlinea'], $_REQUEST['numpedido']);
header("Refresh:0; url=modificarpedido.php?id=".$_REQUEST['numpedido']);

?>