<?php

function toRna(string $dnaStrand) : string {
    $dnArray = str_split($dnaStrand);
    $rnArray = [];
    foreach ($dnArray as $dna) {
        switch ($dna) {
            case 'C':
                array_push($rnArray,'G');
                break;
            case 'G':
                array_push($rnArray,'C');
                break;
            case 'T':
                array_push($rnArray,'A');
                break;
            case 'A':
                array_push($rnArray,'U');
                break;
        }
    }
    return implode("", $rnArray);
}