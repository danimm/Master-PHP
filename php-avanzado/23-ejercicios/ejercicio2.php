<?php

/*
  Ejercicio 2:
    - Debe ser una función
    - Debe validar un email con filter_var
    - Debe recoger una variable por GET y validarla
    - Mostrar el resultado
*/

function validarEmail($email){
  
  $status = 'No valido';

  if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    $status = 'Valido';
  }

  return $status;
}

if (isset($_GET['email'])) {
  echo validarEmail($_GET['email']);
} else {
  echo "Envia un email por GET";
}


?>