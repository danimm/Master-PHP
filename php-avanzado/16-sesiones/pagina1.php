<?php 

// hay que iniciar la sesion en todas las páginas.
session_start();

echo $variable_normal;
echo $_SESSION['variable_persistente'];
