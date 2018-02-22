#!/usr/bin/php
<?php

require_once 'solution.php';

$samples = [
    '00-44  48 5555 8361',
    '0 - 22 1985--324',
    '555372654',
    '(111) 111-1111',
    '(0341) 15-5693393',
    '(341)56-93-393',
    '1234567890',
    '888',
    '0800888-4444',
    '+54-9-11-12344321',
    '1_23-4/5678912345',
    mt_rand(10, 9999999),
];

$solutions = [];

foreach ($samples as $sample) {
    $solutions[] = phoneNumberConverter($sample);
}

echo "Samples: \n";
print_r($samples);

echo "Solutions: \n";
print_r($solutions);
