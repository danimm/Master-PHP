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
    
    if ($error == 'nombre') {
      echo "<strong style='color:red'>El nombre introducido no es válido.</strong>";
    } elseif ($error == 'apellidos') {
      echo "<strong style='color:red'>El apellido introducido no es válido.</strong>";
    } elseif ($error == 'edad') {
      echo "<strong style='color:red'>La edad introducida no es válida.</strong>";
    } elseif ($error == 'email') {
      echo "<strong style='color:red'>El email introducido no es válido.</strong>";
    } elseif ($error == 'password') {
      echo "<strong style='color:red'>La contraseña debe tener un mínimo de 5 caracteres.</strong>";
    } elseif ($error == 'incomplete') {
      echo "<strong style='color:red'>Por favor, rellena todos los campos para continuar.</strong>";
    }
  }

  ?>
  <form action="procesar_formulario.php" method="POST">
    <label for="nombre">Nombre:</label>
    <!-- <input type="text" name="nombre" id="nombre" required pattern="[A-Za-z]+"> -->
    <input type="text" name="nombre" id="nombre" required pattern="[a-zA-Z ]+">
    <br>
    <label for="apellidos">Apellidos:</label>
    <input type="text" name="apellidos" id="apellidos" required pattern="[a-zA-Z ]+">
    <br>
    <label for="edad">Edad:</label>
    <input type="number" name="edad" id="edad" required pattern="[0-9]+">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    <br>
    <label for="password">Contraseña:</label>
    <input type="password" name="password" id="password" required minlength="5">
    <br>
    <input type="submit" value="Enviar">
    

  </form>
</body>
</html>