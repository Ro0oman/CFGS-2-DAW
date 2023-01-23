<?php
include_once('BBDD/pedido.php');
include_once('BBDD/linped.php');
$lineapedido = new linped();
$pedido = new pedido();

$idpedido = $_REQUEST['id'];
$lineapedido->borrarPedido($idpedido);

$pedido->borrar($idpedido);

header("Refresh:0; url=index.php");
?>