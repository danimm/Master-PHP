<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imprimir por pantalla - Master en PHP</title>
  </head>
  <body>
    <h1>Master en PHP</h1>
    <?php
      echo "<h3>Listado de videojuegos</h3>";
      echo "<ul>"
           . "<li>GTA</li>"
           . "<li>Fifa</li>"
           . "<li>League of Legends</li>"
           . "</ul>";
      echo "<p>Esta es toda"." - "."lista.";
      // Esto es un comentario de una sola línea
      /*Esto
      es
      un
      comentario
      de muchas lineas */
    ?>
    <?= "bienvenido al curso mas potente de php" ?>;
    <!-- esto es un echo rapido -->
  </body>
</html>
