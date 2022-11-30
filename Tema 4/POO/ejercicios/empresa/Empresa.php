<?php 
    class Empresa{
        private $trabajadores = [];
        private $nombre;
        private $direccion;

        function __construct($nombre, $direccion)
        {
            $this->nombre = $nombre;
            $this->direccion = $direccion;
        }

        function __get($name)
        {
            if($name == 'nombre'){
                return $this->nombre;
            }else{
                return $this->direccion;
            }
        }

        function __set($name, $value){
            if($name == 'nombre'){
                $this->nombre = $value;
            }else{
                $this->direccion = $value;
            }
        }

        function anyadirTrabajador($trabajador){
            $this->trabajadores[] = $trabajador;
        }

        function listarTrabajadores(){
            foreach ($this->trabajadores as $key => $value) {
                echo $value->toHTML()."<br>";
            }
        }

        function costeNominas(){
            foreach ($this->trabajadores as $key => $value) {
                echo $value->calcularSueldo()."//";
            }
        }


    }


?>