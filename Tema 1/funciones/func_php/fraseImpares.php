<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frase Impares</title>
</head>
<body>
    <?php 
        #Recibir un string, convertirlo en un array y 
        #guardar las ubicaciones impares e otro array

        function fraseImpares(string $palabra){
            $letras = str_split($palabra);
            for ($i=0; $i < count($letras); $i++) { 
                if($i%2==0){
                    $arrayImpares[] = $letras[$i];
                }
            }
            return $arrayImpares;
        }
        $arrayImpares = fraseImpares("Hola como estas");
        print_r($arrayImpares);
    ?>
</body>
</html>