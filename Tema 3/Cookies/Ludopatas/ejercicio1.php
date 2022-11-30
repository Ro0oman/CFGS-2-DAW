<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>


<main>

<?php 

    $arrayRutas = 
    ["/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/1.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/2.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/3.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/4.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/5.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/6.svg"];

    $numRan = rand(0,5);
?>
<img src="<?php echo $arrayRutas[$numRan];?>" alt="">
<h1>El numero obtenido es= <?php echo $numRan+1?></h1>
</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>