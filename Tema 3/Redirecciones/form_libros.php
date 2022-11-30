<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mensaje{
            border: none;
            font-size: xx-large;
        }
    </style>
</head>
<body>
    <form action="./result_libros.php" method="post">
        <input class="mensaje" type="text" name="mensaje" value="<?php if (isset($_REQUEST['mensaje'])) {    
            echo $_REQUEST['mensaje'];
        }?>">
        <h1>Buscador de libros</h1>
        <p>
            Texto de busqueda: <input type="text" name="busqueda">
        </p>
        <p>Buscar en:
            <input type="radio" name="categoria" value="V"/> Titulo del libro
            <input type="radio" name="categoria" value="V"/> Nombre del autor
            <input type="radio" name="categoria" value="V"/> Editorial<br/>
        </p>
        <p>
            Tipo de libro: 
            <select name="tipo">
                <option>ninguno</option>
                <option value="Narrativa">Narrativa</option>
                <option value="Libros de texto">Libros de texto</option>
                <option value="Guias">Guias</option>
                <option value="Mapas">Mapas</option>
            </select>
        </p>
        <p><input type="submit" value="Buscar" /></p>
    </form>
</body>
</html>