<?php
require_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/conexion.php');
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
}

?>