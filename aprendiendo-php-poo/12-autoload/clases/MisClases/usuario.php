<?php

namespace MisClases;

class Usuario
{
  public $nombre;
  public $email;

  public function __construct()
  {
    $this->nombre = "Danie";
    $this->email = "dani@danimm.com";
  }
}
