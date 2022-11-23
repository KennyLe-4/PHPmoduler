<?php 
// Øvelse: sett en variabel til et vilkårlig tall (1-10) og skriv det ut 
// på skjermen. Generér et tall (1-10) inntil det blir likt det 
// opprinnelige tallet. Skriv ut hvor mange forsøk du behøvde for 
// å få likt tall.
$tall1 = rand(1,10);
echo "Tall1: " .$tall1 . "<br>";

$teller = 0;
do {
    $tall2 = rand(1,10);
    $teller++;

}
while(($tall1 == $tall2));
echo "Tall 2 er: " .$tall2 . " og vi brukte $teller forsøk"; 


?>