<?php
/*
Lag et script som simulerer en endring av en brukeroppføring. For å gjøre dette må du lage en matrise 
med  den  nødvendige  informasjonen  i  begynnelsen. Deretter  skal  skjemaet  vise  den  eksisterende 
informasjonen om brukeren i skjemaet. Dersom skjemaet sendes, skal informasjonen lagres i matrisen. 
Om du ønsker å gjøre løsningen ekstra elegant kan du først sjekke om det er  gjort noen endringer før 
informasjonen skrives til  matrisen. Brukeren må  få  beskjed om  at  brukeroppføringen er endret.  De 
samme reglene  for  feilmelding  som i  skjemaet  i  oppgave 4  gjelder  også her.   Lag  en  video  hvor du 
beskriver og demonstrerer koden. 
*/

// Hardcoded some values in the array 
    $bruker = array(
        "fnavn" => "Kenny",
        "enavn" => "Le",
        "e-post" => "Kenny@gmail.com",
        "Tlf" => "40404040",
        "Fdato" => date("2000-02-02")
    );
?>

<html>
    <head>
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,100&display=swap" rel="stylesheet">
        <title>Endring av brukerinformasjon</title>
    </head>
    <body>
        <div class = "center"><pre>
            <form method="post" action="">
                <h2>Her endrer du informasjonen din</h2>
                Fornavn*: <input type="text" name="fnavn" value="<?php if (array_key_exists("fnavn", $_REQUEST)){echo $_REQUEST["fnavn"];}else{echo $bruker["fnavn"];}?>" placeholder="Fornavn" required="required"><br> 
                Etternavn*: <input type="text" name="enavn" value="<?php if (array_key_exists("enavn", $_REQUEST)){echo $_REQUEST["enavn"];}else{echo $bruker["enavn"];}?>" placeholder="Etternavn" required="required"><br>
                E-post*: <input type="email" name="epost" value="<?php if (array_key_exists("epost", $_REQUEST)){echo $_REQUEST["epost"];}else{echo $bruker["e-post"];}?>" placeholder="Epost" required="required"><br>
                Telefon*: <input type="tel" name="tlf" value="<?php if (array_key_exists("tlf", $_REQUEST)){echo $_REQUEST["tlf"];}else{echo $bruker["Tlf"];}?>" placeholder="Mobilnummer" pattern="[0-9]{8}" required="required"><br>
                Fødselsdato*: <input type="date" name="fdato" value="<?php if (array_key_exists("fdato", $_REQUEST)){echo $_REQUEST["fdato"];}else{echo $bruker["Fdato"];}?>" required="required"><br>
                <strong>Felt med * er nødvendig å fylle ut.</strong><br>
                <input type="submit" name="endre" value="Endre informasjon">
            </form>
        </pre>
        </div>
    </body>
</html>

<?php
// If pressed, then the following changes will be displayed
    if(isset($_REQUEST["endre"])) {
        echo "Informasjonen din ble endret: <br>";
        echo "Fornavn: " . $_REQUEST["fnavn"] . "<br>";
        echo "Etternavn: " . $_REQUEST["enavn"] . "<br>";
        echo "E-post: " . $_REQUEST["epost"] . "<br>";
        echo "Mobilnummer: " . $_REQUEST["tlf"] . "<br>";
        echo "Fødselsdato: " . $_REQUEST["fdato"] . "<br>";
    }
// This is the current information in the array 
    else {
        echo "Dette er din informasjon. <br>";
        echo "Fornavn: " . $bruker["fnavn"] . "<br>";
        echo "Etternavn: " . $bruker["enavn"] . "<br>";
        echo "E-post: " . $bruker["e-post"] . "<br>";
        echo "Mobilnummer: " . $bruker["Tlf"] . "<br>";
        echo "Fødselsdato: " . $bruker["Fdato"] . "<br>";
    }
    
?>