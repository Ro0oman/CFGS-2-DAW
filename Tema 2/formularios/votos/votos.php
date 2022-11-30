<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votos</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <button type="submit" class="btn btn-primary">Sumar un voto</button>
</form>

<?php 
    $fp = fopen("votos.txt", "r") or die("Unable to open file!");
    $valor = fgets($fp);
    $valor++;
    fclose($fp);

    $fpw = fopen("votos.txt", "w") or die("Unable to open file!");
    fwrite($fpw, $valor);
    fclose($fpw);


    $fp = fopen("votos.txt", "r") or die("Unable to open file!");
    $valor = fgets($fp);
    echo $valor;
    fclose($fp);

    


    
?>
    
</body>
</html>