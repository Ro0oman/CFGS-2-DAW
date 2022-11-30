<?php 
    session_start();
    include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");

    $articulos = array(
        array("id" => 1, "nombre" => "Zapatillas Nike", "precio" => 60),
        array("id" => 2, "nombre" => "Sudadera Domyos", "precio" => 15),
        array("id" => 3, "nombre" => "Pala de pádel Vairo", "precio" => 50),
        array("id" => 4, "nombre" => "Pelota de baloncesto Molten", "precio" => 20)
    );
   
    if(isset($_SESSION['carro'])){ //if que muestra la cantidad del carro
        echo count($_SESSION['carro'])+1;
    }

    //Si se recibe el articulo 1 se añade al array 'carro' dentro de la sesion
    if(isset($_REQUEST['articulo1'])){ 
        $_SESSION['carro'][] = $articulos[0];
    }else if(isset($_REQUEST['articulo2'])){
        $_SESSION['carro'][] = $articulos[1];
    }else if(isset($_REQUEST['articulo3'])){
        $_SESSION['carro'][] = $articulos[2];
    }else if(isset($_REQUEST['articulo4'])){
        $_SESSION['carro'][] = $articulos[3];
    }else if(isset($_REQUEST['borrar'])){ //Si rebibe el parametro borrar, se reinicia la sesion 
        session_destroy();
        header("Refresh:0; url=comprar.php");
    }

    $precio = 0;
    foreach ($_SESSION['carro'] as $articulo) { //Conteo del precio de los productos en la sesion
        $precio += $articulo['precio'];  
        echo "<br>".$articulo['nombre']." - ".$articulo['precio']."<br>";      
    }

    echo "Precio actual en el carro:".$precio."<br>"; //Mostrar precio
    echo "<br>";
    echo "<a href='comprar.php?borrar'>Borrar carrito</a>"; //Borrar carrito(sesion)

?>
<main>

    <span> Zapatillas Nike (60 euros)    
        <a href="comprar.php?articulo1">Comprar Articulo</a>
    </span>

    <span> Sudadera Domyos (15 euros)
        <a href="comprar.php?articulo2">Comprar Articulo</a>
    </span>

    <span> Pala de pádel Vairo (50 euros) 
        <a href="comprar.php?articulo3">Comprar Articulo</a>
    </span>
    <span> Pelota de baloncesto Molten (20 euros) 
        <a href="comprar.php?articulo4">Comprar Articulo</a>
    </span>
    
</main>
<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>