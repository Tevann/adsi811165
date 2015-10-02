<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filtros (Opciones)</title>
</head>
<body>
  <h1>Filtros (Opciones)</h1>
  <hr>
  <form method="post">
    <fieldset>
      <legend>Rango de Numeros</legend>
    <input type="number" name="num" placeholder="Ingrese un numero">
    <input type="submit" value="Comprobar">
  </fieldset>
  </form>
  <?php
if($_POST){
      $opciones = array(
            "options"=>array(
              "min_range" => 0,
              "max_range" => 256
             )
           );
    if (filter_input(INPUT_POST, "num", FILTER_VALIDATE_INT, $opciones)) {
      echo "Es un número valido";
    }else{
      echo "No es un número valido";
    }
}
   ?>
</body>
</html>
