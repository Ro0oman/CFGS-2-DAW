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
        function cani($cadena){
            $cadenaCani ='';
            for ($i=0; $i < strlen($cadena); $i++) { 
                if($i%2==0) {
                    $cadenaCani.= strtoupper($cadena[$i]);
                }else{
                    $cadenaCani.= strtolower($cadena[$i]);
                }
            }
            return $cadenaCani;
        }
        echo cani("Hola como esta usted");
    ?>
</body>
</html>