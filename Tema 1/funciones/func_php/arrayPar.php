<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Par</title>
</head>
<body>
    <?php 
        /* 
            Funcion que recibe un numero y 
            devuelve 1 o 0 si es par 
        */
        function esPar(int $num):bool{
            if($num%2 == 0){
                return 0;
            }else{
                return 1;
            }
        }

        /* 
            Funcion que recibe $tamanio, $max y $ min y 
            la devvuelve
        */
        function arrayAleatorio(int $max, int $min, 
        int $tam):array{
            for ($i=0; $i < $tam; $i++) { 
                $array[$i]=rand($min,$max);
            }
            return $array;
         }

        /* 
            Funcion que recibe un $array y devuelve la cant
            de numeros pares(return)
        */
        function arrayPares(array $array):int{
            $cantPares = 0;
            for ($i=0; $i < count($array); $i++) { 
                if(esPar($array[$i])){
                    $cantPares++;
                }
            }
            return $cantPares;
         }
         $arrayRelleno = arrayAleatorio(100,0,50);
         print_r($arrayRelleno);
         echo "<br> Cantida de numeros pares = ".arrayPares($arrayRelleno);
    ?>
</body>
</html>