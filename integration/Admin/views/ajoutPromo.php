<?PHP
include "../core/promoC.php";
include '../core/produitC.php';




if (isset($_POST['id']) and isset($_POST['idProd']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['prix_nouveau']) and isset($_POST['description'])){



	$promocc=new promoc();
	$listePromo=$promocc->afficherpromos();
	
    foreach($listePromo as $row){
		$priiix=$row['prix_nouveau'];
	}

	$yID= $row['idProd'];
	$sql="SELECT prix from produit  where id = $yID  ";
	$db = config::getConnexion();
	$idPrix=$db->query($sql);
	$prix = -1;
	foreach($listePromo as $nn){
		$prix = $nn['prix'];
	}
	if($prix!=-1)
	{
	

	/*$targetDir = "images/";
	$fileName = basename($_FILES['image']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);*/
$promo1=new promo($_POST['id'],$_POST['idProd'],$_POST['date_debut'],$_POST['date_fin'],$_POST['prix_nouveau'],$_POST['description']);


var_dump($promo1);

//Partie3
$promo1C=new promoC();



$promo1C->ajouterPromo($promo1);
header('Location: check_out.php');
//echo ("$today=("y-m-d")");

	}
	else{
		
		header('Location: check_out.php');


	}


}else{
	echo("<script> alert(\"verifier les champs\")</script>");
	echo("<script> document.Location.replace(\"check_out.php\")</script>");}
//*/

?>