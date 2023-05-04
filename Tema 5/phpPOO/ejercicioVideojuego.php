<?php
class ejercicioVideojuego{
    private $pdo;
    
    function __construct(){
        $host = "localhost";
        $nombreBD = "Videojuegos";
        $usuario = "root";
        $password = ""; 
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $Exception) {
            echo "Mensaje de Error: " . $Exception->getMessage();
        }
    }
    function listar(){
        $consulta = $this->pdo->prepare("SELECT * FROM ejercicioVideojuego");
        $consulta->execute();
        $registro = $consulta->fetchAll();
        return $registro;
    }

    function insertar($nombre, $genero, $precio, $url_target){
        $insercion = $this->pdo->prepare("INSERT INTO ejercicioVideojuego(nombre, genero, precio, portada)" .
        " VALUES(:nombre, :genero, :precio, :portada)");
        $insercion->bindParam(':nombre', $nombre);
        $insercion->bindParam(':genero', $genero);
        $insercion->bindParam(':precio', $precio);
        $insercion->bindParam(':portada', $url_target);
        $insercion->execute();
    }

    function modificar($id,$nombre, $genero, $precio, $url_target){
        $actualizacion = $this->pdo->prepare("UPDATE ejercicioVideojuego 
        SET nombre= :nombre, genero= :genero , precio= :precio , portada= :portada
        WHERE id = :id");
        $actualizacion->bindParam(':nombre', $nombre);
        $actualizacion->bindParam(':genero', $genero);
        $actualizacion->bindParam(':precio', $precio);
        $actualizacion->bindParam(':id', $id);
        $actualizacion->bindParam(':portada', $url_target);
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
}

?>