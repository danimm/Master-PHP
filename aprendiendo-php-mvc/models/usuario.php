<?php

require_once 'ModeloBase.php';

class Usuario extends ModeloBase
{
  public $name;
  public $surname;
  public $email;
  public $password;

  public function __construct()
  {
    parent::__construct();
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }
  public function getSurname()
  {
    return $this->surname;
  }

  public function setSurname($surname)
  {
    $this->name = $surname;
  }
  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->name = $email;
  }
  public function getPassword()
  {
    return $this->password;
  }

  public function setPassword($password)
  {
    $this->name = $password;
  }

  public function getAllUsers()
  {
    echo "sacando todos los usuarios";
  }
}
