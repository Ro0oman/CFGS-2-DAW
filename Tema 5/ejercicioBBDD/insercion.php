<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/conexion.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    include_once('/opt/lampp/htdocs/php/prueba/Tema 5/ejercicioBBDD/upload-file.php');
    $pdo = conectaBBDD();

    $insercion = $pdo->prepare("INSERT INTO ejercicioVideojuego(nombre, genero, precio, portada)" .
    " VALUES(:nombre, :genero, :precio, :portada)");
    $insercion->bindParam(':nombre', $_REQUEST['titulo']);
    $insercion->bindParam(':genero', $_REQUEST['genero']);
    $insercion->bindParam(':precio', $_REQUEST['precio']);
    $insercion->bindParam(':portada', $url_target);
    $insercion->execute();

    $pdo = null;
    $consulta = null;
}
?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data" >  
    <div class="form-outline mb-4">
        <input type="text" name="titulo" id="form2Example1" class="form-control" />
        <label  class="form-label" for="form2Example1">Titulo del juego</label>
    </div>
    <div class="form-outline mb-4">
        <input name="genero" type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Genero</label>
    </div>
    <div class="form-outline mb-4">
        <input name="precio" type="text" id="form2Example2" class="form-control" />
        <label class="form-label" for="form2Example2">Precio</label>
    </div>
    <div class="form-outline mb-4">
        <label for="fileTest">Selecciona una imagen/archivo:</label>
        <input id="fileTest" name="fileTest" type="file">
    </div>
    <input type="submit" value="Insertar datos">
    <a href="./index.php">Ver la tabla</a>
<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>