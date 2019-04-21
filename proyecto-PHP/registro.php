<?php

require_once 'includes/conexion.php';
if (!isset($_SESSION)) {
  session_start();
}


// Recoger los valores del formulario de registro
if (isset($_POST)) {

  session_start();
  require_once 'includes/conexion.php';

  // real_scape_string => nos protege de inyeccion SQL y nos permite usar ' "
  $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
  $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
  $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;
  $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : false;



  // Array de errores
  $errores = array();


  // Validar los datos antes de guardarlos en la base de datos

  // Validar campo nombre
  if (!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)) {
    $nombre_validado = true;
  } else {
    $nombre_validado = false;
    $errores['nombre'] = "El nombre no es válido..🤔";
  }

  // Validar apellidos
  if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
    $apellidos_validado = true;
  } else {
    $apellidos_validado = false;
    $errores['apellidos'] = "Los apellidos no son válidos..🤔";
  }

  // Validar email
  if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_validado = true;
  } else {
    $email_validado = false;
    $errores['email'] = "El email no es válido..🤔";
  }

  // Validar password
  if (!empty($password)) {
    $password_validado = true;
  } else {
    $password_validado = false;
    $errores['password'] = "La contraseña está vacía..🤔";
  }

  if (count($errores) == 0) {

    // Cifrar la contraseña
    // la variable, el tipo de cifrado, y las veces que se cifra
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);

    //verificar
    //password_verify($password, $password_segura);


    // Insertar usuario en la tabla de usuarios de la DB
    $sql = "insert into usuarios values(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
    $guardar = mysqli_query($db, $sql);

    // var_dump(mysqli_error($db));
    // die();

    if ($guardar) {
      $_SESSION['completado'] = "El registro fue correcto 👍🏻";
    } else {
      $_SESSION['errores']['general'] = "Fallo al guardar el usuario..";
    }
  } else {
    $_SESSION['errores'] = $errores;
  }
}

header('Location: index.php');
