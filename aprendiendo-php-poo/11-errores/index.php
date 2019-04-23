<?php

// una excepcion es un fallo
// try catch sirve para capturar excepciones, en codigo susceptible a errores

try {

  if (isset($_GET['id'])) {
    echo "<h1>El parámetro id es: {$_GET['id']}</h1>";
  } else {
    throw new Exception("Faltan parámetros por la URL...");
  }
} catch (Exception $error) {
  echo "Ha habido un error: " . $error->getMessage();
}
