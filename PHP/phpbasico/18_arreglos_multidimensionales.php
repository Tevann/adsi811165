<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Arreglos (Multidimencionales)</title>
  </head>
  <body>
    <h1>Arreglos (Multidimencionales)</h1>
    <hr>
    <?php
      $vehiculos = array(
                "Bugatti"=> array(
                      "Veyron",
                      "EB218",
                      "16C"),
                "Ferrari"=> array(
                      "F430",
                      "ENZO",
                      "458 Italia")
      );

      echo var_dump($vehiculos);
      echo "<br><br> La marca es: ".$vehiculos[0];
      echo "<br> La referencia es: ".$vehiculos["Bugatti"][0];

     ?>
  </body>
</html>
