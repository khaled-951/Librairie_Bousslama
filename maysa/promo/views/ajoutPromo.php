<?PHP
include "../core/promoC.php";

if (isset($_POST['id']) and isset($_POST['nom'])  and isset($_POST['prix_ancien']) and isset($_POST['prix_nouveau']) and isset($_POST['description'])){

	$targetDir = "uploads/";
	$fileName = basename($_FILES['image']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
	move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
$promo1=new promo($_POST['id'],$_POST['nom'],$_POST['image'],$_POST['prix_ancien'],$_POST['prix_nouveau'],$_POST['description']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$promo1C=new promoC();
$promo1C->ajouterPromo($promo1);
header('Location: check_out.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>