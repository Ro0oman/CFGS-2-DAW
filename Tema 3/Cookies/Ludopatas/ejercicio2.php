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

    $arrayDadosLanzados = []; //Variable que almacenara las tiradas
    $numeroTiradas = rand(2,7);

echo "<div class='centrado'>";
    echo "<h1>Tiradas de ".$numeroTiradas." dados</h1><br>";
echo "</div>";

/* Mostrar resultados de los dados */
echo "<div class='centrado'>";
    for ($i=0; $i < $numeroTiradas; $i++) { 
        $numRan = rand(0,5);
        echo "<img src='$arrayRutas[$numRan]'>";
        $arrayDadosLanzados[$i] = $numRan;
    }
echo "</div>";


echo "<div class='centrado'>";
    echo "<h1>Tiradas Ordenadas</h1><br>";
echo "</div>";

    sort($arrayDadosLanzados); /* Ordenacion del array */


    /* Mostrar array ordenado */
echo "<div class='centrado'>";
    for ($i=0; $i < count($arrayDadosLanzados); $i++) { 
        $posicion = $arrayDadosLanzados[$i];
        echo "<img src='$arrayRutas[$posicion]'>";
    }
echo "</div>";
?>


</main>

<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>