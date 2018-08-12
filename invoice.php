<?php
require ('fpdf17/fpdf.php');
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(130  ,7,'COMUMART',0,0);
$pdf->Cell(59  ,7,'INVOICE',0,1);

$pdf->SetFont('Arial','',12);
$pdf->Cell(130  ,7,'[BD-53 Rabindrapally,Kestopur]',0,0);
$pdf->Cell(59  ,7,'',0,1);

$pdf->Cell(130  ,7,'[Kolkata,India,700101]',0,0);
$pdf->Cell(25  ,7,'Date',0,0);
$pdf->Cell(34  ,7,'dd/mm/yyyy',0,1);

$pdf->Cell(130  ,7,'Phone[9614968401]',0,0);
$pdf->Cell(25  ,7,'Invoice#',0,0);
$pdf->Cell(34  ,7,'[123456]',0,1);

$pdf->Cell(130  ,7,'Fax[+123456]',0,0);
$pdf->Cell(25  ,7,'CustomerID',0,0);
$pdf->Cell(34  ,7,'[123456]',0,1);

$pdf->Cell(189  ,10,'',0,1);
//Dummy cell
$pdf->Cell(100  ,7,'Bill To: ',0,1);

$pdf->Cell(10  ,7,'',0,0);
$pdf->Cell(90  ,7,'[Name]',0,1);

$pdf->Cell(10  ,7,'',0,0);
$pdf->Cell(90  ,7,'[Company Name]',0,1);

$pdf->Cell(10  ,7,'',0,0);
$pdf->Cell(90  ,7,'[Address]',0,1);

$pdf->Cell(10  ,7,'',0,0);
$pdf->Cell(90  ,7,'[Phone]',0,1);

$pdf->Cell(189,  10,'',0,1);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(90  ,7,'Description',1,0);
$pdf->Cell(40  ,7,'Quantity',1,0);
$pdf->Cell(25  ,7,'Taxable',1,0);
$pdf->Cell(34  ,7,'Amount',1,1);
$pdf->SetFont('Arial','',12);

$pdf->Cell(90  ,7,'Anything',1,0);
$pdf->Cell(40  ,7,'2',1,0);
$pdf->Cell(25  ,7,'-',1,0);
$pdf->Cell(34  ,7,'1,100',1,1,'R');

$pdf->Cell(90  ,7,'Can be',1,0);
$pdf->Cell(40  ,7,'3',1,0);
$pdf->Cell(25  ,7,'-',1,0);
$pdf->Cell(34  ,7,'1,200',1,1,'R');

$pdf->Cell(90  ,7,'Inserted here',1,0);
$pdf->Cell(40  ,7,'1',1,0);
$pdf->Cell(25  ,7,'-',1,0);
$pdf->Cell(34  ,7,'1,500',1,1,'R');

$pdf->Cell(130  ,7,'',0,0);
$pdf->Cell(25  ,7,'SubTotal',0,0);
$pdf->Cell(8  ,7,'Rs.',1,0);
$pdf->Cell(26  ,7,'3,800',1,1,'R');

$pdf->Cell(130  ,7,'',0,0);
$pdf->Cell(25  ,7,'Taxable',0,0);
$pdf->Cell(8  ,7,'Rs.',1,0);
$pdf->Cell(26  ,7,'0',1,1,'R');

$pdf->Cell(130  ,5,'',0,0);
$pdf->Cell(25  ,5,'TaxRate',0,0);
$pdf->Cell(8  ,5,'Rs.',1,0);
$pdf->Cell(26  ,5,'10%',1,1,'R');

$pdf->Cell(130  ,7,'',0,0);
$pdf->Cell(25  ,7,'Total Due',0,0);
$pdf->Cell(8  ,7,'Rs.',1,0);
$pdf->Cell(26  ,7,'3,800',1,1,'R');



$pdf->Output('invoice.pdf','I');


?>
