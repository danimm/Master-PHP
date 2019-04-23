<?php
class ConfiguracionStatic
{
  public static $color;
  public static $newsletter;
  public static $entorno;

  public static function getColor()
  {
    return self::$color;
  }

  public static function setColor($color)
  {
    // sintaxis para propiedades estáticas
    self::$color = $color;
  }
}
