#!/usr/bin/php
<?php

require_once 'samples.php';
require_once 'solution.php';

$samples = Samples::getSamples();
$solution = new Solution();
$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = $solution->run($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
var_dump($solutions);
