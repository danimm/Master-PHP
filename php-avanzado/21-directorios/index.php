<?php 

// Crear directorios con mkdir, is_dir para comprobar si existe
if (!is_dir('mi_carpeta')) {
  mkdir('mi_carpeta', 0777) or die('No se puede crear la carpeta');
  echo "Carpeta creada correctamente";
} else {
  echo "Ya existe la carpeta";
}

// Eliminar carpeta
// rmdir('mi_carpeta');
echo "<br/>";
if ($gestor = opendir('./mi_carpeta')) {
  while ($archivo = readdir($gestor)) {
    // Quitamos el directorio padre (..) y el actual(.)
    // Así solo mostramos archivos
    if ($archivo != '.' && $archivo != '..') {
      echo $archivo."<br/>";
    }
  }
}