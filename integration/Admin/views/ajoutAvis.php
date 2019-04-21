<?PHP
include "../entities/Avis.php";
include "../core/AvisC.php";

if (isset($_POST['Sujet']) and isset($_POST['commentaire'])){
$Avis1=new Avis($_POST['id'],$_POST['Sujet'],$_POST['commentaire']);

var_dump($Avis1);

//Partie3
$Avis1C = new AvisC();
$Avis1C->ajouterAvis($Avis1);

header('Location: afficherAvis.php');
	
}else{
	echo "v�rifieer les champs";
}
//*/

?>