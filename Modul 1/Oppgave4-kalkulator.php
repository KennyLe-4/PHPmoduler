<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>



<!-- Kalkulator -->
<!-- Funksjonen "abs" blir brukt for å returnere et positivt tall -->

<h1>Nedenfor ser du summen, differansen og gjennomsnittet av ulike tall  </h1>
<?php
$tall1 = 15;
$tall2 = 19;
$sum = $tall1 + $tall2; 
echo "Summen av 15 + 19 blir " . abs ($sum); 
?>

<br>
<p>
<?php
$sum = $tall1 - $tall2; 
echo "Differansen mellom 15 - 19  blir " . abs($sum);   
?>
. Ved hjelp av funksjonen "abs" blir resultatet vårt positiv.
</p>

<br>

<?php
$sum = ($tall1 + $tall2) / 2; 
echo "Gjennomsnittet  mellom 15 og 19 blir " . abs($sum);
?>








</body>
</html>