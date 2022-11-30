<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>

<main>
    <?php if(!empty($_REQUEST['aviso']) || isset($_REQUEST['aviso'])) {
        $aviso =  $_REQUEST['aviso'];
        echo "<h1>".$aviso."</h1>";
    }
    ?>

    <form action="datos.php" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label><br>
        <input name="nombre" type="text" placeholder="Introduce el nombre">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Edad</label><br>
        <input name="edad" type="text" placeholder="edad">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>