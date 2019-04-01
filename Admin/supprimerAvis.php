<?PHP
include "core/AvisC.php";
$AvisC=new AvisC();
if (isset($_POST["id"])){
	$AvisC->supprimerAvis($_POST["id"]);
	header('Location: afficherAvis.php');
}

?>