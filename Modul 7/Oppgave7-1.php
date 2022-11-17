<?php 
require_once ('db.inc.php');
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
<h1>Listing av hybler</h1>
<?php 

$sql = "SELECT * 
        FROM hybler"; 

$q = $pdo->prepare($sql);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//$q->debugDumpParams();

$hybler = $q->fetchAll(PDO::FETCH_OBJ);

echo "<table>";
        echo "<th>Id</th>";
        echo "<th>Månedsleie</th>";
        echo "<th>Areal</th>";
        echo "<th>Antall soverom</th>";
        echo "<th>Sted</th>";

if($q->rowCount() > 0) {
    foreach($hybler as $hybel) {
        echo "<tr>"; 
        echo "<td>" . $hybel->hybel_id . "";
        echo "<td>" . $hybel->mnd_leie . "";
        echo "<td>" . $hybel->areal . "";
        echo "<td>" . $hybel->antall_soverom . "";
        echo "<td>" . $hybel->sted . "";
        echo "</tr>";
    }
} else {
    echo "The query resulted in an empty result set.";
}
echo "</table>";

?>


</body>
</html>