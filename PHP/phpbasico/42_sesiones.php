<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sesiones</title>
  </head>
  <body>
    <h1>Sesiones (Contador de visitas)</h1>
    <hr>
    <form method="POST">
      <input type="submit" name="name" value="Cerrar Sesion">
    </form>
<?php
if(isset($_SESSION["visitas"])) {
  $_SESSION["visitas"]++;
}
else {
  $_SESSION["visitas"] = 1;
}

if($_POST){
  unset($_SESSION['visitas']);
  session_destroy();
}else{
  echo "Número de visitas: ".$_SESSION['visitas'];
}

?>

  </body>
</html>
