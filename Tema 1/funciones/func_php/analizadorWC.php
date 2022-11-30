<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>analizadorWC</title>
</head>
<body>
    <?php 
        function analizadorWC($cadena){
            print_r(str_word_count($cadena,1));
            
        }
        analizadorWC(("Hola paco"));

    ?>
    
</body>
</html>