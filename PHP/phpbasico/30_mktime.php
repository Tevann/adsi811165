<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>mktime (PHP)</title>
</head>
<body>
<h1>mktime</h1>
<hr>
<?php
$hoy = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$manana = mktime(0, 0, 0, date('m'), date('d')+1, date('Y'));
$mes = mktime(0, 0, 0, date('m')+1, date('d'), date('Y'));
$ano = mktime(0, 0, 0, date('m'), date('d'), date('Y')+1);

  echo "Hoy es: ".date("d/m/Y", $hoy)."<br>";
  echo "Mañana es: ".date("d/m/Y", $manana)."<br>";
  echo "El mes siguiente es: ".date("d/m/Y", $mes)."<br>";
  echo "El año siguiente es: ".date("d/m/Y", $ano);
 ?>
</body>
</html>
