<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>


<main>
    <form action="filas.php" method="post">
        <label>Escribe un numero mayor a 0 y menor a 200 y te mostraré tantas columnas como indiques</label>
        <br><label> Numero de columnas</label>
        <input type="number" name="columnas" max="200" min="1" required>
        <br>
        <input type="submit" value="Mostrar">        
    </form>
<?php

?>
</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>