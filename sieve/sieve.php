<?php

function sieve($num): array {
    $primeArr = array_fill(0, $num + 1, true);
    $primeArr[0] = false;
    $primeArr[1] = false;
    for($i = 2; $i < ceil(sqrt($num)); $i++ ) {
        if($primeArr[$i]) {
            for($j = $i*$i; $j <= $num; $j += $i) {
                $primeArr[$j] = false;
            }
        }
    }
    return array_keys($primeArr, true);
}