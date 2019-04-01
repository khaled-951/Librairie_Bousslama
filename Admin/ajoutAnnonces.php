<?PHP
include "entities/Annonces.php";
include "core/AnnoncesC.php";

if (isset($_POST['Type']) and isset($_POST['Description'])){
$Annonces1=new Annonces($_POST['id'],$_POST['Type'],$_POST['Description']);

var_dump($Avis1);
$Annonces1C=new AnnoncesC();
$Annonces1C->ajouterAnnonces($Annonces1);
header('Location: afficherAnnonces.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>