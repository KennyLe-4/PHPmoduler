<?php
/*Lag en  liten konkurranse mellom ti  deltakere. En matrise skal inneholde navnene til  deltakerne (som 
indeks) og poengsummen de får i hver runde (som verdi). Før konkurransen starter, må alle deltakerne 
annonseres. Konkurransen foregår i flere runder inntil det kun er én deltaker igjen. Prosedyren i hver 
runde er som følger: 
• det skal trekkes et tall mellom 1 og 50 for hver deltaker som lagres i matrisen  
• deltakeren med lavest poengsum skal fjernes fra konkurransen (og dermed fra matrisen)  
o dersom flere deltakere har den laveste poengsummen, skal alle disse fjernes  
• navnet på den eller de som fjernes skal opplyses i hver runde 
 
Når det er én deltaker igjen, skal navnet på vinneren annonseres.  
*/

    $ListeOverDeltakere = array(
    'Adrian' => 0,
    'Simen' => 0,
    'Emanuel' => 0,
    'Kenny' => 0,
    'Kevin' => 0,
    'Kamila' => 0,
    'Peter' => 0,
    'Magnus' => 0,
    'Livan' => 0,
    'Mustafa' => 0
   
    );

echo "Følgende er med i konkurransen: <br> "; 

foreach($ListeOverDeltakere as $nameOnPlayer => $poeng) {
    echo $nameOnPlayer . "<br>";
}

echo "<br>"; 

$runde = 1; 

do {
    echo "Runde: " .$runde++ . "<br>" . "Deltakerne har følgende poeng: <br><br>"; 

    foreach($ListeOverDeltakere as $nameOnPlayer => $poeng) {
       $ListeOverDeltakere[$nameOnPlayer] = rand(1, 50);
    
    
       echo $nameOnPlayer . " har  $ListeOverDeltakere[$nameOnPlayer] poeng" . "<br>"; 
    }
    

$min = min($ListeOverDeltakere);

foreach($ListeOverDeltakere as $nameOnPlayer => $poeng) {
    if($poeng == $min) {
        array_splice($ListeOverDeltakere, 0, 1);
        echo "Spiller med navn: " .$nameOnPlayer . ", har minst poeng og ble kastet ut. <br>"; 
    }
}
echo "<br>"; 

}
while (count($ListeOverDeltakere) > 1); 
foreach ($ListeOverDeltakere as $nameOnPlayer => $poeng) {
    $vinner = $nameOnPlayer;
}

echo "Vinneren av konkurransen er: " . $nameOnPlayer; 









