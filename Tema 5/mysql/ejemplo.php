<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>
<main>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  <div class="form-outline mb-4">
    <input type="text" name="titulo" id="form2Example1" class="form-control" />
    <label  class="form-label" for="form2Example1">Titulo del juego</label>
  </div>
  <div class="form-outline mb-4">
    <input name="genero" type="text" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Genero</label>
  </div>
  <div class="form-outline mb-4">
    <input name="precio" type="number" id="form2Example2" class="form-control" />
    <label class="form-label" for="form2Example2">Precio</label>
  </div>
  <input type="submit" value="Insertar datos">
</form>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $host = "localhost"; //O la IP del servidor
    $nombreBD = "Videojuegos";
    $usuario = "root"; 
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);

    $insercion = $pdo->prepare("INSERT INTO Videojuego(titulo, genero, precio)" .
    " VALUES(:titulo, :genero, :precio)");
    $insercion->bindParam(':titulo', $_REQUEST['titulo']);
    $insercion->bindParam(':genero', $_REQUEST['genero']);
    $insercion->bindParam(':precio', $_REQUEST['precio']);
    $insercion->execute();
    
    $consulta = $pdo->prepare("SELECT * FROM Videojuego");
    $consulta->execute();
    echo "<table>";
    echo "<tr>
    <td>Titulo</td>
    <td>Precio</td>
    <td>Genero</td></tr>";
    while($registro = $consulta->fetch())
    {
        echo "<tr>";
        echo '<td>'.$registro['titulo'].'</td><td>'.$registro['precio'].'</td><td>'.$registro['genero'].'</td>';
        echo "</tr>";
    }
    echo "</table>";
    $pdo = null;
    $consulta = null;




}


?>

</main>
<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>