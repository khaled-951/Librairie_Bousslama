<?PHP
include "entities/Reclamation.php";
include "core/ReclamationC.php";

if (isset($_POST['nomU']) and isset($_POST['dateRec']) and isset($_POST['sujet']) and isset($_POST['Description']) and isset($_POST['photo'])){
$Reclamation1=new Reclamation($_POST['id'],$_POST['nomU'],$_POST['dateRec'],$_POST['sujet'],$_POST['Description'],$_POST['photo']);

$Reclamation1C=new ReclamationC();
$Reclamation1C->ajouterReclamation($Reclamation1);
echo "sucess";
}else{
	echo "vérifier les champs";
}
//*/

?>