<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones (parametros)</title>
  </head>
  <body>
    <h1>Funciones (parametros)</h1>
    <hr>
    <?php
        function sumar($n1, $n2){
          echo "La suma de: ".$n1." y ".$n2." es: ".($n1+$n2)."<br>";
        }
        sumar(5,6);
        sumar(80,100);
        sumar(-40, -20);

     ?>
  </body>
</html>
