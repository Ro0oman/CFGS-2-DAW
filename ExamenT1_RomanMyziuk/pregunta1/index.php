<?php
include('cabecera.html');

/* Leemos el fichero que almacena los datos de la partida */
$file = "datos.txt";
$fp = fopen($file, "r");
while(!feof($fp)) {
    $linea = fgets($fp);
}
fclose($fp);

/* Almacenamos los datos de la partida en un array que modificare en un futuro */
$arrayDatos = explode(":",$linea);

/* Si el  numero aleatorio es 0, lo genero y almaceno  */
if($arrayDatos[0] == 0){
    $numeroAleatorio = rand(1,10);
    $arrayDatos[0] = $numeroAleatorio;
    $fpw = fopen("datos.txt", "w") or die("Unable to open file!");
    fwrite($fpw, implode(":",$arrayDatos));
    fclose($fpw);
}

/* SI los intentos son 0, los actualizo a 1 */
if($arrayDatos[1] == 0){
    $arrayDatos[1] = 1;
    $fpw = fopen("datos.txt", "w") or die("Unable to open file!");
    fwrite($fpw, implode(":",$arrayDatos));
    fclose($fpw);
}else{/* Ya que los intentos son 1 los acumulamos hasta que el usuario adivine el numero */
    $arrayDatos[1] += 1;
    $fpw = fopen("datos.txt", "w") or die("Unable to open file!");
    fwrite($fpw, implode(":",$arrayDatos));
    fclose($fpw);
}

print_r($arrayDatos);

/* Ya que el usuario a introducido datos pasamos a verificarlos */
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $numeroIntroducido = $_REQUEST['numero'];
    echo "<br>Tu numero es ".$numeroIntroducido; /* Muestro el numero introducido */
    if($numeroIntroducido < intval($arrayDatos[0])){ //SI es menor a mi numero
        echo "<br>Mi numero es MAYOR<br>";
    }else if($numeroIntroducido > intval($arrayDatos[0])){ //SI es mayor a mi numero
        echo "<br>Mi numero es MENOR<br>";
    }else{
        echo "<br>ENHORABUENA HAS ACERTADO<br>"; //Mostramos que ha ganado y los intentos que le ha costado
        echo "<br>Has acertado en ". $arrayDatos[1]-1 ." intentos";
        echo "<h2>Reinicia la pagina para jugar de nuevo</h2>";
        $arrayDatos[0] = 0;
        $arrayDatos[1] = 0;
        /* Reinicio los valores de la partida a 0 para empezar de nuevo , el usuario tendrá que reiniciar la pagina*/
        $fpw = fopen("datos.txt", "w") or die("Unable to open file!");
        fwrite($fpw, implode(":",$arrayDatos));
        fclose($fpw);
    }
}
?>
<main>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label >Adivina el numero:</label>
    <input type="number" name="numero">
    <input type="submit" value="Enviar">
    <br>
    <br>
</form>
<?php


?>

</main>

<?php
include('pie.html');
?>