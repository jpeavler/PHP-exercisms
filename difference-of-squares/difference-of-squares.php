<?php

function sumOfSquares($num): int {
    $result = 0;
    for($i = 1; $i <= $num; $i++) {
        $result = $result + $i**2;
    }
    return $result;
}

function squareOfSum($num): int {
    $result = 0;
    for($i = 1; $i <= $num; $i++) {
        $result = $result + $i;
    }
    return $result**2;
}

function difference($num): int {
    $sumOfS = sumOfSquares($num);
    $squareOfS = squareOfSum($num);
    $difference = $squareOfS - $sumOfS;
    return $difference;
}