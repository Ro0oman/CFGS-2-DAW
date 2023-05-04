<?php
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
include_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/cliente/alquileres.php');

$alquileres = new alquileres();
$videojuego = new ejercicioVideojuego();
$arrayValores = $videojuego->listarID($_REQUEST['id']);
$arrayValores[0]['nombre'];

echo "<main class='main'>
<div class='juego producto'>    
<img class='imagen-portada' src='/php/prueba/Tema 5/videoclub/administrador/" . $arrayValores[0]['portada'] . "' alt=''>
<h2>".$arrayValores[0]['nombre']."</h2>
<h3>Genero: " . $arrayValores[0]['genero'] . "</h3>";

if($arrayValores[0]['num_copias']<1){
    echo "<br><div class='alerta'>No hay copias suficientes</div></div></main>";
}else if(!isset($_SESSION['login'])){
    echo "<br><div class='alerta'>Debes iniciar sesion</div></div></main>";
}else if($alquileres->check_alquiler($_REQUEST['id'], $_SESSION['login'])){
    echo "<br><div class='alerta-done'>Ya tienes el juego alquilado, Disfruta!</div></div></main>";
}else{
    echo "<br><button class='boton'><a href='alquilar.php?id=".$arrayValores[0]['id']."'>ALQUILAR</a></button>
    </div></main>";
}
?>




<?php
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>