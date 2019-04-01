<?PHP
include "core/produitC.php";
$prodc=new produitC();

    
    $prodc->supprimerProduit((int)$_GET['id']);
    
	header('Location: livaff.php');


?>