<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php 
/*Oppgave 2: loggfunksjon 
//Lag en liten loggfunksjon som skriver hendelser til  slutten av en fil.  Lag et script som henter de ti siste 
//hendelsene i loggfilen og skriver dem ut på skjermen.  
*/
$dir = "./Files/";
$filename = "m9.txt";


if (isset($_REQUEST['Send logg'])) {
    /* Filnavn, og katalog */
    $dir = "files/";
    $filename = "m9.txt";

    /* Ser om  katalogen finnes*/
    if (!file_exists($dir)) {
        if (!mkdir($dir, 0777, true))
            die("Cannot create directory..." . $dir);
    }

// Hva skal vi gjøre med filen?
$fh = fopen($dir . $filename, "a+"); // fh = file handle or "pointer" // a+ = les/tilføye. Den bevarer filinnholdet ved å skrive på slutten av filen. 

/* Hva skrives inn i selve filen.*/
$txt  = "Data was written to file: " . date('d.m.Y k\l. H:i') . " \r\n";
$txt .= "Filename: " . $filename . " \r\n";

/* Hva skrives ut på skjermen */
if($r = fwrite($fh, $txt))
    echo $r . " bytes were written to file " . $filename . ".";
else
    echo "An error occured.";

fclose($fh);

?>

<form method="POST" action="">
    <p><button type="submit" name="trykk"> Send til logg</button>
</form>
</body>
</html>