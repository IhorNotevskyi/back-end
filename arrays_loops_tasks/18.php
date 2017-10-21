<?php
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$count = 0;

foreach ($days as $value) {
    $count++;
    if ($count > 5) {
        echo "<strong>{$value}</strong><br>";
    } else {
        echo "{$value}<br>";
    }
}