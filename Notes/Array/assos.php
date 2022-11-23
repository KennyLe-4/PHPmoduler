<?php 
$deltakere = array('navn' => 'Kenny'); 

echo $deltakere ['navn'] . "<br>";
print_r($deltakere); 

$deltakere = array(
    // Lager et array inni et annet array 
    'd1' => array (
        'navn' => 'silje', 
        'epost' => 'silje@poeng',
        'poengsum' => 16
    ), 

    'd2' => array(
            'navn' => 'silje', 
            'epost' => 'silje@poeng',
            'poengsum' => 16
    )
        ); 
        
        echo "<pre>";
        print_r($deltakere);
        echo "</pre>";

        // Printer ut "Silje" 
        echo $deltakere['d1']['navn']; 

?>