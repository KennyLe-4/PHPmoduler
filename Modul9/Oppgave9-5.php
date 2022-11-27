<!--Bruk pdf-filen som vi har laget (fakturamal). Bruk fpdf og fpdi til å fylle inn følgende informasjon (1) navn 
på bruker, (2) adresse til bruker, (3) produkt og pris, (4) totalsum å betale. Sett inn logo for «bedriften» 
din øverst til høyre. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Oppgave 5</h1>
</body>
</html>

<?php
    $bruker = "Kenny"; //Her kan jeg bruke session-variabler istedenfor hvis jeg ønsker dette
    $adresse = "Oblt omdalsvei 59"; 

    use setasign\Fpdi\Fpdi; //Bruker FPDI

    require_once "fpdf/fpdf.php";
    require_once "FPDI/src/autoload.php";

    $pdf = new Fpdi(); //Lager et objekt av FPDI

    $pdf->AddPage(); //Lager en pdf
    $pdf->setSourceFile("fakturamal.pdf"); //Importerer PDF filen jeg har lyst til å benytte som mal (fakturamalen fra oppgaven i dette tilfelle)
    $ark = $pdf->importPage(1); //Importerer en side
    $pdf->useTemplate($ark); //Plasserer den importerte siden over PDF-en jeg har

    $pdf->SetFont("Helvetica", "", 9); //Setter font og skriftstørrelse
    $pdf->Text(14, 50, $bruker); //Informasjon om kjøper
    $pdf->Text(14, 55, $adresse);
    $pdf->Text(14, 60, "40404141");

    $pdf->Text(70, 45, "Leveringsinformasjon");
    $pdf->Text(70, 50, $bruker);
    $pdf->Text(70, 55, $adresse);
    $pdf->Text(70, 60, "46276313");

    $pdf->SetFont("Helvetica", "", 12); //Øker størrelsen på skriften så varer og pris er lettere å lese
    $pdf->Text(14, 90, "Gamingskjerm, 50000kr"); //Varetekst
    $pdf->Text(14, 95, "Marmorbord, 25000kr"); //Varetekst
    $pdf->Text(14, 100, "Macbook Pro, 25000kr"); //Varetekst

    $pdf->Text(105, 191, "100000kr"); //Setter inn totalt antall kroner for varer

    $pdf->Image("./Files/shell.png", 185, 15, 20, 20, "", ""); //Setter inn logo
    $pdf->Output("I", "faktura.pdf");
?>