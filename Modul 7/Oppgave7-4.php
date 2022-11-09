<?php 
require_once ('db.inc.php');
?>

<?php

    if (isset($_REQUEST['tilgjenglige'])) {

        $sql = "SELECT * 
        FROM hybler WHERE status =1";

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
        echo "<th> </th>";
        echo "<th>Pris</th>";
        echo "<th> </th>";
        echo "<th>Areal</th>";
        echo "<th> </th>";
        echo "<th>Antall soverom</th>";
        echo "<th> </th>";
        echo "<th>Sted</th>";


        if ($q->rowCount() > 0) {
            foreach ($hybler as $hybel) {
                echo "<tr>"; 
                echo "<td>" . $hybel->hybel_id . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->mnd_leie . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->areal . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->antall_soverom . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->sted . " ";
                echo "<th> </th>";
                echo "</tr>";
            }
        } else {
            echo "The query resulted in an empty result set.";
        }


        echo "</table>";
    }
    
    if (isset($_REQUEST['alle'])) {

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
        echo "<th> </th>";
        echo "<th>Pris</th>";
        echo "<th> </th>";
        echo "<th>Areal</th>";
        echo "<th> </th>";
        echo "<th>Antall soverom</th>";
        echo "<th> </th>";
        echo "<th>Sted</th>";


        if ($q->rowCount() > 0) {
            foreach ($hybler as $hybel) {
                echo "<tr>"; 
                echo "<td>" . $hybel->hybel_id . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->mnd_leie . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->areal . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->antall_soverom . "";
                echo "<th> </th>";
                echo "<td>" . $hybel->sted . " ";
                echo "<th> </th>";
                echo "</tr>";
            }
        } else {
            echo "The query resulted in an empty result set.";
        }

        echo "</table>";
    }
    ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="">
        <input type="submit" name="tilgjenglige" value="Tilgjenglige">
        <input type="submit" name="alle" value="Alle">
    </form>
</body>
</html>