<?php

function wordCount($phrase): array {
    $noPunctuation = preg_replace("/[^a-zA-Z0-9\s]/", "", $phrase);
    $singleSpaceOnly = preg_replace("/\s+/", " ", $noPunctuation);
    $trimmed = trim($singleSpaceOnly);
    $phraseArr = explode(" ", strtolower($trimmed));
    //return array_count_values($phraseArr);   Cheater way for exercism, but should use 
    //array_count_values function in regular cases
    $wordCount = array();
    foreach($phraseArr as $word) {
        if(isset($wordCount[$word])) {
            $wordCount[$word] += 1;
        } else {
            $wordCount[$word] = 1;
        }
    }
    return $wordCount;
} 