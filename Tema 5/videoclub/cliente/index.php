<?php
include('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/includes_videoclub/cabecera.php');
include('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
?>

    <!-- Barra buscador -->
    <div class="buscador">
        <form action="">
            <input size="70px" style="text-align: center"type="text" name="buscador" id="" placeholder="Buscador">
        </form>
    </div>
    
    <!-- Main -->
    <main>
        <!-- Contenido referente a la imagen en portada y su boton de compra -->
        <!-- <div class="imagen-portada video-wrapper" id="video">
            <video id="clip" class="portada" loop  muted poster="./ProyectoEscritorioMenu/portada.jpg">
                <source src="./ProyectoEscritorioMenu/Videos/god-of-war-ragnarok.webm" type="video/mp4"></source>
            </video>
        </div>    -->
            <!-- Juegos en portada -->
        <div class="contenedor-juegos">
            <div class="juego">
                <img src="./ProyectoEscritorioMenu/miles.jpg" alt=""><!-- Imagen del juego correspondiente -->
                <br>
                <div class="saga">
                    <h3><a href="#">Saga Spider-Man</a></h3>
                </div>
            </div>
            <div class="juego">
                <img src="./ProyectoEscritorioMenu/uncharted.jpg" alt=""><!-- Imagen del juego correspondiente -->
                <br>
                <div class="saga">
                    <h3><a href="#">Saga Uncharted</a></h3>
                </div>
            </div>
            <div class="juego">
                <img src="./ProyectoEscritorioMenu/fallout.jpg" alt=""><!-- Imagen del juego correspondiente -->
                <br>
                <div class="saga">
                    <h3><a href="#">Saga Fallout</a></h3>
                </div>
            </div>
        </div>
        <hr>
        <!-- ---------------------------------------------------------------------------------- -->
        <div class="categoria">
            <a href="#">Accion
                <i class="fa fa-gamepad" aria-hidden="true"></i>
            </a>
            <a href="#">Ciencia Ficcion
                <i class="fa fa-flask" aria-hidden="true"></i>
            </a>
            <a href="#">Carreras
                <i class="fa fa-car" aria-hidden="true"></i>
            </a>
            <a href="#">Multijugador
                <i class="fa fa-users" aria-hidden="true"></i>
            </a>
            <a href="#">Proximos Lanzamientos
                <i class="fa fa-users" aria-hidden="true"></i>
            </a>
        </div>
        <hr>
        <div class="general">
            <div class="contenedor-juegos-general">
                <?php 
                $videojuego = new ejercicioVideojuego();
                $arrayListar = $videojuego->listar();
                foreach($arrayListar as $registro){
                    echo '
                    <div class="juegos">
                        <h3>'.$registro['nombre'].'</h3>
                        <h4 class="categoria">'.$registro['genero'].'</h4>
                        <a href="./producto.php?id='.$registro['id'].'">
                        <img src="/php/prueba/Tema 5/videoclub/administrador/'.$registro['portada'].'" alt="">
                        </a>
                    </div>';
                }
                ?>
            </div>
            </main>
        </div>
        <!-- Footer -->
        <footer>
            <div class="legal">
                <a href="#">Legal</a>
                <a href="#">/ Privacidad</a>
                <a href="#">/ Condiciones de Uso</a>
                <a href="#">/ Contacto</a>
            </div>
        </footer>

    

    <script src="script.js"></script>
</body>
</html>