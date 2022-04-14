<?php


//Autoload de classes
require __DIR__;

//Dependencias
use \App\OpenWeatherMap;


//Instancia da API
$obOpenWeatherMap = new OpenWeatherMap("5cd503e67afbf493bc0c9829f4f3f3f0");

echo "<prev>";
print_r($obOpenWeatherMap);
echo "<prev>"; exit;