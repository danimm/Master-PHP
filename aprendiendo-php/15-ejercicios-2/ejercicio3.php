<?php

// Programa que comprobar si una variable está vacía y si esta vacía rellenarlas con 
// texto en miniscula y mostrarlo en mayusculas y negrita.

$nombre = '';

if (empty($nombre)) {
  $nombre = 'El texto está vacío';
  echo "<strong>".strtoupper($nombre)."</strong>";
} else {
  echo "<strong>".strtoupper($nombre)."</strong>";
}  

?>