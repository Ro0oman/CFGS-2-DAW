<?php 
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
?>
<!-- BUSCADOR -->
<nav class="nav-buscador">
    <h2 class="navbar-brand" id="textoBuscador">Buscador</h2>
    <form class="form-buscador" method="post">
        <input class="input-buscador" type="search" placeholder="Buscador" name="cadena" aria-label="Search">
        <select class="form-select" aria-label="Default select example" name="parametro">
            <option value="nombre">Nombre</option>
            <option value="genero">Genero</option>
            <option value="precio">Precio</option>
        </select>
        <button class="btn btn-outline-success" type="submit">
            <i class="fa fa-search" aria-hidden="true"></i>
        </button>
    </form>
</nav>


<?php
    $videojuego = new ejercicioVideojuego();
    $arrayListar = $videojuego->listar();
if ($_SERVER['REQUEST_METHOD'] != 'POST') {

    echo "<table class='tabla'>";
    echo "<tr>
            <td colspan='7' id='insercion'>
            <button class='boton'>
                <a href='insercion.php'>Insertar datos</a>    
            </button>
            <button class='boton'>
                <a href='gestion.php'>Gestionar Alquileres</a>    
            </button>
            </td>
        </tr>";
    echo "<thead><tr>
    <th scope='col'>Nombre</th>
    <th scope='col'>Genero</th>
    <th scope='col'>Precio</th>
    <th scope='col'>Num Copias</th>
    <th scope='col'>Portada</th>
    <th scope='col' colspan='2'>Edicion</th>
    </tr><tbody>";

    foreach ($arrayListar as $registro) {
        echo '<tr class="admin-juego" id='.$registro['id'].'><td>' . $registro['nombre'] . '</td>
                <td>' . $registro['genero'] . '</td>
                <td>' . $registro['precio'] . '</td>
                <td>' . $registro['num_copias'] . '</td>
                <td><img class="imagen" src=' . $registro['portada'] . ' alt=""></td>';

        /* Generamos los botones de editar y borrar */
        echo '<td>
            <button class="boton"><a href="modificar.php?id=' . $registro['id'] . '&nombre=' . $registro['nombre'] . '&genero=' . $registro['genero'] . '&precio=' . $registro['precio'] . '">Editar</a></button></td>';
        echo '<td>
            <button class="boton"><a href="eliminar.php?id=' . $registro['id'] . '">Eliminar</a></button></td>';
        echo "</tr>";
    }

    echo "</tbody></table>";
}
?>  


<?php

/* BUSCADOR */

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $parametro = $_REQUEST['parametro'];
    $genero =  $_REQUEST['cadena'];
    $arrayListar = $videojuego->buscar($parametro,$genero);

    echo "<table class='tabla'>";
    echo "<tr>
            <td colspan='3' id='insercion'>
            <button class='boton'>
                <a href='insercion.php'>Insertar datos</a>
            </button>
            </td>
        </tr>";
    echo "<thead><tr>
    <th scope='col'>Nombre</th>
    <th scope='col'>Genero</th>
    <th scope='col'>Precio</th>
    <th scope='col'>Portada</th>
    <th scope='col' colspan='2'>Edicion</th>
    </tr><tbody>";
    foreach ($arrayListar as $registro) {
        echo '<tr><td>' . $registro['nombre'] . '</td>
                <td>' . $registro['genero'] . '</td>
                <td>' . $registro['precio'] . '</td>
                <td><img class="imagen" src=' . $registro['portada'] . ' alt=""></td>';

        /* Generamos los botones de editar y borrar */
        echo '<td>
            <button class="boton"><a href="modificar.php?id=' . $registro['id'] . '&nombre=' . $registro['nombre'] . '&genero=' . $registro['genero'] . '&precio=' . $registro['precio'] . '">Editar</a></button></td>';
        echo '<td>
            <button class="boton"><a href="eliminar.php?id=' . $registro['id'] . '">Eliminar</a></button></td>';
        echo "</tr>";
    }
    echo "</tbody></table>";
}
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>