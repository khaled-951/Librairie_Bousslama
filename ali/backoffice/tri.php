<?PHP
include "core/produitC.php";
$prodc=new produitC();

    
    $prodc->trierProduit();
    
	header('Location: livaff.php');


?>