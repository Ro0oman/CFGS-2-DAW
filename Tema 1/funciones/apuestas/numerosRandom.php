<?php 

    function repetido(array $numeros, int $aleatorio){
        $repetido = false;
        for ($i=0; $i < count($numeros) && !$repetido; $i++) { 
            if($numeros[$i] === $aleatorio){
                $repetido = 1;
            }else {
                $repetido = 0;
            }
        }
        return $repetido;
    }

    function generaRandom($min, $max){
        return (rand($min,$max));
    }

    function getRandom(int $cantNum,int $min, int $max){
        $numeros = [];
        $numeros[0] = generaRandom($min, $max);
        $contador = 1;

        while(count($numeros)<=$cantNum){
            $numAleatorio =generaRandom($min, $max);
            $valor = repetido($numeros, $numAleatorio);
            if($valor == 1) {
                while($valor==true){
                    $numAleatorio = generaRandom($min, $max);
                    $valor = repetido($numeros, $numAleatorio);
                    
                }
            }else{
                $numeros[$contador] = $numAleatorio;
                $contador++;
            }
        }
        return $numeros;
    }

?>