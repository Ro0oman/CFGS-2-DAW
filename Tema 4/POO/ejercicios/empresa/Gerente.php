<?php
include_once("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/empresa/Trabajador.php");
    class Gerente extends Trabajador{
        private $salario;

        function __construct($nombre, $apellidos, $edad, $telefonos, $salario)
        {
            parent::__construct($nombre, $apellidos, $edad, $telefonos);
            $this->salario = $salario;
        }

        function __get($name)
        {
            if($name == 'salario'){
                return $this->salario;
            }
        }
        function __set($name, $value)
        {
            if($name == 'salario'){
                $this->salario = $value;
            }
        }

        function calcularSueldo(){
            return $this->salario + $this->salario * $this->edad()/100;
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
            echo "<h2>salario = ".$this->salario."</h2>";
            echo "<h2>Sueldo = ".$this->calcularSueldo()."</h2>";
        }
    }


?>