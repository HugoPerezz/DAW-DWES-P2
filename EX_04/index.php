<?php
$Ciudades = ["Barcelona", "Malaga", "Alicante", "Madrid", "Sevilla", "Cadiz"];

$len = 0;


$len = max(array_map('strlen', $Ciudades));

$max = array_combine($Ciudades, array_map('strlen', $Ciudades));

$string = array_keys($max, max($max));

var_dump($len, $string);

echo '<br>';

$len = min(array_map('strlen', $Ciudades));
$min = array_combine($Ciudades, array_map('strlen', $Ciudades));
$string = array_keys($min, min($min));
var_dump($len, $string);

?>