<?php
require('/opt/lampp/htdocs/php/prueba/Tema 5/fallas/conexion.php');
class falla{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
        
    }

    function listarFallas(){
        $consulta = $this->pdo->prepare("SELECT * FROM falla");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function insertarFalla($fallera, $boceto, $anyo_fundacion, $lema, $nombre_falla, $seccion)
    {
        $insercion = $this->pdo->prepare("INSERT INTO falla(fallera, boceto, anyo_fundacion, lema, nombre_falla, seccion)" .
        " VALUES(:fallera, :boceto, :anyo_fundacion, :lema, :nombre_falla, :seccion)");
        $insercion->bindParam(':fallera', $fallera);
        $insercion->bindParam(':boceto', $boceto);
        $insercion->bindParam(':anyo_fundacion', $anyo_fundacion);
        $insercion->bindParam(':lema', $lema);
        $insercion->bindParam(':nombre_falla', $nombre_falla);
        $insercion->bindParam(':seccion', $seccion);
        $insercion->execute();
    }

    function listarFalla($id)
    {
        $consulta = $this->pdo->prepare("SELECT * FROM falla WHERE id =:id");
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetch();
        return $registro;
    }

    function borrar($id){
        $borracion = $this->pdo->prepare("DELETE FROM falla WHERE id=:id");
        $borracion->bindParam(':id', $id);
        $borracion->execute();
        $borracion = null;
    }

    function modificar($id,$nombre, $genero, $precio, $num_copias){
        $actualizacion = $this->pdo->prepare("UPDATE falla 
        SET nombre= :nombre, genero= :genero , precio= :precio , num_copias= :num_copias
        WHERE id = :id");
        $actualizacion->bindParam(':nombre', $nombre);
        $actualizacion->bindParam(':genero', $genero);
        $actualizacion->bindParam(':precio', $precio);
        $actualizacion->bindParam(':num_copias', $num_copias);
        $actualizacion->bindParam(':id', $id);
        $actualizacion->execute();
    }


}

?>