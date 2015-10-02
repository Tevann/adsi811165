<?php setcookie('username', 'Tevan', time()+60); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cookies (setcookie)</title>
</head>
<body>
  <h1>Cookie (Setcookie)</h1>
  <hr>
  <?php
    if(isset($_COOKIE['username'])){
    echo "<h3>Bienvenido: ".$_COOKIE['username']."</h3>";
  }else{
    echo "El cookie murio";
  }
   ?>
</body>
</html>
