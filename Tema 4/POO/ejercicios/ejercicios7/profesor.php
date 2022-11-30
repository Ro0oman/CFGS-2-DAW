<?php
include_once("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/ejercicios7/Persona.php");

class Profesor extends Persona{
    private $departamento;

    function __construct($DNI, $nombre, $email, $departamento)
    {
        parent::__construct($DNI, $nombre, $email);
        $this->departamento = $departamento;
    }
    
    function getdepartamento(){
        return $this->departamento;
    }

    function setdepartamento($departamento){
        $this->departamento=$departamento;
    }

    function mostrar()
    {
        return (parent::mostrar()."- Numero de expediente: ".$this->getdepartamento());
    }
}
?>