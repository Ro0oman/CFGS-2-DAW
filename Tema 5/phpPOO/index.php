<?php 
    include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
    include_once('/opt/lampp/htdocs/php/prueba/Tema 5/phpPOO/ejercicioVideojuego.php');
    $videojuego = new ejercicioVideojuego();
    $arrayListar = $videojuego->listar();

    echo "<table>";
        echo "<tr><td colspan='5'>
        <a href='insercion.php'>Insertar datos</a>
        </td></tr>";
        echo "<tr>
        <td class='tabla'>Nombre</td>
        <td class='tabla'>Genero</td>
        <td class='tabla'>Precio</td>
        <td colspan='2' class='tabla'>Edicion</td>
        </tr>";
    foreach($arrayListar as $registro){
        echo    '<td>'.$registro['nombre'].'</td>
                <td>'.$registro['genero'].'</td>
                <td>'.$registro['precio'].'</td>';

                 /* Generamos los botones de editar y borrar */
            echo '<td>
            <button><a href="modificar.php?id='.$registro['id'].'&nombre='.$registro['nombre'].'&genero='.$registro['genero'].'&precio='.$registro['precio'].'">Editar</a></button></td>';
            echo '<td>
            <button><a href="eliminar.php?id='.$registro['id'].'">Eliminar</a></button></td>';
            echo "</tr>";
    }
    echo "</table>";

    //$videojuego->insertar('Insercion', "insercion", 22, '/php/prueba/Tema 5/ejercicioBBDD/portadas/2796.png_300.png');
?>

<!-- buscador -->
<hr>Buscador
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
    <legend>Selecciona el parametro de busqueda:</legend>
            <div>
                <input type="radio" id="huey" name="parametro" value="nombre" required>
                <label>Nombre</label>
            </div>
            <div>
                <input type="radio" id="dewey" name="parametro" value="genero" required>
                <label>Genero</label>
            </div>
            <div>
                <input type="radio" id="louie" name="parametro" value="precio" required>
                <label>Precio</label>
            </div>

            <div>
                <label>Busqueda</label>
                <input type="text" name="cadena" required>
            </div>
            <div>
                <input type="submit" value="Buscar">
            </div>
        </fieldset>
    </form>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $parametro = $_REQUEST['parametro'];
    $genero =  $_REQUEST['cadena'];
    $arrayListar = $videojuego->buscar($parametro,$genero);
    echo "<table>";
    echo "<tr><br>
    <td class='tabla'>Nombre</td>
    <td class='tabla'>Genero</td>
    <td class='tabla'>Precio</td>
    </tr>";
    foreach($arrayListar as $registro){
        echo        '<tr><td>'.$registro['nombre'].'</td>
                    <td>'.$registro['genero'].'</td>
                    <td>'.$registro['precio'].'</td>';          
        echo "</tr>";
    }
    echo "</table>";
}
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>