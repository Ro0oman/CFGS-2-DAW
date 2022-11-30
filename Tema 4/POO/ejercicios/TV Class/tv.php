<?php

    class TV{
        private $marca;
        private $canal;
        private $volumen;

        function __construct($marca)
        {
            $this->marca = $marca;
            $this->canal = 1;
            $this->volumen = 50;
            self::guardarFichero();
        }

        function guardarFichero(){
            $myfile = fopen("tv.txt", "w") or die("Unable to open file!");
            $marca = $this->marca.":";
            fwrite($myfile, $marca);
            $canal = $this->canal.":";
            fwrite($myfile, $canal);
            $volumen = $this->volumen;
            fwrite($myfile, $volumen);
            fclose($myfile);
        }

        function reiniciar(){
            self::__construct($this->marca);
        }

        function getMarca(){
            self::guardarFichero();
            return $this->marca;
        }
        function getvolumen(){
            self::guardarFichero();
            return $this->volumen;
        }
        function getcanal(){
            self::guardarFichero();
            return $this->canal;
        }

        function setMarca($marcaNueva){
            $this->marca = $marcaNueva;
            self::guardarFichero();
        }
        function setvolumen($volumenNuevo){
            if($volumenNuevo>0 && $volumenNuevo<101){
                $this->volumen = $volumenNuevo;
                self::guardarFichero();
            }else{
                return false;
            }
        }
        function aumentarVolumen(){
            if($this->volumen<100){
                $this->volumen++;
                self::guardarFichero();
            }else{
                return false;
            }
        }

        function bajarVolumen(){
            if($this->volumen > 0){
                $this->volumen--;
                self::guardarFichero();
            }else{
                return false;
            }
        }

        function configCanal($canal){
            if($canal > 0 && $canal < 51){
                $this->canal= $canal;
                self::guardarFichero();
            }else{
                return false;
            }
        }

        function estado(){
            return $this->marca." en el canal ".$this->canal.", volumen".$this->volumen;
        }
    }
?>