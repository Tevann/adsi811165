<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Formulario (Request)</title>
</head>
<body>
  <h1>Formulario (Request)</h1>
<hr>
<form method="post">
  <input type="search" name="search">
  <input type="submit" value="Buscar">
</form>
<?php
  if($_POST){
    $search = $_REQUEST['search'];

 echo "<a href='http://www.google.com?q=".$search."' target='blank'>Mostrar Resultados</a>";
 echo "<iframe src='http://www.youtube.com/results?search_query=$search' width='400' height='200'></iframe>";
 }
  ?>
</body>
</html>
