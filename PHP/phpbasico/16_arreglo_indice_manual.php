<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arreglos (Indice Manuel)</title>
  </head>
  <body>
    <h1>Arreglos (Indice Manuel)</h1>
    <hr>
    <?php
    $signos[0]  = 'Aries';
    $signos[1]  = 'Tauro';
    $signos[2]  = 'Geminis';
    $signos[3]  = 'Cancer';
    $signos[4]  = 'Leo';
    $signos[5]  = 'Virgo';
    $signos[6]  = 'Libra';
    $signos[7]  = 'Escorpion';
    $signos[8]  = 'Sagitario';
    $signos[9]  = 'Capricornio';
    $signos[10] = 'Piscis';
    $signos[11] = 'Acuario';

    echo var_dump($signos);

    echo "<br>Mi signo es: ".$signos[1];
     ?>
  </body>
</html>
