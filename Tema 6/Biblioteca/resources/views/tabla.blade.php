<html>
 <head>
    <title>Tabla</title>
 </head>
    <body>
        <h1>Página de Tabla</h1>
            @if ($numero!=null)
                <h2>Tu numero es {{ $numero }}</h2>
                <?php
                    echo "<table>";
                    for($y = 0; $y <= 10; $y++){
                        echo "<tr>";
                        echo "<td>".$numero." x ". $y ." = " .$numero*$y."</td>";
                        echo "</tr>";
                    }
                    echo "</table>";
                ?>
            @else
                <h2>No hay numero introducido</h2>
            @endif
    </body>
</html>
