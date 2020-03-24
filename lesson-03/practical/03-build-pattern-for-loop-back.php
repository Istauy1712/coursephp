<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define('ROWS_COUNT', 10);

// Display first part
for($xAxis = 1; $xAxis <= ROWS_COUNT; $xAxis++)
{
   for ($yAxis = 1; $yAxis <= $xAxis; $yAxis++)
    {
        echo "*";
        if($yAxis < $xAxis)
        {
            echo " ";
        }
    }
    echo "\n"; // use <br> in browser insread
}

// Display second part
for($xAxis = ROWS_COUNT; $xAxis >= 1; $xAxis--)
{
    for($j = 1; $j <= $xAxis; $j++)
    {
        echo "* ";
    }
    echo "\n"; // use <br> in browser insread
}
