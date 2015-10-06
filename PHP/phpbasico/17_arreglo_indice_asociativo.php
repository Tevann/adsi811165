<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arreglos (Indice Asociativos)</title>
  </head>
  <body>
    <h1>Arreglos (Indice Asociativos)</h1>
    <hr>
    <?php
      $edades = array('Ryuk' => 200,'Eren' => 19, 'Alucard' => 300);

      $power['Ryuk'] = 2300;
      $power['Eren'] = 1500;
      $power['Alucard'] = 4000;

      echo var_dump($edades);
      echo var_dump($power);

      echo "<br><hr><br> La edad de Ryuk es: ".$edades['Ryuk']." y su poder es de: ".$power['Ryuk'];
     ?>
  </body>
</html>
