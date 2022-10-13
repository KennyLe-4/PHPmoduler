<?php 
// Bruker funksjonen "match" for å matche fylke -> by. 
// Bruker funksjonen "by" for printe ut tilhørende fylke. 

$by = "Kristiansand"; 
$fylke = match($by) {

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

