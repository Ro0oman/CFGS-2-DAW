<?php

if(empty($_REQUEST['nombre']) && empty($_REQUEST['edad'])){
    header("Refresh:0;url=./index.php?aviso=Faltan ambos campos!!");
    exit;
}elseif(empty($_REQUEST['nombre'])){
    header("Refresh:0;url=./index.php?aviso=Falta el campo del Nombre!!");
    exit;
}elseif (empty($_REQUEST['edad'])) {
    header("Refresh:0;url=./index.php?aviso=Falta el campo del Edad!!");
    exit;
}else{
    header("Refresh:0;url=./index.php?aviso=Hola ".$_REQUEST['nombre']." tu edad es ".$_REQUEST['edad']);
    exit;
}

?>