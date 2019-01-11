<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formularios en PHP</title>
</head>
<body>
  <h1>Formulario en PHP</h1>
  <!-- method es el tipo: GET o POST -->
  <!-- action es a que página le envio yo el contenido del formulario -->
  <!-- Los parametros van en la url: el primero es con la ?
  y el segundo va con el signo & -->
  <form method="POST" action="recibir.php">
    <p>
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre">
    </p>
    <p>
      <label for="apellidos">apellidos</label>
      <input type="text" name="apellidos">
    </p>
    <input type="submit" value="enviar datos">
    <!-- Nos envia a la pagia que pusimos en el action -->
  </form>
</body>
</html>

