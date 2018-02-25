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

echo "Results: \n";

foreach ($solutions as $key => $solution) {
    if ($solution === $output[$key]) {
        echo "Test $key: OK.\n";
    } else {
        echo "Test $key: FAIL.\n";
    }
}

if ($output === $solutions) {
    echo "Tests CORRECT :-) \n";
} else {
    echo "Tests FAILURES..! \n";
}
