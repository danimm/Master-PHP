<?php

// Bucle While
// Itera o repite la ejecución hasta que se cumpla la condición

$num = 0;
while ($num <= 100) {
  echo "$num";
  if ($num != 100) {
    echo ", ";
  }
  $num++;
}

echo "<hr>";

// Ejemplo con While
// isset comprueba si existe para que no dé error

if (isset($_GET['numero'])) {
  $num = (int)$_GET['numero']; // casting, castear, cambiar el tipo
} else {
  $num = 1;
}

var_dump($num);
echo "<hr>";

echo "<h1>Tabla de multiplicar del número $num.</h1>";

$contador = 0;
while ($contador <= 10) {
  echo "$num x $contador = ".($num*$contador)."<br>";
  $contador++;
}
echo "<hr>";

// Do while
// la condicion se evalua al final del bloque de instrucciones
// por lo menos se va a ejecutar por lo menos una vez

$edad = 17;
$contador = 1;
do {
  echo "Puedes conducir $contador";
  echo "<br>";
  $contador++;
} while($edad >= 18 && $contador <=10);




