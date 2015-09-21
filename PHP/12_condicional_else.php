<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condicional (else)</title>
  </head>
  <body>
    <h1>Condicional (else)</h1>
    <hr>
    <?php
      $dia = date('d');

      if($dia < 20){
        echo "<h3>Faltan muchos dias para terminar el mes</h3>";
      }else {
        echo "<h3>Falta pocos dias para terminar el mes</h3>";
      }
     ?>
  </body>
</html>
