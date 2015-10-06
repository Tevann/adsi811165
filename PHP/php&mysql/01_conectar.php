<?php
  $conx = mysqli_connect('localhost','root','','adsi');

  if(mysqli_connect_errno()){
      echo "<h2>Hay errores en la conexion".mysqli_connect_errno()."</h2>";
  }else{
    echo "<h2>Se ha conectado a la Base de Datos</h2>";
  }

  mysqli_close($conx);


 ?>
