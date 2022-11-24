<?php 
/*Oppgave 2: loggfunksjon 
//Lag en liten loggfunksjon som skriver hendelser til  slutten av en fil.  Lag et script som henter de ti siste 
//hendelsene i loggfilen og skriver dem ut på skjermen.  
*/
$dir = "./Files/";
$filename = "m9.txt";

// Sjekker om fil eller katalog eksiterer 
if(file_exists("Files")) {
    if(is_file("Files")) {
        echo "Dette er en fil";
    } elseif(is_dir("Files")) {
        echo "Dette er en filkatalog";
    } else {
        echo "Filen/katalogen eksisterer ikke.";
    }
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