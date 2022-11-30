<?php

class Persona{
    private $DNI;
    private $nombre;
    private $email;

    function __construct($DNI, $nombre, $email){
        $this->DNI = $DNI;
        $this->nombre = $nombre;
        $this->email = $email;
    }

    function getDNI(){
        return $this->DNI;
    }
    function getnombre(){
        return $this->nombre;
    }
    function getemail(){
        return $this->email;
    }

    function setDNI($DNINuevo){
        $this->DNI = $DNINuevo;
    }
    function setnombre($nombreNuevo){
        $this->nombre = $nombreNuevo;
    }
    function setemail($emailNuevo){
        $this->email = $emailNuevo;
    }

    function mostrar(){
        return $this->nombre." tiene el DNI:".$this->DNI." y el email:".$this->email;
    }
}

?>