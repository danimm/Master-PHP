<?php

 /*
  Tipos de datos:

  Entero (int / integer): 99
  Coma flotante / decimales (float/double): 3,45
  Cadenas de caracteres / strings: "Hola estimado string"
  Boleano / (bool): true false
  null
  Array (coleccion de datos)
  Objetos (conjunto de datos y funciones independientes)

  Las variables no pueden empezar por un número
  No podemos poner guiones, pero si guiones bajos _
  No podemos poner signos de operadores
  Si utilizamos comillas dobles podemos ver la variables
  en la consola:
    /n para un salto de línea: php + archivo
    /r retorno de carro
    /t tabulacion
    \" para escapar la comilla y mostrarlas en el strings

 */

 $numero = 100;
 $decimal = 27.9;
 $texto = "soy un texto";
 $verdadero = true;

 echo "La variable \" $numero es un: ";
 echo gettype($numero);
 echo "<br>";
 echo "La variable ".$decimal." es un: ";
 echo gettype($decimal);
 echo "<br>";
 echo "La variable ".$texto." es un: ";
 echo gettype($texto);
 echo "<br>";
 echo "La variable ".$verdadero." es un: ";
 echo gettype($texto);
 echo "<br>";

 var_dump($texto);
