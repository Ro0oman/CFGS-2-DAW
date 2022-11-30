<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <?php
        /* 
            . Rellena un array con 50 números aleatorios comprendidos entre el 0 
            y el 99, y luego muéstralo en una lista desordenada. 
            Para crear un número aleatorio, utiliza la función rand(inicio, fin). 
        */

        $array = [];
        for ($i=0; $i < 50; $i++) { 
            $array[$i]=rand(0,99);
        }
        foreach($array as $valor){
            echo $valor;
            echo "<br>";
        }
    ?>
</body>
</html>