<?php
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/cabecera.html');
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/linped.php');
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/pieza.php');
$linped = new linped();
$pieza = new pieza();
$arrayPiezas = $pieza->listar();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $precioPieza= $pieza->getPrecio($_REQUEST['pieza']);
    $preciocompra = $precioPieza*intval($_REQUEST['cantidad']);
    echo $preciocompra;
    $linped->insertar($_REQUEST['numpedido'], $_REQUEST['pieza'], $preciocompra, $_REQUEST['cantidad'], null, null);
    header("Refresh:0; url=modificarpedido.php?id=".$_REQUEST['numpedido']);
}
?>


<form method="post">  
    <label">Pieza</label>
    <select required  name='pieza'>
        <?php
        foreach ($arrayPiezas as $registro) {
            echo "<option value='".$registro['numpieza']."'>".$registro['nompieza']."(".$registro['preciovent']."€)</option>";
        }
        ?>
        </select>
    <div>
        <label">Cantidad pedida</label>
        <input required type="number" name="cantidad"/>
    </div>
    <input type="hidden" name="numpedido" value="<?php echo $_REQUEST['id'] ?>">
    <input type="submit" value="Crear linea">
    </form>

<?php
    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/pie.html');
?>