<?php 
include 'cabecera.html';
?>
<link rel="stylesheet" href="estilo.css?v=<?php echo time(); ?>"><main>

    <?php
    include 'numerosRandom.php';
    $lista = getRandom(5 , 1 ,49);

    echo '<div class="container">';
    foreach ($lista as $numero) {
       echo '<div class="caja">'.$numero.'</div>';
    }
    echo '</div>';

    ?>
</main>
<?php
include 'pie.html';
?>