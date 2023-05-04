<!DOCTYPE html>
<html lang="es">
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videoclub</title>
    <link rel="stylesheet" href="/php/prueba/Tema 5/videoclub/includes_videoclub/estilo.css">
    <link rel="stylesheet" href="/php/prueba/Tema 5/videoclub/includes_videoclub/bootstrap.css">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php
    session_start();
    ?>
    
</head>
<body>
    <!-- Header -->
    <header>
        <div class="titulo">
            <a href="/php/prueba/Tema 5/videoclub/cliente/index.php">
                <h2>          
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                    Videoclub
                </h2>
            </a>
        </div>
        <div class="nav">
            <!-- TRABAJAR EN ESTE APARTADO -->
            <h3>
                <a href="#">Genero  
                </a>
            </h3>
            <h3>
                <a href="#">Novedades
                </a>
            </h3>
            <h3>
                <a href="#">Ayuda
                </a>
            </h3>
        </div>

        <?php
        if(!isset($_SESSION['login'])){//NO hay una sesion iniciada 
            echo "<div class='usuario'>
            <h3><a href='/php/prueba/Tema 5/videoclub/login.php'>Iniciar Sesion</a></h3>
        </div>

        <div class='usuarioMovil'>
            <h3><a href='/php/prueba/Tema 5/videoclub/login.php'Iniciar Sesion
                <i class='fa fa-user' aria-hidden='true'></i>
            </a></h3>
        </div>";
        }else{
            echo "<div class='usuario'>
            <h3><a href='/php/prueba/Tema 5/videoclub/index.php'>Mi perfil</a></h3>
            <h3><a href='/php/prueba/Tema 5/videoclub/cerrarsesion.php'>Cerrar sesion</a></h3>
            </div>

        <div class='usuarioMovil'>
            <h3><a href='/php/prueba/Tema 5/videoclub/index.php'>Mi perfil
            </a></h3>
            <h3><a href='/php/prueba/Tema 5/videoclub/cerrarsesion.php'>Cerrar sesion
            </a></h3>
            
        </div>";
        }
        ?>  
    </header>