<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('ROWS_COUNT', 10);

for($a = 0; $a < 10; $a++)
{ 
    for($b = 0; $b < 10; $b++)
    {
        echo "{$a}{$b}, "; 
    }
}
echo "\n";