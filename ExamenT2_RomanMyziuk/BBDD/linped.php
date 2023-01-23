<?php
require_once('/opt/lampp/htdocs/php/prueba/ExamenT2_RomanMyziuk/BBDD/conexion.php');
class linped{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }
    function listarId($id){
        $consulta = $this->pdo->prepare("SELECT * FROM linped WHERE numpedido=:numpedido");
        $consulta->bindParam(':numpedido', $id);
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function getNumLinea($numpedido){
        $consulta = $this->pdo->prepare("SELECT MAX(numlinea) FROM linped WHERE numpedido=:numpedido");
        $consulta->bindParam('numpedido', $numpedido);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro['MAX(numlinea)']+1;
    }

    function insertar($numpedido, $numpieza, $preciocompra, $cantpedida, $fecharecep, $cantrecibida){
        $numlinea = $this->getNumLinea($numpedido);
        $insercion = $this->pdo->prepare("INSERT INTO linped(numpedido, numlinea, numpieza, preciocompra, cantpedida, fecharecep, cantrecibida)" .
        " VALUES(:numpedido, :numlinea, :numpieza, :preciocompra, :cantpedida, :fecharecep, :cantrecibida)");
        $insercion->bindParam('numpedido', $numpedido);
        $insercion->bindParam('numlinea', $numlinea);
        $insercion->bindParam('numpieza', $numpieza);
        $insercion->bindParam('preciocompra', $preciocompra);
        $insercion->bindParam('cantpedida', $cantpedida);
        $insercion->bindParam(':fecharecep', $fecharecep);
        $insercion->bindParam(':cantrecibida', $cantrecibida);
        $insercion->execute();
        return $numpedido;
    }

    function recepcion($numlinea, $numpedido, $cantrecibida){
        $fecharecep = date('Y-m-d');
        $actualizacion = $this->pdo->prepare("UPDATE linped 
        SET fecharecep= :fecharecep, cantrecibida= :cantrecibida 
        WHERE numlinea = :numlinea AND numpedido = :numpedido");
        $actualizacion->bindParam(':fecharecep', $fecharecep);
        $actualizacion->bindParam(':cantrecibida', $cantrecibida);
        $actualizacion->bindParam(':numlinea', $numlinea);
        $actualizacion->bindParam(':numpedido', $numpedido);
        $actualizacion->execute();
    }

    function borrar($numlinea, $numpedido){
        $borracion = $this->pdo->prepare("DELETE FROM linped WHERE numlinea = :numlinea AND numpedido = :numpedido");
        $borracion->bindParam(':numlinea', $numlinea);
        $borracion->bindParam(':numpedido', $numpedido);
        $borracion->execute();
        $borracion = null;
    }

}

?>