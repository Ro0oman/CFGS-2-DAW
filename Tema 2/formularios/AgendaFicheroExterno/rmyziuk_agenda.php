<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Agenda telefonica</title>
<!-- Boostrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="estilo.css">
</head>
        <?php 
            $nombre = $_POST['nombre']; 
            $telefono = $_POST['telefono'];
            if(!empty($nombre)){
                $fp = fopen("contactos.txt", "r") or die("Unable to open file!");
                while(!feof($fp)) {
                    $valor .= fgets($fp);
                }
                fclose($fp);

                $personasArray = explode(',', $valor);
                echo $valor;

                $fpw = fopen("contactos.txt", "w") or die("Unable to open file!");
                fwrite($fpw, $valor);
                fclose($fpw);
            }else{
                echo "Campo nombre VACIO!!";
            }

            

        ?>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombre</label>
                <input type="text" style="background-color:black; color:white;border: 1px yellow solid;" name="nombre" class="form-control texto" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Telefono</label>
                <input type="text" style="background-color:black;color:white; border: 1px yellow solid;"" name="telefono" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>


            <div class="mb-3">
                <input type="hidden" name="personas" class="form-control"
                id="personas" value="<?php 
                if(isset($personasArray)){
                    echo implode(",", $personasArray);
                }
                ?>">
            </div>
            <button type="submit" class="btn btn-primary">Crear contacto</button>
        </form>         
    </body>
</html>