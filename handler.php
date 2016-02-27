<?php
$result = '-';
if (isset($_REQUEST['calc'])) {
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $operation = $_REQUEST['operation'];
    switch ($operation) {
        case "+":
            $result = $a + $b;
            break;
        case "-":
            $result = $a - $b;
            break;
        case "*":
            $result = $a * $b;
            break;
        case "/":
            if ($b != 0) {
                $result = $a / $b;
            } else {
                $result = "деление на ноль";
            }
            break;
        case "^":
            $result = pow($a, $b);
            break;
        case "%":
            $result = $a % $b;
            break;
        default:
            $result = "неизвестное действие";
    }
}