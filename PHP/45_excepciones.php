<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Excepciones (Forma Incorrecta)</title>
</head>
<body>
  <h1>Excepciones (Forma Incorrecta)</h1>
  <hr>
  <form method="post">
    <label for="">Ingrese su edad:</label>
    <input type="text" name="edad" placeholder="Ingrese la edad">
    <input type="submit" name="name" value="Comprobar">
  </form>
  <?php

if($_POST){
    $edad = $_POST['edad'];

    function verificarEdad($edad){
      try {
        if($edad < 18){
          throw new Exception("Usted es menor de edad");
        }
      } catch (Exception $e) {
        echo "Mensaje: ".$e->getMessage();
    }
}
   ?>
</body>
</html>
