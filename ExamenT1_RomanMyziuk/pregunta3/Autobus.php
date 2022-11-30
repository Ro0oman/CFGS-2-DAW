<?php
include_once('Vehiculo.php');

class Autobus extends Vehiculo{
    private $empresa;
    function __construct($marca, $modelo, $color, $propietario, $empresa)
    {
        parent::__construct($marca, $modelo, $color, $propietario);
        $this->empresa = $empresa;
    }

    function puedeAparcar($planta){
        if(in_array($planta,$this->plantas()) && $planta == 'superficie'){
            return "SI";
        }else{
            return "NO";
        }
    }

    function getEmpresa(){
        return $this->empresa;
    }
}
?>