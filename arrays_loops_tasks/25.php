<?php
$arr = [];
$arrLen = rand(2, 9);

foreach (range(0, $arrLen) as $value) {
    array_push($arr, rand(1, 1000));
}

echo "<pre>";
print_r($arr);
echo "</pre>";

$min = getrandmax();
$max = 0;

$minPos = 0;
$maxPos = 0;

for ($i = 0; $i < sizeof($arr); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
        $minPos = $i;
    }
    if ($arr[$i] > $max) {
        $max = $arr[$i];
        $maxPos = $i;
    }
}

$arr[$minPos] = $max;
$arr[$maxPos] = $min;

echo "<pre>";
print_r($arr);
echo "</pre>";