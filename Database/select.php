<?php
require_once ('../Include/db.inc.php');

$sql = "SELECT * 
        FROM users 
        WHERE city = :city";
$q = $pdo->prepare($sql);
$q->bindParam(':city', $city, PDO::PARAM_STR);

$city = "Tulleby";

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//$q->debugDumpParams();

$users = $q->fetchAll(PDO::FETCH_OBJ);

if($q->rowCount() > 0) {
    foreach($users as $user) {
        echo $user->UID . " // ";
        echo $user->firstname . " // ";
        echo $user->lastname . " // ";
        echo $user->email . " // ";
        echo $user->zip . " // ";
        echo $user->city . " // ";
        echo $user->email . "<br>";
    }
} else {
    echo "The query resulted in an empty result set.";
}

?>