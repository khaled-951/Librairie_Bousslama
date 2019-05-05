<?php 
include_once "../core/eventsC.php";
include "../config.php";
 if(isset($_POST["id"]))
{
$idrecup=$_POST["id"];
}



$events1C=new EventsC();
$listeEvents=$events1C->afficherEvents($idrecup);


require('fpdf.php');
$pdf = new FPDF( 'P', 'mm', 'A4' );


$pdf->AddPage();
$pdf->Image('logo.png',10,6,50);

$pdf->SetFont('Courier','B',30);
$pdf->cell(250,40,'Bousslema Librairie',0,0,'C');



$pdf->Ln();
$pdf->SetFont('Arial','B',9);

$pdf->cell(290,10,"Centre VILLE",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"58888015 / 71277273",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Courier','B',20);
$pdf->cell(60,20,'Evenements :',0,0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','B',9);

$pdf->cell(40,10,' Nom ',1,0,'C');
$pdf->cell(40,10,'Addresse ',1,0,'C');
$pdf->cell(40,10,'Date Fin ',1,0,'C');
$pdf->cell(40,10,'Date Debut ',1,0,'C');
$pdf->cell(38,10,'Informations ',1,0,'C');


    $pdf->setFont("times", "B", "10");

$pdf->Ln(); 

foreach ($listeEvents as $row) {
	$pdf->cell(40,10,$row['name'],1,0,'C');
	$pdf->cell(40,10,$row['address'],1,0,'C');

	$pdf->cell(40,10,$row['DateDebut'],1,0,'C');
	$pdf->cell(40,10,$row['DateFin'],1,0,'C');
	$pdf->cell(38,10,$row['informations'],1,0,'C');

	$pdf->Ln();


	

}


$pdf->cell(0,10,"Email:Bousslemalibraire@gmail.com ");


$pdf->Output();


?>