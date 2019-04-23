<?php

class Usuario
{
  // las constante son como si fueran propiedades estáticas
  const URL_COMPLETA = "http://localhost";
  public $email;
  public $password;

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }
}


$usuario = new Usuario();
// para acceder al valor es como una propiedad estática
// incluso Usuario::URL_COMPLETA; ya que las constantes son a nivel de clase
// con this usamos las propiedades a nivel de objetos y los :: es a nivel de CLASE
echo $usuario::URL_COMPLETA;
var_dump($usuario);
