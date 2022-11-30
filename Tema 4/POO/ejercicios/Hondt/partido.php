<?php 

class Partido{
    private $votos;

    function __construct($votos)
    {
        $this->votos = $votos;
    }

    function getVotos(){
        return $this->votos;
    }
}

?>