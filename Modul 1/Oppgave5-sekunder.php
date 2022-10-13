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

$antall_sekunder = 4400;

$sekunder = $antall_sekunder % 60;
$timer = $antall_sekunder / 60;
$minutter = $timer % 60;
$timer = $timer / 60;
// Gir variable verdier.

echo ("Timer: " . (int)$timer . "<br>");
echo ("Minutter: " . (int)$minutter . "<br>");
echo ("Sekunder:" . (int)$sekunder . "<br>");

?>



</body>
</html>