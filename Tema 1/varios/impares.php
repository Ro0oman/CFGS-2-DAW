<?php
$numero = 100;
$aux = 0;
for ($i=1; $i < $numero; $i+=2) { 
    echo $i."-";
    if($i%3==0){
        echo "<br>";
    }
}    


?>