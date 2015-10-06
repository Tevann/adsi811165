<?php
  if(isset($_COOKIE['visitas'])){
    setcookie('visitas', $_COOKIE['visitas']+1, time()+60);
    $msj = "Usted ha visitado el sitio: ".$_COOKIE['visitas']." veces.";
    }else{
      setcookie('visitas', 2, time()+60);
    $msj = "Usted ha visitado el sitio: 1 vez.";
    }
    if($_GET){
      setcookie('visitas', 2, time()-60);
    $msj = "Se ha eliminado el cookie, Recargue la pagina";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contador de visitas</title>
</head>
<body>
  <h1>Contador de visitas</h1>
  <hr>
  <a href="?eliminar=true">Eliminar Cookie</a><br>
  <?php
    echo $msj;

   ?>
</body>
</html>
