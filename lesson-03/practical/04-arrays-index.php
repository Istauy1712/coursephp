<?php

define('CASE_TYPE', 'strtolower');

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('ROWS_COUNT', 10);

$input = array(
    'A' => 'Blue',
    'B' => 'Green',
    'c' => 'Red',
);

echo "Actual array: \n";
print_r($input);

echo "\n\nValues are in lower case: \n";
print_r(
    array_map('strtolower', $input)
);

echo "\n\nValues are in UPPER case: \n";
print_r(
    array_map('strtoupper', $input)
);
