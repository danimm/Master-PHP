<?php

namespace MisClases;

class Categoria
{
  public $nombre;
  public $descripcion;

  public function __construct()
  {
    $this->nombre = "Acción";
    $this->categoria = "Categoría enfocada a las reviews de videojuegos de acción.";
  }
}
