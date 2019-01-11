<?php 
// Un array es una coleccion de valores con un unico nombre almacenados en forma de matriz, es una colección de datos

$pelicula = "Batman";
$peliculas = array('Batman', 'Spiderman', 'Ironman');
echo var_dump($peliculas['1']);
echo "<br>";
echo var_dump($peliculas['2']);
echo "<br>";

$cantantes = ['2pac', 'Drake', 'JL'];
echo var_dump($cantantes);
echo "<br>";

// recorrer arrays con for

echo "<h1>Listado de peliculas</h1>";
echo "<ul>";
for ($i=0; $i < count($peliculas); $i++) { 
  echo "<li>$peliculas[$i]</li>";
}
echo "</ul>";
echo "<br>";

// recorrer con forEach
echo "<h1>Listado de cantantes</h1>";
echo "<ul>";
foreach ($cantantes as $cantante) {
  echo "<li>$cantante</li>";
}
echo "</ul>";

// arrays asociativos
// definimos los indices para que no sean numeros, sino texto
$personas = array(
  'nombre' => 'Daniel',
  'apellidos' => 'Muñoz',
  'web' => 'danimm.com'
);

// los datos de GET tambien es un array asociativo
echo "<br>";
echo var_dump($_GET);

// Los arrays multidimensionales son los que tienen varias dimensiones
// arrays dentro de arrays

echo "<br>";
$contactos = array(
  array(
    'nombre' => 'Antonio',
    'email' => 'antoño@antoñete.com'
  ),
  array(
    'nombre' => 'Luis',
    'email' => 'luisito@louis.com'
  ),
  array(
    'nombre' => 'Salvador',
    'email' => 'salvi@salvatore.com'
  ),
);

echo var_dump($contactos);
echo "<br>";
echo $contactos[1]['email'];

// recorremos los arrays numericos con el foreach
foreach ($contactos as $key => $contacto) {
  // y ahora podemos listar las claves nombre
  var_dump($contacto['nombre']);
}







?>