<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 1</title>
</head>
<body>
<h1>Oppgave 1</h1>
<p>
    Den beste fotballspilleren i verden er:
    
    <?php
    
    $etternavn = "rOnaLdo";

    // Use function ucfirst to make the first string big letter and the rest to lowercase.  
    echo ucfirst (strtolower($etternavn)) . "<br><br>"; 

    // Function "strlen" counts how many "strings" it is.   
    echo "Etternavnet til Ronaldo inneholder: " . strlen($etternavn) . " bokstaver";

    ?>

</p>

</body>
</html>