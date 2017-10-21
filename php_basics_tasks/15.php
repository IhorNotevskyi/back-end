<?php
if (isset($_GET['a']) && isset($_GET['b']) && isset($_GET['operator'])) {
    $a = filter_var($_GET['a'], FILTER_VALIDATE_FLOAT);
    $b = filter_var($_GET['b'], FILTER_VALIDATE_FLOAT);
    $operator = filter_var($_GET['operator'], FILTER_SANITIZE_STRING);
    if ($a === false || $b === false || !$operator) {
        $result = 'Вводите только целые числа';
    } else {
        switch ($operator) {
            case '+':
                $result = "{$a} {$operator} {$b} = " . ($a + $b);
                break;
            case '-':
                $result = "{$a} {$operator} {$b} = " . ($a - $b);
                break;
            case '*':
                $result = "{$a} {$operator} {$b} = " . ($a * $b);
                break;
            case '/':
                if (!$b) {
                    $result = 'На ноль делить нельзя';
                } else {
                    $result = "{$a} {$operator} {$b} = " . ($a / $b);
                }
                break;
            case '%':
                if (!$b) {
                    $result = 'На ноль делить нельзя';
                } else {
                    $result = "{$a} {$operator} {$b} = " . ($a % $b);
                }
                break;
            default:
                $result = 'Вводите только целые числа';
        }
    }
}

if (isset($result)) {
    echo $result;
}
?>

<form>
    <input type="hidden" name="task" value="15">
    <input type="text" name="a">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="%">%</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="Посчитать">
</form>