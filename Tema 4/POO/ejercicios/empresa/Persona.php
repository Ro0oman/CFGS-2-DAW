<?php
    class Persona{
        private $nombre;
        private $apellidos;
        private $edad;

        function __construct($nombre, $apellidos, $edad)
        {
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->edad = $edad;
        }

        function __get($name)
        {
            if($name == 'nombre'){
                return $this->nombre;
            }else if($name == 'apellidos'){
                return $this->apellidos;
            }else{
                return $this->edad;
            }
        }
        function __set($name, $value)
        {
            if($name == 'nombre'){
                $this->nombre = $value;
            }else if($name == 'apellidos'){
                $this->apellidos = $value;
            }else{
                $this->edad = $value;
            }
        }

        function toHTML(){
            echo "<h2>Nombre = ".$this->nombre."</h2>";
            echo "<h2>Apellidos = ".$this->apellidos."</h2>";
            echo "<h2>Edad = ".$this->edad."</h2>";
        }

        function edad(){
            return $this->edad;
        }

        function getNombreCompleto(){
            return "Nombre ->".$this->nombre."- Apellidos ->".$this->apellidos;
        }


    }

?>