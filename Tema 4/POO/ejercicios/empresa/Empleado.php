<?php
include_once("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/empresa/Trabajador.php");
    class Empleado extends Trabajador{
        private $horasTrabajadas;
        private $precioPorHora;

        function __construct($nombre, $apellidos, $edad, $telefonos,$horasTrabajadas, $precioPorHora)
        {
            parent::__construct($nombre, $apellidos, $edad, $telefonos);
            $this->horasTrabajadas = $horasTrabajadas;
            $this->precioPorHora = $precioPorHora;
        }

        function __get($name)
        {
            if($name == 'horasTrabajadas'){
                return $this->horasTrabajadas;
            }else{
                return $this->precioPorHora;
            }
        }
        function __set($name, $value)
        {
            if($name == 'horasTrabajadas'){
                $this->horasTrabajadas = $value;
            }else{
                $this->precioPorHora = $value;
            }
        }

        function calcularSueldo(){
            return $this->horasTrabajadas * $this->precioPorHora;
        }

        function debePagarImpuestos(){
            if($this->calcularSueldo()>3333 && $this->edad()>21){
                return true;
            }else{
                return false;
            }
        }

        //ToHTML
        function toHTML(){
            parent::toHTML();
            echo "<h2>horasTrabajadas = ".$this->horasTrabajadas."</h2>";
            echo "<h2>precioPorHora = ".$this->precioPorHora."</h2>";
            echo "<h2>Sueldo = ".$this->calcularSueldo()."</h2>";
        }
    }


?>