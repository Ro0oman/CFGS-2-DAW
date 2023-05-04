<?php
require_once('/opt/lampp/htdocs/php/prueba/Tema 5/videoclub/conexion.php');
class ejercicioVideojuego{
    private $pdo;
    
    function __construct(){
        $conexion = new Conexion;
        $this->pdo = $conexion->conexion();
    }
    function listar(){
        $consulta = $this->pdo->prepare("SELECT * FROM ejercicioVideojuego");
        $consulta->execute();
        $registro = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $registro;
    }

    function insertar($nombre, $genero, $precio, $num_copias, $url_target){
        $insercion = $this->pdo->prepare("INSERT INTO ejercicioVideojuego(nombre, genero, precio, portada, num_copias)" .
        " VALUES(:nombre, :genero, :precio, :portada, :num_copias)");
        $insercion->bindParam(':nombre', $nombre);
        $insercion->bindParam(':genero', $genero);
        $insercion->bindParam(':precio', $precio);
        $insercion->bindParam(':portada', $url_target);
        $insercion->bindParam(':num_copias', $num_copias);
        $insercion->execute();
    }

    function modificar($id,$nombre, $genero, $precio, $num_copias){
        $actualizacion = $this->pdo->prepare("UPDATE ejercicioVideojuego 
        SET nombre= :nombre, genero= :genero , precio= :precio , num_copias= :num_copias
        WHERE id = :id");
        $actualizacion->bindParam(':nombre', $nombre);
        $actualizacion->bindParam(':genero', $genero);
        $actualizacion->bindParam(':precio', $precio);
        $actualizacion->bindParam(':num_copias', $num_copias);
        $actualizacion->bindParam(':id', $id);
        $actualizacion->execute();
    }

    function listarID($id){
        $consulta = $this->pdo->prepare("SELECT * FROM ejercicioVideojuego WHERE id=:id");
        $consulta->bindParam(':id', $id);
        $consulta->execute();
        $registro = $consulta->fetchAll();
        return $registro;
    }

    function borrar($id){
        $borracion = $this->pdo->prepare("DELETE FROM ejercicioVideojuego WHERE id=:id");
        $borracion->bindParam(':id', $id);
        $borracion->execute();
        $borracion = null;
    }

    function buscar($parametro, $columna){
        $consulta = $this->pdo->prepare("SELECT * FROM ejercicioVideojuego  WHERE $parametro LIKE '$columna%'");
        $consulta->execute();
        $registro = $consulta->fetchAll();
        return $registro;
    }

    function restar_copias($id_juego){
        $consulta = $this->pdo->prepare("SELECT num_copias FROM ejercicioVideojuego WHERE id=:id");
        $consulta->bindParam(':id', $id_juego);
        $consulta->execute();
        $num_copias = $consulta->fetch();
        $copias_actualizadas = $num_copias['num_copias'];
        $copias_actualizadas -= 1;
        $consulta = null;

        $actualizacion = $this->pdo->prepare("UPDATE ejercicioVideojuego 
        SET num_copias = :copias_actualizadas 
        WHERE id = :id");       
        $actualizacion->bindParam(':id', $id_juego);
        $actualizacion->bindParam(':copias_actualizadas', $copias_actualizadas);
        $actualizacion->execute();
    }

    function sumar_copias($id_juego){
        $consulta = $this->pdo->prepare("SELECT num_copias FROM ejercicioVideojuego WHERE id=:id");
        $consulta->bindParam(':id', $id_juego);
        $consulta->execute();
        $num_copias = $consulta->fetch();
        $copias_actualizadas = $num_copias['num_copias'];
        $copias_actualizadas += 1;
        $consulta = null;

        $actualizacion = $this->pdo->prepare("UPDATE ejercicioVideojuego 
        SET num_copias = :copias_actualizadas 
        WHERE id = :id");       
        $actualizacion->bindParam(':id', $id_juego);
        $actualizacion->bindParam(':copias_actualizadas', $copias_actualizadas);
        $actualizacion->execute();
    }
}

?>