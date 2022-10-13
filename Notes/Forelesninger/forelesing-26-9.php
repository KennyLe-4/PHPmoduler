<?php 
// Include the include.inc.php file 
// Using include and require 

//include_once('include.inc.php');
//require_once ('include.inc.php');



function areal($radius) 
{
    echo pi() * $radius * $radius;
}

$radius = 5; 
areal(5);


// Lag funskjon som regner ut omkrets til en sirkel 
function omkretsAvSirkel($radius)
{
    $omkrets = 2 * pi() * $radius; 
    return $omkrets; 
}

$o = omkretsAvSirkel($radius);

// Viser kort versjon av if setningen



if($poengsum >= 30) {
    echo "Du har bestått!"; 
}
else {
    "Du har ikke bestått";
}

echo $poengsum >= 30 ? "Du har bestått" : "Du har ikke bestått";


?>