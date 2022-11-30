<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>


<main>

<?php 


    $arrayRutas = 
    [
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p1.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p2.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p3.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p4.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p5.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p6.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p7.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p8.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p9.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p10.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p11.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p12.svg",
    "/php/prueba/Cookies/Ludopatas/Ejercicios_Ludopatas-20221025/p13.svg"
    ];

    $arrayDadosLanzados = []; //Variable que almacenara las tiradas
    $numeroTiradas = rand(5,10);

echo "<div class='centrado'>";
    echo "<h1>Tiradas de ".$numeroTiradas." cartas</h1><br>";
echo "</div>";

/* Mostrar resultados de los dados */
echo "<div class='centrado'>";
    for ($i=0; $i < $numeroTiradas; $i++) { 
        $numRan = rand(0,12);
        echo "<img src='$arrayRutas[$numRan]'>";
        echo "<br>";
        $arrayDadosLanzados[$i] = $numRan;
    }
    echo "</div>";
    echo "<h2>La carta mas alta es ". max($arrayDadosLanzados)+1 ."</h2>";
    echo "<h2>La carta mas baja es ". min($arrayDadosLanzados)+1 ."</h2>";

    




?>


</main>

<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>