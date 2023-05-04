<?php

class Conexion{
    private $pdo;
    
    function conexion(){
        $host = "localhost";
        $nombreBD = "Videojuegos";
        $usuario = "root";
        $password = ""; 
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->pdo;
        } catch (PDOException $Exception) {
            echo "Mensaje de Error: " . $Exception->getMessage();
        }
    }

}

?>