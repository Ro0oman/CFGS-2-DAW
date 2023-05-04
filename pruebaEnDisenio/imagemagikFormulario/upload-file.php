<?php
/* 
$file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo
$url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

//dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
$url_insert = dirname(__FILE__) . "/files"; //Carpeta donde subiremos nuestros archivos

//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = str_replace('\\', '/', $url_insert) . '/' . $file;

//Si la carpeta no existe, la creamos
if (!file_exists($url_insert)) {
    mkdir($url_insert, 0777, true);
};

//movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
if (move_uploaded_file($url_temp, $url_target)) {
    echo "El archivo " . htmlspecialchars(basename($file)) . " ha sido cargado con éxito.";
} else {
    echo "Ha habido un error al cargar tu archivo.";
}
$salida = shell_exec('convert '.$file.' fall.png 2>&1'); */

$file = $_FILES["fileTest"]["name"];
$url_temp = $_FILES["fileTest"]["tmp_name"];
$salida = shell_exec('convert '.$url_temp.' patata.png 2>&1');
$salida = file_get_contents('patata.png');
header('Content-Type:application/octet-stream');
header('Content-disposition: attachment; filename=patata.png');
echo $salida;
?>