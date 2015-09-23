<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funciones (Retornar)</title>
  </head>
  <body>
    <h1>Funciones (Retornar)</h1>
    <hr>
    <?php

    function all($n1, $sim ,$n2){
        if($sim == "+"){
          return $n1 + $n2;
        }elseif ($sim == "*") {
          return $n1 * $n2;
        }else{
          return $n1 / $n2;
        }
      }
      echo "Suma<br><br>";
      echo all(2, "+",5)."<br>";
      echo all(3, "+",50)."<br>";
      echo all(24, "+",65)."<br>";
      echo "<hr>";
      echo "Multiplicacion<br><br>";
      echo all(90, "*", 20)."<br>";
      echo all(23, "*", 45)."<br>";
      echo all(100, "*", 56)."<br>";
      echo "<hr>";
      echo "Division<br><br>";
      echo all(34, "/", 4)."<br>";
      echo all(245, "/",22)."<br>";
      echo all(18, "/", 12)."<br>";


     ?>
  </body>
</html>
