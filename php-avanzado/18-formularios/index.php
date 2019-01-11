<?php 



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formularios con php</title>
</head>
<body>
  <h1>Fomulario</h1>
  <!-- 
    action: indica la página a la cual va a ir la información del formulario, si esta vacio va a la misma página
    method: envia la informacion por un metodo http post o get
    enctype: multipart/form-data

  
  -->
  <form action="">
  
  <!-- name es el nombre para recogerlo en el servidor: $_POST['nombre'] -->
  <p>
    <label for="boton">boton</label>
    <input type="button" value="hazme click" name="boton">
  </p>
  <p>
  <label for="sexo">sexo</label>
    <input type="checkbox" name="sexo" value="hombre"> hombre
    <input type="checkbox" name="sexo" value="mujer"> mujer
  </p>
  <p>
    <label for="color">color</label>
    <input type="color" name="color">
  </p>
  <p>
    <label for="date">Date</label>
    <input type="date" name="date">
  </p>
  <p>
  <label for="correo">correo</label>
    <input type="email" name="correo"> 
  </p>
  <p>
  <label for="file">file</label>
    <input type="file" name="file" multiple> 
  </p>
  <p>
  <label for="number">number</label>
    <input type="number" name="number"> 
  </p>
  <p>
  <label for="password">password</label>
    <input type="password" name="password"> 
  </p>
  <p>
  <label for="radio">radio</label>
    <input type="radio" name="continente" value="España"> España
    <input type="radio" name="continente" value="América"> América
    <input type="radio" name="continente" value="Suiza"> Suiza
  </p>
  <p>
    <label for="web">url</label>
    <input type="url" name="url"> url
  </p>
  <p>
    <label for="nombre">nombre</label>
    <input type="text" name="nombre"> Nombre
  </p>
  <p>
  <label for="apellido">apellido</label>
    <input type="text" name="apellido"> Apellido
  </p>
  <p>
  <label for="textarea">textArea</label>
    <textarea name="textarea" id="" cols="30" rows="10"></textarea>
  </p>
  <p>
  <label for="peliculas">Peliculas</label>
  <select name="peliculas" id="">
    <option value="spiderman">Spiderman</option>
    <option value="batman">Batman</option>
    <option value="superman">Superman</option>
  </select>
  </p>
  <input type="submit" value="enviar">
  
  </form> 
</body>
</html>