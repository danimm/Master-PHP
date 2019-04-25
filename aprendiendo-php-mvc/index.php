<h1>Bienvenido a mi web con MVC</h1>

<?php

require_once 'autoload.php';

// $controlador = new UsuarioController();

// $controlador->showAllUsers();
$nombre_controlador = $_GET['controller'];


if (isset($nombre_controlador) && class_exists($nombre_controlador)) {
  $controlador = new $nombre_controlador();

  $action = $_GET['action'];

  if (isset($action) && method_exists($controlador, $action)) {
    $controlador->$action();
  } else {
    echo "La página que buscas no existe";
  }
} else {
  echo "La pagina que buscas no existe joder!";
}
