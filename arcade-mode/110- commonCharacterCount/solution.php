<?php

function commonCharacterCount($s1, $s2) {
    $total = 0;
    $letters1 = str_split($s1);
    $letters2 = str_split($s2);
    foreach($letters1 as $letter) {
        $key2 = array_search($letter, $letters2);
        if($key2 !== false) {
            unset($letters2[$key2]);
            $total++;
        }
    }

    return $total;
}
