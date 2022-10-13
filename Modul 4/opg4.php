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
// Lag en matrise med indeks fra 0-9. Du bestemmer selv innholdet i matrisen
$cars = ['Audi', 'Volvo', 'Lamborghini', 'Tesla', 'BMW', 'Toyota', 'Mercedes', 'Honda', 'Mazda', 'Bugatti'];

echo "Dette er en liste over populære biler: " . "<br>";

foreach($cars as $key => $value)
{
    echo $value . "<br>"; 
}
echo "<pre>";
print_r($cars);
echo "</pre>";

echo "<br><br>";

// Lag deretter et script som endrer  alle  verdiene  i  matrisen  til  noe  annet som  du  selv  bestemmer
$cars = [0 => 'pineapple', 1 => 'cherry', 2 => 'apple', 3 => 'pear', 4 => 'lime', 5 => 'banana', 6 => 'mango', 7 => 'watermelon', 8 => 'strawberry', 9 => 'peach'];  

$cars = array_map('ucfirst', $cars);

echo "Dette er den samme listen, men med frukt: " . "<br>";

foreach($cars as $key => $value)
{
    echo $value . "<br>"; 
}

echo "<pre>";
print_r($cars);
echo "</pre>";


echo "<br><br>";

//Deretter  skal  du  endre  alle indeksene i matrisen slik at hver indeks blir 10 høyere (f.eks. indeks 0 skal nå bli indeks 10 osv.).  Hint: sjekk ut innebygde funksjoner i PHP for dette. 
//Funksjonen "range" for å endre indeks i elementene i array.
echo "Endret alle indeksene i matrisen slik at hver indeks blir 10 høyere <br>"; 

$cars = range(10,19, 1);
echo "<pre>";
print_r($cars);
echo "</pre>";






?> 
</body>
</html>
<?php 

