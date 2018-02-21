<?php 
namespace pdf;

use Spipu\Html2Pdf\Html2Pdf;

require __DIR__.'/../vendor/autoload.php';
$docWeb = file_get_contents(__DIR__.'/demo.html');

$html2Pdf = new Html2Pdf('P','A4','fr',true);
$html2Pdf->setDefaultFont('Arial');
$html2Pdf->writeHTML('<h1>Mon super PDF</h1><p>Avec une belle police (de caractères)</p>');
$html2Pdf->output(__DIR__.'/exemple.pdf','F');

$html2Pdf1 = new Html2Pdf('P','A4','fr',true);
$html2Pdf1->setDefaultFont('Arial');
$html2Pdf1->writeHTML($docWeb);
$html2Pdf1->output(__DIR__.'/exemple1.pdf','F');