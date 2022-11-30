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
        function sumaNumeros(&$a, &$b)
        {
         $x = $a;
         $a = $b;
         $b = $x;
        }
        $a = 5;
        $b = 10;

        echo "Valor de a = ".$a;
        echo "<br>";
        echo "Valor de b = ".$b;
        echo "<br>";
        echo "<br>";
        sumaNumeros($a,$b);
        echo "Valor de a = ".$a;
        echo "<br>";
        echo "Valor de b = ".$b;
        echo "<br>";
    ?>
</body>
</html>