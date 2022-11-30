<!-- 
    Pagina en la que se mostrará la tabla con los datos extraidos de la BBDD
    
    Mostrar la tabla y al lado 2 botones de editar y eliminar en los que se --
    enviará un enlace y realizarán sus respectivas acciones en la BBDD --

    Recomendable tener un ID con cada consulta de forma autoincremental

        Eliminar -> Buscará en la tabla y eliminara la consulta de la tabla
        Modificar -> Hacer un update


    Pasos:
        1.Crear la tabla en la BBDD 
            1.1 Crear el campo ID autoincremental
            1.2 Crear el campo nombre
            1.3 Crear el campo genero
            1.4 Crear el campo precio
        
 -->

<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/conexion.php');

    $pdo = conectaBBDD();

    $consulta = $pdo->prepare("SELECT * FROM ejercicioVideojuego");
        $consulta->execute();
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
        while($registro = $consulta->fetch())
        {
            echo "<tr>";
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

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $parametro = $_REQUEST['parametro'];
            $genero =  $_REQUEST['cadena'];

            $consulta = $pdo->prepare("SELECT * FROM ejercicioVideojuego  WHERE $parametro LIKE '$genero%'");
            $consulta->execute();

            echo "<table>";
            echo "<tr><br>
            <td class='tabla'>Nombre</td>
            <td class='tabla'>Genero</td>
            <td class='tabla'>Precio</td>
            <td colspan='2' class='tabla'>Edicion</td>
            </tr>";
            while($registro = $consulta->fetch())
            {
                echo "<tr>";
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

        }

        $pdo = null;
        $consulta = null;
?>

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
        </fieldset></form>


<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>