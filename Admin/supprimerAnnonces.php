<?PHP
include "core/AnnoncesC.php";
$AnnoncesC=new AnnoncesC();
if (isset($_POST["id"])){
	$AnnoncesC->supprimerAnnonces($_POST["id"]);
	header('Location: afficherAnnonces.php');
}

?>