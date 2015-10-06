<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario (Get)</title>
</head>
<body>
  <h1>Formulario (Get)</h1>
  <hr>
  <fieldset>
    <legend><h4>Datos Personales</h4></legend>
    <form action="" method="get">
    <input type="text" name="nombre" placeholder="Ingrese su nombre"><br>
    <input type="text" name="telefono" placeholder="Ingrese su telefono"><br>
    <input type="text" name="correo" placeholder="Ingrese su correo"><br>
    <input type="submit" value="Enviar">
    </form>
  </fieldset>
  <?php
    if($_GET) {
      echo "<li><h5>Su nombre es:   ".$_GET['nombre']."<h5></li>";
      echo "<li><h5>Su Telefono es: ".$_GET['telefono']."<h5></li>";
      echo "<li><h5>Su correo es:   ".$_GET['correo']."<h5></li>";
    }

   ?>
</body>
</html>
