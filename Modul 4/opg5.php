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

$deltakere = array(
    'Adrian' => 0,
    'Simen' => 0,
    'Emanuel' => 0,
    'Kenny' => 0,
    'Kevin' => 0,
    'Sondre' => 0,
    'Peter' => 0,
    'Markus' => 0,
    'Ulrik' => 0,
    'Steffen' => 0
);

echo "Velkommen til denne konkurransen!<br><br>";

// Bruker en for-loop som går opp til 9 runder. Da det er 10 deltakere og en spiller vinner. 
for ($x = 1; $x <= 9; $x++) {

    echo "Runde 1: .$x . <br>";

    echo "<br>TALLENE TREKKES!<br>";

    foreach ($deltakere as &$poeng) {
        $poeng = rand(1, 50);
    }

    asort($deltakere);

    echo "<br>";

    foreach ($deltakere as $navn => $poeng) {
        echo $navn . " har " . $poeng . " poeng.<br>";
    }

    //bruker array_flip for å bytte plass på nøkler og verdier.
    //array_shift, som returnerer første verdien i rekken
    //får jeg nøkkelen til $deltaker, altså navnet og ikke verdien til spilleren.
    $flipped = array_flip($deltakere);
    $fjernet = array_shift($flipped);

    unset($deltakere[$fjernet]);

    echo "<br>";
    echo $fjernet . " hadde minst poengsum, og ryker dermed ut av konkurransen!<br><br>";

    //skriver ut siste deltakeren.
    if (count($deltakere) <= 1) {
        echo $navn . " er eneste spiller igjen, og har vunnet konkurransen!";
    }
}


?>