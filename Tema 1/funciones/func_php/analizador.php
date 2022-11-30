<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador</title>
</head>
<body>
    <?php 
        /* 
            Recoger string
            Dividir por espacio            
        */
        function analizador($cadena){
            $palabras = explode(' ', $cadena);
            foreach($palabras as $palabra){
                $contador = 0;
                for ($i=0; $i < strlen($palabra); $i++) { 
                    $contador++;
                }
                echo "La palabra ".$palabra." tiene ".$contador." letras";
                echo "<br>";
            }
            echo "<hr>";
            echo "La frase tiene ".count($palabras)." palabras";
        }

        analizador("Hola , Hola comocomocomocomo estas");
    ?>
</body>
</html>