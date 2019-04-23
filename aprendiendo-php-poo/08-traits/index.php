<?php

// Los traits nos permiten definir métodos para compartir entre clases que no tengan nada que ver
// Así no heredamos de clases que no tengan nada que ver

trait Utilidades
{
  public function getNombre()
  {
    echo "<h1>El nombre es $this->nombre</h1>";
  }
}


class Coche
{
  public $nombre;
  public $marca;

  public function __construct($nombre)
  {
    $this->nombre = $nombre;
  }

  // Así lo vinculamos al trait
  use Utilidades;
}

class Persona
{
  public $nombre;
  public $apellidos;
}

class VideoJuego
{
  public $nombre;
  public $fecha;
}

$coche = new Coche("Ferrari");
$persona = new Persona();
$videojuego = new VideoJuego();

var_dump($coche);
$coche->getNombre();
