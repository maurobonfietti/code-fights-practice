#!/usr/bin/php
<?php

require_once 'samples.php';
require_once 'solution.php';

$samples = Samples::getSamples();
$solution = new Solution();
$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = $solution->run($sample[0], $sample[1]);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
