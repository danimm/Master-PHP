<?php
// Conexion a la base de datos
require_once 'includes/conexion.php';

if (isset($_POST)) {

  // real_scape_string => nos protege de inyeccion SQL y nos permite usar ' "
  $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
  $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']) : false;
  $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email'])) : false;

  // Array de errores
  $errores = array();

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

  // Si no hay errores metemos los datos en la base de datos
  if (count($errores) == 0) {
    $usuario = $_SESSION['usuario'];
    $guardar_usuario = true;

    // comprobar si el email ya existe
    $sql = "select id, email from usuarios where email = '$email';";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);
    if ($isset_user['id'] == $usuario['id'] || empty($isset_user)) {

      // Insertar usuario en la tabla de usuarios de la DB
      $sql = "update usuarios set " .
        "nombre = '{$nombre}', " .
        "apellidos = '{$apellidos}', " .
        "email = '{$email}' where " .
        "id = {$usuario['id']};";
      $guardar = mysqli_query($db, $sql);

      if ($guardar) {
        $_SESSION['usuario']['nombre'] = $nombre;
        $_SESSION['usuario']['apellidos'] = $apellidos;
        $_SESSION['usuario']['email'] = $email;
        $_SESSION['completado'] = "Datos actualizados correctamente.. 👍🏻";
      } else {
        $_SESSION['errores']['general'] = "Fallo al actualizar el usuario..🤔";
      }
    } else {
      $_SESSION['errores']['general'] = "Ese correo ya existe..🤔";
    }
  }
}

header('Location: user.php');
