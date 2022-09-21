<?php
$blanco="____";
$negro= "███";

echo "<table border = 1>";
echo "</tr>";
for ($a=1; $a <=4 ; $a++) {
    echo "<tr>";
    for ($i=1; $i <=4 ; $i++) {
        echo "<td>$blanco</td>";
        echo "<td>$negro</td>";
    }
    echo "</tr>";
    for ($i=1; $i <=4 ; $i++) {
        echo "<td>$negro</td>";
        echo "<td>$blanco</td>";
    }
}
echo "</table>";