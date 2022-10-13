<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<table>
<thead>
<tr>
		
		<th>År</th>
		<th>Saldo + 10% rente</th>
</tr>
</thead>
<tbody>
<?php 

$i=0; 
$saldo = 2400;
while($i++ <= 9) { ?>
<tr>
		<td><?php echo $i; ?></td>
		<td><?= $saldo *= 1.1?></td>

</tr>
<?php } // slutt while-løkke ?>
</tbody>
</table>

</body>
</html>
