<?php
require_once('db.inc.php');

$sql = "INSERT INTO bruker 
        (fnavn, enavn, epost, tlf, fdate) 
        VALUES 
        (:fnavn, :enavn, :epost, :tlf, :fdate)";

$q = $pdo->prepare($sql);

$q->bindParam(':fnavn', $firstname, PDO::PARAM_STR);
$q->bindParam(':enavn', $lastname, PDO::PARAM_STR);
$q->bindParam(':epost', $epost, PDO::PARAM_STR);
$q->bindParam(':tlf', $telefon, PDO::PARAM_STR);
$q->bindParam(':fdate', $fdato, PDO::PARAM_STR);

if (isset($_REQUEST['registrer'])) {
    $firstname = $_REQUEST['fnavn'];
    $lastname = $_REQUEST['enavn'];
    $epost = $_REQUEST['epost'];
    $telefon = $_REQUEST['tlf'];
    $fdato = $_REQUEST['fdate']; 

    try {
        $q->execute();
    } catch (PDOException $e) {
        echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
    }
    //$q->debugDumpParams();

    //Sjekker om noe er satt inn, returnerer UID.
    if ($pdo->lastInsertId() > 0) {
        echo "Data inserted into database, identified by BID " . $pdo->lastInsertId() . ".";
    } else {
        echo "Data were not inserted into database.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <pre>
    <div class="d-flex justify-content-center">
    <form method="post" action="./index.php">
        <h1>Registering av bruker</h1>
    <div class="form-group">
      Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
      Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
      E-post: <input type="text" name="epost" placeholder="E-post" required><br>
      Telefon: <input type="text" name="tlf" placeholder="Mobilnummer" required><br>
      Fødselsdato: <input type="date" id ="birthdate" name="fdate" placeholder="2001-05-05" required><br>
      <input type="submit" class="btn btn-primary" name="registrer" value="Registrér">
      
      
</select>
      </div>
      </div>
    </form>
</pre>


</body>

</html>