<?php

$conx = mysqli_connect('localhost','root','','adsi');

$firstname = "Lacy";
$lastname = "Coddy";

$sql = "SELECT * FROM users WHERE firstname = '$firstname' && lastname = '$lastname' LIMIT 1";

$rs = mysqli_query($conx, $sql);

$numrows = mysqli_num_rows($rs);
//$numrows = mysqli_affected_rows($sql);

if($numrows > 0){
    echo "<h2>El usuario esta registrado :D</h2>";
  }else{
    echo "<h2>El usuario no esta registrado, Vuelva a intentarlo ;)</h2>";
}

mysqli_close($conx);
 ?>
