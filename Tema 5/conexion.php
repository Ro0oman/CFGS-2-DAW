<?php

function conectaBBDD(){
    $host = "localhost";
    $nombreBD = "Videojuegos";
    $usuario = "root";
    $password = ""; 

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$nombreBD;charset=utf8",$usuario, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $Exception) {
        echo "Mensaje de Error: " . $Exception->getMessage();
    }
}

?>