<?PHP
include "../core/utilisateurC.php";
$utilisateurC=new UtilisateurC();
if (isset($_POST["id"])){
	$utilisateurC->supprimerUtilisateur($_POST["id"]);
	header('Location: afficherUtilisateur.php');
}

?>