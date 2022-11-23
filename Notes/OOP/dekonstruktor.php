<?php
class Bruker {
public static $ant_brukere = 0;
public function __construct() {
    self::$ant_brukere++; // $ant_brukere = $ant_brukere + 1; 
    }
public function __destruct() {
self::$ant_brukere--;
echo "Antall brukere er redusert til " .
self::$ant_brukere . "<br>";
}
}


$b = new Bruker;
echo Bruker::$ant_brukere;

?> 

