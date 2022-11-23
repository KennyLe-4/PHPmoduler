<?php 
$number = "14500000";

if ($number < 1000000) {
    // Anything less than a million
    $format = number_format($number);
} else if ($number < 1000000000) {
    // Anything less than a billion
    $format = number_format($number / 1000000, 2) . ' Millioner';
} else {
    // At least a billion
    $format = number_format($number / 1000000000, 2) . 'B';
}

echo $format;

?> 