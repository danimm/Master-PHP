<?php

// Conexión a la base de datos

$server = 'localhost';
$user = 'root';
$password = '1234';
$database = 'blog_master';

$db = mysqli_connect($server, $user, $password, $database);
mysqli_query($db, "set names 'utf8'");

// Iniciar la sesión

if(!isset($_SESSION)){
  session_start();
}