<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condicional (if)</title>
  </head>
  <body>
    <h1>Condicional (if)</h1>
    <hr>
    <?php
      $dia = date('D');

      if($dia == 'Mon')
        echo "<h3>Bienvenido a la semana</h3>";
     ?>
  </body>
</html>
