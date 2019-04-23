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
  }

  if (empty($descripcion)) {
    $errores['descripcion'] = "La descripcion no es válida..🤔";
  }
  if (empty($categoria) && !is_numeric($categoria)) {
    $errores['categoria'] = "La descripcion no es válida..🤔";
  }

  var_dump(count($errores));


  if (count($errores) == 0) {
    if (isset($_GET['edit'])) {
      $edit = $_GET['edit'];
      $usuario_id = $_SESSION['usuario']['id'];

      $sql = "update entradas set titulo = '$titulo', descripcion = '$descripcion', categoria_id = $categoria " .
        "where id = $edit and usuario_id = $usuario_id ;";
    } else {
      $sql = "insert into entradas values(null, $usuario, $categoria, '$titulo', '$descripcion', curdate());";
    }

    $guardar = mysqli_query($db, $sql);
    header("Location: index.php");
  } else {

    $_SESSION['errores_entrada'] = $errores;

    if ($_GET['edit']) {
      header("Location: editEntrada.php?id=" . $_GET['edit']);
    } else {
      header("Location: new-entrada.php");
    }
  }
}
