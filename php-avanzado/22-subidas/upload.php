<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

// comprobar que sea una imagen
if(
  $tipo == 'image/jpg' || 
  $tipo == 'image/jpeg' || 
  $tipo == 'image/png' || 
  $tipo == 'image/gif')
  {
    if(!is_dir('images')){
      // Si no está la creamos, con todos los permisos
      mkdir('images', 0777);
    }
    // el segundo parametro es el nombre con el que se va a guardar el archivo
    // $archivo es un array tenemos que ir a la llave tmp_name para sacar el nombre
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    
    echo "<h2>Image subida correctamente</h2>";
    // redireccionar tras 2 segundos a index
    header("Refresh: 2; URL=index.php");
} else {
  // redireccionar tras 3 segundos a index
  header("Refresh: 3; URL=index.php");
  echo "<h1>Sube una imagen con un formato correcto</h1>";
}

