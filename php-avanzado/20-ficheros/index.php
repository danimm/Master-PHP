<?php
/*
// abrir archivo
// permisos r-> leer, a+ -> leer y escribir
$archivo = fopen("fichero_texto.txt", "a+");

// Leer el contenido del archivo
// mientras no sea el final del archivo: linea + br
while (!feof($archivo)) {
  $contenido = fgets($archivo);
  echo $contenido."<br/>";
}

// Escribir
fwrite($archivo, "***Soy un texto metido desde PHP***");

// cerrar archivo
fclose($archivo);
*/

// copiar fichero
// copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar');

// Renombrar un fichero
// rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

// Eliminar archivo
// unlink('archivito_recopiadito.txt') or die('Error al borrar');

if(file_exists('fichero_texto.txt')){
  echo "El archivo existe";
} else {
  echo "El archivo no existe";
}