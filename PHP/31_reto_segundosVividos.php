<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Reto (Segundos Vividos)</title>
</head>
<body>
  <h1>Reto (Segundos Vividos)</h1>
  <hr>
  <form method="post">
    <label>Ingrese el dia:</label>
    <input type="number" name="dia" placeholder="dd"><br>
    <label>Ingrese el mes:</label>
    <input type="number" name="mes"><br>
    <label>Ingrese el año:</label>
    <input type="number" name="ano"><br>
    <input type="submit" value="Calcular">
    <br><br>
  </form>
  <?php
  if($_POST){
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];


    $actual = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
    $calculo = mktime(0, 0, 0, date($mes), date($dia), date($ano));

    echo "La fecha es: ".date('m/d/Y', $calculo)."<br>";
    $total = $actual - $calculo;

    $dia = floor(((($total/60)/60)/24));
    $mes = floor($dia/30);
    $ano = floor($mes/12);

    echo "Usted ha vivido ".$total." Segundos<br>";
    echo "Usted ha vivido ".$dia." dias<br>";
    echo "Usted ha vivido ".$mes." meses<br>";
    echo "Usted ha vivido ".$ano." años<br> ";


  }

   ?>
</body>
</html>
