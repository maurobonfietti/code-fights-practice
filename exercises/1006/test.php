#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    [[0,1,1,2],
     [0,5,0,0],
     [2,0,3,3]],
    [[1,1,1,0],
     [0,5,0,1],
     [2,1,3,10]],
    [[1,1,1],
     [2,2,2],
     [3,3,3]],
    [[0]],
    [[4,1,1,2],
     [0,5,0,0],
     [2,0,3,3]],
    [[3,3,3],
     [3,3,3],
     [3,3,3]],
    [[0,1,1],
     [2,0,2],
     [3,3,0]],
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = matrixElementsSum($sample);
}

//echo "Samples: \n";
//print_r($samples);

echo "Solutions: \n";
print_r($solutions);
