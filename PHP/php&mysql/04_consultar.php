<?php

$conx = mysqli_connect('localhost','root','','adsi');

$rs = mysqli_query($conx, "SELECT * FROM users");
?>

<table border='1'>
  <thead>
      <tr>
        <th>id</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Telefono</th>
        <th>Ciudad</th>
      </tr>
    </thead>
    <tbody>
      <?php
      while($row = mysqli_fetch_array($rs)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['phonenumber']."</td>";
        echo "<td>".$row['city']."</td>";
      }
       ?>
  </tbody>
</table>

<?php
mysqli_close($conx);


 ?>
