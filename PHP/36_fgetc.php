<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Leer archivo caracter a caracter(fgets, feof)</title>
</head>
<body>
  <h1>Leer archivo caracter a caracter(fgets, feof)</h1>
  <hr>
  <?php
    $file = fopen('texto.txt', 'r') or exit ('No se pudo abrir el archivo');

    while(!feof($file)){
      echo fgetc($file)."-";
    }
    fclose($file);
   ?>
</body>
</html>
