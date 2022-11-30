<?php
include("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/empresa/Persona.php");
    class Trabajador extends Persona{
        private $telefonos = [];

        function __construct($nombre, $apellidos, $edad, $telefonos)
        {
            parent::__construct($nombre, $apellidos, $edad);
            $this->telefonos = $telefonos;
        }

        function calcularSueldo(){}

        function debePagarImpuestos(){}

        //Funciones telefono
        function aniadirTelefono($telefono){
            $this->telefonos[] = $telefono;
        }

        function listarTelefonos(){
            $telefonosString = '';
            foreach($this->telefonos as $telefono){
                $telefonosString .= '-'.$telefono;
            }
            return $telefonosString;
        }

        function vaciarTelefonos(){
            $this->telefonos = [];
        }

        function toHTML()
        {
            parent::toHTML();
            echo "<h3><ol>";
            foreach ($this->telefonos as $key => $value) {
                echo "<li>".$value."</li>";
            }
            echo "</ol></h3>";
        }


    }

?>