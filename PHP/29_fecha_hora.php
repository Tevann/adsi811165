<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fecha y Hora</title>
</head>
<body>
  <h1>Fecha y Hora</h1>
  <hr>
  <?php

    echo date('d-m-Y');
    echo "<br>";
    echo date('d/m/Y');
    echo "<br>";
    echo gmdate('H:i:s', 3600);
   ?>
</body>
</html>
