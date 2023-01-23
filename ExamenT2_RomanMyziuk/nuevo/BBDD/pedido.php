<?php
require_once('BBDD/conexion.php');
class pedido{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }
    function listar(){
        $consulta = $this->pdo->prepare("SELECT * FROM pedido");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function getIdVendedor($id){
        $consulta = $this->pdo->prepare("SELECT numvend FROM pedido WHERE numpedido=:numpedido");
        $consulta->bindParam('numpedido', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro['numvend'];
    }

    function listarID($idvendedor){
        $consulta = $this->pdo->prepare("SELECT * FROM pedido WHERE numvend=$idvendedor");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function listarBusqueda($parametro, $columna){
        $consulta = $this->pdo->prepare("SELECT * FROM pedido  WHERE $parametro LIKE '$columna%'");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function getNumPedido(){
        $consulta = $this->pdo->prepare("SELECT MAX(numpedido) FROM pedido");
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro['MAX(numpedido)']+1;
    }

    function insertar($numvend, $fecha){
        $numpedido = $this->getNumPedido();
        $insercion = $this->pdo->prepare("INSERT INTO pedido(numpedido, numvend, fecha)" .
        " VALUES(:numpedido, :numvend, :fecha)");
        $insercion->bindParam('numpedido', $numpedido);
        $insercion->bindParam(':numvend', $numvend);
        $insercion->bindParam(':fecha', $fecha);
        $insercion->execute();
        return $numpedido;
    }

    function borrar($id){
        $borracion = $this->pdo->prepare("DELETE FROM pedido WHERE numpedido=:numpedido");
        $borracion->bindParam(':numpedido', $id);
        $borracion->execute();
    }

    

    



}

?>