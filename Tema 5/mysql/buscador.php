<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>

<main>
    <?php 
    $host = "localhost";
    $nombreBD = "Videojuegos";
    $usuario = "root";
    $password = "";
    $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);

    if ($_SERVER['REQUEST_METHOD'] !== 'POST'){
        $consulta = $pdo->prepare("SELECT * FROM Videojuego");
        $consulta->execute();
        echo "<table>";
        echo "<tr>
        <td class='tabla'>Titulo</td>
        <td class='tabla'>Precio</td>
        <td class='tabla'>Genero</td></tr>";
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
            echo '<td>'.$registro['titulo'].'</td><td>'.$registro['precio'].'</td><td>'.$registro['genero'].'</td>';
            echo "</tr>";
        }
        echo "</table>";
        $pdo = null;
        $consulta = null;
    }else{
        $parametro = $_REQUEST['parametro'];
        
        $consulta = $pdo->prepare("SELECT * FROM Videojuego WHERE $parametro=:genero");
        $consulta->bindParam(':genero', $_REQUEST['cadena']);
        $consulta->execute();

        echo "<table>";
        echo "<tr>
        <td class='tabla'>Titulo</td>
        <td class='tabla'>Precio</td>
        <td class='tabla'>Genero</td></tr>";
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">  <div class="form-outline mb-4">
        <h1>Buscador</h1>
        <fieldset>
            <div>
                <label>Parametro</label>
                <input type="text" name="cadena" required>
            </div>
        <legend>Selecciona el parametro de busqueda:</legend>
            <div>
                <input type="radio" id="huey" name="parametro" value="titulo" required>
                <label>Titulo</label>
            </div>
            <div>
                <input type="radio" id="dewey" name="parametro" value="precio" required>
                <label>Precio</label>
            </div>
            <div>
                <input type="radio" id="louie" name="parametro" value="genero" required>
                <label>Genero</label>
            </div>
            <div>
                <input type="submit" value="Buscar">
            </div>
        </fieldset>
    </form>
</main>

<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>