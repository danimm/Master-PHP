<?php

/*

Hacer un programa que muestre todos los numeros entre dos números
que nos lleguen por la url(GET)

*/

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "El primer número es: $numero1<br>";
echo "El segundo número es: $numero2<br>";
// do {
//   $resultado = $numero1++;
//   echo $resultado."<br>";
// } while ($resultado < $numero2);

for ($i=$numero1; $i <= $numero2; $i++) { 
  echo "$i<br>";
}
