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

    if (isset($_REQUEST['logg'])) {
        /* Filnavn, og katalog */
        $dir = "files/";
        $filename = "m9.txt";

        /* Ser om  katalogen finnes, hvis ikke lager vi en*/
        if (!file_exists($dir)) {
            if (!mkdir($dir, 0777, true))
                die("Cannot create directory..." . $dir);
        }

        /* Forteller hva vi skal gjøre med fila */
        /* a+ forteller at vi ønsker å skrive og lese. Den bevarer filinnholdet ved å skrive på slutten av filen. */
        $fh = fopen($dir . $filename, "a+");

        /* Hva som skrives inn i selve filen.*/
        $txt  = "Data was written to file: " . date('d.m.Y k\l. H:i') . " \r\n";
        $txt .= "Filename: " . $filename . " \r\n";

        /* Hva skrives ut på skjermen */
        if ($r = fwrite($fh, $txt))
            echo $r . " bytes were written to file " . $filename . ".";
        else
            echo "An error occured.";

        fclose($fh);
    } else {
        echo "";
    }
    ?>
    <form method="POST" action="" >
        <p><button type="submit" name="logg">Send til logg</button></p>
    </form>
</body>

</html>