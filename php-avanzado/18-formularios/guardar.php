<?php

if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
  echo "<h1>".$_POST['titulo']."</h1>";
  echo "<br>";
  echo $_POST['descripcion'];
}