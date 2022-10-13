<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Oppgave 4 - alder</h1>
<?php

// "date" function to make the format we want. 
// "strtotime" to make convert string to time.
// "date_diff" to create two objects 

$fodselsdag = date("d.m.Y", strtotime("02-02-2000"));
$dagensDato = date("d.m.Y");
$differanse = date_diff(date_create($dagensDato), date_create($fodselsdag));

//Bruker format for å omdanne en int verdi til dataformatet vi ønsker
$dagerTotalt = (int) $differanse->format("%a");
$antallAar = (int) $differanse->format("%Y");
$antallDager = $dagerTotalt % 365;
//Modulo operatoren for å finne antall dager igjen etter å ha delt på 365, som altså er alle dagene som forsvinner når vi har trukket fra alle hele år.

echo $antallAar . " år" ." og " . $antallDager . " dager";   

?>


</body>
</html>

