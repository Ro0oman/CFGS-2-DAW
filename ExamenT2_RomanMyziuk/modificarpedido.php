<?php
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/cabecera.html');
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/pedido.php');
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/linped.php');
$numpedido = $_REQUEST['id'];
echo "<h2>Pedido ".$numpedido."</h2>";
$lineaPedido = new linped();
$arrayLineaPedido = $lineaPedido->listarId($numpedido);
if(count($arrayLineaPedido)>0){
    echo "  <button class='boton'><a href='./index.php'>Volver al menu</a></button>";
    echo "  <button class='boton'>
                    <a href='insertarlinea.php?id=".$_REQUEST['id']."'>Crear Linea de pedido</a>    
                </button>";
    echo "<table class='tabla'>
    <thead>
        <tr>
            <th>Numero linea</th>
            <th>Numero pieza</th>
            <th>Precio de compra</th>
            <th>Cantidad pedida</th>
            <th>Fecha Recepcion</th>
            <th>Cantidad recibida</th>
        </tr>
    <tbody>";
    foreach ($arrayLineaPedido as $registro) {
        if($registro['fecharecep']==NULL){
            echo '<tr class=recepcion>';
        }
        echo '<td>' . $registro['numlinea'] . '</td>
        <td>' . $registro['numpieza'] . '</td>
        <td>' . $registro['preciocompra'] . '</td>
        <td>' . $registro['cantpedida'] . '</td>';
        echo '<td>' . $registro['fecharecep'] . '</td>
        <td>' . $registro['cantrecibida'] . '</td>';
        echo " <td><button class='boton'><a href='eliminarlinea.php?numlinea=".$registro['numlinea']."&numpedido=".$registro['numpedido']."'>Eliminar linea</a></button></td>";
        if($registro['fecharecep']==NULL){
            echo " <td><button class='boton'><a href='recepcion.php?numlinea=".$registro['numlinea']."&numpedido=".$registro['numpedido']."'>Confirmar recepcion</a></button></td>";
        }
        echo '</tr>';
        
    }
    echo "</tbody></table>";
    echo "<h2>Para borrar el pedido primero elimina las lineas de pedido</h2>";
}else{
    echo "  <button class='boton'><a href='./index.php'>Volver al menu</a></button>";
    echo "  <button class='boton'>
    <a href='insertarlinea.php?id=".$_REQUEST['id']."'>Crear Linea de pedido</a>    
    </button>";
    echo "<hr><button type='button' class='btn btn-lg btn-primary'><a href='eliminarpedido.php?numpedido=".$_REQUEST['id']."'>Eliminar Pedido</a></button>";

}

/* Borrado del pedido */

    
?>


