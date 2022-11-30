<?php
include_once('Vehiculo.php');

class Coche extends Vehiculo{
    function __construct($marca, $modelo, $color, $propietario)
    {
        parent::__construct($marca, $modelo, $color, $propietario);
    }

    function puedeAparcar($planta){
        if(in_array($planta,$this->plantas()) && $planta !== 'superficie'){
            return "si";
        }else{
            return "no";
        }
    }
}
?>