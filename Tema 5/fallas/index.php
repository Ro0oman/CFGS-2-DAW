<?php
include("cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/fallas/falla.php');
$falla = new falla();
$arrayFallas = $falla->listarFallas();
?>
  <div class="caja-imagenes">
    <?php
      for ($i=0; $i < count($arrayFallas); $i++) { 
        echo "<div class='caja'>
        <img src=".$arrayFallas[$i]['boceto']." alt=''>";
        echo "<p>".$arrayFallas[$i]['nombre_falla']."</p>" ;
        echo "<div class='edicion'>
          <a href='modificar.php'><i class='fa fa-pencil fa-2x' aria-hidden='true'></i></a>
          <a href='eliminar.php'><i class='fa fa-trash fa-2x' aria-hidden='true'></i></a>
        </div>";
        echo "</div>";
      }
    ?>
  </div>

</body>
</html>
