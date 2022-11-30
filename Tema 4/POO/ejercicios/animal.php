<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
?>

<main>
<?php
    class Animal{
        private function hablar(){
            echo "hola";
        }
    }

    class Gato extends Animal{
        public function hablar()
        {
            echo "Miau";
        }
    }

    $gato = new Gato();
    $gato->hablar();

?>
</main>

<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>