<?PHP
include "../core/categorieC.php";
$cat=new categorieC();

    
    $cat->supprimerCategorie((int)$_GET['id']);
    
	header('Location: cataff.php');


?>