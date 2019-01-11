<?php

// funciones para php

$cantantes = ['2pac', 'Drake', 'JL', 'Alfredo'];
$numeros = [1,2,6,8,3];

// ordenar por orden alfabetico asort
asort($cantantes);
var_dump($cantantes);
echo "<br>";

// orden alfabetico inverso arsort

asort($numeros);
var_dump($numeros);
echo "<br>";
arsort($numeros);
var_dump($numeros);
echo "<br>";

// añadir elementos a un array
// array[] = 'elemento'
$cantantes[] = "Natos";
var_dump($cantantes);
echo "<br>";
array_push($cantantes, "Waos");
var_dump($cantantes);
echo "<br>";

// eliminar el ultimo elemento del array
array_pop($cantantes);
var_dump($cantantes);
echo "<br>";

// borrar un indice concreto
unset($cantantes[2]);
var_dump($cantantes);
echo "<br>";

// sacar un elemento aleatorio de un array
$indice = array_rand($cantantes);
echo $cantantes[$indice];

// darle la vuelva a un array
echo "<br>";
var_dump(array_reverse($numeros));

// buscar dentro de un array
echo "<br>";
$resultado = array_search('Alfredo', $cantantes);
echo var_dump($resultado);

// contar numero de elementos

echo "<br>";
echo count($cantantes);
echo "<br>";
echo sizeof($cantantes);