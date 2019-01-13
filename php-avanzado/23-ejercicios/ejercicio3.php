<?php

/* Ejercicio 3:
    - Hacer una interfaz de usuario (formulario) con dos inputs y 4 botones: uno para sumar, restar, dividir y multiplicar.
*/

$error = false;
$resultado = 0;

if (!empty($_POST['num1']) && !empty($_POST['num2'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  
  if (isset($_POST['sumar'])) {
    $resultado = $num1 + $num2;
  } elseif (isset($_POST['restar'])) {
    $resultado = $num1 - $num2;
  } elseif (isset($_POST['dividir'])) {
    $resultado = $num1 / $num2;
  } elseif (isset($_POST['multiplicar'])) {
    $resultado = $num1 * $num2;
  }
} else {
  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculadora en PHP</title>
  <style>
    .apartado {
      width: 400px;
      border: 1px solid black;
      padding: 5px;
      margin-bottom: 10px;
    }
    .btn {
      font-size: 20px;
    }
    
  
  </style>
</head>
<body>
  <h2>Calculadora en PHP</h2>
  <?php 
  // Resultado
  if (!$error) {
    echo "<h1>El resultado es: $resultado<h1/>";
  } else {
    echo "<h1>Introduce los números para calcular<h1/>";
  }

  ?>
  <form action="" method="POST">
    <div class="apartado">
      <label for="num1">Número 1</label>
      <input type="number" name="num1">
      <br/>
      <label for="num2">Número 2</label>
      <input type="number" name="num2">
      <br/>
      <br/>
      <input type="submit" class="btn" value="Sumar" name="sumar">
      <input type="submit" class="btn" value="Restar" name="restar">
      <input type="submit" class="btn" value="Dividir" name="dividir">
      <input type="submit" class="btn" value="Multiplicar" name="multiplicar">
    </div>
  </form>
</body>
</html>
