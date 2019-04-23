<?php

// Programación Orientada a Objetos en PHP (POO)

// Definir una clase: Molde para crear más objetos de tipo coche con carácteristicas parecidas
class Coche
{
	// Atributos o propiedades (variables)
	public $color = "rojo";
	public $modelo = "ferrari";
	public $marca = "California";
	public $motor = "V8";
	public $caballos = 640;
	public $velocidad = 200;

	// Métodos, son acciones que hace el objeto (funciones)

	public function getColor()
	{
		// This = busca en esta clase la propiedad X
		return $this->color;
	}

	public function setColor($farbe)
	{
		$this->color = $farbe;
		return $this->color;
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
}

// fin de la definición de la clase

// Crear un objeto a partir de esa clase / instanciar la clase

$coche = new Coche();


// Usar los métodos
echo $coche->getVelocidad() . "<br>";
$coche->setColor("amarillo");
echo "El color del coche es: " . $coche->getColor() . "<br>";
$coche->Acelerar();
echo "Acelerando...la velocidad actual es: " . $coche->getVelocidad() . "<br>";
$coche->Acelerar();
echo "Acelerando...la velocidad actual es: " . $coche->getVelocidad() . "<br>";
$coche->Acelerar();
echo "Acelerando...la velocidad actual es: " . $coche->getVelocidad() . "<br>";
$coche->Frenar();
echo "Frenando...la velocidad actual es: " . $coche->getVelocidad() . "<br>";

$coche2 = new Coche();
$coche2->setColor("verde");
echo "El color del coche 2 es: " . $coche2->getColor() . "<br>";
