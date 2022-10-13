<?php 

//Lag et skript som regner ut hvor lang tid det tar for PHP-fortolkeren å kjøre gjennom en for-løkke fem millioner ganger. En skjermutskrift må vise klokkeslettet før og etter at for-løkken har kjørt. Klokkeslettet skal være i formatet timer, minutter, sekunder og mikrosekunder. Deretter må du skrive ut hvor lang tid det tok oppgitt i sekunder (bruk desimaltall). Antall sekunder får du ved å omregne mikrosekunder til sekunder.

$mm_now = 2413;
$mm_then = 1660; 

$diff = $mm_now - $mm_then;
$per_month = $diff / (11*12); 
echo "Anna vokste i gj.snitt: " . round($per_month, 2) . " mm per måned fra 6-17 år."

?>