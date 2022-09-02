
 
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="app.js"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="parent">

</div>


<?php
require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$parent = $dochtml->getElementById('parent')->nodeValue;
$dompdf->loadHtml($parent);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

?>
    
</body>
</html>