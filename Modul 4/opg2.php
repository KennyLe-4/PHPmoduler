<?php 

function vaskingAvtagger($var)
{
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}



if(isset($_REQUEST['registrer']))
{
  $fornavn = vaskingAvtagger($_REQUEST['fnavn']);
  $etternavn = vaskingAvtagger($_REQUEST['enavn']);



   /* echo "Følgende informasjon er hentet fra skjema: <br><br>";
    echo "Navn: " .$_REQUEST['fnavn'] . " " .$_REQUEST['enavn'] . "<br>";
    echo "E-post: " .$_REQUEST['epost'] . "<br>";
    echo "Tlf: " . $_REQUEST['tlf'] . "<br>";  
    echo "F.dato: " . $_REQUEST['fdato'] . "<br>"; 
*/
    
    foreach($_REQUEST as $key => $value)
    {
        echo $key . ": "  . $value . "<br>";
}

$skjema = array(
  'Fornavn' => $_REQUEST['fnavn'], 
  'Etternavn' => $_REQUEST['enavn'], 
  'E-post' => $_REQUEST['epost'], 
  'Telefon' => $_REQUEST['tlf'],
  'Fødelsdato' => $_REQUEST['fdato']
);

foreach($skjema as $data => $verdi){
  echo $verdi . "<br>";
}


?>

<html>
  <head>
    <title>Registrering av bruker</title>
    <h1>Registrering av bruker</h1>
  </head>
<body>
<pre>
<form method="post" action="">
  Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  E-post: <input type="email" name="epost" placeholder="E-post" required><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" required><br>
  Fødselsdato: <input type="date" name="fdato" value="" required><br>
  <input type="submit" name="registrer" value="Registrér">
</form>
</pre>
</body>
</html>