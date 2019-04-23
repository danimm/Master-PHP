<?php
require_once 'configuracion.php';


// una clase estática no necesita instanciarse se puede llamar directamente utilizando los ::
// si creáramos una instancia para acceder a la propiedad sería también con :: ya no más ->
ConfiguracionStatic::setColor("azul");
echo ConfiguracionStatic::getColor();
