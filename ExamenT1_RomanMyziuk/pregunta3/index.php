<?php
include('cabecera.html');
include('Coche.php');
include('Autobus.php');
include('Furgoneta.php');


$autobus = new Autobus("Volvo","9800 2017","gris","Mario","Desfufor");
$furgoneta = new Furgoneta("Wolkswagen","Caravelle","blanco","Rebeca");
$coche = new Coche("Toyota","Corolla","verde","Marcos");


echo "<br> Puedo aparcar el coche en la superficie?".$coche->puedeAparcar('superficie');
echo "<br> Puedo aparcar el coche en el subterraneo2?".$coche->puedeAparcar('subterraneo2');

echo "<br> Puedo aparcar la furgoneta en la superficie?".$furgoneta->puedeAparcar('superficie');
echo "<br> Puedo aparcar la furgoneta en el subterraneo2?".$furgoneta->puedeAparcar('subterraneo2');

echo "<br> Puedo aparcar el autobus en la superficie?".$autobus->puedeAparcar('superficie');
echo "<br> Puedo aparcar el autobus en el subterraneo1?".$autobus->puedeAparcar('subterraneo1');

echo "<br> A que empresa pertenece el autobus?".$autobus->getEmpresa();
?>

  
   
<?php
include('pie.html');
?>