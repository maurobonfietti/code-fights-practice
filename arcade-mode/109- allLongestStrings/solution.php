<?php

function allLongestStrings($inputArray)
{
    $strLengths = array_map('strlen', $inputArray);
    $keys = array_keys($strLengths, max($strLengths));

    return array_values(array_intersect_key($inputArray, array_flip($keys)));
}

function allLongestStringsV2($inputArray)
{
    $max = max(array_map('strlen', $inputArray));
    $result = [];
    for ($i = 0; $i < count($inputArray); $i++) {
        if (strlen($inputArray[$i]) === $max) {
            array_push($result, $inputArray[$i]);
        }
    }

    return $result;
}
