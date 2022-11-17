<?php /* Prøvd å logge inn? */

if(isset($_POST['logginn'])) {

	/* Kobler til database */
	require_once("db.inc.php");

	/* Lager SQL-spørringen struktur */
	$sql = "SELECT ID, fnavn, enavn, passord FROM medlemmer WHERE brukernavn = :brukernavn";

	/* Steg 1: forbereder spørringen */
	$sp = $pdo->prepare($sql);

	/* Steg 2: kobler parametrene våre med SQL-spørringens struktur */
	$sp->bindParam(':brukernavn', $brukernavn, PDO::PARAM_STR);
	$brukernavn = $_POST['logginn']; 
	/* Steg 3: utfører spørringen og henter resultatet */

	try {
		$sp->execute();
	} catch (PDOException $e) {
		echo $e->getMessage() . "<br>";
	}

	/* Hent data om medlemmet */
	$medlemmer = $sp->fetch(PDO::FETCH_OBJ);
  
  echo $medlemmer->brukernavn;

	/* Sjekker om passordet er gyldig */
	if(password_verify($_POST['passord'], $medlemmer->passord)) {
		/* Passordene matcher: videresender brukeren til innsiden av systemet */
		header("Location: Velkommen.php");
		exit();
	} else {
		echo "Brukernavn og/eller passord er ikke riktig";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<section class="vh-100" style="background-color: #FFFFFF;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">


                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">Logo</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                  
                  <form method="post" action="" >

                  <div class="form-outline mb-4">
                    <input name = "brukernavn" type="brukernavn" id="form2Example17" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input name ="passord" type="password" id="form2Example27" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" name ="logginn" type="submit">Login</button>
                  </div>
                  </form>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href=""
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>