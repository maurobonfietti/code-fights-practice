#!/usr/bin/php
<?php

require_once 'samples.php';
require_once 'solution.php';

$samples = Samples::getSamples();
$output = Samples::getExpectedOutput();
$solution = new Solution();
$solutions = [];

echo "Results: \n";

foreach ($samples as $key => $sample) {
    $result = $solution->run($sample);
    if ($result === $output[$key]) {
        echo "Test $key: OK.\n";
    } else {
        echo "Test $key: FAIL.\n";
    }
    $solutions[] = $result;
}

if ($output === $solutions) {
    echo "Tests CORRECT :-) \n";
} else {
    echo "Tests FAILURES..! \n";
}
