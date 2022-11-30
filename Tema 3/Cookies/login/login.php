<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>


<main>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  <div class="form-outline mb-4">
    <input type="text" name="username" id="form2Example1" class="form-control" />
    <label  class="form-label" for="form2Example1">Username</label>
  </div>
  <div class="form-outline mb-4">
    <input name="passwd" type="password" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Contraseña</label>
  </div>
  <input type="submit" value="Iniciar sesion">
</form>
</main>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (empty($_REQUEST['username'])) {
      echo "Campo usuario vacio";
    }else if(empty($_REQUEST['passwd'])){
      echo "Campo contraseña vacio";
    }else{
      /* Comprobamos si las credenciales son correctas */
      $fp = fopen("usuarios.txt", "r") or die("Unable to open file!");
      $sesionIniciada = true;
      while(!feof($fp)){
        $linea = fgets($fp);
        $credenciales = explode(':', $linea);
        if(trim($credenciales[0]) == $_REQUEST['username'] && trim($credenciales[1]) == $_REQUEST['passwd']){
          echo "patata";
          session_start();
          $_SESSION['loginusu'] = $_REQUEST['username'];
          header("Refresh:0; url=index.php");
        }else{
          echo "<br>Usuario ".$_REQUEST['username']." <b>NO</b>  igual es igual a ".$credenciales[0];
          echo "<br>Contraseña ".$_REQUEST['passwd']." <b>NO</b> igual es igual a ".$credenciales[1];
        }
        }
      }

      fclose($fp);
      if($sesionIniciada==false){
        echo "<h2>CREDENCIALES INCORRECTAS</h2>";
      }
  }


include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>