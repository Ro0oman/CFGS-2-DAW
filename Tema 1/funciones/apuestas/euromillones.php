<?php 
include 'cabecera.html';
?>
<link rel="stylesheet" href="estilo.css?v=<?php echo time(); ?>"><main>

    <?php
    include 'numerosRandom.php';
    $lista5num = getRandom(4 , 1 ,49);
    $lista2num = getRandom(1 , 1 ,9);


    echo '<div class="container">';
    foreach ($lista5num as $numero) {
       echo '<div class="caja">'.$numero.'</div>';
    }

    foreach ($lista2num as $numero) {
        echo '<div class="caja-estrella">'.$numero.'</div>';
     }

    echo '</div>';

    ?>
</main>
<?php
include 'pie.html';
?>