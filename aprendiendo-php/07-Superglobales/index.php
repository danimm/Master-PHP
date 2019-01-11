<?php

// Variables superglobales

// variables de servidor más importantes

echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
// dirección IP del servidor ::1, es localhost
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME'];
// nombre del server
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
// Versiones de cosas del servidor
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
// Versiones de cosas del servidor
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];
// Dirección ip del user
echo '</h1>';