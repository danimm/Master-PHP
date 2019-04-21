<?php

// Iniciar la sesion y la conexión a la base de datos
require_once 'includes/conexion.php';

// recoger los datos del formulario

if (isset($_POST)) {

  // Borrar error antiguo
  if (isset($_SESSION['error_login'])) {
    unset($_SESSION['error_login']);
  }

  // Recojo datos del usuario
  $email = trim($_POST['email']);
  $password = $_POST['password'];

  // Consulta para comprobar las credenciales del usuario
  $sql = "select * from usuarios where email = '$email'";
  $login = mysqli_query($db, $sql);


  if ($login && mysqli_num_rows($login) == 1) {
    $usuario = mysqli_fetch_assoc($login);

    // Comprobar contraseña
    $verify = password_verify($password, $usuario['password']);

    if ($verify) {
      // Utilizar una sesión para guardar los datos del usuario logeado
      $_SESSION['usuario'] = $usuario;
    } else {
      $_SESSION['error_login'] = "Login incorrecto";
    }
  } else {
    // Si algo falla enviar una sesión con el fallo
    $_SESSION['error_login'] = "Login incorrecto!!";
  }
}


// redirigir al index
// var_dump($_SESSION['usuario']);
header('Location: index.php');
