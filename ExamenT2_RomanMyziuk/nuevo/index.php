<?php
    include_once('cabecera.html');    
    include_once('BBDD/pedido.php');
    include_once('BBDD/vendedor.php');
    $vendedores = new vendedor();
    $pedidos = new pedido();

?>


<div class="resumen">
<div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header  bg-dark" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Pedidos
            </button>
        </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a href='insertarpedido.php' class='boton'>
            <i class='fa fa-plus' aria-hidden='true'></i> Crear pedido
        </a> 
        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header  bg-dark" id="headingTwo">
      <button class="accordion-button collapsed show" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Vendedores
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <a href='insertarvendedor.php' class='boton'>
            <i class='fa fa-plus' aria-hidden='true'></i> Crear Vendedor
        </a> 
        <a href='listarvendedor.php' class='boton'>
            <i class='fa fa-plus' aria-hidden='true'></i> Listar Vendedores
        </a> 
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header  bg-dark" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Piezas
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
            <a href='insertarpieza.php' class='boton'>
                <i class='fa fa-plus' aria-hidden='true'></i> Crear Pieza
            </a> 
            <a href='listarpieza.php' class='boton'>
                <i class='fa fa-plus' aria-hidden='true'></i> Listar Piezas
            </a> 
      </div>
    </div>
  </div>
</div>
   
   
</div>
<?php
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        $arrayPedidos = $pedidos->listar();
        echo "
        <table class='tabla' cellspacing='0'>
            <thead>
                <tr>
                    <th scope='col'>Numpedido</th>
                    <th scope='col'>Vendedor</th>
                    <th scope='col'>Fecha</th>
                    <th colspan='2' scope='col'>Edicion</th>
                </tr>
            </thead>";
        foreach ($arrayPedidos as $registro) {
            $arrayVendedor = $vendedores->listarID($registro['numvend']);
            echo '
            <tr id='.$registro['numpedido'].'>
            <td>' . $registro['numpedido'] . '</td>
            <td>' . $arrayVendedor[0]['nomvend'] . '</td>
            <td>' . $registro['fecha'] . '</td>';

            /* Generamos los botones de editar y borrar */
            echo '
                <td>
                    <a href="modificarpedido.php?id='.$registro['numpedido'].'&vendedor='.$arrayVendedor[0]['numvend'].'">
                        <button>
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <a href="eliminarpedido.php?id='.$registro['numpedido'].'">
                        <button>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </a>
                </td>
            </tr>';
            
            
        }
    }else{/* Si se hace una busqueda */
        $parametro = $_REQUEST['parametro']; #Nombre de la columna
        $cadena =  $_REQUEST['cadena'];#Cadena de texto en el input:text
        if($parametro!='nomvend'){
            $arrayPedidos = $pedidos->listarBusqueda($parametro,$cadena);
            echo "
            <table class='tabla' cellspacing='0'>
                </a> 
                <thead>
                    <tr>
                        <th scope='col'>Numpedido</th>
                        <th scope='col'>Vendedor</th>
                        <th scope='col'>Fecha</th>
                        <th colspan='2' scope='col'>Edicion</th>
                    </tr>
                </thead>";
            foreach ($arrayPedidos as $registro) {
                $arrayVendedor = $vendedores->listarID($registro['numvend']);
                echo '
                <tr id='.$registro['numpedido'].'>
                <td>' . $registro['numpedido'] . '</td>
                <td>' . $arrayVendedor[0]['nomvend'] . '</td>
                <td>' . $registro['fecha'] . '</td>';
    
                /* Generamos los botones de editar y borrar */
                echo '
                    <td>
                        <a href="modificarpedido.php?id='.$registro['numpedido'].'">
                            <button>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                    <td>
                        <a href="eliminarpedido.php?id='.$registro['numpedido'].'">
                            <button>
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>
                        </a>
                    </td>
                </tr>';
            }
        }else{
            $arrayVendedor = $vendedores->consultaNomvend($cadena);
            echo "
                    <table class='tabla' cellspacing='0'>
                        <thead>
                            <tr>
                                <th scope='col'>Numpedido</th>
                                <th scope='col'>Vendedor</th>
                                <th scope='col'>Fecha</th>
                                <th colspan='2' scope='col'>Edicion</th>
                            </tr>
                        </thead>";
            if(count($arrayVendedor)<1){
                echo "<h2>No se ha econtrado ningun registro :(</h2>";
            }else{
                foreach ($arrayVendedor as $registro2) {
                    # $arrayVendedor[0]['numvend'] ID del vendedor que se ha buscado
                    $arrayPedidos = $pedidos->listarID($registro2['numvend']);
                    foreach ($arrayPedidos as $registro) {
                        $arrayVendedor = $vendedores->listarID($registro['numvend']);
                        echo '
                        <tr id='.$registro['numpedido'].'>
                        <td>' . $registro['numpedido'] . '</td>
                        <td>' . $registro2['nomvend'] . '</td>
                        <td>' . $registro['fecha'] . '</td>';
            
                        /* Generamos los botones de editar y borrar */
                        echo '
                            <td>
                                <a href="modificarpedido.php?id='.$registro['numpedido'].'">
                                    <button>
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </td>
                            <td>
                                <a href="eliminarpedido.php?id='.$registro['numpedido'].'">
                                    <button>
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>';
                    }
                }
            }

        }
        
    }echo "</table>";

    include_once('pie.html'); ?>

