<?php
/*

Hacer un programa que muestre todos los numeros impares 
entre dos números
que nos lleguen por la url(GET)

*/

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

// do {
  //   $resultado = $numero1++;
  //   echo $resultado."<br>";
  // } while ($resultado < $numero2);
  if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    echo "El primer número es: $numero1<br>";
    echo "El segundo número es: $numero2<br>";
  for ($i=$numero1; $i <= $numero2; $i++) { 
    if ($i%2 != 0) {
      echo "$i<br>";
    }
  }
} else {
  echo "introduce números validos.";
}

?>