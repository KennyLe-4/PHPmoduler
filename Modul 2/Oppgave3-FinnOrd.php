<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Oppgave 3</h1>

    <?php
    $tekst1 = "Thereses familie skulle ha ris til middag";
    $tekst2 = "Hun ville heller ha en is å spise.";
    $tekst1 .= $tekst2; 
   

    echo "Tekst nr. 1: $tekst1" . "<br>"; 
    echo "Tekst nr. 2: $tekst2" . "<br>";

    // Funksjonen "substr_count" teller hvor mange ordet "is" blir gjentatt i variablene $tekst1 og $tekst2. 
   
    echo "Ordet \"is\" blir gjentatt: ";
    echo substr_count($tekst1, "is");
    echo " ganger";
    ?>
    
</body>
</html>