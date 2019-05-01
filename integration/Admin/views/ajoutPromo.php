<?PHP
include "../core/promoC.php";


if (isset($_POST['id']) and isset($_POST['idProd']) and isset($_POST['date_debut']) and isset($_POST['date_fin']) and isset($_POST['prix_nouveau']) and isset($_POST['description'])){

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

}else{
	echo("<script> alert(\"verifier les champs\")</script>");
	echo("<script> document.Location.replace(\"check_out.php\")</script>");}
//*/

?>