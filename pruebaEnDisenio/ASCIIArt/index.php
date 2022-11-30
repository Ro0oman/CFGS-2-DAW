<?php

$imagen = "fall.jpg";

$im = @imagecreatefromjpeg($imagen);

$x = imagesx($im);
$y = imagesy($im);

$fpw = fopen("fichero.txt", "w") or die("Unable to open file!");
for ($i=0; $i < $y; $i=$i+2) { 
    for ($j=0; $j < $x; $j++) { 
        $rgb = imagecolorat($im, $j, $i);
        $r = ($rgb >> 16) & 0xFF;
        
        if($r >=0 && $r<=60){
            fwrite($fpw, "@");
        }else if($r>=61 && $r<=120){
            fwrite($fpw, "T");
        }else if($r>=121 && $r<=150){
            fwrite($fpw, ":");
        }else if($r>=151 && $r<=200){
            fwrite($fpw, ".");
        }else{
            fwrite($fpw, " ");
        }
        /* como se hace un \n */
    }
    fwrite($fpw, "\n");

}
fclose($fpw);

echo "Ancho: ".$x."<br>Largo: ".$y;
echo "<br><img src='".$imagen."'></img>";
?>
