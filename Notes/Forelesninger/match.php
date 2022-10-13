<?php
//The match expression branches evaluation based on an identity check of a value. 
//Similarly to a switch statement, a match expression has a subject expression that is compared against multiple alternatives.

$rolle = "utleier";

$returverdi = match (is_string($rolle)) {
    "utleier", "student" => "Velkommen til siden for utleiere!",
   true => "Velkommen til siden for leietakere!",
    default => "Du må logge inn for å bruke systemet vårt.",
};

var_dump($returverdi);
?>
