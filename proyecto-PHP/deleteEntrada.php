<?php

require_once 'includes/conexion.php';

if (isset($_SESSION['usuario']) && $_GET['id']) {
  $usuario_id = $_SESSION['usuario']['id'];
  $entrada_id = $_GET['id'];
  $sql = "delete from entradas where usuario_id = $usuario_id and id = $entrada_id ;";
  // var_dump($sql);
  // die();
  mysqli_query($db, $sql);

  header('Location: index.php');
}

echo "hubo algun error";
