<?php

// Herencia: la posibilidad de compartir atributos y métodos entre clases

class Persona
{

  public $nombre;
  public $apellidos;
  public $altura;
  public $edad;

  public function getNombre()
  {
    return $this->nombre;
  }
  public function setNombre($nombre)
  {
    return $this->nombre = $nombre;
  }
  public function getApellidos()
  {
    return $this->apellidos;
  }
  public function setApellidos($apellidos)
  {
    return $this->apellidos = $apellidos;
  }
  public function getAltura()
  {
    return $this->altura;
  }
  public function setAltura($altura)
  {
    return $this->altura = $altura;
  }
  public function getEdad()
  {
    return $this->edad;
  }
  public function setEdad($edad)
  {
    return $this->edad = $edad;
  }

  public function hablar()
  {
    return "estoy hablando";
  }

  public function caminar()
  {
    return "estoy caminando";
  }
}

class Informatico extends Persona
{
  public $lenguajes;

  public function __construct()
  {
    // si usamos un constructor necesitamos usar parent para seguir teniendo las del padre
    parent::__construct();
    $this->lenguajes = "HTML,CSS,PHP,JS";
  }

  public function sabeLenguajes($lenguajes)
  {
    $this->lenguajes = $lenguajes;
    return $this->lenguajes;
  }

  public function programar()
  {
    return "Soy programador y programo";
  }

  public function repararPC()
  {
    return "Sé reparar ordenadores";
  }

  public function hacerOfimatica()
  {
    return "estoy escribiendo en word";
  }
}
