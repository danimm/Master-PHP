<?php

// Constante
// Es un contenedor de informaión que no puede variar
// las constantes se muestran escribiendo el nombre SIN el $

define('nombre', 'Daniel Muñoz Martín');
define('web', 'danimm.com');

echo '<h1>'.nombre.'</h1>';
echo '<h1>'.web.'</h1>';

$web = 'danimm.com';
echo '<h1>'.$web.'</h1>';
$web = 'danimm.com/cv';
echo '<h1>'.$web.'</h1>';

// Constantes predefinidas

echo '<h1>'.PHP_OS.'</h1>'.'<br>';
echo '<h1>'.PHP_VERSION.'</h1>'.'<br>';
echo '<h1>'.PHP_EXTENSION_DIR.'</h1>'.'<br>';
echo '<h1>'.__LINE__.'</h1>'.'<br>';
echo '<h1>'.__FILE__.'</h1>'.'<br>';

function holaMundo() {
    echo '<h1>'.__FUNCTION__.'</h1>'.'<br>';
}

holaMundo();