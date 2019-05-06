<?PHP
include "../entities/Reclamation.php";
include "../core/ReclamationC.php";

if (isset($_POST['nomU']) and isset($_POST['dateRec']) and isset($_POST['sujet']) and isset($_POST['Description'])){
	$targetDir = "uploads/";
	$fileName = basename($_FILES['photo']['name']);
	$targetFilePath = $targetDir . $fileName;
	$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$Reclamation1=new Reclamation($_POST['id'],$_POST['nomU'],$_POST['dateRec'],$_POST['sujet'],$_POST['Description'],$_POST['photo']);

//var_dump($Avis1);
$Reclamation1C=new ReclamationC();
$Reclamation1C->ajouterReclamation($Reclamation1);
header('Location: afficherReclamation.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>