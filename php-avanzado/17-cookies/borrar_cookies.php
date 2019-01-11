<?php



if (isset($_COOKIE['micookie'])) {
  unset($_COOKIE['micookie']);
  setcookie('micookie', '', time()-100); // si le resto lo que sea estará caducada
  // Para borrar una cookie tenemos que caducarla aparte de esto
  echo "cookie borrada correctamente.";

  header('location:ver_cookies.php'); // redirección
}

// header('location:ver_cookies.php');