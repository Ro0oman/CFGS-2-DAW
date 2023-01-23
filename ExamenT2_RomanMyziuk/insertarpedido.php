<?php
include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/cabecera.html');

    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/pedido.php');
    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/vendedor.php');
    $pedidos = new pedido();
    $vendedores = new vendedor();

    $arrayVendedores = $vendedores->listar();

    /* Para crear un pedido será necesario:
        Seleccionar el vendedor

    */

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if(isset($_REQUEST['vendedor'])){
            echo $_REQUEST['vendedor'];
            echo $pedidos->getNumPedido();
            $id = $pedidos->insertar($_REQUEST['vendedor'], date('Y-m-d'));
            header("Refresh:0; url=index.php#".$id);
        }
        
    }else{
        echo "<form method='POST'>
        <select name='vendedor'>";
        foreach ($arrayVendedores as $registro) {
            echo "<option value='".$registro['numvend']."'>".$registro['nomvend']."</option>";
        }
        echo "</select>
        <button class='btn btn-outline-success' type='submit'>
           Seleccionar
        </button>
        </form>";   
    }
?>

<?php
    include_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/pie.html');
?>