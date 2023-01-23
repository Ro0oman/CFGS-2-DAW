<?php
include_once('cabecera.html');
include_once('BBDD/linped.php');
include_once('BBDD/pieza.php');
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


<form method="post" class="form">  
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
    <input type="hidden" name="numpedido" value="<?php if(isset($_REQUEST['id'])){
        echo $_REQUEST['id'];
    }else{
        header("Refresh:0; url=index.php");
    } ?>">
    <input type="submit" value="Crear linea">
    </form>

<?php
    include_once('pie.html');?>