<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <?php 
    /* Rellenar un array alatoriamente de 'M  y 'F*/
    $letras = array('M', 'F');
    $arrayRelleno = [];

    for ($i=0; $i < 100; $i++) { 
        $arrayRelleno[$i] = $letras[rand(0,1)];
    }
    print_r($arrayRelleno);
    /* Al acabar contar cuantas 'M' hay y cuantas 'F' */
    $contadorM = 0;
    $contadorF = 0;
    for ($i=0; $i < 100; $i++) { 
        if($arrayRelleno[$i] == 'M'){
            $contadorM++;
        }else{
            $contadorF++;
        }
    }
    echo "<p><b>Mostrar valores por Variables contador</b></p>";

    echo "<p>Letra M = ".$contadorM."</p>";
    echo "<p>Letra F = ".$contadorF."</p>";

    /* Almacenar los resultados en arrays asociativos */

    $contadorMF = array('M'=>$contadorM, 'F'=>$contadorF);

    /* Mostrar resultado por pantalla */
    echo "<p><b>Mostrar valores por array asociativo</b></p>";

    echo "<p>Letra M = ".$contadorMF['M']."</p>";
    echo "<p>Letra F = ".$contadorMF['F']."</p>";

    ?>
    
</body>
</html>