<?php
$url = "https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?camera=FHAZ&earth_date=2022-11-10&api_key=DEMO_KEY";

/* Initialiserer en cUrl-økt */
$ch=curl_init();
$param = array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $param);

/* Utfør cURL-forespørsel med innstillinger */
$result = curl_exec($ch);
$resinfo = curl_getinfo($ch); // Inneholder informasjon om forespørselen
curl_close($ch);

$photo=json_decode($result, true);

/* Viser det første bildet i matrisen (plass 0) i nettleseren */
$photo1 = $photo['photos'][0]['img_src'];
echo '<img src="' . $photo1 . '" alt="Mars-bilde av Curiosity" width="600">';
echo "<br> Mars-bilde tatt av Curiosity";

/* Alle bildene i matrisen */
echo "<br><br> Alle bilder tatt med FHAZ-kameraet på Curiosity denne datoen:";
echo "<pre>";
print_r($photo);
echo "</pre>";
?>