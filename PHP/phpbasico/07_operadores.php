<?php

$num = 2;
echo "<link rel=stylesheet href=master.css>";

echo "<table border='1'>";
echo "<tr>";
echo "<th> Operador </th>";
echo "<th> Adicion </th>";
echo "<th> Ejemplo </th>";
echo "<th> Resultado </th>";
echo "</tr>";
echo "<tr>";
echo "<td> + </td>";
echo "<td> Adición </td>";
echo "<td> x=2 <br> x+2 </td>";
echo "<td>";
echo $num+2;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> - </td>";
echo "<td> Substracción </td>";
echo "<td> x=2 <br> 5-x </td>";
echo "<td>";
echo 5-$num;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> * </td>";
echo "<td> Producto </td>";
echo "<td> x=4 <br> x*5 </td>";
echo "<td>";
$num = 4;
echo 5*$num;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> / </td>";
echo "<td> Division </td>";
echo "<td> 15/5 </td>";
echo "<td>";
echo 15/5;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> % </td>";
echo "<td> Residuo </td>";
echo "<td> 5%2 </td>";
echo "<td>";
echo 5%$num;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> ++ </td>";
echo "<td> Incremento </td>";
echo "<td>x=5 <br> x++ </td>";
echo "<td>";
$num = 5;
echo $num++;
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td> -- </td>";
echo "<td> Decremento </td>";
echo "<td> x=5 <br> x-- </td>";
echo "<td>";
$num=5;
echo --$num;
echo "</td>";
echo "</tr>";
echo "</table>";

 ?>
