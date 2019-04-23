<?php

// Es lo inverso a los constructores
// Esto se ejecutará al final del archivo cuando no haya nada más que hacer y no pueda haber más instancias del objeto

class Usuario
{
  public $nombre;
  public $email;

  public function __construct()
  {
    $this->nombre = "Danie";
    $this->email = "x.com";
    echo "Instancia del objeto creada<br>";
  }

  public function __destruct()
  {
    echo "<br>Destruyendo el objeto..";
  }
  // este método mágico se utilizará cuando se intente imprimir este objeto como un string, ya que normalmente da error intentarlo
  public function __toString()
  {
    return "Hola, $this->nombre tu apellido es: {$this->email}";
  }
}


$usuario = new Usuario();

echo $usuario;
