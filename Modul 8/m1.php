<?php

/* Prøvd å logge inn? */

if (isset($_POST['logginn'])) {

    require_once("db.inc.php");

    $sql = "SELECT ID, brukernavn, fnavn, enavn, passord FROM medlemmer WHERE brukernavn = :brukernavn";
    $sp = $pdo->prepare($sql);
    $sp->bindParam(':brukernavn', $brukernavn, PDO::PARAM_STR);
    $brukernavn = $_POST['brukernavn'];

    try {
        $sp->execute();
    } catch (PDOException $e) {
        echo $e->getMessage() . "<br>";
    }

    $medlemmer = $sp->fetch(PDO::FETCH_OBJ);

    //$input = 'test123';
    //echo password_hash('test123', PASSWORD_DEFAULT);
    //$hashedPwdInDb = password_hash('test123', PASSWORD_DEFAULT);


    if ($medlemmer) {
        if (password_verify($_POST['passord'], $medlemmer->passord)) {
            session_start();

            $_SESSION['brukernavn'] = $medlemmer->brukernavn;
            $_SESSION['fnavn'] = $medlemmer->fnavn;
            $_SESSION['enavn'] = $medlemmer->enavn;
            $_SESSION['ID'] = $medlemmer->ID;

            header("Location: Velkommen.php"); // Liten test på hvordan det kan se ut. 
        } else {
            echo "Feil passord";
        }
    } else {
        echo "Feil brukernavn";
    }
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
    <!-- html form to log in medlemmer -->
    <form action="" method="post">
        <label for="brukernavn">Brukernavn:</label>
        <input type="text" name="brukernavn" id="brukernavn" required>
        <label for="passord">Passord:</label>
        <input type="password" name="passord" id="passord" required>
        <input type="submit" name="logginn" value="Logg inn">
    </form>
</body>

</html>
	
