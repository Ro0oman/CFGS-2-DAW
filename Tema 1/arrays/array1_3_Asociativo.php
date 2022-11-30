<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="estilo1_3.css">
</head>
<body>
    <?php 

        /* Crear 1 array asociativo(auxiliar) que cuente los puntos 
        por ronda 

        Un while que vaya rellenado el array, x iteraciones sumando
        15 de forma random a a alguno de los jugadores hasta llegar 
        a 40
        */
        $jugadores = array('F', 'N');
        $arraySet = array('F'=>0, 'N'=>0);

        
        while(true){
            $arrayRonda = array('F'=>0, 'N'=>0);
            echo "<table class='tablaRonda'>";
                echo "<tr>";
                    echo "<td>Federer</td>";
                    echo "<td>Nadal</td>";
                echo "</tr>";

            while (true) {
                echo "<tr>";
                    echo "<th>".$arrayRonda['F']."</th>";
                    echo "<th>".$arrayRonda['N']."</th>";
                echo "</tr>";

                if($arrayRonda['F'] > 40 ){
                    $arraySet['F']+=1;
                    break;
                }else if($arrayRonda['N']>40){
                    $arraySet['N']+=1;
                    break;
                }
                $arrayRonda[$jugadores[rand(0,1)]]+= 15;
                
            }
            echo "</table>";
            echo "<p>Puntos Federer = ".$arraySet['F']."</p>";
            echo "<p>Puntos Nadal = ".$arraySet['N']."</p>";

            if($arraySet['F'] >= 6 ){
                break;
            }else if($arraySet['N']>=6){
                break;
            }

        }
        
        

    ?>
    
</body>
</html>