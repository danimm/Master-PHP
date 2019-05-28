<?php

function app_autoloader($class)
{
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
  require_once 'controllers/' . $class . '.php';
}

spl_autoload_register('app_autoloader');