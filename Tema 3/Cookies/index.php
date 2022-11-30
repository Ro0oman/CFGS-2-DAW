<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>

    <main>
        <?php
        echo "<a href='./login/index.php'>Login</a>";

            if(isset($_COOKIE["nombre"])){
                echo "<h1>Bienvenido ".$_COOKIE['nombre'];
                $color = $_COOKIE['color'];
                echo "<style>main { background-color: " . $color . "; }</style>";
            }   
            echo "<br><br><a href='./preferencias.php'>Modificar preferencias</a>";
        ?>
        

    </main>

<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>