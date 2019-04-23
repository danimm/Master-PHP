<?php
// Una interfaz es un contrato que definimos que métodos y propiedades van a tener las clases
// es parecido a las clases abstractas


interface Ordenador
{
  public function encender();
  // public function apagar();
  // public function reiniciar();
  // public function desfragmentar();
  // public function detectarUSB();
}

// ligamos la clase con la interfaz
class Imac implements Ordenador
{
  private $modelo;
  public function getModelo()
  {
    return $this->modelo;
  }
  public function setModelo($modelo)
  {
    $this->modelo = $modelo;
  }
  public function encender()
  {
    echo "Encendido!";
  }
}

$macbookPro = new Imac();
$macbookPro->setModelo("i5");
var_dump($macbookPro);
