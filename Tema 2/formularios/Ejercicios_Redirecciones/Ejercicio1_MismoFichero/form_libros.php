<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <h1>Buscador de libros</h1>
        <p>
            Texto de busqueda: <input type="text" name="busqueda">
        </p>
        <p>Buscar en:
            <input type="radio" name="categoria" value="Titulo del libro"/> Titulo del libro
            <input type="radio" name="categoria" value=" Nombre del autor"/> Nombre del autor
            <input type="radio" name="categoria" value="Editorial"/> Editorial<br/>
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

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "Busqueda: "; 
        echo $_POST['busqueda']; 
        echo "<br/>";
        echo "Categoria: "; 
        echo $_POST['categoria']; 
        echo "<br/>";
        echo "Tipo: "; 
        echo $_POST['tipo']; 
        echo "<br/>";
    }
    ?>
</body>
</html>