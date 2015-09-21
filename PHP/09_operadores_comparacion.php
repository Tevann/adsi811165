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
  <td> == </td>
  <td> Es igual </td>
  <td> 5==8 </td>
  <td><?php echo var_export(5==8); ?></td>
</tr>
<tr>
  <td> != </td>
  <td> No es igual </td>
  <td>  5!=8 </td>
  <td><?php echo var_export(5!=8); ?> </td>
</tr>
<tr>
  <td> <> </td>
  <td> No es igual </td>
  <td> 5<>8 </td>
  <td><?php echo var_export(5<>8); ?></td>
</tr>
<tr>
  <td> > </td>
  <td> Es mayor que </td>
  <td>  5 > 8 </td>
  <td><?php echo var_export(5>8); ?></td>
</tr>
<tr>
  <td> < </td>
  <td> Es menor que </td>
  <td>  5 < 8 </td>
  <td><?php echo var_export(5<8); ?></td>
</tr>
<tr>
  <td> >= </td>
  <td> Es mayor o igual que  </td>
  <td> 5 >= 8  </td>
  <td><?php echo var_export(5>=8); ?></td>
</tr>
<tr>
  <td> <= </td>
  <td> Es menor o igual que </td>
  <td> 5 <= 8 </td>
  <td><?php echo var_export(5<=8); ?></td>
</tr>
</table>

</body>
</html>
