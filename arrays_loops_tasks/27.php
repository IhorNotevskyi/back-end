<?php
$cols = 5;
$rows = 5;
$colors = array ('red', 'yellow', 'blue', 'gray', 'maroon', 'brown', 'green');

echo "<table>";
for ($tr = 0; $tr < $rows; $tr++) {
    echo "<tr>";
    for ($td = 0; $td < $cols; $td++) {
        $number = rand(0, 50000);
        $color = rand(0, sizeof($colors) - 1);
        echo "<td style='background-color:{$colors[$color]}'>$number</td>";
    }
    echo "</tr>";
}
echo "</table>";