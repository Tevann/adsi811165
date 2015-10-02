<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Subir archivos al servidor (Validar)</title>
</head>
<body>
  <h1>Subir archivos al servidor (Validar)</h1>
  <hr>
  <fieldset>
    <legend><h2>Subir Archivo</h2></legend>
    <form enctype="multipart/form-data" method="post">
    <label for="archivo">
      Seleccione Archivo:
      <input type="file" name="foto" id="foto">
    </label>
    <input type="submit" value="Subir">
  </form>
</fieldset>
<?php
if((($_FILES["foto"]["type"] == "image/png")
|| ($_FILES["foto"]["type"] == "image/jpg"))
&& ($_FILES["foto"]["size"] < 80000)) {
if($_FILES["foto"]["error"] > 0) {
echo "Erro: ".$_FILES["foto"]["error"]."<br>";
}
else {
echo "Archivo: ".$_FILES["foto"]["name"]."<br>";
echo "Tipo: ".$_FILES["foto"]["type"]."<br>";
echo "Tamaño: ".$_FILES["foto"]["size"] / 1024." Kb <br>";
echo "Almacenado en: ".$_FILES["foto"]["tmp_name"];
}
}
else {
echo "Archivo Invalido:";
}
  ?>

</body>
</html>
