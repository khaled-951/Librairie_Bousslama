<?php 
include_once "../core/livreurC.php";

 if(isset($_POST["id"]))
{
$idrecup=$_POST["id"];
}



$livreur1C=new LivreurC();
$listlivreur=$livreur1C->afficheE($idrecup);

require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',30);
$pdf->cell(200,10,'Events',0,0,'C');
$pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',9);
$pdf->cell(300,10,"Bousslema Librairie",0,0,'C');
$pdf->Ln();
$pdf->cell(325,10,"Centre VILLE",0,0,'C');
$pdf->Ln();
$pdf->cell(300,10,"58888015 / 71277273",0,0,'C');
 $pdf->Ln() ;
$pdf->Ln();
$pdf->SetFont('Arial','B',20);
$pdf->cell(40,10,'Evenements :',0,0,'C');
$pdf->Ln();

$pdf->SetFont('Arial','B',9);
	$pdf->cell(20,10,'nom',1,0,'C');
	$pdf->cell(20,10,'prenom',1,0,'C');
	$pdf->cell(20,10,'age',1,0,'C');
	$pdf->cell(20,10,'num_tel',1,0,'C');
	$pdf->cell(40,10,'email',1,0,'C');
	$pdf->cell(40,10,'zone_habitation',1,0,'C');
	$pdf->cell(40,10,'situation',1,0,'C');
	$pdf->cell(40,10,'vehicule',1,0,'C');
	$pdf->cell(40,10,'zone_de_livraison',1,0,'C');


$pdf->Ln(); 

foreach ($listlivreur as $row) {
	$pdf->cell(20,10,$row['nom'],1,0,'C');
	$pdf->cell(20,10,$row['prenom'],1,0,'C');
	$pdf->cell(20,10,$row['age'],1,0,'C');
	$pdf->cell(20,10,$row['num_tel'],1,0,'C');
	$pdf->cell(40,10,$row['email'],1,0,'C');
	$pdf->cell(40,10,$row['zone_habitation'],1,0,'C');
	$pdf->cell(40,10,$row['situation'],1,0,'C');
	$pdf->cell(40,10,$row['vehicule'],1,0,'C');
	$pdf->cell(40,10,$row['zone_de_livraison'],1,0,'C');


	$pdf->Ln(10);


	

}

$pdf->cell(0,10,"Emai:Bousslemalibraire@gmail.com ");


$pdf->Output();


?>