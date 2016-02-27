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
if (isset($_REQUEST['pow'])) {
    $result = [];
    $a = $_REQUEST['a'];
    for ($i = 0; $i < 10; $i++) {
        $result[$i] = pow($a, $i + 1);

    }
    $result = implode(',', $result);
}
if (isset($_REQUEST['T3'])) {
    $a = intval($_REQUEST['a']);
    $b = intval($_REQUEST['b']);
    $c = intval($_REQUEST['c']);
    $d = ($b ^ 2) - 4 * ($a * $c);
    if ($d < 0) {
        $result = 'нету решения';
    } else if ($d >= 0) {

        $x1 = (-$b + sqrt($d)) / 2 * $a;
        $x2 = (-$b - sqrt($d)) / 2 * $a;
        $result = [$x1, $x2];
        $result = implode(',', $result);
    }

}
if (isset($_REQUEST['trap'])) {
    $a = intval($_REQUEST['a']);
    $b = intval($_REQUEST['b']);
    $h = intval($_REQUEST['h']);
    $result = 1 / 2 * (($a * $b) * $h);
}