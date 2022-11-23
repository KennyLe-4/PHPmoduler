<?php 
// Give key '17' on Sindre.
$deltakere = array('Kenny', 'Johan', 'Peter', 17 => 'Sindre');
print_r($deltakere);

// Adds Hallgeir in the array
$deltakere [] = 'Hallgeir';
echo "<br>"; 
print_r($deltakere);

// Prints out "Hei Sindre". Because Sindre have the key 17. 
echo "Hei " . $deltakere[17]; 
?>