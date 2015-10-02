<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leer archivo linea a linea(fgets, feof)</title>
</head>
<body>
  <h1>Leer archivo linea a linea(fgets, feof)</h1>
  <hr>
  <?php
    $file = fopen('texto.txt', 'r') or exit ('No se pudo abrir el archivo');

    while(!feof($file)){
      echo fgets($file)."<br>";
    }
    fclose($file);
   ?>
</body>
</html>
