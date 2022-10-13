<?php
//Oving 3 - kap 4
//Lag et skript som regner ut hvor lang tid det tar for PHP-fortolkeren å kjøre gjennom en for-løkke fem millioner ganger. 
//En skjermutskrift må vise klokkeslettet før og etter at for-løkken har kjørt. 
// Klokkeslettet skal være i formatet timer, minutter, sekunder og mikrosekunder. 
//Deretter må du skrive ut hvor lang tid det tok oppgitt i sekunder (bruk desimaltall). 
//Antall sekunder får du ved å omregne mikrosekunder til sekunder.


// Lager to date objekter som skal vise tiden før og etter.
$dtf = date_create();
echo "Klokken før løkken kjører: " . date_format($dtf, "H:i:s:u") . "<br>"; 

// for loop som skal kjøre til 5 mil. 
for($i=1; $i<=5000000; $i++)
{
    // Denne løkken gjør ingenting.
}
$dte = date_create();
echo "Klokken før løkken kjører: " . date_format($dte, "H:i:s:u") . "<br>"; 

$diff = date_diff($dtf, $dte);
$sek = $diff->f;

echo "Tidforskjellen mellom løkken: " . round($sek, 3) . " sekund." . ($sek >= 2 ? "er" : "") . "<br>";


?>