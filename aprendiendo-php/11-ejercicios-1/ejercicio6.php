<?php

/*

Mostrar las tablas de multiplicar del 1 al 10 en una tabla HTML

*/

echo "<table border='1'>"; // inicio de la tabla

echo '<tr>'; //cabecera
for ($cabecera=1; $cabecera <= 10; $cabecera++) { 
  echo '<td>'."Tabla del $cabecera</td>";
}
echo "</tr>"; // cierre de cabecera

echo "<tr>"; // inicio fila 2
for ($i=1; $i <= 10; $i++) { 
  echo '<td>'; //inicio celda
  for ($x=1; $x <= 10; $x++) { 
    echo "$i x $x = ".$i*$x;
    echo "<br>";
  }
  echo "</td>"; // cierre de celda
}
echo"</tr>"; // cierre fila 2

echo "</table>"; // fin de la tabla