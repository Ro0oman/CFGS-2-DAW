<?php 

    echo "Presupuesto: "; 
    $presupuesto = $_GET["departamento"];

        if($presupuesto=='informatica'){
            echo "500€";
        }else if($presupuesto=='lengua'){
            echo "300€";
        }else if($presupuesto=='matematicas'){
            echo "300€";
        }else if($presupuesto=='ingles'){
            echo "400€";
        }else{
            echo "No tiene presupuesto";
        }
    
?>