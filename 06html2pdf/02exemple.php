<?php
namespace pdf;

use Spipu\Html2Pdf\Html2Pdf;

require __DIR__ . '/../vendor/autoload.php';

ob_start();
include __DIR__ . '/demo.php';
$docWeb = ob_get_clean();

$html2pdf = new Html2Pdf('P', 'A4', 'fr', true);
$html2pdf->setDefaultFont('Arial');
$html2pdf->writeHTML($docWeb);
$html2pdf->output(__DIR__ . '/exemple1.pdf');