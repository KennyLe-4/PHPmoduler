<?php
$initial = '555';
// Convert to decimal from octal 
$a = octdec($initial);
echo $a; 
echo "\n";

// Convert to radians to degree 
$b =  deg2rad($a);
echo $b;
echo "\n";

// Cosine 
$c = cos($b);
echo $c; 
echo "\n";

// 3 decimal places 
$d = round($c, 3);
echo $d; 
echo "\n";

// natural log 
$e = log($d);
echo $e;
echo "\n";

// Absolute value
$f = abs($e);
echo $f; 
echo "\n";

// Inverse 
$g = acos($f);
echo $g;
echo "\n";

// Convert radians to degree 
$h = rad2deg($g); 
echo $h; 
echo "\n";

// Floor (round down)
$i = floor($h);
echo $i;
echo "\n";

// Substract 47 from $i

$j = ($i-47);
echo $j;
echo "\n";



?> 