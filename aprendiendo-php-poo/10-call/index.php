<?php

class Persona
{
  private $nombre;
  private $edad;
  private $ciudad;

  public function __construct($nombre, $edad, $ciudad)
  {
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->ciudad = $ciudad;
  }
  // El metodo call es el que se ejecutará cuando no se encuentre un método que llamemos, trae el nombre del método que intentamos usar y los argumentos
  public function __call($name, $arguments)
  {
    $prefijo_metodo = substr($name, 0, 3);
    var_dump($arguments);

    if ($prefijo_metodo == 'get') {
      // con esto le quita el get al método para sacar lo que quiere quedandose con lo de detras;
      $nombre_metodo = substr(strtolower($name), 3);
    }
    return $nombre_metodo;
    // get____nombre
    // get____edad
    // get____ciudad
  }
}

$persona = new Persona("Danie", 30, "Málaga");
echo $persona->getNombre(30);
