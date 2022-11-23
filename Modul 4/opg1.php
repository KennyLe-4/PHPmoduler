<?php 
/* 
Lag et lite script som oppretter en matrise med heltall som indeks. Matrisen skal ha indeksene 0, 3, 5, 
7, 8 og 15. Skriv deretter ut innholdet i matrisen ved hjelp av funksjonen print_r() og ved å bruke en 
løkke (som du lærte i forrige modul). 
*/

// Made an array to store the index 0, 3, 5, 7, 8 og 15 with different names as values 

$array = array(
    0 => 'Kenny',
    3 => 'Ole',
    5 => 'Petter',
    7 => 'Dennis',
    8 => 'Kamila',
    15 => 'Hanne',
    );

//$flipped = array_flip($array);
//print_r($flipped); 
echo "<pre>";
print_r($array);
echo "</pre>";
echo "<br><br>";
echo "Matrisen inneholder disse navnene: <br>";

//foreach loop that prints out the array
foreach($array as $key => $value) 
{
    echo $value . "<br>";
}

?>


