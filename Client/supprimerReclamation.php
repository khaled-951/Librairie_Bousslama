<?PHP
include "core/ReclamationC.php";
$ReclamationC=new ReclamationC();
if (isset($_POST["id_rec"])){
	$ReclamationC->supprimerReclamation($_POST["id_rec"]);
	header('Location: afficherReclamation.php');
}

?>