<?php
//forma para llamar css desde php el master.css es donde esta el css
echo "<link href=master.css rel=stylesheet>";

$x = 3;
echo "<table border=1>";
echo "<tr>";
echo "<th> Operador</th>";
echo "<th> Ejemplo</th>";
echo "<th> Es Igual Que </th>";
echo "<th> Resultado </th>";
echo "</tr>";

echo "<tr>";
echo "<td> = </td>";
echo "<td> x = 3 </td>";
echo "<td>  x = 3 </td>";
echo "<td>  ".$x." </td>";

echo "</tr>";

echo "<tr>";
echo "<td> += </td>";
echo "<td> x += 3 </td>";
echo "<td>  x = x + 3 </td>";
echo "<td>  ".($x += 3)." </td>";
echo "</tr>";

echo "<tr>";
echo "<td> -= </td>";
echo "<td> x -= 3 </td>";
echo "<td> x = x - 3 </td>";
echo "<td>  ".($x -= 3)." </td>";
echo "</tr>";

echo "<tr>";
echo "<td> *= </td>";
echo "<td> x *= 3 </td>";
echo "<td>  x = x * 3 </td>";
echo "<td>  ".($x *= 3)." </td>";
echo "</tr>";

echo "<tr>";
echo "<td> /= </td>";
echo "<td> x /= 3 </td>";
echo "<td>  x = x / 3 </td>";
echo "<td>  ".($x /= 3)." </td>";
echo "</tr>";

echo "<tr>";
echo "<td> %= </td>";
echo "<td> x %= 3  </td>";
echo "<td> x = x % 3  </td>";
echo "<td> ".($x %= 3)."  </td>";
echo "</tr>";

echo "<tr>";
echo "<td> .= </td>";
echo "<td> x .= 'veces' </td>";
echo "<td> x = x . 'veces' </td>";
echo "<td> ".($x .= 'veces')." </td>";

echo "</tr>";

echo "</table>";
 ?>
