
<?php
// If, ifelse og else funksjoner 

$alder = 13;

if ($alder > 18)
{
    echo "Du er voksen!";
}
elseif($alder >= 13) 
{
    echo "Du er tenåring!";
}
elseif($alder >= 14) 
{
    echo "Du er fjortis!";
}
else 
{
    echo "Du er ikke voksen!";
}

$navn = "Kenny";
if($navn === "Kenny")
{ 
    echo "Velkommen Kenny!";
}


// Sjekker om variabel er av datatypen "number". 
$tall = "no";
if(is_numeric($tall))
{
    echo "Sant";
}
else
{
    echo "Ikke numeric";
}


$tall = "Silje";
$returverdi = isset($tall);

if (is_int($tall) === true)
{
    echo "Yes, this is boolean";
}
else
{
    "No, this is not a boolean"; 
}

