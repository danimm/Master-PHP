<?php

/*  Variables locales: se definen dentro de una función y
      y no pueden ser usadas fuera de ella. Si hiciera un
      return si estaría disponible.

    Variables globales: se declaran fuera de una función y
      estan disponibles dentro y fuera de las funciones

*/

// Variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres.";

echo $frase;

function holaMundo() {
  // para poder usar una variables global
  global $frase;
  echo "<h1>$frase</h1>";
  $year = 2019;
  echo "$year desde la función";
  return $year;
}

echo holaMundo();
echo "$year";

// Funciones variables

function buenosDias(){
  return "Hola! Buenos días.";
}
function buenasTardes(){
  return "Heyy! Un cafelito?";
}
function buenasNoches(){
  return "Hasta mañana!";
}

$horario = "buenasNoches";

echo "<h1>".$horario()."</h1>";
// va a imprimir el resultado de la función que se llama
// como el string
// otra opcion es meterlo en una variable para concatenarlo

$horario = "Tardes";
$miFuncion = "buenas".$horario;
echo $miFuncion();




?>