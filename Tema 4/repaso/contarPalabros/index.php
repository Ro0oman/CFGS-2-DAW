<?php

    $fp = fopen("palabras.txt", "r") or die("Unable to open file!");
    while(!feof($fp)){
    $linea = fgets($fp);
    $palabras = explode(" ", $linea);
    if($palabras[0] == ''){
        echo 0;
    }else{
        echo count($palabras);
    }
        
    }
    fclose($fp);


?>