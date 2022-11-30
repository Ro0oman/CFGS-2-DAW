<?PHP
header ("Content-type: image/png"); 
session_start();   

   $arrayPorcentajeEscanios = $_SESSION["porcentajes"];
   
// Calcular �ngulos
   $votos1 = intval($arrayPorcentajeEscanios[0]);
   $votos2 = intval($arrayPorcentajeEscanios[1]);
   $votos3 = intval($arrayPorcentajeEscanios[2]);
   $totalVotos = $votos1 + $votos2 + $votos3;

   $porcentaje1 = round (($votos1/$totalVotos)*100,2);
   $angulo1 = 3.6 * $porcentaje1;
   $porcentaje2 = round (($votos2/$totalVotos)*100,2);
   $angulo2 = 3.6 * $porcentaje2;
   $porcentaje3 = round (($votos3/$totalVotos)*100,2);
   $angulo3 = 3.6 * $porcentaje3;

// Crear imagen
   $imagen = imagecreate (300, 300);
   $colorfondo = imagecolorallocate ($imagen, 203, 203, 203);
   $color1 = imagecolorallocate ($imagen, 255, 0, 0);
   $color2 = imagecolorallocate ($imagen, 0, 255, 0);
   $color3 = imagecolorallocate ($imagen, 0, 0, 255);
   $colortexto = imagecolorallocate ($imagen, 0, 0, 0);

// Mostrar tarta
   imagefilledrectangle ($imagen, 0, 0, 300, 300, $colorfondo);
   imagefilledarc ($imagen, 150, 120, 200, 200, 0, $angulo1, $color1, IMG_ARC_PIE);
   imagefilledarc ($imagen, 150, 120, 200, 200, $angulo1, $angulo2, $color2, IMG_ARC_PIE);
   imagefilledarc ($imagen, 150, 120, 200, 200, $angulo2, $angulo3, $color3, IMG_ARC_PIE);



// Mostrar leyenda
   imagefilledrectangle ($imagen, 60, 250, 80, 260, $color1);
   $texto1 = "S�: " . $votos1 . " votos (" . $porcentaje1 . "%)";
   imagestring ($imagen, 3, 90, 250, $texto1, $colortexto);

   imagefilledrectangle ($imagen, 60, 270, 80, 280, $color2);
   $texto2 = "No: " . $votos2 . " votos (" . $porcentaje2 . "%)";
   imagestring ($imagen, 3, 90, 270, $texto2, $colortexto);

   imagefilledrectangle ($imagen, 60, 290, 80, 300, $color3);
   $texto3 = "No: " . $votos3 . " votos (" . $porcentaje3 . "%)";
   imagestring ($imagen, 3, 90, 270, $texto3, $colortexto);

   imagepng ($imagen);
   imagedestroy ($imagen);
?>