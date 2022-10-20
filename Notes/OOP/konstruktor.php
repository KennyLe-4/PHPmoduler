<?php 

class Bruker {
public static $ant_brukere = 0;
public function __construct() {
self::$ant_brukere++; // $ant_brukere = $ant_brukere + 1; 
}

}
$b1 = new Bruker;
echo Bruker::$ant_brukere . "<br>";

$b2 = new Bruker;
echo Bruker::$ant_brukere . "<br>";



?>

