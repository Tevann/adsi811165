<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario (POST)</title>
  <style media="screen">
    td{
      width: 40px;
      height: 20px;
      border: 1px solid #000;

    }
    table{
      border-collapse: collapse;
      border: 1px solid #000;
    }
  </style>
</head>
<body>
  <title>Formulario (POST)</title>
  <hr>
  <fieldset>
    <legend>Crea tu tabla</legend>
    <form method="post">
    <label for="">Numero de filas</label>
    <input type="number" name="filas">
    <label for="">Numero de Columnas</label>
    <input type="number" name="columnas">
    <input type="submit" value="Dibujar">
  </form>
  </fieldset>
  <?php
  if($_POST){
    $filas = $_POST['filas'];
    $columnas = $_POST['columnas'];

    echo "<table>";
      for ($i=1; $i <= $filas; $i++) {
        echo "<tr>";
        for ($j=1; $j <= $columnas; $j++) {
            echo "<td> f".$i."-c".$j."</td>";
          }
        echo "</tr>";
    }
      echo "</table>";
}
   ?>
</body>
</html>
