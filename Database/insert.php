<?php
require_once('db.inc.php');

// Mal for spørring
$sql = "INSERT IGNORE INTO users 
        (firstname, lastname, email, cell, zip, city) 
        VALUES 
        (:firstname, :lastname, :email, :cell, :zip, :city)"; 

$q = $pdo->prepare($sql);

$q->bindParam(':firstname', $firstname, PDO::PARAM_STR);
$q->bindParam(':lastname', $lastname, PDO::PARAM_STR);
$q->bindParam(':email', $email, PDO::PARAM_STR);
$q->bindParam(':cell', $cell, PDO::PARAM_STR);
$q->bindParam(':zip', $zip, PDO::PARAM_INT);
$q->bindParam(':city', $city, PDO::PARAM_STR);

$firstname = "Kevin";
$lastname = "Kola";
$email = "syd@uia.no";
$cell = 99887766;
$zip = 4516;
$city = "Lithuan";

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
$q->debugDumpParams();

if($pdo->lastInsertId() > 0) {
    echo "Data inserted into database, identified by UID " . $pdo->lastInsertId() . ".";
} else {
    echo "Data were not inserted into database.";
}

?>