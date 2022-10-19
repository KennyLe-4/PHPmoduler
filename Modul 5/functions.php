<?php 

// Function for average
function averageOfSum($num1, $num2, $num3, $num4)
{
    $average = ($num1 + $num2 + $num3 + $num4) / 4;
    return $average; 
}
// Function for standard deviation 
function standardDeviation($num1, $num2, $num3, $num4)
{
    $average = ($num1 + $num2 + $num3 + $num4) / 4;
    $standardDeviation1 = ($num1**2 + $num2**2 + $num3**2 + $num4**2)-(4*($average**2));
    $standardDeviation = sqrt($standardDeviation1/4); 
}



?>