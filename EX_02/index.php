<?php
$listaalumnos = [
    'Sergio', 'Esther', 'Rafa',
    'Pol', 'Joel', 'Hugo',
    'Ricard', 'Alejandro', 'Pol',
    'Christian', 'Alejandro',
    'Ramon', 'Jordi', 'Nil'
];
?>
<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>ALUMNOS CLASE</h1>
    <ul>
        <?php
        foreach($listaalumnos as $alumno){
            echo '<li>' . $alumno . '</li>';
        }
        ?>
    </ul>
    <?php
    echo 'Hay un total de ' . count($listaalumnos) . ' alumnos.';
    ?>
    </body>
    </html>
</DOCTYPE>
