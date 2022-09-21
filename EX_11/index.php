<?php
function comprobarMayuscula($cadena)
{
    return $cadena === strtoupper($cadena);
}
$cadenas = ["Messi", "MESSI", "messi"];
foreach ($cadenas as $cadena) {
    if (comprobarMayuscula($cadena)) {
        echo "$cadena esta escrito en mayúscula\n";
        echo '</br>';
    } else {
        echo "$cadena no esta escrito en mayúscula\n";
        echo '</br>';
    }
}