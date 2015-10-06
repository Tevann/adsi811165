<?php
$conx = mysqli_connect('localhost','root','','adsi');

$sql = "CREATE TABLE users (id int auto_increment,
                            firstname varchar(16) NOT NULL,
                            lastname varchar(16) NOT NULL,
                            phonenumber bigint(12) NOT NULL,
                            city varchar(16) NOT NULL,
                            PRIMARY KEY(id))";

if(mysqli_query($conx, $sql)){
    echo "<h2>La consulta se ejecuto con exito</h2>";
}else{
  echo "<h2>La consulta no se ejecuto con exito</h2>";
}

mysqli_close($conx);
 ?>
