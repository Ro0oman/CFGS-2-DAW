<?php
    include_once('cabecera.html');
    include_once('BBDD/pieza.php');
    $pieza = new pieza();
?>

</div>
<?php
    $arraypiezas = $pieza->listar();
    echo "
    <table class='tabla' cellspacing='0'>
        <thead>
            <tr>
                <th scope='col'>Num pieza</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Precio</th>
            </tr>
        </thead>";
    foreach ($arraypiezas as $registro) {
        echo '
        <tr id='.$registro['numpieza'].'>
        <td>' . $registro['nompieza'] . '</td>
        <td>' . $registro['preciovent'] . '</td>';
    }
    echo "</table>";
    include_once('pie.html');
 ?>

