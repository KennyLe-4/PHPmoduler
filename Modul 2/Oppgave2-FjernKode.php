<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<h1>Oppgave 2</h1>

<body>

    <?php
$etternavn = "<p><h1>Ronaldo</h1></p>"; 

    // The function "strip_tags" removes potensial code from HTML og PHP tags. 
    echo strip_tags($etternavn) ."<br><br>";
   
    echo "Funksjonen \"strip_tags\" ble brukt for å utelukke HTML taggen";
    
    ?>

</body>
</html>

