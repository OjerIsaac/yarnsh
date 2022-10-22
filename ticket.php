<?php

require_once 'fpdf/fpdf.php';

$pdf = new FPDF();

$pdf->SetTextColor(0, 0, 0);
$pdf->AddPage();
// $pdf->Image('ticket.jpg', 0, 0);
$pdf->SetFont('Arial','', 24);
$pdf->Cell(0, 20, 'Booking ID: '.$_GET['id'].'', 0, true, );
$pdf->Cell(0, 10, 'Name: '.$_GET['name'].'', 0, true,);
$pdf->Cell(0, 20, 'Pickup: '.$_GET['start'].'', 0, true,);
$pdf->Cell(0, 10, 'Destination: '.$_GET['end'].'', 0, true,);

$pdf->Output();
exit;