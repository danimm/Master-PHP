<?php

class NotaController
{
  public function listar()
  {
    require_once 'models/nota.php';
    $nota = new Nota();
    $nota->setNombre("hola");

    require_once 'views/notas/listar.php';
  }
  public function crear()
  {
    echo "crear";
  }
  public function borrar()
  {
    echo "borrar";
  }
}
