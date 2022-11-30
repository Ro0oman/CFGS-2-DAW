<?php 
include("/opt/lampp/htdocs/php/prueba/includes/cabecera.html");
include("tv.php");

$myfile = fopen("tv.txt", "r") or die("Unable to open file!");
while(!feof($myfile)) {
    $linea = fgets($myfile);
    echo $linea . "<br />";
    }
    $arrayTELE =explode(":", $linea);
    print_r($arrayTELE);
    $panasonic300 = new TV($arrayTELE[0]);


/* 
Formulario 2
Accede al fichero txt con los atributos, crea el objeto cad vez que la pantalla carga
Permite modificar los datos de la TV (los valida y si estan correctos accede al TXT y los almacena)
*/
echo "<h1>Modificando la TV ".$panasonic300->getMarca()."</h1>";
?>
<main>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="">Cambiar de canal</label><br>
    <input type="number" name="canalNuevo" max="50" min="1" value="<?php echo($panasonic300->getcanal());?>" >
    <input type="text" name="nombreTele" value="<?php echo($panasonic300->getMarca());?>">
    <input type="submit" value="Actualizar televisor">
</form>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numCanal = $_REQUEST['canalNuevo'];
    $nombreTele = $_REQUEST['nombreTele'];
    $panasonic300->configCanal($numCanal);
    $panasonic300->setMarca($nombreTele);
}
?>


</main>
<?php

include("/opt/lampp/htdocs/php/prueba/includes/pie.html");
?>