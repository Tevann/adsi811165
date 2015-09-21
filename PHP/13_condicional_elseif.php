<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Condicional (elseif)</title>
  </head>
  <body>
    <h1>Condicional (elseif)</h1>
    <hr>
    <?php
      $dia = date('D');

      if($dia == 'Tue'){
        echo "<h3>Hoy es Martes</h3>";
      } elseif($dia == 'Mon'){
        echo "<h3>Hoy es Lunes</h3>";
      }else{
        echo "<h3>Hoy no es Lunes ni Martes</h3>";
      }
     ?>
  </body>
</html>
