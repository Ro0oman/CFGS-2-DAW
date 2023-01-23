<?php
    include_once('cabecera.html');
    include_once('BBDD/vendedor.php');
    $vendedores = new vendedor();
?>

</div>
<?php
    $arrayVendedores = $vendedores->listar();
    echo "
    <table class='tabla' cellspacing='0'>
        <thead>
            <tr>
                <th scope='col'>Nombre</th>
                <th scope='col'>Comercio</th>
                <th scope='col'>Telefono</th>
                <th scope='col'>Calle</th>
                <th scope='col'>Ciudad</th>
                <th scope='col'>Provincia</th>
            </tr>
        </thead>";
    foreach ($arrayVendedores as $registro) {
        echo '
        <tr id='.$registro['numvend'].'>
        <td>' . $registro['nomvend'] . '</td>
        <td>' . $registro['nombrecomer'] . '</td>
        <td>' . $registro['telefono'] . '</td>
        <td>' . $registro['calle'] . '</td>
        <td>' . $registro['ciudad'] . '</td>
        <td>' . $registro['provincia'] . '</td>'
        ;
    }
    echo "</table>";
    include_once('pie.html');
 ?>

