
<?php
// for-loop that counts up to 9.
/*Lag et script som teller fra 0 til 9 ved hjelp av en for-løkke og presenterer tallet på skjermen. Du må også 
regne ut summen av tallene 0-9. Når telleren har kommet til 9, skal en beskjed skrives på skjermen på 
neste linje. Den kan se noe slik ut: «Ferdig å telle!  Summen av tallene ble  [sum]». Hint: Bruk <br> på 
slutten av HTML-strengen (da tvinger du frem linjeskift for hver iterasjon). */


for($i=1; $i <=9; $i++)

{
    $sum += $i;
    echo $i . "<br>";
    
}

echo "Ferdig å telle!" . "<br>";
echo "Summen av alle tallene er: " . ($sum);
?>

