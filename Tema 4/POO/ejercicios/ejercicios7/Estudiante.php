<?php
include_once("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/ejercicios7/Persona.php");

class Estudiante extends Persona{
    private $numExpediente;

    function __construct($DNI, $nombre, $email, $numExpediente)
    {
        parent::__construct($DNI, $nombre, $email);
        $this->numExpediente = $numExpediente;
    }
    
    function getnumExpediente(){
        return $this->numExpediente;
    }

    function setnumExpedinete($numExpedienteNuevo){
        $this->numExpediente=$numExpedienteNuevo;
    }

    function mostrar()
    {
        return (parent::mostrar()."- Numero de expediente: ".$this->numExpediente);
    }
}
?>