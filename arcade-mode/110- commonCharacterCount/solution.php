<?php

function commonCharacterCount($s1, $s2) {
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    $c = 0;
    foreach($s1 as $letter) {
        $key2 = array_search($letter, $s2);
        if($key2 !== false) {
            unset($s2[$key2]);
            $c++;
        }
    }

    return $c;
}
