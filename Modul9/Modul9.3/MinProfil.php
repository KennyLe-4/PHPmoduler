<html>
    <head>
    <h2>
        Endre profilbilde som brukeren 
        <?php echo $fornavn . " " . $etternavn; ?><br>
    </h2>
    </head>

    <body>

        <?php 
        $mappe = "./mappenavneditt/";     //Henviser til mappe

        $mappeRef = opendir($mappe);        //Mappe åpnes
        while($neste = readdir($mappeRef)){ //Sjekker filer i katalog
            
            //Printer kun fil med riktig navn
            if (($id . ".jpg") == $neste)
            {echo '<img src="mappenavneditt/' . $neste . 
                '" alt="Profilbilde" style="width:125px;height:125px;">';
            }
            if (($id . ".png") == $neste)
            {echo '<img src="mappenavneditt/' . $neste . 
                '" alt="Profilbilde" style="width:125px;height:125px;">';
            }

        }
        
        ?>

        <br>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"
        method="post"
        enctype="multipart/form-data">

        <input type="file" name="profilbilde">

        <button type="submit" name="contact-send"
        value="upload">Last Opp</button>

        </form>
    </body>
</html>
<?php
if (isset($_POST['contact-send'])){ //Bildet er sendt

    $id = $_SESSION["id"];

    //$fil = $_FILES["profilbilde"];
    $filNavn = $_FILES["profilbilde"]['name'];
    $filTmpNavn = $_FILES['profilbilde']['tmp_name'];
    $filType = $_FILES["profilbilde"]['type'];
    $filStr = $_FILES["profilbilde"]['size'];
    $filFeil = $_FILES["profilbilde"]['error'];

    $fileExt = explode('.', $filNavn);
    $fileActualExt = strtolower(end($fileExt)); //jpg eller png

    $tillat = array('jpg', 'png');

    $riktigFormat = False;

    if (in_array($fileActualExt, $tillat)){  //Filtype
        if ($filFeil === 0){                 //Evt andre feil
            if ($filStr < 2000000){          //Filstr i bytes
                $riktigFormat = True;
            }
            else {echo "Filen er for stor";}
        }
        else{echo "Feil med filen";}
    }
    else {echo "Ugyldig filtype";}


    if($riktigFormat){
        $nyttNavn = $_SESSION["id"];
        $nyttNavn .= "." . $fileActualExt;

        $mappePath = "mappenavnetditt/" . $nyttNavn;

        $mappeRef = opendir('mappenavneditt/');      //Mappe åpnes
        while($neste = readdir($mappeRef)){ //Sjekker filer i katalog
            
            //Fjerner gammelt bilde
            if (($id . ".jpg") == $neste)
            { unlink('mappenavneditt/' . $neste);}
            if (($id . ".png") == $neste)
            { unlink('mappenavneditt/' . $neste);}

        }

        //Flytter nytt til katalog
        move_uploaded_file($filTmpNavn, $mappePath);

    }

}
?>

