<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo</title>
    <link rel="stylesheet" href="primo.css">
</head>
<body>
    
<?php 
    $contador = 0;
    echo "<table>";
    for ($i=1; $i <= 32; $i++) {
        echo "<tr>";
        for ($y=1; $y <= 32; $y++) {
            $contador++;
            $primo = true;
            for ($z=2; $z <= sqrt($contador) && $primo; $z++) { 
                if ($contador %$z==0) {
                    $primo = false;
                }
            }
            if($primo){
                echo "<td class='no-primo'>".$contador."</td>";
            }else{
                echo "<td class='primo'>".$contador."</td>";
            }
        }
        echo "</tr>";
    }
?>

</body>
</html>