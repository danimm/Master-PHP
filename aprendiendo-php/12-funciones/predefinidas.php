<?php

// debuggear una variable,dato,etc
$nombre = "Daniel";
var_dump($nombre);
echo "<br>";

//fechas
// https://secure.php.net/manual/es/function.date.php

echo date('D-d-M-Y');
echo "<br>";
echo time();
echo "<br>";

// Matemáticas

echo "Raiz cuadrada de el 10: ".sqrt(10);
echo "<br>";

echo "Número aleatorio entre 10 y 40: ".rand(10,20);
echo "<br>";

echo "Número pi: ".pi();
echo "<br>";

echo "Redondear: ".round(7.829755858, 2);
echo "<br>";

// Más funciones generales

echo gettype($nombre);
echo "<br>";

// detectar tipos/tipado
// is_tipo de variable que sea
if (is_string($nombre)) {
  echo "Esa variable es un string";
}
echo "<br>";

// comprobar si existe una variable
echo isset($nombre);
// devuelve 1 (true) si existe
echo "<br>";

// limpiar espacios por delante y por detras de un string con trim
$frase = "   mi contenido   ";
echo "$frase";
echo "<br>";
var_dump(trim($frase));
echo "<br>";

// Eliminar variables / indices de Arrays
$year = 2020;
unset($year);
var_dump($year);
echo "<br>";

// Comprobar si una variable:
// no existe, esta vacía o es 0

$texto = "";
if (empty($texto)) {
  echo "La variable $texto está vacía.";
} else {
  echo "Tiene contenido";
}
echo "<br>";

// Cuantos caracteres tiene un string

$cadena = "12345";
echo strlen($cadena);
echo "<br>";

// Encontrar la posicion de un caracter

$frase = "La vida es bella";
echo strpos($frase, "ida");
echo "<br>";

// Reemplazar contenido de un string, palabras

$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br>";

// Conventir a mayusculas y minusculas

echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
echo "<br>";


?>