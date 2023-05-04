<?php

include_once('/opt/lampp/htdocs/php/prueba/Tema 5/fallas/falla.php');
$falla = new falla();
$falla->borrar($_REQUEST['id']);
header("Refresh:0; url=index.php");


?>