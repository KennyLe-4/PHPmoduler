
<?php
// Oving 4 - kap 4 
// Lag en funksjon som sjekker om en tekststreng er et palindrom. 
//Et palindrom er et ord, uttrykk eller tall som gir samme resultat enten det leses fra høyre eller fra venstre.



$str = "Hannah";
$strrev = strrev($str);
echo "<strong>" . $str . "</strong> blir baklengs <strong>" . $strrev . "</strong><br>";

// Vi bryr oss ikke om store bokstaver
$str2 = strtolower($str);
$strrev2 = strrev($str2);

if($str2 == $strrev2)
    echo "<strong>" . $str . "</strong> er dermed et palindrom";
else
    echo "<strong>" . $str . "</strong> er ikke et palindrom";
?>
