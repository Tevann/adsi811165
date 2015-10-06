<?php
$conx = mysqli_connect('localhost','root','','adsi');

$sql = "UPDATE users SET firstname = 'Esteban', city = 'Aranzazu', phonenumber = '  3113530409' WHERE id = 2";

if (mysqli_query($conx, $sql)) {
    echo "<h2>El usuario se ha actualizado con exito</h2>";
}else{
  echo "<h2>El usuario no se ha actualizado con exito</h2>";
}

mysqli_close($conx);


 ?>
