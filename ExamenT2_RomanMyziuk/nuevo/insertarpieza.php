<?php
include_once('cabecera.html');
include_once('BBDD/pieza.php');
$pieza = new pieza();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if($pieza->comprobarPiezaRepetida($_REQUEST['numpieza'])){
        echo "<h2>Este objeto ya existe<h2>";
        echo "<br><h2>Estas siendo redirigido<h2>";
        header("Refresh:3; url=insertarpieza.php");
        die();
    }
    $pieza->insertar($_REQUEST['numpieza'], $_REQUEST['nompieza'],  $_REQUEST['precio']);
    header("Refresh:0; url=index.php");
}
?>


<form method="post" class="form-pieza">  
    <div class="caja">
        <label">Num Pieza</label>
        <input type="text" name="numpieza" required>
    </div>
    <div class="caja">
        <label">Nombre Pieza</label>
        <input type="text" name="nompieza" maxlength="29" required>
    </div>
    <div class="caja">
        <label">Precio pieza</label>
        <input type="number" name="test" min="0">
    </div>
    <input type="submit" value="Crear Pieza">
    </form>

<?php
    include_once('pie.html');?>