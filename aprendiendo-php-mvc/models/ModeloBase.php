<?php

require_once 'config/db.php';

class ModeloBase
{
  public $db;

  public function __construct()
  {
    $this->db = Database::conectar();
  }

  public function getAll()
  {
    var_dump($this->db);
    echo "Sacando todos los usuarios";
  }
}
