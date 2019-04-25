<?php
class Database
{
  public static function conectar()
  {
    $conexion = new mysqli("localhost", "root", "1234", "notas_master");
    $conexion->query("set names 'utf8';");
    echo "listo!";
    return $conexion;
  }
}
