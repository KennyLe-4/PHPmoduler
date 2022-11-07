<?php 


if(isset($_POST["submit"]))
{
    // Grabbing the data 

    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

// Instanstiate SignuoContr class
include "./HybelProjekt/classes/dbh.classes.php";
include "./HybelProjekt/classes/signup.classes.php";
include "./HybelProjekt/classes/signup.contr.classes.php";

$signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);



// Running error handlers and user signup
$signup->signupUser(); 

// Going to back to front page
    
}