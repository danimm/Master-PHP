<?php

// FOR
/*

for(contador, condicion, incremento el contador){
  bloque de instrucciones
}

*/
$resultado = 0;
for ($i=0; $i <= 100; $i++) { 
  if ($i == 45) {
    echo "Hasta aquí puedo contar. <br>";
    break;
  }
  echo "$resultado + $i es: ";
  $resultado += $i;
  echo "$resultado,  <br>";
}
echo "El resultado final es: $resultado. <br>";

// con break podemos salir de un bucle