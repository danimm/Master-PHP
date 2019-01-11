<?php

// Operadores aritméticos

$numero1 = 55;
$numero2 = 33;

// echo '<h1>Suma: '.($numero1+$numero2).'</h1>'.'<br>';
// echo '<h1>Resta: '.($numero1-$numero2).'</h1>'.'<br>';
// echo '<h1>Multiplicación: '.($numero1*$numero2).'</h1>'.'<br>';
// echo '<h1>División: '.($numero1/$numero2).'</h1>'.'<br>';
// echo '<h1>Resto de la división: '.($numero1%$numero2).'</h1>'.'<br>';

// Operadores de incremento y decremento

$year = 2018;
echo "<h1>Año normal: $year</h1>";

// Incremento
// $year = $year +1
$year++;
echo "<h1>Incremento: $year</h1>";

// Decremento
// $year = $year -1
$year--;
echo "<h1>Decremento: $year</h1>";

// Pre-incremento
// $year = 1 + $year
++$year;
echo "<h1>Pre-incremento: $year</h1>";


// Pre-decremento
// $year = 1 - $year
--$year;
echo "<h1>Pre-decremento: $year</h1>";



// Operadores de asignación
$edad = 55;

echo $edad.'<br/>';
echo ($edad+=5).'<br/>';
echo ($edad-=5).'<br/>';
echo ($edad*=5).'<br/>';
echo ($edad/=5).'<br/>';
// var_dump($edad);
