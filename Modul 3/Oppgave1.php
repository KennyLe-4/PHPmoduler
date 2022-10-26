<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!--  Lag et lite script som definerer to variabler: $alder og $navn. Bruk en if-setning for å skrive ut «navn 
er alder og dermed [ikke] myndig» basert på om personen er under eller  over 18 år. -->

<?php
$age = 16;
$name = "Kenny";
// if setning som sjekker om $age er over 18.
if ($age >= 18)
{
    echo $name . " er " . $age . " år." . " Det vil si at han er myndig";
}

// if setning sjekker om $age er lik eller under 18 år.
elseif($age < 18) 
{
    echo "Du er ikke myndig";
}

?>  
</body>
</html>
