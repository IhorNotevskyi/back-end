<?php
$days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
$day = 'Friday';

foreach ($days as $value) {
    if ($day === $value) {
        echo "<em>{$value}</em><br>";
    } else {
        echo "$value<br>";
    }
}