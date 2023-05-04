<?php 
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php");
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/usuarios.php");
?>
<div class="main">
    <?php
    if(!isset($_SESSION['login'])) { //Si no hay una sesion iniciada
        header("Refresh:0; url=login.php"); //Redirigir al login
    }else{
        $usuarios = new usuarios();
        $datosUsuario = $usuarios->listarUsuario($_SESSION['login']); //Accedemos al los datos del usuario y mostramos su nombre
        if ($datosUsuario['tipo'] == "usuario") {//Verificamos que el usuario que ha accedido es un admin ya que sino habria una brecha de seguridad
        echo "<h1 id='hola'>Hola " . $datosUsuario['nombre_completo'];
        }else{
            echo "<h1 id='hola'>Hola ".$datosUsuario['nombre_completo']."
            <br><a href='/php/prueba/Tema 5/videoclub/administrador/index.php'>Administrar juegos</a>
            <br><a href='/php/prueba/Tema 5/videoclub/cliente/index.php'>Pagina principal</a>
            <br><a href='./cerrarsesion.php'>Cerrar sesion</a>";
        }
    } 
    ?>
    
</div>
<?php
include("/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/pie.php");
?>