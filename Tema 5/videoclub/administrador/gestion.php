<?php 
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/cliente/alquileres.php');
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');

$alquileres = new alquileres();
$arrayListar = $alquileres->listar();

$videojuegos = new ejercicioVideojuego();

if(count($arrayListar)==0){
    echo '
    <div class="main">
    <h2 class="texto-centrado">No hay juegos alquilados</h2>
    </div>'; 
}else{
    echo "<table class='tabla'>";
    echo "<thead><tr>
    <th scope='col'>id</th>
    <th scope='col'>id_juego</th>
    <th scope='col'>fecha_inicio</th>
    <th scope='col'>fecha_fin</th>
    <th scope='col'>usuario</th>
    <th scope='col' colspan='2'>Devolucion</th>
    </tr><tbody>";

    foreach ($arrayListar as $registro) {
        
        echo '<tr><td>' . $registro['id'] . '</td>
                <td><a href="index.php#'.$registro['id_juego'].'">' . $registro['id_juego'] . '</a></td>
                <td>' . $registro['fecha_inicio'] . '</td>
                <td>' . $registro['fecha_fin'] . '</td>
                <td>' . $registro['usuario'] . '</td>';

        /* Generamos los botones de devolucion */
        echo '<td>
            <button class="boton"><a href="devolver.php?id='.$registro['id'].'&id_juego='.$registro['id_juego'].'">Devolver</a></button></td>';
        echo "</tr>";
    }

    echo "</tbody></table>";
}


?>

<?php
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>