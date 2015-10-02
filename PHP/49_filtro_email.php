<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filtro (Validar Email)</title>
</head>
<body>
  <h1>Filtro (Validar Email)</h1>
  <hr>
  <form method="post">
    <fieldset>
      <legend>Validar Email</legend>
    <input type="email" name="correo" placeholder="Ingrese un Correo">
    <input type="submit" value="Comprobar">
  </fieldset>
  </form>
  <?php
if($_POST){

  if(!filter_has_var(INPUT_POST, "correo")) {
echo "El Campo Correo Electrónico no Existe";
}
else {
if(!filter_input(INPUT_POST, "correo", FILTER_VALIDATE_EMAIL)) {
echo "El Correo Electrónico no es valido";
}
else {
echo "El Correo Electrónico es valido";
      }
    }
}
   ?>
</body>
</html>
