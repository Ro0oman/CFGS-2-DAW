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
            function comprobarNombre($arrayNombres, $nombreIntroducido){
                $encontrado = false;
                for ($i=0; $i < count($arrayNombres) && !$encontrado; $i++) {
                    if(!strcmp(strtolower($arrayNombres[$i]),strtolower($nombreIntroducido))){
                        $posicionNombre = $i;
                        $encontrado = true;
                    }
                }
                return $posicionNombre;
            }
            

            $nombre = $_POST['nombre']; 
            $telefono = $_POST['telefono'];
            $personas = $_POST['personas'];

            if(!empty($nombre)){//comprobar si el nombre esta vacio
                if(empty($personas)){ //Crear array si no existe
                    $personasArray=array();
                    $pos=0;
                }else{ //Usar string $personas y transformar en array
                    $personasArray = explode(',', $personas);
                    $pos=count($personasArray);
                }   

                $posicionNombre = comprobarNombre($personasArray, $nombre);

                if (!is_null($posicionNombre) && !empty($telefono)){ 
                    $personasArray[$posicionNombre+1]=$telefono; 
                }else if(empty($telefono)){ 
                    if(is_null($posicionNombre)){
                        echo "<br> No existe ese nombre";
                    }else{
                        unset($personasArray[$posicionNombre]);
                        unset($personasArray[$posicionNombre+1]);
                    }  
                }else{
                    $personasArray[$pos]=$nombre; 
                    $personasArray[$pos+1]=$telefono; 
                } 
            }else{
                echo "Campo nombre vacio";
                //Ya que no queremos perder la cadena con los nombres anteriores tenemos que solucionarlo
                $personasArray = explode(',', $personas);
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
        <hr>

        <table class="table table-striped table-dark">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                </tr>
            </thead>
            <tbody> 
            <?php 
                echo "<br><br>";
                $personasArray = array_merge($personasArray);
                for ($i=0; $i < count($personasArray); $i = $i + 2) { 
                    echo "<tr>";
                    echo "<td>".$personasArray[$i]."</td>";
                    echo "<td>".$personasArray[$i+1]."</td>";
                    echo "</tr>";
                }
            ?>
            </tbody>
        </table>
    </body>
</html>