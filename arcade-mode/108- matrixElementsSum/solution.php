<?php

function matrixElementsSum($matrix)
{
    $result = 0;
    for ($i = 0; $i < count($matrix[0]); $i++) {
        for ($j = 0; $j < count($matrix); $j++) {
            if ($matrix[$j][$i] === 0) {
                break;
            }
            $result += $matrix[$j][$i];
        }
    }

    return $result;
}
