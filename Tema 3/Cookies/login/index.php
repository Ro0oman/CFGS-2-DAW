<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
session_start();
?>
<main>
    <?php 
        if(!isset($_SESSION['loginusu'])) {
            print_r($_SESSION['loginusu']);
            header("Refresh:0; url=login.php");
        }else{
            echo "<h1>Hola ".$_SESSION['loginusu'];
        }

    ?>

    
    
    <br><a href="./pag1.php">Pagina 1</a>
    <br><a href="./pag2.php">Pagina 2</a>
    <br><a href="./cerrarsesion.php">Cerrar sesion</a>
    


</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>