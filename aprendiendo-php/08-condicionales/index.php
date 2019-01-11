<?php

/*

Condicionales IF:
  if(condicion){
    instrucciones
  } else {
    otras instrucciones
  }

Operadores de comparación

== igual
=== idéntico
!= diferente
<> difente
!== no identico
< menor que
> mayor que 
<= menor o igual que
>= mayor o igual que

Operadores lógicos
&& AND Y
|| OR o
! NOT no




*/
// Ejemplo 1 con IF
$color = 'rojo';

if($color == 'rojo'){
  echo "El color es rojo";
} else {
  echo "es otro color, pero rojo no";
}
echo "<br/>";

// Ejemplo 2 con IF
$year = 2019;
if ($year == 2019) {
  echo "estamos en 2019";
} else {
  echo "Es un año posterior a 2019";
}
echo "<br/>";

// Ejemplo 3

$nombre = "Paco Pepe";
$ciudad = 'Madrid';
$continente = 'América';
$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad) {
  echo "Puedes pasar $nombre, eres mayor de edad.";
  echo "<br/>";
  if ($continente == 'Europa') {
    echo "Eres de $continente porque vives en $ciudad.";
    echo "<br/>";
  } else {
    echo "No eres de Europa, ya que vienes de $continente.";
    echo "<br/>";
  }
  
} else {
  echo "Donde vas enano? Vuelve cuando tengas $mayoria_edad años.";
  echo "<br/>";
}

// Ejemplo 4 con elseIf
$dias_semana = ['Días','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo'];
$dia = 8;

if ($dia == 1) {
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} elseif ($dia == 2){
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} elseif ($dia == 3){
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} elseif ($dia == 4){
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} elseif ($dia == 5){
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} elseif ($dia == 6){
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} elseif ($dia == 7){
  echo "Es el día $dia, también llamado $dias_semana[$dia].";
} else {
  echo "Ese número no corresponde con ningún día de la semana.";
}
echo "<hr>";

// Ejemplo 5

$edad1 = 18;
$edad2 = 64;
$edad_oficial = 64;

if ($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
  echo "Con $edad_oficial años te toca currar chaval. Estas en edad de trabajar";
} elseif ($edad_oficial < $edad1){
  echo "Te vas a librar porque tienes sólo $edad_oficial años.";
} else {
  echo "Ya has trabajo bastante porque tienes $edad_oficial años.";
}
echo "<hr>";

// Ejemplo 6

$pais = "España";
if ($pais == 'España' || $pais == 'México' || $pais == 'Colombia') {
  echo "En $pais se habla español.";
} else {
  echo "En $pais no se habla español.";
}
echo "<hr>";

// Ejemplo 7 con Switch

$dias_semana = ['Días','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado','Domingo'];
$dia = 6;

switch ($dia) {
  case 1:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  case 2:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  case 3:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  case 4:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  case 5:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  case 6:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  case 7:
    echo "El día $dia es $dias_semana[$dia].";
    break;  
  
  default:
    echo "El día $dia no es válido.";
    break;
}
echo "<hr>";

// Ejemplo 8 GOTO

goto marca;
echo "<h3>Instrucción 1</h3>";
echo "<h3>Instrucción 2</h3>";
echo "<h3>Instrucción 3</h3>";
echo "<h3>Instrucción 4</h3>";

marca:
echo "Me he saltado 4 echos.";
echo "<hr>";