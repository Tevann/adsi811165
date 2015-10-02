<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mail</title>
</head>
<body>
<h1>Mail</h1>
<hr>
<form method="post">
  <strong>Correo:</strong><input type="text"name="email"><br>
  <strong>Asunto:</strong><input type="text" name="asunto"><br>
  <strong>Mensaje:</strong><textarea name="mensaje"></textarea><br>
  <input type="submit" value="Enviar">
</form>
<?php
  if(isset($_REQUEST["email"])) {
      $email = $_REQUEST["email"];
      $asunto = $_REQUEST["asunto"];
      $mensaje = $_REQUEST["mensaje"];

      mail("jzuluaga16@misena.edu.co", "Asunto: $asunto", $mensaje, "De: $email");
      echo "Gracias, El Correo fue enviado.";
}


?>
</body>
</html>
