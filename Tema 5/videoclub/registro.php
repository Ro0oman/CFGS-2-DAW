<?php 
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/usuarios.php");
$usuarios = new usuarios();
?>


    <?php
    if(isset($_REQUEST['error'])){
        echo "<h3>Ese nombre ya esta cogido</h3>";
    }
    ?>
<div class="main">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="registro">  
    <a href="/php/prueba/Tema 5/videoclub/cliente/index.html">Volver a la pagina de inicio</a>
    <div class="form-outline mb-4">
        <label  class="form-label" for="form2Example1">Nombre completo</label>
        <input required type="text" name="nombreCompleto" id="form2Example1" class="form-control" placeholder="Nombre completo"/>
    </div>
    <div class="form-outline mb-4">
        <label  class="form-label" for="form2Example1">Username</label>
        <input required type="text" name="username" id="form2Example1" class="form-control" placeholder="Usuario"/>
    </div>
    <div class="form-outline mb-4">
        <label class="form-label" for="form2Example2">Contraseña</label>
        <input requiredname="passwd" name="password" type="password" id="form2Example2" class="form-control" placeholder="Contraseña"/>
    </div>
    <div class="form-outline mb-4">
        <label  class="form-label" for="form2Example1">Telefono</label>
        <input required type="number" name="telefono" id="form2Example1" class="form-control" placeholder="Numero de telefono" min="0"  max="999999999"/>
    </div>
    <div class="form-outline mb-4">
        <label  class="form-label direccion" for="form2Example1">Direccion</label>
        <input required type="text" name="direccion" id="form2Example1" class="form-control" placeholder="Direccion"/>
    </div>
    <div class="botones">
    <input type="submit" class="btn btn-primary boton" value="Registrarse">
    <a href="./login.php" class="btn btn-primary ">Iniciar sesion</a>
    </div>
  </form>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    /* Comprobar que el nombre de usuario no sea igual */
    if($usuarios->comprobarUsuarioRepetido($_REQUEST['username'])){
        header("Refresh:0; url=registro.php?error");
    }

    $passHash = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
    $usuarios->insertar($_REQUEST['username'], $passHash, $_REQUEST['direccion'], $_REQUEST['telefono'], $_REQUEST['nombreCompleto']);
    header("Refresh:0; url=login.php?registro");
}


  include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>