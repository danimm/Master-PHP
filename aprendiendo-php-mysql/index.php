<?php

// Conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "1234", "phpmsql");

// Comprobar si la conexión es correcta

if (mysqli_connect_errno()) {
  echo "La conexión a la base de datos de MySQL ha fallado: " . mysqli_connect_error();
} else {
  echo "Conexión realizada correctamente!";
  echo "<br>";
}

// Consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'utf8");

// Consulta SELECT desde PHP
$query = mysqli_query($conexion, "SELECT * from notas");
// $notas = mysqli_fetch_assoc($query);

while ($nota = mysqli_fetch_assoc($query)) {
  echo "<h1>" . $nota['title'] . "</h1>";
  echo "<h2>" . $nota['description'] . "</h2>";
  echo "<h3>" . $nota['color'] . "</h3>";
  echo "<hr>";
}

// Insertar en la base de datos desde PHP

$sql = "insert into notas values(null, 'Nota desde PHP', 'Esto es una nota de php', 'green')";
// $insert = mysqli_query($conexion, $sql);

if ($insert) {
  echo "La insercción se realizó correctamente";
} else {
  echo "Error: " . mysqli_error($conexion);
}
