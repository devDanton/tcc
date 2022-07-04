<?php 
if (!isset($_SESSION)) {
  session_start();
}
require_once 'dompdf/autoload.inc.php';


$html =$_SESSION['html'];
// reference the Dompdf namespace

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("relatorio_donatarios.pdf",
array(
"Attachment" => false //Para realizar o download somente alterar para true
   )
 );
?>