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

echo "Samples: \n";
print_r($samples);

echo "Expected Output: \n";
print_r($output);

echo "Solutions: \n";
print_r($solutions);

echo "Results: \n";
if ($output === $solutions) {
    echo "Correct! \n";
} else {
    echo "Incorrect! \n";
}
