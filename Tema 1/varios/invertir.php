<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $cadena = 1234;

        function factorialDiv($cadena, &$cadenaNueva){
            if($cadena<1){
                return $cadena[1];
            }else{
                $cadenaNueva .= explode(".", number_format($cadena%10))[0];
                echo "<br>";
                return factorialDiv($cadena/10, $cadenaNueva);
            }
        }
        $cadenaNueva = "";
        factorialDiv($cadena, $cadenaNueva);
        echo $cadenaNueva;
    ?>
</body>
</html>