<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    
    <?php 

    for($i = 0; $i <= 100; $i++){
        if($i == 0){
            echo $i;
        }else{
            echo ",".$i;
        }
    }

    echo "<br>";

    $contador = 10;
    while ($contador > 0){
        if($contador == 10){
            echo $contador;
        }
        echo "-". $contador;
        $contador--;
    }

    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>
    

    <?php
    echo "<table>";
    for($i = 1; $i <= 10; $i++){
        echo "<tr>";
        
        for($y = 0; $y <= 10; $y++){
            echo "<td>".$y." x ". $i ." = " .$y*$i."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

</body>
</html>