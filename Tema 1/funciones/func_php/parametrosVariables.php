<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parametros Variables</title>
</head>
<body>
    <?php 
        function mayor(array $array):int
        {
            $maximo = 0;
            for ($i=0; $i < count($array); $i++) { 
                if($array[$i]>$maximo){
                    $maximo = $array[$i];
                }
            }
            return $maximo;
        }

        echo mayor(array(6,2,3,4)); 
        echo "<br>";

        function concatenar(array $palabras):string
        {
            $resultado = implode(" ", $palabras);
            return $resultado;
        }
        $palabras = array('roman','myziuk','myziuk','myziuk','myziuk');
        $prueba = concatenar($palabras);
        echo $prueba;
    ?>
</body>
</html>