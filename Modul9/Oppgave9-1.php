
<!-- Oppgave 1: lese informasjon om filer 
Lag et script som leser alle filene i en katalog. Disse skal listes opp med informasjon om filnavn, filtype, 
filstørrelse, tidspunkt for siste filendring og hvorvidt filene er kjørbare, lesbare og skrivbare. Dette skal 
listes opp tabulert (altså i tabell). -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M9 read file</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Filename</th>
            <th>File type</th>
            <th>File size</th>
            <th>Tid for siste modifikasjon</th>
            <th>Tid for siste filendring</th>
            <th>Leselige</th>
            <th>Skrivelig</th>
            <th>Kjørbar</th>
        </tr>

        <?php
        // Sjekk om en fil eller katalog eksiterer
        if(file_exists("Files")) {
            if(is_file("Files")) {
                echo "Dette er en fil";
            } elseif(is_dir("Files")) {
                echo "Dette er en filkatalog";
            } else {
                echo "Filen/katalogen eksisterer ikke.";
            }
        }

        echo "<br>";
        
        // Vi bruker realpath()-funksjonen for å hente den absolutte filstien til en fil. 
        if(file_exists("Files")) {
            echo "Filstien er:" . realpath("Files");
        } else {
            echo "Filen/katalogen eksisterer ikke." . "<br>";
        }

    // “Vi kan få detaljert informasjon om en bestemt fil ved å bruke stat()-funksjonen. Funksjonen returnerer informasjonen i en assosiativ matrise“
    /*
    if(file_exists("Files")) { 
        print_r(stat("Files")); 
    } else { 
        echo "Filen/katalogen eksisterer ikke."; 
    } 
    */
    echo "<br>";
    // Sjekker filstørrelsen 
    if(file_exists("Files")){
        echo "Filen er på " . filesize("Files") . " bytes.";
    } else {
        echo "Filen/katalogen eksisterer ikke";
    }
            $dir = "./Files/";
            $fh = opendir($dir); // fh = file handle or "pointer"

            /* Iterate file directory */
            while($file = readdir($fh)) 
            {
                echo "<tr>";
                echo "<td><a href=\"" . $dir . $file . "\">" . $file . "</a></td>"; // File name 
                echo "<td>" . filetype($dir . $file) . "</td>"; // File type
                echo "<td>" . filesize($dir . $file) . "</td>"; // File size
                echo "<td>" . date("d.m.Y \k\l. H:i", filemtime($dir . $file)) . "</td>"; // Time for when the file got modifed
                echo "<td>" . date("d.m.Y \k\l. H:i", filectime($dir . $file)) . "</td>"; // Time for when the file was made 
                echo "<td>" . is_readable($dir . $file) . "</td>"; // Check if file is readable 
                echo "<td>" . is_writeable($dir . $file) . "</td>"; // Check if wile is writeable
                echo "<td>" . is_executable($dir . $file) . "</td>"; // Check if file is executable 
                echo "</tr>";

                echo "</tr>";
            }
            
            closedir($fh);
        ?>

    </table>
</body>

</html>
