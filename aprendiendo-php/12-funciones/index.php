<?php 


/*

Funciones:
Son un conjunto de instrucciones agrupadas bajo un nombre
y que pueden reutilizarse solamente invocando a la función 
tantas veces como queramos

function nombreDeMiFuncion (parámetros){
  bloque de instrucciones
}

*/

// Ejemplo 1

function muestraNombres(){
  echo "Danielo<br>";
  echo "Paquito<br>";
  echo "Kie<br>";
  echo "Peter<br>";
}

muestraNombres();
echo "<hr>";

// Ejemplo 2

function tabla($num){
  echo "<h2>Tabla de multiplicar del número $num.<br></h2>";
  for ($i=1; $i <= 10 ; $i++) { 
    echo "$num x $i = ".$num*$i."<br>";
  }
}

// if(isset($_GET['num'])){
//   tabla($_GET['num']);
// } else {
//   echo "Introduce un número en la URL";
// }

// for ($i=1; $i <= 10 ; $i++) { 
//   tabla($i);
// }

// Ejemplo 3

function calculadora($num1,$num2, $negrita = false){
  $suma = $num1 + $num2;
  $resta = $num1 - $num2;
  $multiplicacion = $num1 * $num2;
  $division = $num1 / $num2;

  $cadena_texto = "";
  if ($negrita) {
    $cadena_texto .= "<h1>";
  }

  $cadena_texto .= "Suma: $suma <br>";
  $cadena_texto .= "Resta: $resta <br>";
  $cadena_texto .= "Multiplicacion: $multiplicacion <br>";
  $cadena_texto .= "Division: $division <br>";
  $cadena_texto .= "<hr>";
  if ($negrita) {
    $cadena_texto .= "</h1>";
  }
  var_dump($cadena_texto);
  return $cadena_texto;
}

echo calculadora(4,10, true);


// Ejemplo 4

function getNombre($nombre){
  $texto = "El nombre es $nombre";
  return $texto;
}
function getApellidos($apellidos){
  $texto = "Los apellidos son $apellidos";
  return $texto;
}

function retornaNombre ($nombre, $apellidos){
  $texto = getNombre($nombre)
            ."<br>"
            .getApellidos($apellidos);
  return $texto;
}

echo retornaNombre("Daniele","de Rossi");

?>