<?php

/*

Recoger 2 números por la URL(GET) y hacer todas las operaciones
basicas de una calculadora.
suma, resta, multiplicación y división de esos dos números.

*/

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

// if ($num1 && $num2) {
if (isset($_GET['num1']) && isset($_GET['num2'])) {
  echo "Suma: $num1 + $num2 = ".($num1+$num2)."<br>";
  echo "Resta: $num1 - $num2 = ".($num1-$num2)."<br>";
  echo "Multiplicación: $num1 x $num2 = ".$num1*$num2."<br>";
  echo "División: $num1 / $num2 = ".$num1/$num2."<br>";
} else {
  echo 'Tienes que introducir los números.<br>';
}
var_dump($_GET);
