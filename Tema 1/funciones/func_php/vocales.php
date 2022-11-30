<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocales</title>
</head>
<body>
    <?php 
        function devuelveVocales($cadena1){
            $cadena = strtolower($cadena1);
            $vocales = array
            ('A'=>0
            ,'E'=>0
            ,'I'=>0
            ,'O'=>0
            ,'U'=>0);
            
            for ($i=0; $i < strlen($cadena); $i++) { 
                switch ($cadena[$i]) {
                    case 'a':
                        $vocales['A']++;
                        break;
                    case "e":
                        $vocales['E']++;
                        break;
                    case "i":
                        $vocales['I']++;
                        break;
                    case "o":
                        $vocales['O']++;
                        break;
                    case "u":
                        $vocales['U']++;
                        break;
                }
            }
            return $vocales;

        }
        $numVocales = devuelveVocales('Hola cara pina');
        print_r($numVocales);
    ?>
</body>
</html>