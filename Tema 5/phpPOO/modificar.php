<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/phpPOO/ejercicioVideojuego.php');

$videojuego = new ejercicioVideojuego();
$arrayValores = $videojuego->listarID($_REQUEST['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once('/opt/lampp/htdocs/php/prueba/Tema 5/ejercicioBBDD/upload-file.php');
    $videojuego->modificar($_REQUEST['id'],$_REQUEST['nombre'], $_REQUEST['genero'],$_REQUEST['precio'],$url_target);
    header("Refresh:0.5; url=index.php");
}
?>
<main>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"  enctype="multipart/form-data" >  
    <div class="form-outline mb-4">
        <label  class="form-label" for="form2Example1">Titulo del juego</label>
        <input type="text" name="nombre" id="form2Example1" class="form-control" value="<?php echo $arrayValores[0]['nombre']; ?>"/>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Genero</label>
        <input name="genero" type="text" id="form2Example2" class="form-control" value="<?php echo $arrayValores[0]['genero']; ?>"/>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Precio</label>
        <input name="precio" type="text" id="form2Example2" class="form-control" value="<?php echo $arrayValores[0]['precio']; ?>"/>
    </div>
    <img class="portada" src="<?php echo $arrayValores[0]['portada']; ?>" alt="">

    <div class="form-outline mb-4">
        <label for="fileTest">Selecciona una imagen/archivo:</label>
        <input id="fileTest" name="fileTest" type="file">
    </div>
    <!-- ID -->
    <div class="form-outline mb-4">
        <input name="id" type="hidden" id="form2Example2" class="form-control" value="<?php echo $_REQUEST['id']; ?>"/>
    </div>
    <input type="submit" value="Actualizar datos">

    <button><a href="./index.php">Volver al menu</a></button>
    </form>
</main>
<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>