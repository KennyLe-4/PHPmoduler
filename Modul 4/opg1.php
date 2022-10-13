<?php 
/* 
Lag et lite script som oppretter en matrise med heltall som indeks. Matrisen skal ha indeksene 0, 3, 5, 
7, 8 og 15. Skriv deretter ut innholdet i matrisen ved hjelp av funksjonen print_r() og ved å bruke en 
løkke (som du lærte i forrige modul). 
*/

$array = [0, 3, 5, 7, 8, 15]; 
print_r($array); 
echo "<br><br>";

foreach($array as $key => $value) {
    echo $value . "<br>";
}

?>


