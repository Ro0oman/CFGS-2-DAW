<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport", initial-scale=1.0">
    <title>Matriz</title>
</head>
<body>
    
    <?php 
        #Dada una matriz, crear un programa que muestre 
        # la fila con mayor numero de elemntos

        $matriz = array(
            array(1,2,3,4),
            array(5,6,7),
            array(9,10,11,12,5),
            array(9,10)
           );

        #Recorrer la matriz y alamcenar su num de elementos
        $contador = 0;
        $maximo = 0;
        $ubicacion;
        for ($i=0; $i < count($matriz); $i++) { 
            foreach ($matriz[$i] as $x) {
                if(count($matriz[$i])>$maximo){
                    $maximo = count($matriz[$i]);
                    $ubicacion = $matriz[$i];
                }

            }
        }
       
       echo "<br>El array mas largo es = <br>";
       print_r($ubicacion);
    ?>

</body>
</html>