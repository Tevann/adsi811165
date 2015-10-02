<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Subir archivos al servidor (Mostrar)</title>
</head>
<body>
  <h1>Subir archivos al servidor (Mostrar)</h1>
  <hr>
  <fieldset>
    <legend><h2>Subir Archivo</h2></legend>
    <form enctype="multipart/form-data" method="post">
    <label for="archivo">
      Seleccione Archivo:
      <input type="file" name="foto" id="archivo">
    </label>
    <input type="submit" value="Subir">
  </form>
</fieldset>
<?php
  if($_FILES){

    if($_FILES["foto"]["error"] > 0){
        echo "Error: ".$_FILES["foto"]["error"]."<br>";
      }else{
        echo "Archivo:        ".$_FILES["foto"]["name"]."<br>";
        echo "Tipo:           ".$_FILES["foto"]["type"]."<br>";
        echo "Tamaño:         ".floor($_FILES["foto"]["size"] / 1024)." Kb <br>";
        echo "Almacenado en:  ".$_FILES["foto"]["tmp_name"];
      }
  }
  ?>

</body>
</html>
