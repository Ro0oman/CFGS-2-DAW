<!-- 

    Fichero principal con los pedidos actuales
        Modificiar pedido
            Recepcion del pedido
                Listar lineas del pedido
                    Completar lineas
        Crear un pedido nuevo
            Listar vendedores
            Listar productor

 -->
 <?php
    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/cabecera.html');
    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/pedido.php');
    $pedidos = new pedido();

    $arrayPedidos = $pedidos->listar();
    echo "  <button class='boton'>
                <a href='insertarpedido.php'>Crear pedido</a>    
            </button>";
    echo "<table class='tabla'>
    <thead>
        <tr>
            <th scope='col'>Numpedido</th>
            <th scope='col'>NumVendedor</th>
            <th scope='col'>Fecha</th>
        </tr>
    <tbody>";
    foreach ($arrayPedidos as $registro) {
        echo '<tr class="admin-juego" id='.$registro['numpedido'].'>
        <td>' . $registro['numpedido'] . '</td>
        <td>' . $registro['numvend'] . '</td>
        <td>' . $registro['fecha'] . '</td>';


        /* Generamos los botones de editar y borrar */
        echo '<td>
            <button class="boton"><a href="modificarpedido.php?id='.$registro['numpedido'].'">Editar</a></button></td>';
    }
    echo "</tbody></table>";


    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/pie.html');
 ?>

