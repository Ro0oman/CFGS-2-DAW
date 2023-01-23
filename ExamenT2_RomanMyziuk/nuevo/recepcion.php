<?php
include_once('cabecera.html');
include_once('BBDD/linped.php');
$linped = new linped();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $linped->recepcion($_REQUEST['numlinea'], $_REQUEST['numpedido'], $_REQUEST['cantidad']);
    header("Refresh:0; url=modificarpedido.php?id=".$_REQUEST['numpedido']);
}
?>

<form method="post" class="form">  
    <label">Cantidad recibida</label>
    <input required type="number" name="cantidad"/>
    <br>
    <button type="submit">Confirmar recepcion del producto</button>
    </div>
    <input type="hidden" name="numlinea" value="<?php echo $_REQUEST['numlinea'] ?>">
    <input type="hidden" name="numpedido" value="<?php echo $_REQUEST['numpedido'] ?>">
    </form>

<?php
    include_once('pie.html');?>