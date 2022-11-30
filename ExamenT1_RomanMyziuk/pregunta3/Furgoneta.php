<?php
include_once('Vehiculo.php');

class Furgoneta extends Vehiculo{
    function __construct($marca, $modelo, $color, $propietario)
    {
        parent::__construct($marca, $modelo, $color, $propietario);
    }

    function puedeAparcar($planta){
        if(in_array($planta,$this->plantas()) && $planta !== 'subterraneo2'){
            return "si";
        }else{
            return "no";
        }
    }
}
?>