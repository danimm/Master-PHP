<?php

/*

Sacar todos los números pares del 1 al 100

*/

// for ($i=0; $i <= 100; $i++) { 
//   if ($i%2 != 0) {
//     echo "El número $i es impar.<br>";
//   }
// }

for ($i=1; $i <= 100; $i++) {
  if ($i%3 == 0 && $i%5 == 0){
    echo "<h1>$i es fizzBuzz.</h1><br>";
  } elseif ($i%3 == 0) {
    echo "<h3>$i es fizz.</h3><br>";
  } elseif ($i%5 == 0) {
    echo "<h2>$i es buzz.</h2><br>";
  } else {
    echo "$i no es nada!!<br>";
  }
}