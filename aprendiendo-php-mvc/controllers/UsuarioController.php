<?php

class UsuarioController
{

  public function createUser()
  {
    echo "crear todos los usuarios";
  }

  public function showAllUsers()
  {
    require_once 'models/usuario.php';

    $usuario = new Usuario();
    $showUsers = $usuario->getAll();

    require_once 'views/usuarios/show-all.php';
  }
}
