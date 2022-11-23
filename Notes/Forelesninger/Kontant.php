<?php
$radius = 5;
define("PI", 3.14159);
$omkrets = 2 * PI * $radius;
$areal = PI * $radius * $radius;
echo "Omkretsen av sirkelen er " . $omkrets . " og arealet av
sirkelen er " . $areal;
?>
<br>
<!-- Brukt heredoc metode for å printe.  -->
<?php
echo <<<SIRKEL
Omkretsen av en sirkel er $omkrets og arealet av $areal.
SIRKEL;

?>