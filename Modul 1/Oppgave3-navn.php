<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
table, th, td {
  border:1px solid black;
}
</style>
</head>
<body>


<?php
//Variabler 
    $navn = "Kenny";
    $alder = 22; 
    $by = "Sandefjord"
?> 

<!-- Lister navn og alder ved bruk av PHP variabler -->

<h3>Nedenfor lister jeg en tabell med navn og alder</h3>

<table style="width:auto"> 
  <tr>
    <th>Navn</th>
    <th>Alder</tr>
  </tr>
  <tr>
  <td><?php echo $navn ?></td>
  <td><?php echo $alder ?></td>
  </tr>
 

</table>
<br>
<h3>Nummert liste</h3>
<ol type="1">
  <li><?php echo $navn ?></li>
  <li><?php echo $alder ?></li>
</ol>
<br>
<h3>Ulistet tabell</h3>
<ul>
    <li><?php echo $navn ?></li></li>
    <li><?php echo $alder ?></li></li>
</ul>
<br>
<h3>Setning med navn og alder, hentet fra variabler</h3>
<p>Mitt navn er <?php echo $navn?> og er <?php echo $alder ?> gammel </p>