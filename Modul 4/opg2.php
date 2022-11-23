<?php 
/*
Lag et skjema som registrerer en ny bruker i systemet du utvikler. Skjemaet må inneholde all nødvendig 
informasjon om brukeren (f.eks. navn, mobilnr., e-post osv.) og skal gi feilmelding dersom: 
• obligatoriske felt mangler (hvilke felt må vises til brukeren) 
 
Du kan ev. også prøve deg på feilmelding dersom:  
• noen felt er feil utfylt (hvilke felt må vises til brukeren) – ikke krav! 
 
Når  skjemaet  sendes,  skal  data  fra  skjemaet  lagres  i  en  matrise  og  skrives  ut  på  skjermen  på  en 
oversiktlig måte  sammen med beskjed om  at  den nye  brukeren er  registrert.  Normalt ville  vi  lagret 
denne informasjonen i en database, men det skal vi gjøre  litt senere. Lag en video hvor du beskriver og 
demonstrerer koden. 
*/

// This function removes html/php tags, and convert all characters into HTMl entities 
function vaskingAvTagger($var)
{
  $var = strip_tags($var);
  $var = htmlentities($var);
  return $var;
}
// If pressed, then the input will get washed through the function "vaskingAvTagger".
if(isset($_REQUEST['registrer']))
{
  $fornavn = vaskingAvtagger($_REQUEST['fnavn']);
  $etternavn = vaskingAvtagger($_REQUEST['enavn']);
}
// Put all input in an array 
$skjema = array(
  'Fornavn' => $_REQUEST['fnavn'], 
  'Etternavn' => $_REQUEST['enavn'], 
  'E-post' => $_REQUEST['epost'], 
  'Telefon' => $_REQUEST['tlf'],
  'Fødelsdato' => $_REQUEST['fdato']
);
// Prints out the value inside the array
foreach($skjema as $data => $verdi){
  echo $data . ": " . $verdi . "<br>";
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