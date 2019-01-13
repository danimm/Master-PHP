<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Subiendo archivos con PHP</title>
</head>
<body>
  <h1>Subir archivos PHP</h1>
  <form action="upload.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="archivo" id="archivo">
    <input type="submit" value="Enviar">
  </form>

  <h1>Listado de imágenes</h1>
  <?php

  $gestor = opendir('./images');

  if($gestor):
    while($imagen = readdir($gestor)):
      if($imagen != '.' && $imagen != '..'):
        echo "<img src='images/$imagen' width='200px'><br/>";
      endif;
    endwhile;
  endif;


  ?>
</body>
</html>