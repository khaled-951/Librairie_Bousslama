<?PHP
include "core/ReclamationC.php";
$ReclamationC=new ReclamationC();
if (isset($_POST["id"])){
	$ReclamationC->supprimerReclamation($_POST["id"]);
	header('Location: afficherReclamation.php');
}

?>