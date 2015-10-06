<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Subir archivos al servidor (Mover)</title>
</head>
<body>
  <h1>Subir archivos al servidor (Mover)</h1>
  <hr>
  <fieldset>
    <legend><h2>Subir Archivo</h2></legend>
    <form action="upload.php" enctype="multipart/form-data" method="post">
    <label for="archivo">
      Seleccione Archivo:
      <input type="file" name="foto" id="foto" accept="image/*">
    </label>
    <input type="submit" value="Subir">
  </form>
</fieldset>
</body>
</html>
