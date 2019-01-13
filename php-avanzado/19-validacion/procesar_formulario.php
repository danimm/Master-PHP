<?php

  $error = '';
  if( !empty($_POST['nombre']) &&
      !empty($_POST['apellidos']) && 
      !empty($_POST['edad']) && 
      !empty($_POST['email']) && 
      !empty($_POST['password']))
    {
      $error = 'ok';
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $edad = (int) $_POST['edad']; // castear la edad a un entero, porque viene como string
      $email = $_POST['email'];
      $password = $_POST['password'];

      // Validar el nombre:
      if (!is_string($nombre) || preg_match("/[0-9]/", $nombre)) {
        $error = 'nombre';
      }

      // Validar los apellidos:
      if (!is_string($apellidos) || preg_match("/[0-9]/", $apellidos)) {
        $error = 'apellidos';
      }

      // Validar los edad
      // Filter_var valida la edad con un filtro para ver si es un entero
      if (!is_int($edad) || !filter_var($edad, FILTER_VALIDATE_INT)) {
        $error = 'edad';
      }

      // Validar los email:
      // Filter_var valida el email con un filtro para ver si es un email
      if (!is_string($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'email';
      }

      // Validar la contraseña
      if (empty($password) || strlen($password)<5) {
        $error = 'password';
      }
      

      // var_dump($_POST);
      // var_dump($error);

      // die();

    } else {
      $error = 'incomplete';
    }

    if ($error != 'ok') {
      header("Location:index.php?error=$error");
      // redirigir a la página index.php pasandole la variable error por GET
    }

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>recibiendo los datos del formulario</title>
</head>
<body>
  <!-- Esto es una manera de escribir un if en varias líneas -->
  <?php if($error == 'ok') : ?>

  <h1>Todo correcto 👍🏻 !!</h1>
  <h2>Aquí tienes los datos de tu formulario:</h2>
  <label for="nombre">
    Nombre: <?= $nombre ?>
  </label>
  <br>
  <label for="apellidos">
    Apellidos: <?= $apellidos ?>
  </label>
  <br>
  <label for="edad">
    Edad: <?= $edad ?> años
  </label>
  <br>
  <label for="email">
    Email: <?= $email ?>
  </label>
  <br>
  <label for="password">
    Contraseña: <?= $password ?>
  </label>

  <?php endif; ?>
  <!-- Aquí termina la sintaxis del if -->

</body>
</html>