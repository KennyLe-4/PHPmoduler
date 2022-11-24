<?php 
/*Bruk pdf-filen som vi har laget (fakturamal). Bruk fpdf og fpdi til å fylle inn følgende informasjon (1) navn 
på bruker, (2) adresse til bruker, (3) produkt og pris, (4) totalsum å betale. Sett inn logo for «bedriften» 
din øverst til høyre. 
*/
?>
<h1>Oppgave 5</h1>
<?php
require_once();
require_once();

// Initiate 
$pdf = new Fpdi();
// Add a page
$pdf->AddPage();
//Set the source file
$pdf->setSourceFile('PdfDocument.pdf');
//Import page 1
$tplIdx = $pdf->importPage(1);
// Use the importated page and place it at position 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 10, 10, 100);

// Now write some text above the imported page




?>