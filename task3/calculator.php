<?php

function calculator(float $x1, float $x2, string $operation): float|string {
    if (empty($x1) && empty($x2)) {
        return 'Аргументы не переданы';
    }


    switch ($operation) {
        case '+':
            $result = $x1 + $x2;
            break;
        case '-':
            $result = $x1 - $x2;
            break;
        case '*':
            $result = $x1 * $x2;
            break;
        case '/':
            $result = $x1 / $x2;
            break;
        default:
            return 'Такая операция не поддерживается';
            break;
    }

    return $result;
}
