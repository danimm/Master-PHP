<?php

// Ejercicio 1

// Hacer un progama en PHP que tenga:
// un array con 8 números enteros
// 2-Recorrerlo y mostrarlo
// 3-Ordenarlo y mostrarlo
// 4-Mostrar su longitud
// 5-Buscar algún elemento

$miArray = [3,6,2,4,1,8,12,22];
$numeros = array(11,44,55,77,23,9,97,67);

function Mostrar($array){
  foreach ($array as $key) {
    echo "$key<br>";
  }
}

function MostrarProfe($array){
  $resultado = "";
  foreach ($array as $element) {
    // $resultado = $resultado.$numero."<br>";
    $resultado .= $element."<br>";
  }
  return $resultado;
}

echo "Mi manera, array tal y como está:<br>";
Mostrar($miArray);
echo "<br>";

sort($miArray); // ordenar con sort, por orden alfabético es Asort 
echo "Array ordenado con mi manera:<br>";
echo Mostrar($miArray);
echo "<br>";
echo "Array ordenado segun el profe como un string:<br>";
echo MostrarProfe($miArray);
echo "<br>";
var_dump($miArray);
echo "<br>";
echo "<br>";
// var_dump($miArray);

// profe usa count
echo "Tenemos un total de: ".count($miArray)." elementos<br>";
// tambien funciona con sizeof
echo "El array tiene: ".sizeof($miArray)." elementos<br>";

echo "La búsqueda esta en la posición: $busqueda<br>";

$busqueda = $_GET['buscar'];
$search = array_search($busqueda, $miArray);
if (empty($busqueda)) {
  echo "Introduce un número para buscar";
} else {
  if(is_numeric($search)){
    // si intentamos hacerlo como el profe con empty:
    // no funciona porque el 0 de empty da true, esta vacío
    // y el hace !empty($busqueda) por lo cuál no va a entrar
    echo "La búsqueda esta en la posición: $search<br>";
    var_dump($search);
  } else {
    echo "No existe el número en el array";
    var_dump($search);
  }
}



?>