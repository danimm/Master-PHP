<?php

if (isset($_POST)) {
  require_once 'includes/conexion.php';
  $titulo = isset($_POST['titulo']) ? mysqli_real_escape_string($db, $_POST['titulo']) : false;
  $descripcion = isset($_POST['descripcion']) ? mysqli_real_escape_string($db, $_POST['descripcion']) : false;
  $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
  $usuario = $_SESSION['usuario']['id'];

  // Array de errores
  $errores = array();


  // Validar los datos antes de guardarlos en la base de datos
  if (empty($titulo)) {
    $errores['titulo'] = "El titulo no es válido..🤔";
    header("Location: new-entrada.php");
  }

  if (empty($descripcion)) {
    $errores['descripcion'] = "La descripcion no es válida..🤔";
    header("Location: new-entrada.php");
  }
  if (empty($categoria) && !is_numeric($categoria)) {
    $errores['categoria'] = "La descripcion no es válida..🤔";
    header("Location: new-entrada.php");
  }



  if (count($errores) == 0) {
    $sql = "insert into entradas values(null, $usuario, $categoria, '$titulo', '$descripcion', curdate());";
    $guardar = mysqli_query($db, $sql);
    header("Location: index.php");
  } else {
    $_SESSION['errores_entrada'] = $errores;
    header("Location: new-entrada.php");
  }
}
