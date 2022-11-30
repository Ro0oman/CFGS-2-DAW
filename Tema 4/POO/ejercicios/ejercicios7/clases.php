<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include_once("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/ejercicios7/Estudiante.php");
include_once("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/ejercicios7/profesor.php");

?>
<main>

<?php


$arrayPersonas = [];
$arrayPersonas[] = new Estudiante("Y44777", "paco", "paco123@gmail.com", 777);
$arrayPersonas[] = new Profesor("a12345", "lola", "lola@gmail.com", 'ola');
$arrayPersonas[] = new Estudiante("Y44777", "paco", "paco123@gmail.com", 777);
$arrayPersonas[] = new Profesor("a12345", "lola", "lola@gmail.com", 'ola');

foreach ($arrayPersonas as $key) {
    if($key instanceof Profesor){
        echo "<br>".$key->getnombre()." - ".$key->getdepartamento();
    }else {
        echo "<br>".$key->getnombre()." - ".$key->getnumExpediente();
    }
}

?>

</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>