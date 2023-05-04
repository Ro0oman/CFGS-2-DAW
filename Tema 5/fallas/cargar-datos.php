<?php
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/fallas/falla.php');
/* Crear conexion a la base de datos 
    Crear fichero conexion a la tabla
        Insertar datos mediante funciones
            Insertar claver primaria primero
                Insertar datos en base a la clave primaria

*/

$homepage = file_get_contents('./falles-fallas.json');
$array = json_decode($homepage, true);
/* echo "<pre>";
print_r($array);
echo "</pre>"; */

$falla = new falla();

for ($i=0; $i < count($array); $i++) { 
    $fallera = true;
    $boceto = true;
    $anyo_fundacion = true;
    $lema = true;
    $nombreFalla = true;
    $seccion = true;
    foreach ($array[$i] as $key => $value) {
        if($key=="fields"){ #Me meto en el array fields
            foreach ($value as $key2 => $value2) { #Lo recorro
                if($key2=='fallera'){
                    $fallera = $value2;
                }
                if($key2=='boceto'){
                    $boceto = $value2;
                }
                if($key2=='anyo_fundacion'){
                    $anyo_fundacion = $value2;
                }
                if($key2=='lema'){
                    $lema = $value2;
                }
                if($key2=='nombre'){ 
                    $nombre_falla = $value2;
                }
                if($key2=='seccion'){
                    $seccion = $value2;
                }
                
            }
        }
    }
    $falla->insertarFalla($fallera, $boceto, $anyo_fundacion, $lema, $nombre_falla, $seccion); 
}



?>
