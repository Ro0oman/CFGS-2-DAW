<?php
include_once('cabecera.html');

    include_once('BBDD/pedido.php');
    include_once('BBDD/vendedor.php');
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
        echo "<form method='POST' class='form'>
        <select name='vendedor'>";
        foreach ($arrayVendedores as $registro) {
            echo "<option value='".$registro['numvend']."'>".$registro['nomvend']."</option>";
        }
        echo "</select>
        <button  type='submit'>
           Crear pedido
        </button>
        </form>";   
    }
?>

<?php
    include_once('pie.html');?>