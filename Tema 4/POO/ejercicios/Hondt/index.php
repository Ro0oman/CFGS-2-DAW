<?php 

session_start();
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include('/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/Hondt/partido.php');
?>
<main>
<?php
/* Numero partidos y numero de escaños */

/* 
Primero de dibuja una tabla de 7 filas(numero de escaños) y 5 columnas(numero de partidos)
    
    La idea es que los votos de cada partido son divididos el numero de escaños que tengan
    , si tienen 7 escaños los votos se dividen entre 1 hasta 7(cada columna)
*/
$arrayEscanios = [];

$escanios = 7;
$partidoA = new Partido(340000);
$partidoB = new Partido(280000);
$partidoC = new Partido(160000);
$partidoD = new Partido(60000);
$partidoE = new Partido(15000);

$arrayPartidos = [$partidoA, $partidoB, $partidoC, $partidoD, $partidoE];

// Mostrar los votos de los partidos
echo "<table>";
for ($i=0; $i < 5; $i++) { 
    echo "<tr>";
    echo "<td>Partido". $i+1 ."</td>";
    echo "<td>". $arrayPartidos[$i]->getVotos() ."</td>";
    echo "</tr>";
}
echo "</table>";
$arrayVotos = [];

// Calcular los votos dependiendo de sus escaños y los almacena en $arrayVotos
for ($i=0; $i < 5; $i++) { 
    for ($z=1; $z <= $escanios; $z++) { 
        $arrayVotos[] = round($arrayPartidos[$i]->getVotos()/$z);
    }
}
// Ordenar el array para que almacene los 7 primeros valores mas altos
rsort($arrayVotos, SORT_NUMERIC);

// Cortamos el array solo con los 7 primeros valores mas altos
$arrayCortado = array_slice($arrayVotos, 0, $escanios);

// Mostramos el array con los valores mas altos resaltados

echo "<table>";
for ($i=0; $i < 5; $i++) { 
    $acumulable = 0;
    echo "<tr>";
    for ($z=1; $z <= $escanios; $z++) { 
        $numvotos=round($arrayPartidos[$i]->getVotos()/$z);
        if(in_array($numvotos, $arrayCortado)){
            echo "<td class='partidoGrande'>". $numvotos ."</td>";
            //Aprovechamos este IF para almacenar los datos en un array asociativo
            $acumulable += $numvotos;
        }else{
            echo "<td>". $numvotos ."</td>";
        }
    }
    $arrayEscanios[] = $acumulable;
    echo "</tr>";
}
echo "</table>"; 


?>

</main>
<div class="centrado">
    
    <?php
      /*// Creamos un nuevo array con los valores de arrayCortado pero convertidos a int
        $arrayCortado = array_map('intval',$arrayCortado);

        // Pasamos los valores a solo los 2 primeras unidades
        $arrayCortado = array_map(function($valor){
            return substr($valor, 0, -4);
        },$arrayCortado);

        // Intentamos mostrar los valores

        echo "<table>";
        foreach($arrayCortado as $valor => $key){
            echo "<tr>";
            echo "<td>Partido ". $valor ."</td>";
            for ($i=0; $i < $key; $i++) { 
                echo "<td><div class='caja'></div></td>";
            }
            echo "</tr>";
            echo "<tr><td><p></p></td></tr>";
        }

        echo "</table>";

        */
        //Creacion del array asociativo que servirá para crear el grafico

        $totalEscanios = 0;

        foreach ($arrayEscanios as $value) {
            $totalEscanios += $value; 
        }


       foreach ($arrayEscanios as $value) {
            $arrayPorcentajeEscanios[] = $value; //* 100 / $totalEscanios;
        }
        
        $arrayPorcentajeEscanios =array_filter($arrayPorcentajeEscanios,function($valor){
            return $valor!=0;
        }); 

        $_SESSION["porcentajes"]=$arrayPorcentajeEscanios;

        

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            header("Refresh:0; url=/php/prueba/Tema 4/encuestaTarta/index.php");
        }


    ?>
</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<input type="submit" value="Mostrar grafico">
</form>
<br>




<!-- FOOTER -->
<?php
include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>
