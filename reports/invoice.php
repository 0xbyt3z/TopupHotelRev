
 
<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Page</title>
    
    <script src="https://cdn.tailwindcss.com"></script>

    <script defer src="../app.js"></script>

    <link rel="stylesheet" href="../style.css">
</head>
<body>

<div id="parent">
<div class="w-screen h-screen bg-yellow-500">
<?php

// $html = "<script>
// document.getElementById('parent').innerHTML
// </script>";

echo "<script>localStorage.theme</script>";

?>
</div>
</div>

<script>
var name = '<?php sample($name); ?>';
</script>'


<?php


/*
require_once '../lib/dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

//get innerHTML
$dom= new DOMDocument(); 
$dom->preserveWhiteSpace = false;
$dom->formatOutput       = true;
$dom->load($html_string); 

$html = "<script>
document.getElementById('parent').innerHTML
</script>";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

$dompdf->stream("pdf_filename_".rand(10,1000).".pdf", array("Attachment" => true));


*/
?>
    
</body>
</html>