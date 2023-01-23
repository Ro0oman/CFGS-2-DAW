<?php
include_once('cabecera.html');
include_once('BBDD/vendedor.php');
$vendedor = new vendedor();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $vendedor->insertar($_REQUEST['nomvend'],$_REQUEST['nombrecomer'],$_REQUEST['telefono'],$_REQUEST['calle'] ,$_REQUEST['ciudad'],$_REQUEST['provincia']);
    header("Refresh:0; url=index.php");
}
?>


<form method="post" class="form-pieza">  
    <div class="caja">
        <label">Nombre vendedor</label>
        <input type="text" name="nomvend" required>
    </div>
    <div class="caja">
        <label">Nombre comercio</label>
        <input type="text" name="nombrecomer" required>
    </div>
    <div class="caja">
        <label">Telefono</label>
        <input type="text" name="telefono" required>
    </div>
    <div class="caja">
        <label">Calle</label>
        <input type="text" name="calle" required>
    </div>
    <div class="caja">
        <label">Ciudad</label>
        <input type="text" name="ciudad" required>
    </div>
    <div class="caja">
        <label">Provincia</label>
        <input type="text" name="provincia" required>
    </div>
    <input type="submit" value="Crear Pieza">
    </form>

<?php
    include_once('pie.html');?>