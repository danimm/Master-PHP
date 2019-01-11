<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Validacion de formularios PHP</title>
</head>
<body>
  <h1>Validar formularios en PHP</h1>
  <?php

  if (isset($_GET['error'])) {
    $error = $_GET['error'];
    if ($error == true) {
      echo "<strong style='color:red'>Introduce los datos correctos </strong>";
    }
  }

  ?>
  <form action="procesar_formulario.php" method="POST">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required pattern="[A-Za-z]+">
    <br>
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required  pattern="[A-Za-z]+">
    <br>
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required  pattern="[0-9]+">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Enviar">
    

  </form>
</body>
</html>