<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/empresa/Empleado.php");
include("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/empresa/Gerente.php");
include("/opt/lampp/htdocs/php/prueba/Tema 4/POO/ejercicios/empresa/Empresa.php");


$empleado1 = new Empleado("Empleado1", "Apellido de empleado1",
                22, [1234324,999999], 100, 20);
$gerente1 = new Gerente('Gerente1', 'Apellido de gerente1',
                38,[2222222,1111111,5555555], 2000);

/* $empleado1->toHTML();   
echo "<br>";
$gerente1->toHTML();   
 */
echo "<hr>";

$empresa1 = new Empresa("Empresa1", "calle empresa 1 paco");
$empresa1->anyadirTrabajador($empleado1);
$empresa1->anyadirTrabajador($gerente1);
$empresa1->listarTrabajadores();
$empresa1->costeNominas();

?>


<main></main>


<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>