<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href=master.css rel=stylesheet>
</head>
<body>
<table border=1>
<tr>
  <th> Operador</th>
  <th> Descripcion</th>
  <th> Ejemplo </th>
  <th> Resultado </th>
</tr>
<tr>
  <td> && </td>
  <td> Y </td>
  <td> (x < 10 && y > 1) </td>
  <?php $x=6; $y=3;{ ?>
  <td><?php echo var_export($x<10 && $y>1); ?></td>
</tr>
<tr>
  <td> || </td>
  <td> O </td>
  <td>  (x == 5 || y == 5) </td>
  <td><?php echo var_export($x == 5 || $y == 5); ?> </td>
</tr>
<tr>
  <td> ! </td>
  <td> No </td>
  <td> !(x == y) </td>
  <td><?php echo var_export(!($x==$y)); ?></td>
</tr>
</table>
<?php } ?>

</body>
</html>
