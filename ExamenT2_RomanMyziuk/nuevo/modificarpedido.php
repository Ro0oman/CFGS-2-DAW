<?php
include_once('cabecera.html');
include_once('BBDD/pedido.php');
include_once('BBDD/linped.php');
include_once('BBDD/vendedor.php');
$numpedido = $_REQUEST['id'];
$lineaPedido = new linped();
$vendedores = new vendedor();
$pedido = new pedido();

$idvendedor = $pedido->getIdVendedor($numpedido);
$arrayLineaPedido = $lineaPedido->listarId($numpedido);
$datosVendedor = $vendedores->listarID($idvendedor);
?>


<div class="resumen">
    <div class="box tabla">
    <?php
    echo '
    <div class="list-group">
    <li class="list-group-item list-group-item-dark">DATOS DEL VENDEDOR</li>
    <li class="list-group-item list-group-item-dark"><strong>Nombre -> </strong>'.$datosVendedor[0]['nomvend'].'</li>
    <li class="list-group-item list-group-item-dark"><strong>Nombre comercio -> </strong>'.$datosVendedor[0]['nombrecomer'].'</li>
    <li class="list-group-item list-group-item-dark"><strong>Telefono -> </strong>'.$datosVendedor[0]['telefono'].'</li>
    <li class="list-group-item list-group-item-dark"><strong>Calle -> </strong>'.$datosVendedor[0]['calle'].'</li>
    <li class="list-group-item list-group-item-dark"><strong>Ciudad -> </strong>'.$datosVendedor[0]['ciudad'].'</li>
    <li class="list-group-item list-group-item-dark"><strong>Provincia -> </strong>'.$datosVendedor[0]['provincia'].'</li>
    </div>
    ';
    ?>
    </div>

</div>
<div class="info">
    <?php
        echo "<h1>Pedido numero ".$_REQUEST['id']."</h1>";
        echo "<a href='insertarlinea.php?id=".$_REQUEST['id']."'><button class='boton'>
                        Crear Linea de pedido   
                    </button></a> ";
        echo "<table class='tabla'>
        <thead>
            <tr>
                <th>Numero linea</th>
                <th>Numero pieza</th>
                <th>Precio de compra</th>
                <th>Cantidad pedida</th>
                <th>Fecha Recepcion</th>
                <th>Cantidad recibida</th>
                <th colspan='2'>Edicion</th>
            </tr>
        <tbody>";
        foreach ($arrayLineaPedido as $registro) {
            if($registro['fecharecep']==NULL){/* Si la linea de pedido no tiene fecha de recepcion */
                echo '<tr class=recepcion>';
            }
            echo '<td>' . $registro['numlinea'] . '</td>
            <td>' . $registro['numpieza'] . '</td>
            <td>' . $registro['preciocompra'] . '</td>
            <td>' . $registro['cantpedida'] . '</td>';
            echo '<td>' . $registro['fecharecep'] . '</td>
            <td>' . $registro['cantrecibida'] . '</td>';
            if($registro['fecharecep']==NULL){ /* Si la linea de pedido no tiene fecha de recepcion */
                echo " <td><button class='boton'><a href='eliminarlinea.php?numlinea=".$registro['numlinea']."&numpedido=".$registro['numpedido']."'>Eliminar linea</a></button></td>";
                echo " <td><button class='boton'><a href='recepcion.php?numlinea=".$registro['numlinea']."&numpedido=".$registro['numpedido']."'>Confirmar recepcion</a></button></td>";
            }else{
                echo " <td colspan='2'><button class='boton'><a href='eliminarlinea.php?numlinea=".$registro['numlinea']."&numpedido=".$registro['numpedido']."'>Eliminar linea</a></button></td>";
            }
            echo '</tr>';
        }
        echo "</tbody></table>";
    ?>
</div>
</div>
<?php
    include_once('pie.html');
?>


