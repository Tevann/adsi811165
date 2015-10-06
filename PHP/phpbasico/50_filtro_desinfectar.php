<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filtro (Limpiar Campo)</title>
</head>
<body>
  <h1>Filtro (Limpiar Campo)</h1>
  <hr>
  <form method="post">
    <fieldset>
      <legend>Validar Direccion Internet</legend>
    <input type="url" name="url" value="http://" placeholder="Ingrese una Direccion">
    <input type="submit" value="Comprobar">
  </fieldset>
  </form>
  <?php
if($_POST){

    if(!filter_has_var(INPUT_POST, "url")) {
        echo "La url no Existe";
      }
      else {
        $url = filter_input(INPUT_POST, "url", FILTER_SANITIZE_URL);
        echo "La url desinfecatada es: ".$url;
        }
      }
   ?>
</body>
</html>
