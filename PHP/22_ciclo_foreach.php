<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo (Foreach)</title>
  </head>
  <body>
    <h1>Ciclo (Foreach)</h1>
    <hr>
    <?php
      $motos = array('Yamaha','Akt','Ducati','Pulsar','Kawasaki','Honda',
                      'Bmw','Ktm','Susuki','Senkey');

      foreach ($motos as $mot => $mar) {
        echo "<h4>[".$mot."] - ".$mar."</h4>";
      }

     ?>
  </body>
</html>
