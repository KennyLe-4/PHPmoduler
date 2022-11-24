<?php
    // We'll be outputting a PDF
    header('Content-Type: application/pdf');

    // It will be called downloaded.pdf
    header('Content-Disposition: attachment; filename="download.pdf"');

    // The PDF source is in original.pdf
    readfile('boarding-pass.pdf');
?>



