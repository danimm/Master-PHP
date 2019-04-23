<?php

// Programación Orientada a Objetos en PHP (POO)

// Definir una clase: Molde para crear más objetos de tipo coche con carácteristicas parecidas
class Coche
{
  // Atributos o propiedades (variables)


  // public: podemos acceder a el desde cualquier lugar
  // dentro de la clase actual, dentro de clases que hereden esta clase o fuera de la clase
  public $color;
  // protected: podemos acceder desde la clase que los define
  // y desde clases que hereden esta clase
  protected $marca;
  // private: unicamente se puede acceder desde esta clase
  private $modelo;
  public $motor;
  public $caballos;
  public $velocidad;

  // siempre debe ser public
  public function __construct($color, $marca, $modelo, $motor, $caballos, $velocidad)
  {
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->motor = $motor;
    $this->caballos = $caballos;
    $this->velocidad = $velocidad;
  }

  // Métodos, son acciones que hace el objeto (funciones)

  public function getColor()
  {
    // This = busca en esta clase la propiedad X
    return $this->color;
  }

  public function getModelo()
  {
    return $this->modelo;
  }

  public function setColor($farbe)
  {
    $this->color = $farbe;
    return $this->color;
  }

  public function setMarca($marca)
  {
    $this->marca = $marca;
  }

  public function Acelerar()
  {
    $this->velocidad += 50;
  }

  public function Frenar()
  {
    $this->velocidad -= 50;
  }

  public function getVelocidad()
  {
    return $this->velocidad;
  }

  public function showInfo(Coche $item)
  {
    if (is_object($item)) {
      $informacion = "<h1>Información del coche</h1>";
      $informacion .= "<p>Color: $item->color</p>";
      $informacion .= "<p>Marca: $item->marca</p>";
      $informacion .= "<p>Modelo: $item->modelo</p>";
      $informacion .= "<p>Motor: $item->motor</p>";
      $informacion .= "<p>CV: $item->caballos</p>";
      $informacion .= "<p>Velocidad punta: $item->velocidad km/h</p>";
    } else {
      $informacion = "tu dato es incorrecto: $item";
    }
    return $informacion;
  }
}
