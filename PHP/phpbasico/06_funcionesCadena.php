<?php

$cadena = "Hola mundo ADSI";

echo "La cadena original es: ".$cadena;
echo "<br> <br>";

// longitud de la cadena
echo "La longitud de caracteres es: ". strlen($cadena);
echo "<br> <br>";

// Posición de una palabra
echo "La posicion del texto ADSI es: ". strpos($cadena, "ADSI");
echo "<br> <br>";

// Cambiar a minuscula
echo "Cadena en minúscula: ". strtolower($cadena);
echo "<br> <br>";

// Cambiar a mayuscula
echo "Cadena en mayúscula: ". strtoupper($cadena);
echo "<br> <br>";

// Revertir cadena
echo "La cadena al revez: ". strrev($cadena);

// Remplazar palabras de la cadena
echo str_replace("ADSI", "WS", $cadena);
 ?>
