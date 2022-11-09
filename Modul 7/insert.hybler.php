<?php
require_once ('db.inc.php');


$sql = "INSERT INTO hybler
        (mnd_leie, areal, antall_soverom, sted, status) 
        VALUES 
        (:mnd_leie, :areal, :antall_soverom, :sted, :status)"; 

$q = $pdo->prepare($sql);

$q->bindParam(':mnd_leie', $mnd_leie, PDO::PARAM_INT);
$q->bindParam(':areal', $areal, PDO::PARAM_STR);
$q->bindParam(':antall_soverom', $antall_soverom, PDO::PARAM_STR);
$q->bindParam(':sted', $sted, PDO::PARAM_STR);
$q->bindParam(':status', $status, PDO::PARAM_STR);


$mnd_leie = 13000;
$areal = 25;
$antall_soverom = 2;
$sted = "Vestfold";
$status = "1";


try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}

//$q->debugDumpParams();

if($pdo->lastInsertId() > 0) {
    echo "Data inserted into database, identified by UID " . $pdo->lastInsertId() . ".";
} else {
    echo "Data were not inserted into database.";
}

?>