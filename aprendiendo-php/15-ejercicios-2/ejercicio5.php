<?php

include_once './accion.php';
include_once './aventuras.php';
include_once './deportes.php';
// Crear un array con el contenido de la siguiente tabla:

echo "<ul>";

echo "<h1>Lista de acción</h1>";
foreach ($accion as $value) {
  echo "<li>".$value."</li>";
}
echo "<h1>Lista de aventuras</h1>";
foreach ($aventuras as $value) {
  echo "<li>".$value."</li>";
}
echo "<h1>Lista de deportes</h1>";
foreach ($deportes as $value) {
  echo "<li>".$value."</li>";
}

echo "</ul>";

// profe

$tabla = array(
  "Accion" => array('gta','cod','CO2'),
  "Aventuras" => array('crash','otro','y otro mas'),
  "Deportes" => array('fifa','pes','nba'),
);

$categorias = array_keys($tabla);


?>

<table border="1">
  <tr>
    <?php foreach ($categorias as $categoria) : ?>
    <th><?=$categoria?></th>
    <?php endforeach; ?>

  </tr>
  <tr>
    <td><?=$tabla['Accion'][0]?></td>
    <td><?=$tabla['Aventuras'][0]?></td>
    <td><?=$tabla['Deportes'][0]?></td>
  </tr>
  <tr>
    <td><?=$tabla['Accion'][1]?></td>
    <td><?=$tabla['Aventuras'][1]?></td>
    <td><?=$tabla['Deportes'][1]?></td>
  </tr>
  <tr>
    <td><?=$tabla['Accion'][2]?></td>
    <td><?=$tabla['Aventuras'][2]?></td>
    <td><?=$tabla['Deportes'][2]?></td>
  </tr>
</table>