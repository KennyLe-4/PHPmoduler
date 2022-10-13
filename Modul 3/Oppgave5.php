<?php
    $ris = 1;

        for($rute=1; $rute<=64; $rute++){

            $trillion = floatval($ris / 1000000000000000000);
            $trillion = number_format($trillion, 0, ",", "");
            $billiard =  floatval($ris % 1000000000000000000 / 1000000000000000);
            $billion = floatval($ris % 1000000000000000 / 1000000000000);
            $milliard = floatval($ris % 1000000000000 / 1000000000);
            $million = floatval($ris % 1000000000 / 1000000);
            $tusen = floatval($ris % 1000000 / 1000);
            $hundre = floatval($ris % 1000 / 100);
            $rester = floatval($ris % 100);
            

            if($ris<1000000000) {
                echo "I rute $rute er det " . $ris . " riskorn.<br>";
                }
            elseif($ris<1000000000000) {
                echo "I rute $rute er det $milliard milliarder, $million millioner $tusen tusen, $hundre hundre og $rester riskorn <br>";
            }
            elseif($ris<1000000000000000) {
                echo "I rute $rute er det $billion billioner, $milliard milliarder, $million millioner $tusen tusen, $hundre hundre og $rester riskorn <br>";
            }
            elseif($ris<1000000000000000000) {
                echo "I rute $rute er det $billiard billiarder, $billion billioner, $milliard milliarder, $million millioner $tusen tusen, $hundre hundre og $rester riskorn <br>";
            }
            else {
                echo "I rute ($rute) er det $trillion trillioner, $billiard billiarder, $billion billioner, $milliard milliarder, $million millioner $tusen tusen, $hundre hundre og $rester riskorn <br>";
                }
            $ris *= 2;
    }
?>