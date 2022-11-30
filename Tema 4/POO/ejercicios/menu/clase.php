<?php
class Enlace{
    private $arrayEnlaces;


    function aniadirEnlace($url, $alias){
        $this->arrayEnlaces[] = $url;
        $this->arrayEnlaces[] = $alias;
    }
    function mostrarArray(){
        return $this->arrayEnlaces;
    }

    function mostrarVertical(){
        for ($i=0; $i < count($this->arrayEnlaces); $i = $i+2) { 
            echo "<a href='".$this->arrayEnlaces[$i]."'>".$this->arrayEnlaces[$i+1]."</a><br>";
        }
    }

    function mostrarHorizontal(){
        for ($i=0; $i < count($this->arrayEnlaces); $i = $i+2) { 
            echo "<a href='".$this->arrayEnlaces[$i]."'>".$this->arrayEnlaces[$i+1]."</a>  ";
        }
    }
}

?>

