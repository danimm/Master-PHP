<?php

  $error = 'hay errores';
  if( !empty($_POST['nombre']) &&
      !empty($_POST['apellidos']) && 
      !empty($_POST['edad']) && 
      !empty($_POST['email']) && 
      !empty($_POST['password']))
    {
      $error = 'ok';
      $nombre = $_POST['nombre'];
      $apellidos = $_POST['apellidos'];
      $edad = $_POST['edad'];
      $email = $_POST['email'];
      $password = $_POST['password'];
    } else {
      $error = 'hay errores';
      header("Location:index.php?error=$error");
      // redirigir a la página index.php
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
  <h1>Todo correcto 👍🏻 !!</h1>
</body>
</html>