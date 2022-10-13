<?php

$rice = 1;
$spell_out = new NumberFormatter("no_NO", NumberFormatter::SPELLOUT);

    for($square=1; $square<=64; $square++){
        
        if($rice<1000000000){
            echo "I rute $square er det " . number_format($rice,0,',',' ') . " riskorn.<br>";
        }
        else{
            echo "Det er " . $spell_out->format($rice) . " riskorn i rute $square.<br>";
        }
        $rice *= 2;
    }
?>

