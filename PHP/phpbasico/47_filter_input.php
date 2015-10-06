<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filtros (filter_var)</title>
</head>
<body>
  <h1>Filtros (filter_var)</h1>
  <hr>
  <form method="post">
    <input type="text" name="num" placeholder="Ingrese un numero">
    <input type="submit" name="name" value="Comprobar">
  </form>
  <?php
if($_POST){
    if (filter_input(INPUT_POST, "num", FILTER_VALIDATE_INT)) {
      echo "Es un número entero";
    }else{
      echo "No es un número entero";
    }
}
   ?>
</body>
</html>
