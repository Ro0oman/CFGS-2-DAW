<?php
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/cabecera.html');
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/linped.php');
$linped = new linped();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $linped->recepcion($_REQUEST['numlinea'], $_REQUEST['numpedido'], $_REQUEST['cantidad']);
    header("Refresh:0; url=modificarpedido.php?id=".$_REQUEST['numpedido']);
}
?>

<form method="post">  
    <label">Cantidad recibida</label>
    <input required type="number" name="cantidad"/>
    </div>
    <input type="hidden" name="numlinea" value="<?php echo $_REQUEST['numlinea'] ?>">
    <input type="hidden" name="numpedido" value="<?php echo $_REQUEST['numpedido'] ?>">
    <input type="submit" value="Crear linea">
    </form>

<?php
    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/pie.html');
?>