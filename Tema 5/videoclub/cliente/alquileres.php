<?php
require_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/conexion.php');
require_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/administrador/ejercicioVideojuego.php');
class alquileres
{
    private $pdo;

    function __construct()
    {
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }

    function insertar($id_juego, $fecha_inicio, $fecha_fin, $usuario){
        $insercion = $this->pdo->prepare("INSERT INTO `alquileres`(`id_juego`, `fecha_inicio`, `fecha_fin`, `usuario`) 
        VALUES (:id_juego, :fecha_inicio , :fecha_fin, :usuario)");
        $insercion->bindParam(':id_juego', $id_juego);
        $insercion->bindParam(':fecha_inicio', $fecha_inicio);
        $insercion->bindParam(':fecha_fin', $fecha_fin);
        $insercion->bindParam(':usuario', $usuario);
        $insercion->execute();
    }

    function listar(){
        $consulta = $this->pdo->prepare("SELECT * FROM alquileres WHERE fecha_devolucion IS NULL");
        $consulta->execute();
        $registro = $consulta->fetchAll();
        return $registro;
    }

    function devolver($id){
        $fecha_devolucion = date('Y-m-d');
        $update = $this->pdo->prepare("UPDATE alquileres SET fecha_devolucion=:fecha_devolucion WHERE id=:id");
        $update->bindParam(':fecha_devolucion', $fecha_devolucion);
        $update->bindParam(':id', $id);
        $update->execute();
        return true;
    }

    function check_alquiler($id_juego, $usuario){
        $consulta = $this->pdo->prepare("SELECT * FROM alquileres WHERE usuario = :usuario AND id_juego = :id_juego AND fecha_devolucion IS NULL");
        $consulta->bindParam(':usuario', $usuario);
        $consulta->bindParam(':id_juego', $id_juego);
        $consulta->execute();
        if($consulta->rowCount()>0){
            return true;
        }else{
            return false;
        }
    }
}

?>