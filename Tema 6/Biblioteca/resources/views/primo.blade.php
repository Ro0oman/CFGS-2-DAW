<html>
 <head>
    <title>Primo</title>
 </head>
    <body>
        <h1>Página de primo</h1>
            @if ($numero!=null)
                <h2>TU numero es {{ $numero }}</h2>
                <?php
                    function check_prime($num) 
                    { 
                        if ($num == 1) return 0; 
                        for ($i = 2; $i <= $num/2; $i++) { 
                            if ($num % $i == 0){
                                return false;
                            }
                        } 
                        return true; 
                    } 
                 $num = $numero; 
                 
                 if (check_prime($num)){
                    echo "Es un numero primo"; 
                 } else{
                    echo "NO es un numero primo";
                 } 
                ?>
            @else
                <h2>No hay numero introducido</h2>
            @endif
    </body>
</html> 