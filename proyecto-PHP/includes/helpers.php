<?php

function mostrarError($errores, $campo)
{
  $alerta = '';
  if (isset($errores[$campo]) && !empty($campo)) {
    $alerta = '<div><p class="alerta alerta-notok">' . $errores[$campo] . '</p></div>';
  }

  return $alerta;
}

function borrarErrores()
{
  $borrado = false;

  if (isset($_SESSION['errores'])) {
    // Quitar de la superglobal session
    unset($_SESSION['errores']);
    $_SESSION['errores'] = null;
  }

  if (isset($_SESSION['completado'])) {
    // Quitar de la superglobal session
    unset($_SESSION['completado']);
    $_SESSION['completado'] = null;
  }

  if (isset($_SESSION['errores_entrada'])) {
    // Quitar de la superglobal session
    unset($_SESSION['errores_entrada']);
  }

  return $borrado;
}

function getCategories($conexion)
{
  $sql = "select * from categorias order by id ASC;";
  $categories = mysqli_query($conexion, $sql);
  $result = array();
  if ($categories && mysqli_num_rows($categories) >= 1) {
    $result = $categories;
  }

  return $result;
}

function getUltimasEntradas($conexion)
{
  $sql = "select e.*, c.nombre as 'categoria' from entradas e " .
    "inner join categorias c on c.id = e.categoria_id " .
    "order by e.id DESC limit 4";
  $entradas = mysqli_query($conexion, $sql);
  $result = array();
  if ($entradas && mysqli_num_rows($entradas) >= 1) {
    $result = $entradas;
  }

  return $result;
}
