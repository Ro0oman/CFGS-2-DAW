<?php

$file = $_FILES["fileTest"]["name"]; //Nombre de nuestro archivo

$url_temp = $_FILES["fileTest"]["tmp_name"]; //Ruta temporal a donde se carga el archivo 

//dirname(__FILE__) nos otorga la ruta absoluta hasta el archivo en ejecución
$url_insert = dirname(__FILE__) . "/portadas"; //Carpeta donde subiremos nuestros archivos

//Ruta donde se guardara el archivo, usamos str_replace para reemplazar los "\" por "/"
$url_target = './portadas/' . $file;

//movemos el archivo de la carpeta temporal a la carpeta objetivo y verificamos si fue exitoso
move_uploaded_file($url_temp, $url_target);
?>