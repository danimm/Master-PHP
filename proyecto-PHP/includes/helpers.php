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

function getCategorie($conexion, $id)
{
  $sql = "select * from categorias where id = $id;";
  $categories = mysqli_query($conexion, $sql);
  $result = array();
  if ($categories && mysqli_num_rows($categories) >= 1) {
    $result = mysqli_fetch_assoc($categories);
  }

  return $result;
}

function getEntradas($conexion, $categoria_id = null, $limit = null, $busqueda = null)
{
  $sql = "select e.*, c.nombre as 'categoria', concat(u.nombre, ' ', u.apellidos) as 'usuario' from entradas e " .
    "inner join categorias c on e.categoria_id = c.id " .
    "inner join usuarios u on u.id = e.usuario_id ";

  if ($categoria_id) {

    $sql .= "where e.categoria_id = $categoria_id ";
  }

  if (!empty($busqueda)) {
    $sql .= "where e.titulo like '%$busqueda%' ";
  }

  $sql .= "order by e.id DESC ";

  if ($limit) {
    $sql .= "limit 4;";
  }


  $entradas = mysqli_query($conexion, $sql);
  $result = array();
  if ($entradas && mysqli_num_rows($entradas) >= 1) {
    $result = $entradas;
  }

  return $result;
}

function getEntrada($conexion, $id)
{
  $sql = "select e.*, c.nombre as 'categoria', concat(u.nombre, ' ', u.apellidos) as 'usuario' from entradas e " .
    "inner join categorias c on e.categoria_id = c.id " .
    "inner join usuarios u on u.id = e.usuario_id " .
    "where e.id = $id;";



  $entrada = mysqli_query($conexion, $sql);
  $result = array();

  if ($entrada && mysqli_num_rows($entrada) >= 1) {
    $result = mysqli_fetch_assoc($entrada);
  }
  return $result;
}

function buscarEntradas()
{ }
