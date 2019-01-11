<?php

/* 

Cookie: Es un fichero que se almacena en el ordenador del usuario que visita
la web, con el fin de recordar datos o rastrear el comportamiento del mismo en la web.

*/

// Crear cookie

// setcookie("nombre", "valor que solo puede ser texto", caducidad, ruta, dominio);

// Cookie básica
setcookie("micookie", "valor de mi galleta");

// Cookie con expiración
setcookie("unyear", "valor de mi cookie de 365 dias", time()+(60*60*24*365)); // segundos+minutos+horas+dias
header('location:ver_cookies.php'); // redirección

?>

<a href="ver_cookies.php">Ver las galletas</a>
<a href="borrar_cookies.php">Borrar las galletas</a>

