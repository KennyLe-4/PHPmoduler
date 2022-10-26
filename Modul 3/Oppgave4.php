<?php 
/*
Lag  et  script  som  skriver  ut  en  beskjed  til  brukeren  basert  på  hvilket  fylke  en  kommune tilhører. 
Kommunene som skal sjekkes er: Kristiansand, Lillesand, Birkenes, Harstad, Kvæfjord, Tromsø, Bergen, 
Trondheim, Bodø og Alta. Beskjeden skal se  noe slik  ut: «[kommune] ligger i  [fylke]  fylke». Teksten i 
klammeparentes må erstattes med det respektive kommunenavnet som sjekkes. */

// Bruker funksjonen "match" for å matche fylke -> by. 
// Bruker funksjonen "by" for printe ut tilhørende fylke. 

$by = "Kristiansand"; 
$fylke = match($by) 
{

"Kristiansand" => "Agder",
"Lillesand" => "Agder",
"Birkenes" => "Agder",
"Harstad" => "Troms",
"Kvæfjord" => "Troms",
"Tromsø" => "Troms og Finnmark",
"Bergen" => "Vestland",

};

echo $by . " ligger i" . " $fylke";


?>

