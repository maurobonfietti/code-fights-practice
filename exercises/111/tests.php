#!/usr/bin/php
<?php

require_once 'samples.php';
require_once 'solution.php';

$samples = Samples::getSamples();
$output = Samples::getExpectedOutput();
$solution = new Solution();
$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = $solution->run($sample);
}

//echo "Samples: \n";
//print_r($samples);
//
//echo "Expected Output: \n";
//var_dump($output);
//
//echo "Solutions: \n";
//var_dump($solutions);

echo "Results: \n";

for ($i = 0; $i < count($solutions); $i++) {
//    var_dump($solutions[$i]);
    if ($solutions[$i] === $output[$i]) {
        echo "Test $i: OK.\n";
    } else {
        echo "Test $i: FAIL.\n";
    }
}

if ($output === $solutions) {
    echo "Tests CORRECT :-) \n";
} else {
    echo "Tests FAILURES..! \n";
}
