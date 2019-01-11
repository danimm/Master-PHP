<?php 

/*

las sesiones sirven para persistir la información del usuario mientras que está navegando por las página web
y poder compartir datos entre todas las páginas de nuestra aplicación.

Es el periodo de tiempo en el cual los datos se mantienen.

Sesión: almacenar y persistir datos del usuario mientras que navega en un sitio web
hasta que cierra sesión o cierra el navegador.

*ventajas: pueden almacenar muchos datos y se guardan todo en el servidor y es invisible a JS.
!desventajas: cuando cierras el navegador desaparece.


*/

// Iniciar la sesión

session_start();

// Variable local
$variable_normal = "Soy un String";

// Variable de sesión
$_SESSION['variable_persistente'] = "Hola soy una sesión activa";

echo $variable_normal."<br>";
echo $_SESSION['variable_persistente']."<br>";





?>