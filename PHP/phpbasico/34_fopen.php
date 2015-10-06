<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lectura y Escritura de Archivos de texto plano(fopen, fclose)</title>
</head>
<body>
  <h1>Lectura y Escritura de Archivos de texto plano(fopen, fclose)</h1>
  <hr>
  <?php
    $file = fopen('texto.txt', 'r') or exit ('No se pudo abrir');
    if($file)
        echo "El texto se ha cargado en modo lectura";
    fclose($file);
   ?>
</body>
</html>
