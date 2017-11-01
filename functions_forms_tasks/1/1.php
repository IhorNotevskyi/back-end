<?php

if (isset($_POST['a']) && isset($_POST['b'])) {
    function getCommonWords($a, $b)
    {
        $a = preg_split("/[\s,]+/", $a);
        $b = preg_split("/[\s,]+/", $b);
        return array_intersect($a, $b);
    }
    echo "<pre>";
    print_r(getCommonWords($_POST['a'], $_POST['b']));
    echo "</pre>";
}