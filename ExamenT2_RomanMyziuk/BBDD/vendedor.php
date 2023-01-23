<?php
require_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/conexion.php');
class vendedor{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }
    function listar(){
        $consulta = $this->pdo->prepare("SELECT * FROM vendedor");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }


}

?>