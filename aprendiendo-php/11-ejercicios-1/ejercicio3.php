<?php

/*

Imprimir los cuadrados (numero por si mismo) de los 40 primero numeros.PD: utilizar bucle while

*/

$contador = 1;

while ($contador <= 40) {
  $cuadrado = $contador*$contador;
  echo "$contador al cuadrado es: $cuadrado.<br>";
  $contador++;
}

// for ($i=1; $i <=40; $i++) { 
//   echo "$i al cuadrado es: ".$i *$i."<br>";
// }