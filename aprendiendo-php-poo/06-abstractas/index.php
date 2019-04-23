<?php

abstract class Ordenador
{
  // las propiedades no se pueden declarar abstractas
  public $encendido;

  // si un método es abstracto, no lo definimos pero obligamos a que se defina en la clase que extienda a esta
  abstract public function encender();
  public function apagar()
  {
    $this->encendido = false;
  }
}

// Una clase abstracta es una clase que no se puede instanciar no podemos crear objetos con ella pero si la vamos a poder utilizar para extender clases a partir de ella, es una clase que se utiliza como referencia para heredar.

class PcAsus extends Ordenador
{
  public $software;
  public function arrancarSoftware()
  {
    $this->software = true;
  }
  public function encender()
  {
    $this->encendido = true;
  }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);
