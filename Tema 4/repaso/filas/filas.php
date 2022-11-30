<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>


<main>

<?php
$columnas = $_REQUEST['columnas'];
    
echo "<table><tr>";
for ($i=0; $i < $columnas; $i++) { 
    echo "<td>".$i+1;
}
echo "</td></tr></table>";
?>

</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>
