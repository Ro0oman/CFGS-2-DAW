<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
$idiomas = ["español", "inglés", "francés", "italiano"];
$palabras = [
 ["lunes", "monday", "lundi", "lunedi"],
 ["martes", "tuesday", "mardi", "martedi"],
 ["miércoles", "wednesday", "mercredi", "mercoledì"],
 ["jueves", "thursday", "jeudi", "giovedì"],
 ["viernes", "friday", "vendredi", "venerdì"],
 ["sábado", "saturday", "samedi", "sabato"],
 ["domingo", "sunday", "dimanche", "domenica"],
];

$num_Idioma = rand(0,4);
$num_Dia = rand(0,6);

echo $palabras[$num_Dia][$num_Idioma]." es ".$palabras[$num_Dia][0]." en ". $idiomas[$num_Idioma];

?>


<main>


</main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>