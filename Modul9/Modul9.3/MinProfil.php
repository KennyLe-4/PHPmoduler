<?php
    session_start();

    $id = $_SESSION["ID"];

   

    if(isset($_POST["upload-file"])) { //Hvis bruker trykker på last opp knappen
        $filNavn = $_FILES["profilbilde"]['name'];
        $filTmpNavn = $_FILES['profilbilde']['tmp_name'];
        $filType = $_FILES["profilbilde"]['type'];
        $filStr = $_FILES["profilbilde"]['size'];
        $filFeil = $_FILES["profilbilde"]['error'];

        $filtype = explode('.', $filNavn); //Deler opp filnavn ved punktum
        $akseptertFiltype = strtolower(end($filtype)); //JPG eller PNG
    
        $tillat = array('jpg', 'png'); //Plasserer tillatte filtyper i en matrise

        $riktigFormat = False;
    
        if (in_array($akseptertFiltype, $tillat)){ //Filtype
            if ($filFeil === 0){ //Andre feil
                if ($filStr < 2000000){ //Hvis fil er mindre enn 2MB (skrevet i bytes)
                    $riktigFormat = True;
                }
                else {
                    echo "Filen er for stor";
                }
            }
            else {
                echo "Feil med filen";
            }
        }
        else {
            echo "Ugyldig filtype";
        }

        if($riktigFormat){ //Hvis riktig filtype
            $nyttNavn = $id; //Tilegner variabelen "$nyttNavn" verdien i "$id"
            $nyttNavn .= "." . $akseptertFiltype; //Filnavn skal nå være bruker/sessionID
    
            $mappeSti = "./Files" . $nyttNavn;
    
            $mappeRef = opendir('./Files'); //Mappe åpnes
            while($neste = readdir($mappeRef)){ //Sjekker filer i katalog
                
                //Fjerner gammelt bilde
                if (($id . ".jpg") == $neste)
                { unlink('lastetopp/' . $neste);}
                if (($id . ".png") == $neste)
                { unlink('lastetopp/' . $neste);}
            }
    
            //Flytter nytt til katalog
            move_uploaded_file($filTmpNavn, $mappeSti);
        }
    }
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>M9 - Last opp fil</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
        <p>
            <label for="profilbilde">Velg bilde</label>
            <input name="profilbilde" type="file">
        </p>
        <p><button type="submit" name="upload-file" value="upload">Last opp</button></p>
    </form>    
    <?php 
    $mappe = "./Files";     //Henviser til mappe

    $mappeRef = opendir($mappe);        //Mappe åpnes
    while($neste = readdir($mappeRef)){ //Sjekker filer i katalog
            
        //Printer kun fil med riktig navn
        if (($id . ".jpg") == $neste)
        {echo '<img src="./Files' . $neste . 
            '" alt="Profilbilde" style="width:125px;height:125px;">';
        }
        if (($id . ".") == $neste)
        {echo '<img src="./Files' . $neste . 
            '" alt="Profilbilde" style="width:125px;height:125px;">';
        }
        if (($id . ".png") == $neste)
        {echo '<img src="./Files' . $neste . 
            '" alt="Profilbilde" style="width:125px;height:125px;">';
        }
    }
    ?>
</body>
</html>