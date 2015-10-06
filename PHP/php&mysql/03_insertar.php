<?php
$conx = mysqli_connect('localhost','root','','adsi');

// Forma Masiva de insertar registros
/* for ($i=0; $i <10 ; $i++) {
//   $sql = "INSERT INTO users VALUES(DEFAULT, 'Tevan$i', 'Zuluaga$i', 834569$i, 'Manizales')";
//   mysqli_query($conx, $sql);}
*/

// Forma larga -> con nombres de las columnas
//$sql = "INSERT INTO users (id, firstname, lastname, phonenumber, city)
//                    VALUES(default, 'Tevan', 'Zuluaga', 3128111027, 'Manizales')";

// Forma corta -> solo valores en orden
$sql2 = "INSERT INTO users VALUES(default, 'Chris', 'Taub', 3035642891, 'EEUU')";

if(mysqli_query($conx, $sql2)){
  echo "<h2>Se insertaron con exito los usuarios</h2>";
}
mysqli_close($conx);

 ?>
