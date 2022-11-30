<?php

class Vehiculo{
    private $marca;
    private $modelo;
    private $color;
    private $propietario;
    private $planta;
    private $plantas = [
        'superficie',
        'subterraneo1',
        'subterraneo2'
    ];

    function __construct($marca, $modelo, $color, $propietario)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
        $this->propietario = $propietario;      
    }

    function plantas(){
        return $this->plantas;
    }

    function __get($name)
    {
        if($name == "marca"){
            return $this->marca;
        }else if($name == "modelo"){
            return $this->modelo;
        }else if($name == "color"){
            return $this->color;
        }else if($name == "propietario"){
            return $this->propietario;
        }else if($name == "planta"){
            return $this->planta;
        }
    }
    
    function __set($name, $value){
        if($name == "marca"){
            $this->marca = $value;
        }else if($name == "modelo"){
            $this->modelo = $value;
        }else if($name == "color"){
            $this->color = $value;
        }else if($name == "propietario"){
            $this->propietario = $value;
        }else if($name == "planta"){
            $this->planta = $value;
        }
    }

}

?>