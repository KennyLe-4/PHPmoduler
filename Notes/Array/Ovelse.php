<?php 
// Loddtrekning med 5 lodd. 

$tallrekke = range(0,100);
$shuffle = array_rand($tallrekke, 5);

if ($tallrekke <= 5) {
    echo "Gratuler du har vunnet"; 

} else
{
    echo "Du har dessverre ikke vunnet";
}





?>