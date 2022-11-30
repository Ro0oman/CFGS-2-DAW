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
            A partir del ejercicio 1, genera un 
            array aleatorio de 33 elementos con 
            números comprendidos entre el 
            0 y 100 y calcula        
        */

        $array = [];
        for ($i=0; $i < 50; $i++) { 
            $array[$i]=rand(0,100);
        }

        foreach($array as $valor){
            echo $valor;
            echo "<br>";
        }
        echo "<hr>";

        $mayor = 0;
        $menor = 100;
        
        foreach($array as $valor){
            if($valor > $mayor){
                $mayor = $valor;
            }
            if($valor < $menor){
                $menor = $valor;
            }

            $suma = $suma + $valor;

        }
        $media = $suma/count($array);

        echo "El valor maximo es: ".$mayor;
        echo "<br>";
        echo "El valor minimo es: ".$menor;
        echo "<br>";
        echo "La media es: ".$media;
        
    ?>
</body>
</html>