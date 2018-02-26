<?php

function adjacentElementsProduct($inputArray)
{
    $max = $inputArray[0] * $inputArray[1];
    for ($i = 1; $i < count($inputArray); $i++) {
        $total = $inputArray[$i-1] * $inputArray[$i];
        $max = max($max, $total);
    }
    return $max;
}
