<?php
function formarpiramide ($filas) {
    $cadena = null;
    for ($numfilas = 0; $numfilas <= $filas; $numfilas++) {
        for ($numcolumnas = 0; $numcolumnas < $numfilas; $numcolumnas++) {
            echo "*";
        }
        echo "<br />";
    }
    for ($numfilas = 0; $numfilas <= $filas; $numfilas++) {
        $cadena ="";
        for ($numcolumnas = $filas-$numfilas; 0 < $numcolumnas; $numcolumnas--) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}
formarpiramide (10);