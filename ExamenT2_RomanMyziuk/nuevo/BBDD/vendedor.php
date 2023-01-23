<?php
require_once('conexion.php');
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

    function listarID($id){
        $consulta = $this->pdo->prepare("SELECT * FROM vendedor WHERE numvend=:numvend");
        $consulta->bindParam('numvend', $id);
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function consultaNomvend($columna){
        $consulta = $this->pdo->prepare("SELECT * FROM vendedor WHERE nomvend LIKE '$columna%'");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function getNumVendedor(){
        $consulta = $this->pdo->prepare("SELECT MAX(numvend) FROM vendedor");
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro['MAX(numvend)']+1;
    }

    function insertar($nomvend, $nombrecomer, $telefono, $calle, $ciudad, $provincia){
        $numvend = $this->getNumVendedor();
        $insercion = $this->pdo->prepare("INSERT INTO vendedor(numvend, nomvend, nombrecomer, telefono, calle, ciudad, provincia)" .
        " VALUES(:numvend, :nomvend, :nombrecomer, :telefono, :calle, :ciudad, :provincia)");
        $insercion->bindParam('numvend', $numvend);
        $insercion->bindParam('nomvend', $nomvend);
        $insercion->bindParam('nombrecomer', $nombrecomer);
        $insercion->bindParam('telefono', $telefono);
        $insercion->bindParam('calle', $calle);
        $insercion->bindParam('ciudad', $ciudad);
        $insercion->bindParam('provincia', $provincia);
        $insercion->execute();
        return true;
    }

    function borrar($id){
        $borracion = $this->pdo->prepare("DELETE FROM vendedor WHERE numvend=:numvend");
        $borracion->bindParam(':numvend', $id);
        $borracion->execute();
    }

}

?>