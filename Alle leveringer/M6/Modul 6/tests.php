<?php 

include './include/user.inc.php'; // include class user

/* Opg 3.
*  Opprett to objekter basert på Student-klassen og kjør en metode på denne klassen 
*  som  viser  navn,  brukernavn  og  registreringsdato  for  de  to  studentene.  Slett  deretter  begge  Student-
*  objektene og skriv ut begge brukernavnene til de slettede studentene (ved å bruke matrisen). 
*
* Her har jeg brukt konstruktoren for å automatisere 
*/


echo "Student number 1: " . "<br><br>"; // Display student nr 1, and the properties following.

$s1 = new Student('Kenny', 'Le', 'Computer science'); // Make object of the class "Student". 

unset($s1); // Delete the object 

echo "<br><br>";


echo "Student number 2: " . "<br><br>"; // Display student nr 1, and the properties following.

$s2 = new Student('Kamila', 'Nachajova', 'English'); // Make object of the class "Student"

unset($s2); // Delete the object 













?>