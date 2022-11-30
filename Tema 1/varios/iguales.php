<?php
$val1 = 5;
$val2 = 2;
$val3 = 2;


if($val1==$val2 || $val2 == $val3 || $val1==$val3){
    if($val1==$val3 && $val2== $val3){
        echo "Los 3 numeros son iguales";
    }else{
        echo "Los 2 numeros son iguales";
    }
}else{
    echo "Ninguno es igual";
}

?>