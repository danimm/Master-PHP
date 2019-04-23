<?php

require_once 'coche.php';

$coche = new Coche(
  "Amarillo",
  "Renaul",
  "Clio RS",
  "V6",
  250,
  220
);

$coche2 = new Coche(
  "Rojo",
  "Ferrari",
  "Testarosa",
  "V8",
  640,
  320
);


// $coche->color = "azul";
// $coche->setMarca("audi");
// var_dump($coche->getModelo());

echo $coche->showInfo($coche);
