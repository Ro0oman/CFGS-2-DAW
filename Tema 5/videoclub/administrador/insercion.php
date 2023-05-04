<?php 
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
$videojuego = new ejercicioVideojuego();


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/upload-file.php');
    $videojuego->insertar($_REQUEST['titulo'], $_REQUEST['genero'], $_REQUEST['precio'],$_REQUEST['num_copias'] ,$url_target);
}
?>
<main>
   <div class="main insercion">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >  
        <div class="form-outline mb-4">
            <label  class="form-label" for="form2Example1">Titulo del juego</label>
            <input type="text" name="titulo" id="form2Example1" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Genero</label>
            <input name="genero" type="text" id="form2Example2" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">Precio</label>
            <input name="precio" type="text" id="form2Example2" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form2Example2">num_copias</label>
            <input name="num_copias" type="number" id="form2Example2" class="form-control" />
        </div>
        <div class="form-outline mb-4">
            <label for="fileTest">Selecciona una imagen/archivo:</label>
            <input id="fileTest" name="fileTest" type="file">
        </div>
        <input type="submit" value="Insertar datos">
        <a href="./index.php">Ver la tabla</a>
   </div>
</main>
<?php
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>