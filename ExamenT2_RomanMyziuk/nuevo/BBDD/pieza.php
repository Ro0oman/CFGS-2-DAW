<?php
require_once('BBDD/conexion.php');
class pieza{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }
    function listar(){
        $consulta = $this->pdo->prepare("SELECT * FROM pieza");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function getPrecio($id){
        $consulta = $this->pdo->prepare("SELECT preciovent FROM pieza WHERE numpieza=:numpieza");
        $consulta->bindParam(':numpieza', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro['preciovent'];
    }

    function insertar($numpieza,$nombre,$precio){
        $insercion = $this->pdo->prepare("INSERT INTO pieza(numpieza, nompieza, preciovent)" .
        " VALUES(:numpieza, :nompieza, :preciovent)");
        $insercion->bindParam('numpieza', $numpieza);
        $insercion->bindParam(':nompieza', $nombre);
        $insercion->bindParam(':preciovent', $precio);
        $insercion->execute();
        return true;
    }

    function comprobarPiezaRepetida($numpieza){
        $consulta = $this->pdo->prepare("SELECT numpieza FROM pieza WHERE numpieza =:numpieza");
        $consulta->bindParam(':numpieza', $numpieza);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro;
    }
}

?>