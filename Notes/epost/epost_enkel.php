<?php 
$til = "peter@box.no";
$emne = "En liten hilsen";
$melding = "Dette er en e-post";
$fra = "spam@box.no";
$mhode = "From: " . $fra . "\r\n" .
"Reply-To: spam@box.no " . "\r\n" .
"X-Mailer: PHP/" . phpversion(); // Ikke ferdig 
mail($til, $emne, $melding, $fra, $mhode);

?> 