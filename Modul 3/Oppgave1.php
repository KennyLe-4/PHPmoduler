<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

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
