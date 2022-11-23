<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Passordgenerator</h1>

<?php

// if statement som kjører koden nedenfor dersom knappen "generate" blir trykket på. 
if (isset($_POST['generate'])) 
{

$storBokstav = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$litenBokstav = "abcdefghijklmnopqrstuvwxyz";
$numbers = "123456789";


// Used the function substr and str shuffle
$generere_stor_Bokstav = substr(str_shuffle($storBokstav), 0,2);
$generere_liten_Bokstav = substr(str_shuffle($litenBokstav), 0,2);
$generere_numbers = substr(str_shuffle($numbers), 0,4);

// Put the variables togheter 
$mixed = "$generere_stor_Bokstav$generere_liten_Bokstav$generere_numbers";

}

?>
 

<form action="Oppgave5-PassordGenerator.php" method="POST">
    <input type="submit" name="generate" value="Trykk her"><br><br>
    <?php echo $mixed;?>
</form>


</body>
</html>