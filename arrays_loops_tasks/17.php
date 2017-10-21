<?php
$months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
$month = 'October';

foreach ($months as $value) {
    if ($value === $month) {
        echo "<strong>{$month}</strong><br>";
    } else {
        echo "{$value}<br>";
    }
}