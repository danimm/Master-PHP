<?php

/*
Ejercicio 1 - Crear una sesion que aumente su valor en 1 o disminuya en 1 en funcion al parámetro get Counter está a uno o a 0
*/

session_start();

if (!isset($_SESSION['numero'])) {
  $_SESSION['numero'] = 0;
}

if (isset($_GET['counter'])) {
  $counter = $_GET['counter'];
}

if ($counter == 1) {
  $_SESSION['numero']++;
} elseif ($counter == 0) {
  $_SESSION['numero']--;
}

?>

<h3>El valor de la sesión número es: <?=$_SESSION['numero']?></h3>
<a href="ejercicio1.php?counter=1">Aumentar el valor</a>
<a href="ejercicio1.php?counter=0">Disminuir el valor</a>