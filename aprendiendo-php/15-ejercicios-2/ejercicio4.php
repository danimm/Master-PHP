<?php 

// Crear un script en php que tenga 4 variables: array, string, int y booleana
// e imprimir un mensaje dependiendo el tipo de variable que sea

$string = 'Soy un string';
$array = ['Hola mundo', 88];
$num = 1;
$boleado = true;

// echo "La primera variable es un: ".var_dump($string);

if (is_array($array)) {
  echo "Array correcto";
  echo "<br>";
}

if (is_string($string)) {
  echo "String correcto";
  echo "<br>";
}

if(is_integer($num)){
  echo "Integer correcto";
  echo "<br>";
}

if(is_bool($boleado)){
  echo "Booleano correcto";
  echo "<br>";
}

?>