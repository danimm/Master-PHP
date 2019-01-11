<?php

// Para mostrar el valor de las cookies tengo que usar la variable superglobal $_COOKIE,
// es un array asociativo

if (isset($_COOKIE['micookie'])) {
  echo "<h1>".$_COOKIE['micookie']."</h1>";
} else {
  echo "no hay cookies que mostrar";
}

if (isset($_COOKIE['unyear'])) {
  echo "<h1>".$_COOKIE['unyear']."</h1>";
} else {
  echo "no existe cookie de año.";
}

?>

<a href="crear_cookies.php">crear las galletas</a>
<a href="borrar_cookies.php">Borrar las galletas</a>