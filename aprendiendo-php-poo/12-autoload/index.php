<?php
// use MisClases\Usuario, MisClases\Categoria, MisClases\Entrada;
use PanelAdmin\Usuario as UserAdmin;

// a partir de php 7
use MisClases \ {
  Usuario as User,
  Categoria as Cat,
  Entrada as Ent
};

require_once 'autoload.php';

// Espacios de nombres y paquetes

class Principal
{
  public $usuario;
  public $categoria;
  public $entrada;

  public function __construct()
  {
    $this->usuario = new User();
    $this->categoria = new Cat();
    $this->entrada = new Ent();
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function informacion()
  {
    echo __NAMESPACE__;
  }
}

// Objeto principal
$principal = new Principal();

// Objeto de otro
$usuario = new UserAdmin();


// Comprobar si existe una clase
$clase = class_exists('MisClases\Usuario');
var_dump(get_class_methods($principal));
// Obtener los métodos de una clase
$metodos = get_class_methods($principal);

// Buscar en una array, en este caso el de métodos
$busqueda = array_search("getUsuario", $metodos);
var_dump($busqueda);

if ($clase) {
  echo "Tu clase existe";
}

$principal->informacion();
