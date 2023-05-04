<?php 
  include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
  include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/usuarios.php");

  if(isset($_SESSION['login'])) { //Si hay una sesion iniciada
    header("Refresh:0; url=index.php"); //Redirigir al index
  }
  $usuarios = new usuarios();
?>
<div class="info">
  <pre>
  <b>Admin user</b>
  Username : Romainot99
  Contraseña : roman
  <hr>
  <b>Normal user</b>
  Username : usu1
  Contraseña : pass1
  </pre>
</div>
<div class="main">
  <?php
  if(isset($_REQUEST['error'])){
    echo "<h2>Credenciales incorrectas</h2>";
  }

  if(isset($_REQUEST['registro'])){
    echo "<h2>Usuario creado correctamente</h2>";
  }
  ?>
  <form class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formLogin">  
  <a href="/php/prueba/Tema 5/videoclub/cliente/index.php">Volver a la pagina de inicio</a><hr>
  <div class="form-outline mb-4">
    <label  class="form-label" for="form2Example1">Username</label>
      <input required  type="text" name="username" id="form2Example1" class="form-control" placeholder="Usuario"/>
    </div>
    <div class="form-outline mb-4">
      <label class="form-label" for="form2Example2">Contraseña</label>
      <input required name="passwd" type="password" id="form2Example2" class="form-control"  placeholder="Contraseña"/>
    </div>
    <div class="botones">
    <button type="submit" class="boton" >Iniciar sesion</button>
    <a href="./registro.php" class="boton">Register</a>
    </div>

  </form>
</div>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $hashUsuario = ($usuarios->getPasswd($_REQUEST['username']));
  if (password_verify($_REQUEST['passwd'], $hashUsuario['pass'])) {
    $_SESSION['login'] = $_REQUEST['username'];
    $datosUsuario = $usuarios->listarUsuario($_SESSION['login']);
    if ($datosUsuario['tipo'] != "usuario") { //Si es un admin
      header("Refresh:0; url=index.php");
    } else { //Si es un usuario, lo redirigimos a la tienda
      header("Refresh:0; url=/php/prueba/Tema 5/videoclub/cliente/index.php");
    }
  }
}
  include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>