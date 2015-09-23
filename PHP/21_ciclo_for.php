<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ciclo (For - Para)</title>
  </head>
  <body>
    <h1>Ciclo (For - Para)</h1>
    <hr>
    <?php
      $n1 = 0;
      $n2 = 1;
      $re = 1;

      echo "La serie de fibonacci es: ".$re."<br>";
      for ($i=0; $i < 10; $i++) {
        echo "La serie de fibonacci es: ".$re."<br>";
        $n1 = $n2;
        $n2 = $re;
        $re = $n1+$n2;
      }

     ?>
  </body>
</html>
