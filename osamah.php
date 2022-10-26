<?php
    $tekst = "Ikke hyggelig at du leser mitt hemmelige passord";

    function krypter($tekstStreng) {
        $krypterSmå = strtr($tekstStreng, "abcdefghijklmnopqrstuvwxyz", "tuvhijkcwxyzldefgsmnopqrab");
        //$krypterStore = str_replace("ABCDEFGHIJKLMNOPQRSTUVWXYZ", "TUVHIJKCWXYZLDEFGSMNOPQRAB", $tekstStreng);
        echo $krypterSmå;
        //echo $krypterStore;
    }

    function dekrypter($tekstStreng) {
        $dekrypter = strtr($tekstStreng, "tuvhijkcwxyzldefgsmnopqrab", "tuvhijkcwxyzldefgsmnopqrab");
        echo $dekrypter;
    }

    echo "Den teksten du vil kryptere er: " . $tekst . "<br>";
    echo "Den krypterte versjon til den ser sånn ut: ";
    krypter($tekst);

    echo "<br>";

    echo "Den dekrypterte versjon vil da se sånn ut: "; 
    dekrypter($tekst);

    
?>
