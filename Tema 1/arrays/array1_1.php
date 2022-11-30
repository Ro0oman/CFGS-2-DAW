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
            Implementar la siguiente serie: Todo 
            número n3 es el resultado de la suma 
            de ese n de impares:       
        */

        #Generar un array de numeros impares

        $valor =6;

        for ($i=0; $i < $valor+1; $i++) { 
            $totalFinal = $totalFinal+$valor; 
        }

        echo $totalFinal;

        $listaimpares = [];
        for ($i=1; $i <= $totalFinal; $i++) { 
            if($i%2 !== 0){
                $listaimpares[] = $i;
            }
        }


        echo "<br>";
        $listaimpares[count($listaimpares)-$valor];
        $contador = 0;

        echo $valor." elevado a 3 = ";
        for ($i=count($listaimpares)-$valor; $i < count($listaimpares); $i++) { 
            
            if($contador == 0){
                echo $listaimpares[$i];
                $aux = $aux + $listaimpares[$i];
            }else{
                echo "+".$listaimpares[$i];
                $aux = $aux + $listaimpares[$i];
            }
            $contador++;
        }

        echo " = <b>".$aux."</b>";

        #Pedir que valor tiene n y sacar en que posicion del
        #vector los datos

        /* 
            Crear un for que averigue la posicion del vector
            si es un 5 
            for ($i=0; $i < 5; $i++) { 
                #sumando los todos los valores de $i
            }
        */





    ?>
</body>
</html>