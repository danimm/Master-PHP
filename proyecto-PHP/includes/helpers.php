<?php

function mostrarError($errores, $campo)
{
  $alerta = '';
  if (isset($errores[$campo]) && !empty($campo)) {
    $alerta = '<div><p style="color: red;">' . $errores[$campo] . '</p></div>';
  }

  return $alerta;
}

function borrarErrores(){
  $_SESSION['errores'] = null;
  $borrado = session_unset();

  return $borrado;
}