<?php
$paises = array('ESP'=>(array("pais" => 'España', "codigo_num" => '724')),
    'FRA'=>(array("pais" => 'Francia', "codigo_num" => '250')),
    'ITA'=>(array("pais" => 'España', "codigo_num" => '380')),
    'DEU'=>(array("pais" => 'Alemania', "codigo_num" => '276')),
    'HRV'=>(array("pais" => 'Croacia', "codigo_num" => '191')),
    'PRT'=>(array("pais" => 'Portugal', "codigo_num" => '620')),
    'MAR'=>(array("pais" => 'Marruecos', "codigo_num" => '504')),
    'BRA'=>(array("pais" => 'Brazil', "codigo_num" => '076')),
    'COL'=>(array("pais" => 'Colombia', "codigo_num" => '170')),
    'IND'=>(array("pais" => 'India', "codigo_num" => '356')));

foreach($paises as $codi => ['pais'=> $pais, 'codigo_num' => $codigo_num]){
    echo 'El pais ' . $pais . ' utiliza el codigo ' . $codi . ' con codigo numerico: ' . $codigo_num;
    echo "<br>";
}
?>