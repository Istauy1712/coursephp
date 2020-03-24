<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

/**
 * Two options is awailable
 *  lower (by default)
 *  upper (on your choice)
 */
define('USE_CASE_TYPE', 'upper');

// Case type handlers
$handlers = [
    'lower' => 'strtolower', // build in function strtolower() used.
    'upper' => 'strtoupper', // build in function strtolower() used.
];

$input = array(
    'A' => 'Blue',
    'B' => 'Green',
    'c' => 'Red',
);

echo "Actual array: \n";
print_r($input);

// By using if/else
if ('lower' === USE_CASE_TYPE)
{
    echo "\n\nValues are in lower case: \n";
    print_r(
        array_map($handlers[USE_CASE_TYPE], $input)
    );
} else {
    echo "\n\nValues are in UPPER case: \n";
    print_r(
        array_map($handlers[USE_CASE_TYPE], $input)
    ); 
}

// By using switch
switch (USE_CASE_TYPE) {
    case 'lower':
        echo "\n\nValues are in lower case: \n";
        $function = $handlers[USE_CASE_TYPE];
        print_r(
            array_map($function, $input)
        );
        break;
    
    case 'upper':
        echo "\n\nValues are in UPPER case: \n";
        $function = $handlers[USE_CASE_TYPE];
        print_r(
            array_map($function, $input)
        );
        break;
    /*
    default:
        # code...
        break;
     */   
}

// Final
echo "\n\nValues are in " . USE_CASE_TYPE . " case: \n";
print_r(
    array_map($handlers[USE_CASE_TYPE], $input)
);





