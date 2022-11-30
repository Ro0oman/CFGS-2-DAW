<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/conexion.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once('/opt/lampp/htdocs/php/prueba/Tema 5/ejercicioBBDD/upload-file.php');
    $pdo = conectaBBDD();

    $actualizacion = $pdo->prepare("UPDATE ejercicioVideojuego 
    SET nombre= :nombre, genero= :genero , precio= :precio , portada= :portada
    WHERE id = :id");
    $actualizacion->bindParam(':nombre', $_REQUEST['nombre']);
    $actualizacion->bindParam(':genero', $_REQUEST['genero']);
    $actualizacion->bindParam(':precio', $_REQUEST['precio']);
    $actualizacion->bindParam(':id', $_REQUEST['id']);
    $actualizacion->bindParam(':portada', $url_target);

    $actualizacion->execute();

    $pdo = null;
    $actualizacion = null;
    header("Refresh:0.5; url=index.php");
}

$pdo = conectaBBDD();
$consulta = $pdo->prepare("SELECT * FROM ejercicioVideojuego WHERE id=:id");
$consulta->bindParam(':id', $_REQUEST['id']);
$consulta->execute();
$arrayValores = $consulta->fetch(); 
print_r($arrayValores);

$rutaPortada = $arrayValores['portada'];

?>
<main>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data" >  
    <div class="form-outline mb-4">
        <input type="text" name="nombre" id="form2Example1" class="form-control" value="<?php echo $arrayValores['nombre']; ?>"/>
        <label  class="form-label" for="form2Example1">Titulo del juego</label>
    </div>
    <div class="form-outline mb-4">
        <input name="genero" type="text" id="form2Example2" class="form-control" value="<?php echo $arrayValores['genero']; ?>"/>
        <label class="form-label" for="form2Example2">Genero</label>
    </div>
    <div class="form-outline mb-4">
        <input name="precio" type="text" id="form2Example2" class="form-control" value="<?php echo $arrayValores['precio']; ?>"/>
        <label class="form-label" for="form2Example2">Precio</label>
    </div>
    <img src="<?php echo $arrayValores['portada']; ?>" alt="">
    <div class="form-outline mb-4">
        <label for="fileTest">Selecciona una imagen/archivo:</label>
        <input id="fileTest" name="fileTest" type="file">
    </div>
    <!-- ID -->
    <div class="form-outline mb-4">
        <input name="id" type="hidden" id="form2Example2" class="form-control" value="<?php echo $_REQUEST['id']; ?>"/>
    </div>
    <input type="submit" value="Actualizar datos">
    </form>
</main>

<?php
$pdo = null;
$consulta = null;
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>