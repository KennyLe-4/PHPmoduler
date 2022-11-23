<?php
// Include this file 
include 'functions.php';
//inkluderer filen functions.php, for å benytte funksjonen gjennomsnitt og standaravvik som er laget der.

//to isset funksjoner, bestemmer hvilken av regneoperasjonen som skal utføres. Hvilken knapp er trykt?
if(isset($_REQUEST['gjennomsnitt'])){
    echo "The average of these numbers ".$_REQUEST['tall1'].", ".$_REQUEST['tall2'].", ".$_REQUEST['tall3'].", ".$_REQUEST['tall4']." are: " .
    averageOfSum($_REQUEST['tall1'],$_REQUEST['tall2'],$_REQUEST['tall3'],$_REQUEST['tall4'],);

}elseif(isset($_REQUEST['standard'])){
    echo "The standard deviation of these numbers ".$_REQUEST['tall1'].", ".$_REQUEST['tall2'].", ".$_REQUEST['tall3'].", ".$_REQUEST['tall4']." are: ".
    standardDeviation($_REQUEST['tall1'],$_REQUEST['tall2'],$_REQUEST['tall3'],$_REQUEST['tall4'],);
    
}else {
    echo "Her kan du fylle inn tall og velge mellom gjennomsnitt og standardavvik!";
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <form method="post" action="">
      Number 1: <input type="text" name="tall1" placeholder="Number 1" required><br>
      Number 2: <input type="text" name="tall2" placeholder="Number 2" required><br>
      Number 3: <input type="text" name="tall3" placeholder="Number 3" required><br>
      Number 4: <input type="text" name="tall4" placeholder="Number 4" required><br>
      <input type="submit" name="gjennomsnitt" value="Average">
      <input type="submit" name="standard" value="Standard deviation">
</form>

    </pre>
</body>
</html>
