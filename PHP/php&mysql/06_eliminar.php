<?php

$conx = mysqli_connect('localhost','root','','adsi');

//$numrows = mysqli_num_rows($sql);
//$numrows = mysqli_affected_rows($sql);

if(mysqli_query($conx, "DELETE FROM users WHERE id = 4")){
    echo "<h2>El usuario se elimino con exito</h2>";
  }else{
echo "<h2>El usuario no se elimino con exito</h2>";
}

mysqli_close($conx);
 ?>
