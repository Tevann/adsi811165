<?php

$conx = mysqli_connect('localhost','root','','adsi');

if(isset($_GET['action'])){
    $rsl = mysqli_query($conx, "SELECT * FROM users");

    while($row = mysqli_fetch_array($rsl)){
?>
<tr>
  <td><?php echo $row['id']; ?></td>
  <td><?php echo $row['firstname']; ?></td>
  <td><?php echo $row['lastname']; ?></td>
  <td>Void</td>
</tr>
<?php
  }
}
mysqli_close($conx);

?>
