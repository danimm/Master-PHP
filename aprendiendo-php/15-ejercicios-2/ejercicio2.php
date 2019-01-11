<?php

// Ejercicio 2:

// Escribir un programa que añada valores a un array, mientras que su longitud sea menor a 120, y luego mostrarlo por pantalla.

$numeros = [];
$longitud = count($numeros);
// $numeroAleatorio = rand(1, 50);

for ($i=0; $i <=120; $i++) { 
  $numeroAleatorio = rand(1, 50);
  array_push($numeros, $numeroAleatorio);
}

// foreach ($numeros as $elemento) {
//   echo "Valor: $elemento <br>";
  // aquí es sólo el valor
// }
foreach ($numeros as $posicion => $valor) {
  echo "Posición: $posicion, valor: $valor<br>";
  // Aquí vemos la llave y el valor, más completo.
}

?>