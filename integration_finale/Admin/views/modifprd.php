<?PHP
require "../core/produitC.php";
$prodc=new produitC();

    if(isset($_POST['button'])){
        $prodc->modifierProduit($_POST['qty'],$_GET['id']);
    }
    

    
	header('Location: livaff.php');


?>