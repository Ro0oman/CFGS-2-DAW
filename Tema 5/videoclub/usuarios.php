<?php
require('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/conexion.php');
class usuarios{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }

    function listarUsuario($usuario){
        $consulta = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario =:usuario");
        $consulta->bindParam(':usuario', $usuario);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro;
    }

    function insertar($usuario, $pass, $direccion, $telefono, $nombre_completo){
        $tipo = "usuario";
        $insercion = $this->pdo->prepare("INSERT INTO usuarios(usuario, pass, tipo, direccion, telefono, nombre_completo)" .
        " VALUES(:usuario, :pass, :tipo, :direccion, :telefono, :nombre_completo)");
        $insercion->bindParam(':usuario', $usuario);
        $insercion->bindParam(':pass', $pass);
        $insercion->bindParam(':tipo', $tipo);
        $insercion->bindParam(':direccion', $direccion);
        $insercion->bindParam(':telefono', $telefono);
        $insercion->bindParam(':nombre_completo', $nombre_completo);
        $insercion->execute();
    }

    function getPasswd($usuario){
        $consulta = $this->pdo->prepare("SELECT pass FROM usuarios WHERE usuario =:usuario");
        $consulta->bindParam(':usuario', $usuario);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro;
    }

    function comprobarUsuarioRepetido($usuario){
        $consulta = $this->pdo->prepare("SELECT usuario FROM usuarios WHERE usuario =:usuario");
        $consulta->bindParam(':usuario', $usuario);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro;
    }


}

?>